<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use App\Models\ImageModel;
use App\Models\FurnitureModel;

class ImageHandlingController extends Controller
{
    public function index()
    {
        return view('frontend.pages.virtual-room');
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
            $imageUrl1 = FurnitureModel::where('room_id', $rm)
                ->where('product_id', $sp1)
                ->where('hotspot_id', $p1)
                ->value('imageURL');

            $imageUrl2 = FurnitureModel::where('room_id', $rm)
                ->where('product_id', $p2)
                ->where('hotspot_id', $sp2)
                ->value('imageURL');

            $manager = ImageManager::gd();

            $image3 = $manager->read($imageUrl1);
            $image1 = $manager->read($imageUrl2);

            $image1->scale(width: 3000)->scale(height: 3000)->crop(3700, 3000, 0, 0);

            $image3->scale(width: 3000)->scale(height: 3000);

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

















































