<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Contact;
use App\Models\Vendor;
use Auth;

class HomeController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $jobs     = Job::all()->count();
    $vendors  = Vendor::all()->count();
    $contacts = Contact::all()->count();
    

    return view('admin.index', compact('jobs', 'contacts', 'vendors'));
  }

  public function site_variables(){
  	
  }
}
