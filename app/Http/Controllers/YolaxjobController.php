<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class YolaxjobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
    	$post = DB::table('job_posts')->where('site_code', Auth::user()->site_code)->get();
    	return view('admin.yolax.p_index_yolax', compact('post'));
    }

    public function create(){
    	return view('admin.yolax.p_create_yolax');
    }

    public function store(Request $request){
              $this->validate($request, [
		          'jobtitle' => 'required',
		      
		         ]); 
                    $data['site_code'] = '002';
		    		$data['job_title'] = $request->jobtitle;
                    $data['created_at'] = date('Y-m-d H:i:s');
		    	
		    	DB::table('job_posts')->insert($data);
             return redirect('/post_yolax')->with('success', 'Data Successfully inserted');
            }


    public function edit($id){
	      	  $post = DB::table('job_posts')->find($id);
			  return view('admin.yolax.p_edit_yolax',compact('post'));	
		  }

    public function update(Request $request, $id){

		    	$this->validate($request, [
		          'jobtitle' => 'required',
		         ]); 

		    		$data['site_code'] = '002';
		    		$data['job_title'] = $request->jobtitle;
                    $data['active'] = $request->active;
                    $data['updated_at'] = date('Y-m-d H:i:s');
		    	
		        DB::table('job_posts')->where('id', $id)->update($data);
		        return redirect('/post_yolax')->with('success', 'Data Updated Successfully');
		    }

    public function destroy($id){
	      	  $post = DB::table('job_posts')->delete($id);
			  return redirect('/post_yolax')->with('success', 'Data Deleted Successfully');
		  }

    // public function show($id){
    //      //
    // }
}
