<?php

namespace App\Http\Controllers;

class ContactsController extends Controller
{
	public function __construct()
  {
    $this->middleware('auth');
  }
}