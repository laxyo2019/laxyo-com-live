<?php

namespace App\Http\Controllers;

class JobsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index(){
		$jobs = Job::latest()->get();
		return view('admin.careers.index', ['jobs' => $jobs]);
	}

	public function create(){
		$loc = DB::table('site_dropdowns')->select('*')->get();
		return view('admin.laxyo.postcreate', compact('loc'));
	}
	public function store(Request $request){
		$this->validate($request, [
			'jobtitle' => 'required',
			'location' => 'required',
			'description' => 'required',
			'salaryfrom' => 'required',
			'salaryto' => 'required',
			'closingdate' => 'required',
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
		$data['cand_count'] = $request->candidatecount; 
		$data['created_at'] = date('Y-m-d H:i:s');
		
		
		
		$dates = strtotime($request->closingdate);
		$cdate = strtotime(date('d-m-Y'));
		
		if (($dates >= $cdate)) {

			DB::table('job_posts')->insert($data);

			return redirect('/admin-post')->with('success', 'Data Inserted Successfully');
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
