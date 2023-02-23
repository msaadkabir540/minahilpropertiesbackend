<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class aboutController extends Controller
{
 
    function aboutList(){

        return About::all();
        // hello world
    }
}
