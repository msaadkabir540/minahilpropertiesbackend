<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFromController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\LahoreController;
use App\Http\Controllers\PhaseDetailController;
use App\Http\Controllers\AreaController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// for Get Method 
Route::get("ListApplication" , [ContactFromController::class, 'listcontact']);// contact form 
// for Post method
Route::post("ContactForm" , [ContactFromController::class, 'ContactForm']);


// for city detail 
Route::get("ProjectDetail/{id}", [ProjectController::class,'getProjectlist']);
Route::get("Project" , [ProjectController::class, 'projectList']);

// post api 
Route::post('ProjectPost', [ProjectController::class, 'projectPost']);

Route::put('project-update/{id}'  , [ProjectController::class,'projectUpdate']);


Route::get("About" , [aboutController::class, 'aboutList']);
// Route::post("Aboutl8" , [aboutController::class, 'aboutList']);


Route::post("imageupload" , [PhotoController::class, 'UploadImage']);

Route::get("show" , [PhotoController::class, 'show']);






// LahoreController

Route::post('lahore-DHA' , [LahoreController::class , 'store']);

Route::get('lahore-DHA-phase' , [LahoreController::class , 'show']);




// Phasedetail controller

Route::post('phasedetail-info',[PhaseDetailController::class, 'store']);

Route::get("phaseDetail/{id}", [PhaseDetailController::class,'show']);




Route::get("Area-Detail", [AreaController::class,'show']);
