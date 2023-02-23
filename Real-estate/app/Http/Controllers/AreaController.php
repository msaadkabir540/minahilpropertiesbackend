<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\areas;
// use App\Models\area_type;

class AreaController extends Controller
{
    public function show()
    {
       
        return Areas::with('areatype_details')->get();
      
       
    }
}
