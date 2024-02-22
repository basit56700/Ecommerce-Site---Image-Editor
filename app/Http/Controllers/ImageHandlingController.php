<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Intervention\Image\ImageManager;
use App\Models\ImageModel;
use App\Models\FurnitureModel;
use App\Models\RoomsModel;
class ImageHandlingController extends Controller
{
    public function index()
    {
        // Retrieve all rooms from the database
        $rooms = RoomsModel::all();
   

        // Pass the retrieved rooms data to the view
        return view('frontend.editor.rooms', ['rooms' => $rooms]);
    }
    public function editor($id)
    {
        try {
            // Find the room by its ID
            $room = RoomsModel::findOrFail($id);
            $hotspot1=$room->id;
            $hotspot2=$room->id;
            $prodId1=$room->id;
            $prodId2=$room->id;
            $roomId=$room->id;
            // Send the room data to the view
            return view('frontend.editor.editor', compact('room', 'hotspot1', 'hotspot2', 'prodId1', 'prodId2', 'roomId'));
        } catch (ModelNotFoundException $e) {
            // Handle the case where the room is not found
            return redirect()->back()->with('error', 'Room not found.');
        }
    }
    public function getImage($rm, $sp1, $p1, $sp2, $p2)
    {
        $imageURL = ImageModel::where('room_id', $rm)
            ->where('hotspot1_id', $sp1)
            ->where('hotspot2_id', $sp2) // Changed to $sp2 here
            ->where('product_id', $p1)
            ->value('imageURL');

        if ($imageURL) {
            return $imageURL;
        } else {
            $room = RoomsModel::where('room_id', $rm)->first();
            $imageUrl1 = FurnitureModel::where('room_id', $rm)
                ->where('product_id',$p1 )
                ->where('hotspot_id', $sp1)
                ->value('imageURL');

            $imageUrl2 = FurnitureModel::where('room_id', $rm)
                ->where('product_id', $sp2)
                ->where('hotspot_id', $p2)
                ->value('imageURL');

            $manager = ImageManager::gd();

            $image3 = $manager->read($imageUrl1);
            $image1 = $manager->read($imageUrl2);

            $image1->scale(width: $room->width)->scale(height: $room->height)->crop(3700, 3000, 0, 0);

            $image3->scale(width: $room->width)->scale(height: $room->height);

            $image3->place($image1);

            $name = 'path/to/save/' . uniqid() . '.jpg'; // Generate a unique filename

            $image3->save($name);

            $saveimage = ImageModel::create([
                'room_id' => $rm,
                'hotspot1_id' => $sp1,
                'hotspot2_id' => $sp2, // Changed to $sp2 here
                'product_id' => $p1,
                'imageURL' => $name,
            ]);

            return $name;
        }
    }

}

















































