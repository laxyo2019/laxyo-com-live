<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Career;

class CareerController extends Controller
{
    public function index(){
      
    	$posts = Job::where('deleted_at', null)->get();
    	return view('pages.careers', compact('posts'));
    }

    public function show($id){

        $post = Job::find($id);
        return view('pages.careershow',['post'=> $post]);
    }

    public function create($id){
      return 5241;
    	$post = Job::findOrFail($id);
    	return view('pages.careerformapply', compact('post'));
    }

    public function store(Request $request){

    	$this->validate($request,[
            'name'    => 'required|max:255|regex:/^[a-zA-Z ]+$/',       
            'email'   => 'required|email|max:255',
            'mobileno'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'address' => 'required',
            'captcha' => 'required|captcha',
            'about'   => 'required'],
          	[    
            	'name.required' => 'Name should be filled',
          	]
      	);

        if($request->hasFile('file_path')){

          $dir      = 'careers/'.date("Y").'/'.date("F");
          $file_ext = $request->file('file_path')->getClientOriginalExtension();
          $filename = 'document_'.time().'.'.$file_ext;
          $path     = $request->file('file_path')->storeAs($dir, $filename);

        }else{
          $path = null;
        }

      	$careers = new Career;
        $careers->job_id    = $request->job_id;
        $careers->name      = $request->name;
        $careers->email     = $request->email;
        $careers->address   = $request->address;
        $careers->mobile    = $request->mobileno;
        $careers->message   = $request->about;
        $careers->file_path = $path;
        $careers->created_at= date('Y-m-d H:i:s');
        $careers->save();

        return back()->with(['success'=>'Thank You for contacting us, we will contact you soon...']);
    }

}
