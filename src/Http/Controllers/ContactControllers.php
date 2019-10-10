<?php

namespace Digitalcrm\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Digitalcrm\Contact\Mail\ContactMailable;
use Digitalcrm\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactControllers extends Controller
{
    public function index()
    {
    	return view('contact::contact');//('package_name::view_file_name')
    }

    public function send(Request $request)
    {
    	//return $request->all();
    	//Mail::to('example@gmail.com')->send(new ContactMailable($request->message,$request->name));
    	Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message,$request->name));
    	Contact::create($request->all());
    	return redirect(route('contact'));
    }
}
