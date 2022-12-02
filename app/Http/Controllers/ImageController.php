<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    //
    public function uploadImage(Request $req)
    {
        $req->validate([
            "img" => "required",
        ]);
        $image = $req->file('img');
        $response = $image->store('images', 'public');
        Image::create([
            'path' => $response,
        ]);
        return back();
    }

    public function renderImages()
    {
        $images = Image::all();
        return view('welcome', compact('images'));
    }
}