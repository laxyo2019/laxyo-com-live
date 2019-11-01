<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
class FeedbacksController extends Controller
{
	public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(){

  	$data = Feedback::latest()->get();

  	return view('admin.feedbacks.index', compact('data'));
  }
}