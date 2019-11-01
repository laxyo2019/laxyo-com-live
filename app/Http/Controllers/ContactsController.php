<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactsController extends Controller

{
	public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(){

  	$data = Contact::latest()->get();

  	return view('admin.contacts.index', compact('data'));
  }

  
}