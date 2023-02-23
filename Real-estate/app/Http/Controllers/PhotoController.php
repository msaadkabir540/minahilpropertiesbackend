<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photoe;

class PhotoController extends Controller
{
    function UploadImage(Request $req){
        // return $req->file('file')->store('products');
        $upload = new Photoe();
        $upload->name= $req->input('name');
        $upload->detail=$req->input('detail');
        $upload->file_path=$req->file('file_path')->store('images');
        $upload->save();
        return $upload;
    }


    public function show(){
        return Photoe::all();
    }
}
