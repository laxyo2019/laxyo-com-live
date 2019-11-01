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
			'opendate'		=> 'required',
			'closingdate'	=> 'required',
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
		$data['open_dt']	  = date('Y-m-d', strtotime($request->opendate));
		$data['close_dt']	  = date('Y-m-d', strtotime($request->closingdate));
		$data['no_of_pos']	  = $request->candidatecount; 
		$data['created_at']	  = date('Y-m-d H:i:s');
		
		
		$dates = strtotime($request->closingdate);
		$cdate = strtotime(date('d-m-Y'));
		
		if (($dates >= $cdate)) {

			DB::table('job_posts')->insert($data);

			return redirect('/admin/jobs')->with('success', 'Data Inserted Successfully');
		}
		else
		{
			return redirect()->route('admin-post.create')->with('warning', 'Date is less than current value');
		}	
		
	}

	public function edit($id){
		$post = DB::table('job_posts')->find($id);
		return view('admin.laxyo.postedit',compact('post'));	
	}
	public function update(Request $request, $id){

		$this->validate($request, [
			'jobtitle' => 'required',
			'location' => 'required',
			'description' => 'required',
			'salaryfrom' => 'required',
			'salaryto' => 'required',
			'closingdate' => 'required|date',
			'candidatecount' => 'required',
		]); 
		$data['site_code'] = '001';
		$data['job_title'] = $request->jobtitle;
		$data['job_location'] = $request->location;
		$data['exp'] = $request->experience;
		$data['job_desc'] = $request->description;
		$data['resume_req'] = $request->resume;
		$data['sal_min'] = $request->salaryfrom;
		$data['sal_max'] = $request->salaryto;
		$data['close_dt'] = $request->closingdate;
		$data['active'] = $request->active;
		$data['cand_count'] = $request->candidatecount; 
		$data['updated_at'] = date('Y-m-d H:i:s');
		

		DB::table('job_posts')->where('id', $id)->update($data);
		return redirect('/admin-post')->with('success', 'Data Updated Successfully');
	}

	public function destroy($id){
		$post = DB::table('job_posts')->delete($id);
		return redirect('/admin-post')->with('success', 'Data Deleted Successfully');
	}

	public function show($id){
         //
	}
}
