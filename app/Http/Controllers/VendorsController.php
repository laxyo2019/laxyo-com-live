<?php

namespace App\Http\Controllers;

use App\Models\Vendor;

use Illuminate\Http\Request;

class VendorsController extends Controller
{
	public function __construct()
  {
    $this->middleware('auth')->except(['create']);
  }

  public function index(){

  	$data = Vendor::all();

  	return view('admin.vendors.index', compact('data'));
  }

  public function create(){
  	return view('pages.vendor_registration');
  }

  public function store(Request $request){

    //return $request->all();
    Vendor::create([
        'company_name'  => $request->company_name,
        'person_name'   => $request->person_name,
        'person_desg'   => $request->designation,
        'person_email'  => $request->email,
        'postal_address'=> $request->postal_address,
        'person_phone1' => $request->telephone_no,
        'person_phone2' => $request->mobile_no,
        'products'      => $request->products,
        'epc'           => $request->pan,
        'gst'           => $request->gst,
        'file_path'     => $request->file('file_bcr')
      ]);

  	return back()->with('success', 'Successfully registered.');
  }
}