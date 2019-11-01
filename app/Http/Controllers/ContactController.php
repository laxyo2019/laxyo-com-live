<?php

namespace App\Http\Controllers;

use App\Mail\SendMailCompany;
use App\Models\Contact;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function index()
  {
  	return view('contact.index');
  }

  public function store(Request $request)
  {
   	$vdata = $request->validate([
  	 	'name'    => 'required|max:255|regex:/^[a-zA-Z ]+$/',       
     	'email'   => 'required|email|max:255',     
     	'mobile'  => 'required|max:10|min:10|regex:/^([0-9\s\-\+\(\)]*)$/',
      'address' => 'required',
      'message' => 'required',
      'captcha' =>'required|captcha'
   	]);

	  $contact = Contact::create($vdata);

	  /*$user1 = User::find(1); // info@laxyo.com
	  $user2 = User::find(2); // hr2@yolaxinfra.com
  	Mail::to($user1)->cc([$user2])->send(new SendMailCompany($vdata));*/

  	return back()->with('message', 'Thank You for contacting us, we will contact you soon...');
  }
}