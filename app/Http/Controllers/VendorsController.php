<?php

namespace App\Http\Controllers;

use App\Models\Vendor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VendorsController extends Controller
{
	public function __construct()
  {
    $this->middleware('auth')->except(['create']);
  }

  public function index(){

  	$data = Vendor::all();

    //return $data[0]->created_at;

  	return view('admin.vendors.index', compact('data'));
  }

  public function create(){
  	return view('pages.vendor_registration');
  }

  public function store(Request $request){

    //dd($request->file('file_path'));

    $this->validate($request, [
          'company_name'=> 'required',
          'person_name' => 'required',
          'email'       => 'required'
          ]);

    //Directory structure

    if($request->hasFile('file_path')){

      $dir      = 'vendors/'.date("Y").'/'.date("F");
      $file_ext = $request->file('file_path')->extension();
      $filename = 'document_'.time().'.'.$file_ext;
      $path     = $request->file('file_path')->storeAs($dir, $filename);

      //return 1;
    }else{
      $path = null;
    }

    $vendor = new Vendor;
    $vendor->company_name  = $request->company_name;
    $vendor->file_path     = $path;
    $vendor->person_name   = $request->person_name;
    $vendor->person_desg   = $request->designation;
    $vendor->person_email  = $request->email;
    $vendor->postal_address= $request->postal_address;
    $vendor->person_phone1 = $request->telephone_no;
    $vendor->person_phone2 = $request->mobile_no;
    $vendor->products      = $request->products;
    $vendor->pan           = $request->pan;
    $vendor->gst           = $request->gst;
    $vendor->save();

  	return back()->with('success', 'Successfully registered.');
  }
}