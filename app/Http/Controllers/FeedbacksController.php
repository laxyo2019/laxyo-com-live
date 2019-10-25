<?php

namespace App\Http\Controllers;

class FeedbacksController extends Controller
{
	public function __construct()
  {
    $this->middleware('auth');
  }
}