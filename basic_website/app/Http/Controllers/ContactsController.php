<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactsController extends Controller
{
    public function submitMessage(Request $request) {
        //Validation
        $this->validate($request, [
           'name' => 'required',
           'email' => 'required'
        ]);
 
        //Create a message
 
        $contacted_message = new Contact;
        $contacted_message->name = $request->input('name');
        $contacted_message->email = $request->input('email');
        $contacted_message->message = $request->input('message');
        $contacted_message->save();
        return redirect('/')->with('success', 'Message Sent');
    }

    public function getMessages(){
        $messages = Contact::all();
        return view('messages')->with('messages', $messages);
    }
}
