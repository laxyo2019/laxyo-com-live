<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Support\Facades\Storage;

class JobRepliesController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index($id){

    //return 654;

    $replies = Career::where('job_id', $id)->get();

    return view('admin.careers.jobreplies.index', compact('replies'));
      
  }

  public function downloadresume($id){

    $resume = Career::find($id)->file_path;

    return Storage::download($resume);
    //return $resume;
  }

  public function submit(Request $request){
    $pea = DB::table('site_vars')->get();
    $this->validate($request, [
      'name' => 'required|min:6',
      'email' => 'required|email',
      'mobileno' => 'required|string|max:11|min:10',
      'file'	=>'nullable|mimes:pdf,docx,doc|max:10240',
      'captcha' => 'required|captcha'
    ]); 
    $sel_form_code = DB::table('form_mast')->select('*')->get();
    foreach ($sel_form_code as $key => $value) {
     if ($value->site_code === '001' && $value->form_title === 'career form' ) {
       $cform = $value->form_code;
     }
   }
   $job_id = $request->input('job_id');
   $name = $request->input('name');
   $email = $request->input('email');
   $mobileno = $request->input('mobileno');
   $address = $request->input('address');
   $about = $request->input('about');
   $url1 = '';
   if ($request->file!= '') {
    
    $file = $request->file('file');
    $filename =  time().'_'.$file->getClientOriginalName();
    $path = $file->storeAs('public/document', $filename);
    $url1 = Storage::url('public/document/'.$filename);
    $url = url()->current();
    $url_1=explode("/",$url);
    $orignail_url=$url_1[0]."/".$url_1[1]."/".$url_1[2];

    $url1 = $orignail_url.$url1;
    $data = array(
      'form_code' =>$cform,
      'job_id' => $job_id,
      'name' => $name,
      'email' => $email,
      'address'=>$address,
      'about'=>$about,
      'mobileno'=> $mobileno,
      'file' => $filename,
      'doc_url' => $url1,
      "created_at" => date('Y-m-d H:i:s'),
      "updated_at" => date('Y-m-d H:i:s'),
    );
    DB::table('form_career')->insert($data);

  }else{
   $data = array(
    'form_code' =>$cform,
    'job_id' => $job_id,
    'name' => $name,
    'email' => $email,
    'address'=>$address,
    'about'=>$about,
    'mobileno'=> $mobileno,
    'doc_url' => $url1,
    "created_at" => date('Y-m-d H:i:s'),
    "updated_at" => date('Y-m-d H:i:s'),

  );
   
   DB::table('form_career')->insert($data);
 }
 $mail = DB::table('site_vars')->select('*')->get();

 foreach($mail as $value){
  if ($value->site_code == '001' && $value->var_key == 'career mail id') {
   $mail = $value->var_value;
 }
 
}
Mail::to($mail)->queue(new SendMailable($data));
Mail::to($email)->queue(new MailSendContact($data));
return redirect('/career')->with(['success'=>'Data Inserted Successfully', 'pea' => $pea]);
}

// feedback insertion function
public function feedback(Request $request){

  $this->validate($request, [
    'name' => 'required',
    'email' => 'required|email',
    'phone1' => 'required',
    'phone2' => 'required',
    'subject'=> 'required',
    'message'=> 'required',          
    
  ]); 
  
  $sel_form_code = DB::table('form_mast')->select('*')->get();
  foreach ($sel_form_code as $key => $value) {
   if ($value->site_code == '001' && $value->form_title == 'feedback form' ) {
     $feedform = $value->form_code;
   }
 }
 $data = array(
  'form_code' =>$feedform,
  'name' => $request->name,
  'email' => $request->email,
  'phone1' => $request->phone1,
  'phone2' => $request->phone2,
  'subject'=> $request->subject,
  'message' => $request->message,
  "created_at" => date('Y-m-d H:i:s'),
  "updated_at" => date('Y-m-d H:i:s'),
);
 DB::table('form_feedback')->insert($data);
 return redirect('/');
}

}