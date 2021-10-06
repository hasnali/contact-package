<?php

namespace Allos\Contact\Http\Controllers;

use Allos\Contact\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ContactController extends Controller
{
    //
    public function index(){
        return view("contact::contact");
    }

    public function send(Request $request ){

        Contact::create($request->all());
        return redirect(route('allos.contact'));

    }


}
