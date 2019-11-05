<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use DB;
use Auth;

class JobsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(){
		$post = Job::latest()->get();

		//return $post;
		return view('admin.careers.index', ['post' => $post]);
	}

	public function create(){
		//$loc = DB::table('site_variables')->select('*')->get();
		return view('admin.careers.create'/*, compact('loc')*/);
	}

	public function store(Request $request){

		//return $josh = date('Y-m-d', strtotime($request->closingdate));
		$this->validate($request, [
			'jobtitle'		=> 'required',
			'description'	=> 'required',
			'salaryfrom'	=> 'required',
			'salaryto'		=> 'required',
			'min_exp'		=> 'required',
			'max_exp'		=> 'required',
			'candidatecount'=> 'required',
		]);

		/*$data['site_code'] = '001';*/
		$data['user_id']	  = Auth::id();
		$data['job_title']	  = $request->jobtitle;
		$data['job_location'] = $request->location;
		$data['min_exp']	  = $request->min_exp;
		$data['max_exp']	  = $request->max_exp;
		$data['job_desc']	  = $request->description;
		$data['resume_req']	  = $request->resume;
		$data['sal_min']	  = $request->salaryfrom;
		$data['sal_max']	  = $request->salaryto;
		$data['no_of_pos']	  = $request->candidatecount; 
		$data['created_at']	  = date('Y-m-d H:i:s');
		
		/*
		$dates = strtotime($request->closingdate);
		$cdate = strtotime(date('d-m-Y'));*/


		DB::table('job_posts')->insert($data);

		return redirect('/admin/jobs')->with('success', 'Posted successfully');
		
		/*if (($dates >= $cdate)) {

			
		}
		else
		{
			return redirect()->route('admin-post.create')->with('warning', 'Date is less than current value');
		}*/	
		
	}

	public function edit($id){

		//$post = DB::table('job_posts')->find($id);
		$post = Job::findOrFail($id);

		//return $jobs;

		return view('admin.careers.edit',compact('post'));	
	}

	public function update(Request $request, $id){

		$this->validate($request, [
			'jobtitle'		=> 'required',
			'location'		=> 'required',
			'description'	=> 'required',
			'sal_min'		=> 'required',
			'sal_max'		=> 'required',
			'min_exp'		=> 'required',
			'max_exp'		=> 'required',
			'no_of_pos'		=> 'required',
		]); 
			
			
		$data['user_id']	  = Auth::id();
		$data['job_title']	  = $request->jobtitle;
		$data['job_location'] = $request->location;
		$data['min_exp']	  = $request->min_exp;
		$data['max_exp']	  = $request->max_exp;
		$data['job_desc']	  = $request->description;
		$data['resume_req']	  = $request->resume;
		$data['sal_min']	  = $request->sal_min;
		$data['sal_max']	  = $request->sal_max;
		$data['no_of_pos']	  = $request->no_of_pos;
		$data['updated_at']	  = date('Y-m-d H:i:s');

		DB::table('job_posts')->where('id', $id)->update($data);


		return back()->with('success', 'Data Updated Successfully');
	}

	public function destroy($id){

		$row = Job::find($id);
		$row->delete();
		return back()->with('success', 'Data Deleted Successfully');
	}

	public function show($id){
         //
	}
}
