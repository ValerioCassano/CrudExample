<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function homepage () {
        return view('welcome');
    }
    
    public function contactUs(){
        return view('mail.contattaci');
    }
    
    public function submit(Request $request){
        
        $name = $request->input('user');
        $email = $request->email;
        $messaggio = $request->body;
        
        
        $contactMail = new ContactMail($name, $email, $messaggio);
        
        Mail::to('info@noreplay.it')->send($contactMail);
        return redirect(route('mail.contattaci'))->with('message', 'Mail inviata, grazie per averci contatto');
    }
    
    
}
