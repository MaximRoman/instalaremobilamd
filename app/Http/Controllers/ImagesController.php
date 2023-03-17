<?php

namespace App\Http\Controllers;

use App\Models\ImagesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public function getImages(Request $request) {
        // $images = [
        //             ['id' => 1, 'name' => 'antreu', 'img' => 'antreu.jpg'], 
        //             ['id' => 2, 'name' => 'bucatarie', 'img' => 'bucatarie.jpg'], 
        //             ['id' => 3, 'name' => 'dormitor', 'img' => 'dormitor.png'],
        //             ['id' => 4, 'name' => 'antreu1', 'img' => 'antreu1.jpg'], 
        //             ['id' => 5, 'name' => 'bucatarie1', 'img' => 'bucatarie1.jpg'], 
        //             ['id' => 6, 'name' => 'dormitor1', 'img' => 'dormitor1.png'],
        //         ];
        $images = ImagesModel::all();
        return [
            'images' => $images,
        ];
    }

    public function addImage() {
        return view('upload');
    }

    public function uploadImage(Request $request) {

        $url = $request->file('image')->store('pictures', 'public');

        ImagesModel::create(['url' => $url]);
        return redirect('/add-image');
    } 
}
