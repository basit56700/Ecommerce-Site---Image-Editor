<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FurnitureModel;
use Illuminate\Support\Facades\Storage;

class FurnitureController extends Controller
{
    public function index($rm, $p2, $sp2)
    {
        try {
            $imageUrl = FurnitureModel::where('room_id', $rm)
                                      ->where('product_id', $p2)
                                      ->where('hotspot_id', $sp2)
                                      ->value('imageURL');

            if ($imageUrl) {
                return response()->json(['imageURL' => $imageUrl], 200);
            } else {
                return response()->json(['error' => 'Image not found.'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'room_id' => 'required',
                'product_id' => 'required',
                'hotspot_id' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
            ]);

            // Store the image in the public directory
            $imagePath = $request->file('image')->store('images', 'public');

            // Save the image URL in the database
            $furniture = new FurnitureModel();
            $furniture->room_id = $request->input('room_id');
            $furniture->product_id = $request->input('product_id');
            $furniture->hotspot_id = $request->input('hotspot_id');
            $furniture->imageURL = Storage::url($imagePath);
            $furniture->save();

            return response()->json(['message' => 'Furniture created successfully.'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }

    public function update($rm, $p2, $sp2, Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
            ]);

            // Store the updated image in the public directory
            $imagePath = $request->file('image')->store('images', 'public');

            $furniture = FurnitureModel::where('room_id', $rm)
                                        ->where('product_id', $p2)
                                        ->where('hotspot_id', $sp2)
                                        ->first();

            if ($furniture) {
                // Delete the old image from the public directory
                Storage::delete($furniture->imageURL);

                // Update the image URL in the database
                $furniture->imageURL = Storage::url($imagePath);
                $furniture->save();

                return response()->json(['message' => 'ImageURL updated successfully.'], 200);
            } else {
                return response()->json(['error' => 'Furniture not found.'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }

    public function destroy($rm, $p2, $sp2)
    {
        try {
            $furniture = FurnitureModel::where('room_id', $rm)
                                        ->where('product_id', $p2)
                                        ->where('hotspot_id', $sp2)
                                        ->first();

            if ($furniture) {
                // Delete the image from the public directory
                Storage::delete($furniture->imageURL);

                // Delete the furniture entry from the database
                $furniture->delete();

                return response()->json(['message' => 'Furniture deleted successfully.'], 200);
            } else {
                return response()->json(['error' => 'Furniture not found.'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Something went wrong.'], 500);
        }
    }
}
