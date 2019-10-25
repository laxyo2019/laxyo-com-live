<?php

namespace App\Http\Controllers;

class VendorsController extends Controller
{
	public function __construct()
  {
    $this->middleware('auth');
  }
}