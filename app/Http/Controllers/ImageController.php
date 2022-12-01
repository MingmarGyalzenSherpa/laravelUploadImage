<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    //upload image
    public function uploadImage(Request $req)
    {
        $image = $req->file('img');
        $image->store('images', 'public');
        return back();
    }
}