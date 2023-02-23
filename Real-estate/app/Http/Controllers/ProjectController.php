<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    function projectPost(Request $req){

        $proj = new Project();
        $proj->city_name = $req->input('city_name');
        $proj->detail = $req->input('detail');
        if($proj->save()){
            return response()->json(['status' => true , 'message'=> 'Successfully Posted', 'proj' => $proj ]);
        }else{
            return response()->json(['status' => false , 'message'=> 'Error', 'proj' => ' ' ]);
        }


    }

    function projectUpdate(Request $req, $id){


        $proj = Project::find($id);
        $proj->city_name = $req->input('city_name');
        $proj->detail = $req->input('detail');
        if($proj->save()){
            return response()->json(['status' => true , 'message'=> 'Successfully Update', 'proj' => $proj ]);
        }else{
            return response()->json(['status' => false , 'message'=> 'Error', 'proj' => ' ' ]);
        }


    }
    
    function projectList(){

        // return "Project showing here";
        return Project::all();
    }

    function getProjectlist($id){
        return Project::find($id);
        // return  Project::where('p_id={$p_id}');
        // return Project::where('p_id= ?',$p_id);
        // return $results;
        }
}
