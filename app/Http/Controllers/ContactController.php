<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required|min:2|max:100',
            'email' => 'required|email|max:100',
            'message' => 'required|min:2|max:100',
        ]);
        // dd($request->all());
          $contact = new Contact([
              "name" =>$request->name,
              "email" =>$request->email,
              "message" =>$request->message,
          ]);
          
         if($contact->save()){
            return redirect()->back()->with('message',"Save Successfully");
         }
          
        else {
          return redirect()->back()->with('failed',"Failed Save");
          }
    }
}
