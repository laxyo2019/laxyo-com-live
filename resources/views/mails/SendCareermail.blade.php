<div>
  <p>  Hi, New User: {{ $data['name'] }}</p>
  <p>  Email is: {{ $data['email'] }}</p>
  <p>  Mobile Number is: {{ $data['mobileno'] }}</p>
  <?php 
  if($data['doc_url'] != ''){
  	?>
       <p>  Resume link: <a href="<?php echo $data['doc_url']; ?>">Download file</a></p>
  else
       <p>No files</p>
   </div>    
  <?php
}
  
