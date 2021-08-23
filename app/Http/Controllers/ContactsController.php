<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class ContactsController extends Controller
{
    public function show(){
        return view('/contact');
    }
    public function store(){
        request()->validate(['email=>required|email']);
       Mail::raw('This works', function ($message) {
           $message->to('john@johndoe.com', 'John Doe');
           $message->subject('this is something');

       });
       return redirect('/contact')
        ->with('Message','Email sent');

    }
}
