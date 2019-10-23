<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Storage;
use App\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSendContact;
use App\Mail\SendMailCompany;

class PagesController extends Controller
{
  public function welcome(){
    return view('welcome');
  }

  public function pages($page_title) {
    if($page_title == 'careers') {
      $posts = DB::table('job_posts')->latest()->get();
      return view('pages.careers', compact('posts'));
    }

    return view('pages.'.$page_title);
  }

  
    public function submitmyform(Request $request)
    {
        $pea = DB::table('site_variables')->get();
         $this->validate($request,[
               'name'    => 'required|max:255|regex:/^[a-zA-Z ]+$/',       
               'email'   => 'required|email|max:255',     
               "mobile"  =>"required|max:10|min:10|regex:/^([0-9\s\-\+\(\)]*)$/",
                "captcha"=>'required|captcha',
                'address'=>'required'
               ],
                [    
                  "name.required" => "Name Should be filled"
                ]
      );
        $select_form_code = DB::table('form_mast')->get();
        foreach ($select_form_code as $key => $value) {
           if ($value->site_code === '001' && $value->form_title === 'contact form' ) {
             $conform = $value->form_code;
         }
        }
        $name=$request->input('name');
        $email=$request->input('email');
        $address=$request->input('address');
        $mobile=$request->input('mobile');
        $message=$request->input('message');
        $data=array(
                    "form_code"  => $conform,
                    "name"      => $name,
                    "email"     => $email,
                    "address"   => $address,
                    "mobile"    => $mobile,
                    "message"   => $message,
                    "created_at" => date('Y-m-d H:i:s'),
                    "updated_at" => date('Y-m-d H:i:s'),
            );
      
       

      DB::table('form_contact')->insert($data);
      $mail = DB::table('site_variables')->select('*')->get();

        foreach($mail as $value){
        if ($value->site_code == '001' && $value->var_key == 'contact mail id') {
           $mail = $value->var_value;
          }
          
        }
      Mail::to($mail)->queue(new SendMailCompany($data));
      return redirect()->back()->withInput()->with(['message'=>'Thank You For Contact Us We Will Contact You Soon...', 'pea'=> $pea]);

    }

    public function vendor_registration(){
      $pea = DB::table('site_variables')->get();
        $users = DB::table("site_dropdowns")->get();
        return view('pages.vendor_registration',compact('users','pea'));
    }

    public function vendorform(Request $request)
    {
          $pea = DB::table('site_variables')->get();
          $select_form_code = DB::table('form_mast')->get();
          foreach ($select_form_code as $key => $value) {
             if ($value->site_code === '001' && $value->form_title === 'vendor registration form' ) {
               $vendorform = $value->form_code;
           }
          }
          $company_name    =$request->input('company_name');
          $person_name     =$request->input('person_name');
          $designation     =$request->input('designation');
          $email           =$request->input('email');
          $postal_address  =$request->input('postal_address');
          $telephone_no    =$request->input('telephone_no');
          $mobile_no       =$request->input('mobile_no');
          $nature_business =$request->input('nature_business');
          $products        =$request->input('products');
          $pan             =$request->input('pan');
          $gst             =$request->input('gst');
          $file            = $request->file('file_bcr');
          

          $filename = '';

          //for file
          if ($file != '') {
            
           $filename =  time().'_'.$file->getClientOriginalName();
           $path = $file->storeAs('public/brochure', $filename);
           $url1 = Storage::url('public/brochure/'.$filename);
           $url = url()->current();
                      $url_1=explode("/",$url);
                  $orignail_url=$url_1[0]."/".$url_1[1]."/".$url_1[2];

          $url1 = $orignail_url.$url1;
          $data=array(
                      'form_code' => $vendorform,
                      'company_name'    => $company_name , 
                      'person_name'     =>$person_name,
                      'designation'     =>$designation,
                      'email'           =>$email,
                      'postal_address'  =>$postal_address,
                      'telephone_no'    =>$telephone_no,
                      'mobile_no'       =>$mobile_no,
                      'nature_business' =>$nature_business,
                      'products'        =>$products,
                      'pan'             =>$pan,
                      'gst'             =>$gst,
                      'file'            =>$filename,
                      "created_at" => date('Y-m-d H:i:s'),
                      "updated_at" => date('Y-m-d H:i:s'),
                  );

          }
          else{
              $data=array(
                      'form_code' => $vendorform,
                      'company_name'    => $company_name , 
                      'person_name'     =>$person_name,
                      'designation'     =>$designation,
                      'email'           =>$email,
                      'postal_address'  =>$postal_address,
                      'telephone_no'    =>$telephone_no,
                      'mobile_no'       =>$mobile_no,
                      'nature_business' =>$nature_business,
                      'products'        =>$products,
                      'pan'             =>$pan,
                      'gst'             =>$gst,
                      'file'            =>$filename,
                      "created_at" => date('Y-m-d H:i:s'),
                      "updated_at" => date('Y-m-d H:i:s'),
                  );
          }
       $this->validate($request,[
            'company_name'   =>'required|regex:/^[a-zA-Z ]+$/u|max:255',       
            'person_name'    =>'required|regex:/^[a-zA-Z ]+$/u|max:255',       
            'designation'    =>'required|regex:/^[a-zA-Z  ]+$/u|max:255',       
            'email'          => 'required|email|max:255', 
            'postal_address' =>'required', 
            'telephone_no'   =>'required|regex:/^[0-9]+$/u|digits:11',
            'mobile_no'      =>'required|regex:/^[0-9]+$/u|digits:10',
            'nature_business'=>'required|not_in:0|max:255', 
             'products'      =>'required|not_in:0|max:255',
             'captcha'    => 'required|captcha'
           

       ],[
        "company_name.required"   =>"Company Name is Required",
        "person_name.required"    =>"Contact Person Name is Required",
        "designation.required"    =>"Designation is Required",
        "email.required"          =>"Email is Required",
        "postal_address.required" =>"Postal Address is Required",
        "telephone_no.required"   =>"Telephone No is Required",
        "mobile_no.required"      =>"Mobile No is Required",
       "nature_business.not_in"   =>"Select Any One Nature Business Field",
       "products.not_in"          =>"Select Any One Products Field",
       ]);
        DB::table('form_vendor_reg')->insert($data);
         return redirect()->back()->withInput()->with(['vender_message'=>'Send Message Successfully', 'pea'=>$pea]);
        }



    public function careerform($id){
        $pea = DB::table('site_variables')->get();
        $post = DB::table('job_posts')->find($id);
        return view('pages.careerformapply', compact('post', 'pea'));
    }



    public function laxyo_group_companies(){
        $pea = DB::table('site_vars')->get();
        return view('pages.laxyo-group-companies',compact('pea'));
    }
    public function services(){
      $pea = DB::table('site_vars')->get();
        return view('pages.services', compact('pea'));
    }
    public function operation_maintenance(){
      $pea = DB::table('site_vars')->get();
        return view('pages.operation-and-maintenance', compact('pea'));
    }
    

    public function careershow($id){

        $car = DB::table('job_posts')->find($id);
        $pea = DB::table('site_vars')->get();
        return view('pages.careershow',['pea' => $pea ,'car'=> $car]);
    }

}
