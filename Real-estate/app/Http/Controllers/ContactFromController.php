<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactFromController extends Controller
{
   function ContactForm(Request $req)
   {

    $contact = new Contact();
    $contact->name= $req->input("name");
    $contact->email=$req->input("email");
    $contact->subject=$req->input("subject");
    $contact->message=$req->input("message");
    $contact->save();


    return $contact;
   }

   function listcontact(){
      
      return contact::all();
   }
}
