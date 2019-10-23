<?php

namespace App\Http\Controllers\Form;

use App\Http\Controllers\Controller;

class VendorsController extends Controller
{
	public function __construct()
  {
    $this->middleware('auth');
  }
}