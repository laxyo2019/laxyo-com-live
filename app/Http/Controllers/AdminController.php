<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CareerApply;
use App\Feedback;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Auth; 

class AdminController extends Controller
 {
    public function __construct()
    {
        $this->middleware('auth');
    }


   //FOR LAXYO SITE CONTROLLER CODE
   
   //career admin     
    public function index(){
          $data = DB::table('form_mast')
              ->join('form_career', 'form_career.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get();
          foreach ($data as $value) {
              $f_id = $value->job_id;
            }
          $job = DB::table('job_posts')->where('site_code', Auth::user()->site_code)->get();
          $site_domain = DB::table('site_mast')->where('site_code', Auth::user()->site_code)->get();
           return view('admin.laxyo.careeradmin',['data'=> $data , 'job' => $job, 'site_domain' => $site_domain]);
      }
      
   
    public function cdestroy($id){
     
      $destroy = DB::table('form_career')->find($id);

      if ($destroy->file == '') {
         DB::table('form_career')->delete($id);
        }
       else{
         DB::table('form_career')->delete($id);
         Storage::delete('public/document/'.$destroy->file);
         
       }
      
      $data = DB::table('form_mast')
              ->join('form_career', 'form_career.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get();
      
      return view('admin.laxyo.careeradmin', compact('data'));
    }


//feedback

    public function feedback(){
      $data = DB::table('form_mast')
              ->join('form_feedback', 'form_feedback.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get();
       return view('admin.laxyo.feedbackadmin', compact('data'));
     }

    public function fdestroy($id){
      $feedback = DB::table('form_feedback')->delete($id);
      
      $data = DB::table('form_mast')
              ->join('form_feedback', 'form_feedback.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get();
      return view('admin.laxyo.feedbackadmin', compact('data'));
     
    }

  //vender Registration
    public function vender(){
          $data = DB::table('form_mast')
              ->join('form_vendor_reg', 'form_vendor_reg.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get();
              $site_domain = DB::table('site_mast')->where('site_code', Auth::user()->site_code)->get();
          return view('admin.laxyo.vender', compact('data','site_domain'));
          }
    public function vdestroy($id){
         DB::table('form_vendor_reg')->delete($id);
         $data = DB::table('form_mast')
              ->join('form_vendor_reg', 'form_vendor_reg.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get();
         return view('admin.laxyo.vender', compact('data'));
    }      
    public function download_vendor(Request $request){

      $filename= DB::table('form_vendor_reg')->where('id', $request->id)->get();
      foreach ($filename as $key => $value) {
         $filename = $value->file;
      }
      return Storage::download('public/brochure/'.$filename);
     }   

//contact
    public function contact(){
      $data = DB::table('form_mast')
              ->join('form_contact', 'form_contact.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get(); 
      return view('admin.laxyo.contact', compact('data'));
       }
    public function condestroy($id){
         DB::table('form_contact')->delete($id);
         $data = DB::table('form_mast')
              ->join('form_contact', 'form_contact.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get();
         return view('admin.laxyo.contact', compact('data'));
    }  

    public function show($id){
    //

    }



   //DELETE CAREER FORM FOR ALL
    public function deleteAll(Request $request)
      {
         $ids = $request->ids;
         DB::table("form_career")->whereIn('id',explode(",",$ids))->delete();
        $data = DB::table('form_mast')
              ->join('form_career', 'form_career.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get();
         $site_domain = DB::table('site_mast')->where('site_code', Auth::user()->site_code)->get();
       
        ?>

      <thead class="bg-dark" style="color: white">
        <tr>
        <th><input type="checkbox" id="selectall" name="selectall">Id</th>
        <th>Job Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Address</th>
        <th>Summary</th>
        <th>Document</th>
        <th>Time</th>
        <th>Action</th>
      </tr>
      </thead>
      
      <?php
      foreach ($site_domain as $domain) {
        $domain = $domain->site_domain;
      }
      foreach($data as $datas){
        ?>
        <tbody>
      <tr>
        <td><input type="checkbox" class="sub_chk" data-id="<?php echo $datas->id; ?>"></td>
                  <td><?php echo $datas->job_id;?></td>
                  <td><?php echo $datas->name;?></td>
                  <td><?php echo $datas->email;?></td>
                  <td><?php echo $datas->mobileno;?></td>
                  <td><?php echo $datas->address;?></td>
                  <td><?php echo $datas->about;?></td>
                  <?php if($datas->file == ''){?>
                       <td>No file</td>
                  <?php }else{?>     
                  <td>
                     <a href="<?php $domain.'/storage/document/'.$datas->file ?>" target="_blank"><span class="fa fa-download fa-lg"></span></a>
                  </td>
                  <?php }?>
                  <td><?php echo $datas->created_at;?></td>
                  <td>
                    
                <a href="#" class="btn btn-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
                  document.getElementById('delete-form-<?php $datas->id ?>').submit();}"><span class="fa fa-trash fa-lg"></span></a>

                  <form id="delete-form-<?php $datas->id ?>" action="<?php route('cdel', ['id' => $datas->id ]) ?>" method="POST" style="display: none;">
                                @csrf 
                                @method('delete')
                               
                  </form>
                  </td>
                 </tr>
            </tbody>
<?php        
      }

    }




    //SEARCH CAREER FORM FOR ALL
       public function search_career(Request $request){
          $data = DB::table('form_career')->where('job_id', $request->job_id)->get();
          $site_domain = DB::table('site_mast')->where('site_code', Auth::user()->site_code)->get();
           ?>

      <thead class="bg-dark" style="color: white">
        <tr>
        <th><input type="checkbox" id="selectall" name="selectall">Id</th>
        <th>Job Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile Number</th>
        <th>Address</th>
        <th>Summary</th>
        <th>Document</th>
        <th>Time</th>
        <th>Action</th>
      </tr>
      </thead>
      
      <?php
      foreach ($site_domain as $domain) {
        $domain = $domain->site_domain;
      }
      foreach($data as $datas){
        ?>
        <tbody>
      <tr>
        <td><input type="checkbox" class="sub_chk" data-id="<?php echo $datas->id; ?>"></td>
                  <td><?php echo $datas->job_id;?></td>
                  <td><?php echo $datas->name;?></td>
                  <td><?php echo $datas->email;?></td>
                  <td><?php echo $datas->mobileno;?></td>
                  <td><?php echo $datas->address;?></td>
                  <td><?php echo $datas->about;?></td>
                  <?php if($datas->file == ''){?>
                       <td>No file</td>
                  <?php }else{?>     
                  <td>
                     <a href="<?php $domain.'/storage/document/'.$datas->file ?>" target="_blank"><span class="fa fa-download fa-lg"></span></a>
                  </td>
                  <?php }?>
                  <td><?php echo $datas->created_at;?></td>
                  <td>
                    
                <a href="#" class="btn btn-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
                  document.getElementById('delete-form-<?php $datas->id ?>').submit();}"><span class="fa fa-trash fa-lg"></span></a>

                  <form id="delete-form-<?php $datas->id ?>" action="<?php route('cdel', ['id' => $datas->id ]) ?>" method="POST" style="display: none;">
                                @csrf 
                                @method('delete')
                               
                  </form>
                  </td>
                 </tr>
            </tbody>
      <?php        
      }
       }



    //DELETE ALL DATA WHICH IS SELECTED FROM VENDOR FORM
    public function deleteAll_vender(Request $request)
    {
      $ids = $request->ids;
      DB::table("form_vendor_reg")->whereIn('id',explode(",",$ids))->delete();
      $data = DB::table('form_mast')->join('form_vendor_reg', 'form_vendor_reg.form_code', '=', 'form_mast.form_code')->where('site_code', Auth::user()->site_code)->get(); 
      $site_domain = DB::table('site_mast')->where('site_code', Auth::user()->site_code)->get(); 
        ?>
       <thead class="bg-dark" style="color: white;text-align: center;">
            <tr>
            <th><input type="checkbox" id="selectallvender"></th>
            <th >Company Name</th>
            <th >Contact Person Name</th>
            <th >Designation</th>
            <th >Email</th>
            <th >Postal Address</th>
            <th >Telephone No.</th>
            <th >Mobile No.</th>
            <th >Nature Of Business</th>
            <th >Products</th>
            <th >PAN</th>
            <th >GST</th>
            <th>File Download</th>
            <th>Time</th>
            <th >Action</th>
          </tr>
          </thead>
           
      
        <?php
        foreach ($site_domain as $domain) {
        $domain = $domain->site_domain;
        }
        foreach($data as $vender)
        {
          ?>
          <tbody>
            <tr>
              <td><input type="checkbox" class="sub_chk_vender" data-id="<?php echo $vender->id ?>"></td>
              <td><?php echo $vender->company_name ;?></td>
              <td><?php echo $vender->person_name; ?></td>
              <td><?php echo $vender->designation ?></td>
              <td><?php echo $vender->email ?></td>
              <td><?php echo $vender->postal_address ?></td>
              <td><?php echo $vender->telephone_no ?></td>
              <td><?php echo $vender->mobile_no ?></td>
              <td><?php echo $vender->nature_business ?></td>
              <td><?php echo $vender->products ?></td>
              <td><?php echo $vender->pan ?></td>
              <td><?php echo $vender->tan ?></td>
              <td><?php echo $vender->gst ?></td>
             <?php  if($vender->file == ''){?>
                       <td>No file</td>
              <?php}
              else
               { ?>
                 <td>
                   <a href="<?php $domain.'/storage/brochure/'.$vender->file ?>" target="_blank"><span class="fa fa-download fa-lg"></span></a>
                 </td> 
              <?php  }?>
              <td><?php echo $vender->created_at;?></td>
              <td>
                <a href="#" class="btn text-danger " onclick="event.preventDefault(); if(confirm('Are you sure?')){
                          document.getElementById('delete-form-<?php $vender->id ?>').submit();}"><span class="fa fa-trash fa-lg"></span></a>

                          <form id="delete-form-<?php $vender->id ?>" action="<?php route('venderdel', ['id' => $vender->id ]) ?>" method="POST" style="display: none;">
                                   @csrf 
                                    @method('delete')
                          </form>
              </td>
            </tr>
        </tbody>

      <?php 
        }
      

    }
//Contact All Delete Function
    public function DeleteAll_contact(Request $request){

       $ids = $request->ids;
         DB::table("form_contact")->whereIn('id',explode(",",$ids))->delete();
       $data =  DB::table('form_mast')
              ->join('form_contact', 'form_contact.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get(); 
   ?>
      <thead class="bg-dark" style="color: white;text-align: center;width: 100%;">
        <tr style="">
        <th width="10%"><input type="checkbox" id="selectall_contact" name="selectall_contact">Id</th>
        <th width="20%">name</th>
        <th width="15%">Email</th>
        <th width="15%">Address</th>
        <th width="10%">Mobile</th>
        <th width="20%">Message</th>
        <th>Time</th>
        <th width="10%">Action</th>
      </tr>
      </thead>
      
        <?php 
        foreach($data as $con) 
          {?>
     <tbody>
       <tr>
        <td><input type="checkbox" class="sub_chk_contact" data-id="<?php echo $con->id ?>"></td>
        <td><?php echo $con->name ?></td>
        <td><?php echo $con->email ?></td>
        <td><?php echo $con->address ?></td>
        <td><?php echo $con->mobile ?></td>
        <td><?php echo $con->message ?></td>
        <td><?php echo $con->created_at;?></td>
        <td>
                      <a href="#" class="btn btn-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
                      document.getElementById('delete-form-<?php $con->id ?>').submit();}"><span class="fa fa-trash"></span></a>

                      <form id="delete-form-<?php $con->id ?>" action="<?php route('contactdel', ['id' => $con->id ]) ?>" method="POST" style="display: none;">
                                @csrf 
                                @method('delete')
                      </form>
                 </td>
              </tr>

          </tbody>

    <?php
      }
    

    }

    public function DeleteAll_feedback(Request $request){
       $ids = $request->ids;
         DB::table("form_feedback")->whereIn('id',explode(",",$ids))->delete();
      $data = DB::table("form_feedback")->select('*')->get(); 
    ?>
    <thead class="bg-dark" style="color: white;text-align: center;">
        <tr style="width: 100%;">
        <th style="width: 5%;"><input type="checkbox" id="selectall_feedback" name="selectall_feedback">Id</th>
        <th style="width: 15%;">Name</th>
        <th style="width: 15%;">Email</th>
        <th style="width: 10%;">Mobile Number</th>
        <th style="width: 15%;">Subject</th>
        <th style="width: 30%;">Message</th>
        <th>Time</th>
        <th style="width: 10%;">Action</th>
      </tr>
      </thead>

      
      <?php  
      foreach($data as $datas){?>
        <tbody>
      <tr>
        <td><input type="checkbox" class="sub_chk_feedback" data-id="<?php echo $datas->id ?>"></td>
                  <td><?php echo $datas->name ?></td>
                  <td><?php echo $datas->email ?></td>
                  <td><?php echo $datas->phone2 ?></td>
                  <td><?php echo $datas->subject ?></td>
                  <td><?php echo $datas->message ?></td>
                  <td><?php echo $datas->created_at;?></td>  
                  <td>
                   
                <a href="#" class="btn btn-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
                  document.getElementById('delete-form-<?php $datas->id ?>').submit();}"><span class="fa fa-trash"></span></a>

                  <form id="delete-form-<?php $datas->id ?>" action="<?php route('fdel', ['id' => $datas->id ]) ?>" method="POST" style="display: none;">
                                @csrf 
                                @method('delete')
                  </form>
                  </td>
                  </td>
                 </tr>
                
            </tbody>
            <?php
          }
       }



    public function DeleteAll_post(Request $request){
       $ids = $request->ids;
         DB::table("job_posts")->whereIn('id',explode(",",$ids))->delete();
        $data = DB::table("job_posts")->select('*')->get(); 
      ?>
      <thead class="bg-dark" style="color: White;text-align: center;width: 100%;">
        <tr>
          <td style="width: 5%"> <input type="checkbox" id="selectall_post" name="selectall_post"></td>
          <td style="width: 10%">Job Title</td>
          <td style="width: 10%">Location</td>
          <td style="width: 10%">Experience</td>
          <td style="width: 20%">Description</td>
          <td style="width: 5%">Resume Necessary</td>
          <td style="width: 20%" colspan="2">Salary Range</td>
          <td style="width: 5%">Closing Date</td>

          <td style="width: 5%">Candidate Count</td>
          <td style="width: 10%">Action</td>
        </tr>
        <tr>
          <td style="width: 5%"></td>
          <td style="width: 10%"></td>
          <td style="width: 10%"></td>
          <td style="width: 10%"></td>
          <td style="width: 20%"></td>
          <td style="width: 5%"></td>
          <td style="width: 10%">From</td>
          <td style="width: 10%">To</td>
          <td style="width: 5%"></td>
          <td style="width: 5%"></td>
          <td style="width: 10%"></td>
        </tr>
     </thead>

      
      <?php  
      foreach($data as $posts){?>
        <tbody>
      <tr>
             <td><input type="checkbox" class="sub_chk_post" data-id="<?php echo $posts->id; ?>"></td>
             <td><?php echo $posts->job_title ?></td>
             <td><?php echo $posts->job_location ?></td> 
             <td><?php echo $posts->exp ?></td>
             <td><?php echo $posts->job_desc ?></td>
             <td><?php echo $posts->resume_req ?></td>
             <td><?php echo $posts->sal_min ?></td>
             <td><?php echo $posts->sal_max ?></td>
             <td><?php echo $posts->close_dt ?></td>
             <td><?php echo $posts->cand_count ?></td> 

             <td>
               <a href="admin-post/<?php $posts->id ?>/edit" class="btn btn-primary"><span class="fa fa-edit"></span></a>
                <a href="#" class="btn btn-danger" onclick="event.preventDefault(); if(confirm('Are you sure?')){
                  document.getElementById('delete-form-<?php $posts->id ?>').submit();}"><span class="fa fa-trash"></span></a>

                  <form id="delete-form-<?php $posts->id ?>" action="<?php route('admin-post.destroy', $posts->id) ?>" method="POST" style="display: none;">
                             @csrf 
                                @method('delete')
                  </form>

             </td>

            </tr>    
            </tbody>
            <?php
          }
       }

      //add sites vars columns
       public function site_vars(){
        $loc = DB::table('site_vars')->where('site_code', Auth::user()->site_code)->get();
         
        return view('admin.laxyo.sitevarcontent', compact('loc'));
      }
      public function site_vars_edit(Request $request){
        $data = array(
            'var_code' => $request->var_code,
            'var_key' => $request->var_key,
            'var_value' => $request->var_value,
           );
          $var_code = $request->var_code;
          DB::table('site_vars')->where('var_code', $var_code)->update($data);
          $loc = DB::table('site_vars')->where('var_code', $var_code)->select('*')->get();
          ?>

          <thead class="bg-dark" style="color: white;text-align: center;width: 100%;">
              <tr>
                <td>Var code</td>
                <td>Var Key</td>
                <td>Var Value</td>
                <td>Action</td>
              </tr>
          
          <?php  
           foreach($loc as $locs){?>
          <tbody>
            <tr>
               <td><?php echo $locs->var_code; ?></td>
               <td><?php echo $locs->var_key; ?></td>
               <td><?php echo $locs->var_value; ?></td>
               <td>
                 <a data-varcode="<?php echo $locs->var_code ?>" data-var-key="<?php echo $locs->var_key?>" data-var-value="<?php echo $locs->var_value ;?>" class="text-primary editapply"><span class="fa fa-edit fa-lg"></span></a>
               </td>
            </tr>
         </tbody>
           <?php 
         }
      }






//  FOR YOLAX SITE

      public function contact_yolax(){
        $data = DB::table('form_mast')
                ->join('form_contact', 'form_contact.form_code', '=', 'form_mast.form_code')
                ->where('site_code', Auth::user()->site_code)->get(); 
              
        return view('admin.yolax.contact_yolax', compact('data'));
         }
        


       public function con_yolax_del($id){
         DB::table('form_contact')->delete($id);
         $data = DB::table('form_mast')
              ->join('form_contact', 'form_contact.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get();
         return view('admin.yolax.contact_yolax', compact('data'));
     } 


     public function deleteAll_contact_yolax(Request $request){
       $ids = $request->ids;
         DB::table("form_contact")->whereIn('id',explode(",",$ids))->delete();
      $data = DB::table('form_mast')
              ->join('form_contact', 'form_contact.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get(); 
        ?>
       <thead class="bg-dark" style="color: white;text-align: center;width: 100%;">
        <tr style="">
        <th width="10%"><input type="checkbox" id="selectall_contact" name="selectall_contact"></th>
        <th>Full Name</th>
        <th>Company Name</th>
        <th>Email</th>
        <th>Mobile No.</th>
        <th>Plant</th>
        <th>State</th>
        <th>Open Power</th>
        <th>Captive Power</th>
        <th>Capacity</th>
        <th>Power Consumption</th>
        <th>Steam</th>
        <th>Steam Consumption</th>
        <th>Production</th>
        <th>Time</th>
        <th>Message</th>
      </tr>
      </thead>

      
        <?php  
        foreach($data as $con){?>
         <tbody>
           <tr>
            <td><input type="checkbox" class="sub_chk_contact" data-id="<?php $con->id ?>"></td>
            <td><?php echo $con->name ?></td>
            <td><?php echo $con->company_name ?></td>
            <td><?php echo $con->email ?></td>
            <td><?php echo $con->mobile ?></td>
            <td><?php echo $con->plant ?></td>
            <td><?php echo $con->state_ect_brd ?></td>
            <td><?php echo $con->open_power ?></td>
            <td><?php echo $con->captive_power ?></td>
            <td><?php echo $con->capacity ?></td>
            <td><?php echo $con->power_consumption ?></td>
            <td><?php echo $con->steam ?></td>
            <td><?php echo $con->steam_consumption ?></td>
            <td><?php echo $con->production ?></td>
            <td><?php echo $con->message ?></td>
            <td><?php echo $con->created_at;?></td>
           </tr>
          </tbody>
            <?php
          }
       }


       public function career_yolax(){
        $data = DB::table('form_mast')
                ->join('form_career', 'form_career.form_code', '=', 'form_mast.form_code')
                ->where('site_code', Auth::user()->site_code)->get(); 
                $job = DB::table('job_posts')->where('site_code', Auth::user()->site_code)->get();
                $site_domain = DB::table('site_mast')->where('site_code', Auth::user()->site_code)->get();
        return view('admin.yolax.career_yolax', compact('data','job','site_domain'));
         }

         public function car_yolax_del($id){
         DB::table('form_contact')->delete($id);
         $data = DB::table('form_mast')
              ->join('form_contact', 'form_contact.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get();
         return view('admin.yolax.career_yolax', compact('data'));
         } 
       public function sitevars_yolax(){
        $loc = DB::table('site_vars')->where('site_code', Auth::user()->site_code)->get(); 
        return view('admin.yolax.sitevars_yolax', compact('loc'));
        }  

        // public function dwld_yolax_career(Request $request){

        //   $filename= DB::table('form_career')->where('id', $request->id)->get();
        //   foreach ($filename as $key => $value) {
        //      $filename = $value->file;
        //   }
          
        //   return Storage::download('public/document/'.$filename);
        //  }   
     public function deleteAll_career_yolax(Request $request){
       $ids = $request->ids;
         DB::table("form_career")->whereIn('id',explode(",",$ids))->delete();
      $data = DB::table('form_mast')
              ->join('form_career', 'form_career.form_code', '=', 'form_mast.form_code')
              ->where('site_code', Auth::user()->site_code)->get(); 
        $site_domain = DB::table('site_mast')->where('site_code', Auth::user()->site_code)->get();      
        ?>
       <thead class="bg-dark" style="color: white">
            <tr>
            <th><input type="checkbox" id="selectall" name="selectall"></th>
           <th>Job Id</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Document</th>
            <th>Time</th>
          </tr>
          </thead>

      
        <?php  
         foreach ($site_domain as $domain) {
           $domain = $domain->site_domain;
          }
        foreach($data as $datas){?>
         <tbody>
        
          <tr>
          <td><input type="checkbox" class="sub_chk" data-id="<?php $datas->id ?>"></td>
         
                  <td><?php echo $datas->job_id ?></td>
                  <td><?php echo $datas->name ?></td>
                  <td><?php echo $datas->email ?></td>
                  <td><?php echo $datas->mobileno ?></td>
                  <?php if($datas->file == ''){?>
                   <td>No file</td>
                  <?php }else
                  {?>

                   <td>
                    <a href="<?php $domain.'/storage/document/'.$datas->file ?>" target="_blank"><span class="fa fa-download fa-lg"></span></a>
                    </td> 
                   <?php }?>
                   <td><?php echo $datas->created_at;?></td>
                  
                 </tr>
            </tbody>
            <?php
          }
       }
       public function search_career_yolax(Request $request){
          $data = DB::table('form_career')->where('job_id', $request->job_id)->get();
          $site_domain = DB::table('site_mast')->where('site_code', Auth::user()->site_code)->get();
           ?>
       <thead class="bg-dark" style="color: white">
            <tr>
            <th><input type="checkbox" id="selectall" name="selectall"></th>
           <th>Job Id</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Document</th>
            <th>Time</th>
          </tr>
          </thead>

      
        <?php  
        foreach ($site_domain as $domain) {
           $domain = $domain->site_domain;
          }
        foreach($data as $datas){?>
         <tbody>
        
          <tr>
          <td><input type="checkbox" class="sub_chk" data-id="<?php $datas->id ?>"></td>
         
                  <td><?php echo $datas->job_id ?></td>
                  <td><?php echo $datas->name ?></td>
                  <td><?php echo $datas->email ?></td>
                  <td><?php echo $datas->mobileno ?></td>
                  <?php if($datas->file == ''){?>
                   <td>No file</td>
                  <?php }else
                  {?>

                   <td>
                    <a href="<?php $domain.'/storage/document/'.$datas->file ?>" target="_blank"><span class="fa fa-download fa-lg"></span></a>
                    </td> 
                   <?php }?>
                   <td><?php echo $datas->created_at;?></td>
                  
                 </tr>
            </tbody>
            <?php
          }
       }      

   }
