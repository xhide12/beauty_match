<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function index()
    {
        //フォーム入力画ページのviewを表示
        return view('contact.form');
    }

    public function confirm(ContactRequest $request){
      
        $contact = $request->all();

        $request->session()->regenerateToken();

        return view('contact.confirm',$contact);
    }

    public function sent(ContactRequest $request){
      
        $contact = $request->all();
        if($request->action === 'back') {
            return redirect()->route('contact')->withInput($contact);
        }

        $request->session()->regenerateToken();
        
        \Mail::to('f.c.pyro@gmail.com')->send(new Contact($contact));

        return view('contact.thanks');
    }
}
