<?php

namespace App\Http\Controllers;

use App\Models\Vendor;

class VendorsController extends Controller
{
	public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(){

  	$data = Vendor::all();

  	return view('admin.vendors.index', compact('data'));
  }

  public function create(){
  	return view('pages.vendor_registration');
  }

  public function store(){

  	return back()->with('status', 'Successfully registered.');
  }
}