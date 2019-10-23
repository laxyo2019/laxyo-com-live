<footer class="footer bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 effect-slide-bottom in" >
            <div class="widget_content1">
              <div class="widget_title">
                <h4> <span>Laxyo Group Companies</span> </h4>
              </div>
              <div>
                <ul class="archives_list">
                  <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://www.laxyofinance.com"> Laxyo Finance Limited</a></li>
                  <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://www.yolaxinfra.com"> Yolax Infranergy Pvt. Ltd.</a></li>
                  <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://www.laxyosolutionsoft.com"> Laxyo Solution Soft Pvt. Ltd.</a></li>
                   <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://lakshyainternationalschool.org"> Lakshya International School</a></li>
                  <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://www.apnagps.com"> Apna GPS</a></li>
                  <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://www.discountbrandfactory.com"> Discount Brand Factory</a></li>
                  <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://www.advocatemail.com"> Advocate Mail</a></li>
                  <li><i class="fa fa-angle-double-right"></i><a target="_blank" href="http://www.maagayatrihospital.org"> Maa Gayatri Hospital</a></li>
                </ul>
              </div>
              <br>
              
            </div>
          </div>

           <div class="col-lg-3 col-md-3 col-sm-3 effect-slide-bottom in">
            <div class="widget_title">
                <h4> <span>Corp. Off. - Indore</span> </h4>
              </div>
              <div class="wfoot_content">
                <ul class="contact-details-alt">
                  <li><i class="fa fa-map-marker"></i>
                    <p>{{ get_site_val('footer_ofc1_addr1') }}</p>
                  </li>
                  <li><i class="fa fa-phone"></i>
                    <p><span>Phone :</span> {{ get_site_val('footer_ofc1_phone1') }}</p>
                 </li>
                  <li><i class="fa fa-phone"></i>
                    <p><span>Phone :</span> {{ get_site_val('footer_ofc1_phone2') }}</p>
                  </li>
                  {{-- <li><i class="fa fa-envelope"></i>
                    <p><span>Email :</span> {{ get_site_val('footer_ofc1_email1') }}</p>
                  <li> --}}
                </ul>
              </div>
          </div> 

          <div class="col-lg-3 col-md-3 col-sm-3 effect-slide-bottom in">
            <div class="widget_footer">
              <div class="widget_title">
                <h4> <span>Regd. Off. - Ratlam</span> </h4>
              </div>
              <div class="wfoot_content">
               <ul class="contact-details-alt">
                  <li><i class="fa fa-map-marker"></i>
                    <p>{{ get_site_val('footer_ofc2_addr1') }}</p>
                  </li>
                  <li><i class="fa fa-phone"></i>
                    <p><span>Phone :</span> {{ get_site_val('footer_ofc2_addr1') }}</p>
                  </li>
                </ul>
              </div>  
            </div>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-3 effect-slide-bottom in">
            <div class="widget_footer">
              <div class="widget_title">
                <h4> <span>Reg. Off. - Chittorgarh</span> </h4>
              </div>
              <div class="wfoot_content">
               <ul class="contact-details-alt">
                  <li><i class="fa fa-map-marker"></i>
                    <p>{{ get_site_val('footer_ofc3_addr1') }}</p>
                  </li>
                  <li><i class="fa fa-phone"></i>
                    <p><span>Phone:</span> {{ get_site_val('footer_ofc3_addr1') }}</p>
                  </li>
                </ul>
              </div>  
            </div>
            <div>&nbsp;</div>
            <div class="widget_title">
                <h4> <span>Social Links</span> </h4>
              </div>
              <div class="footer_social">
              <ul class="footbot_social">
                <li><a class="fb" href="https://www.facebook.com/laxyoGroup/" data-placement="top" data-toggle="tooltip" title="Facbook" ><i class="fa fa-facebook"></i></a></li>
                <li><a class="twtr" href="https://twitter.com/LaxyoGroup" data-placement="top" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a class="twtr" href="https://in.linkedin.com/in/laxyo-group-21242a118" data-placement="top" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--End Footer-->
    <section class="footer_bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <p class="copyright">Copyright &copy; <?php echo date("Y"); ?> LAXYO -  All rights reserved.</p>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <p class="desined-by pull-right">Designed And Developed by <a href="http://www.laxyosolutionsoft.com">LaxyoSolutionsoft Pvt.Ltd</a></p>
          </div>
        </div>
      </div>
    </section>
    <!--Button for reach top-->
    <!--<div class="btntoTop active"></div>-->

<!-- Active menu script -->

  <script>
    $(function() 
    {
      var href = window.location.href;
      $('ul#responsive li a').each(function(i,n)
      {
        if(href == n)
        {
          $('li').removeClass('active');
          $(this).closest('li').addClass('active');
        }
      });
    });
    </script>
<!-- Active menu script -->

<script>
$(document).ready(function(){ 

  var _scroll = true, _timer = false, _floatbox = $("#contact_form"), _floatbox_opener = $(".contact-opener,.close") ;
  _floatbox.css("right", "-319px"); //initial contact form position
  
  //Contact form Opener button
  _floatbox_opener.click(function(){
    if (_floatbox.hasClass('visiable')){
      if($(window).width() <= 767)
            _floatbox.animate({"right":"-319px"}, {duration: 300}).removeClass('visiable');
            else
           _floatbox.animate({"right":"-319px"}, {duration: 300}).removeClass('visiable');   
        }else{
           _floatbox.animate({"right":"0px"},  {duration: 300}).addClass('visiable');
        }
  });
  
  //Effect on Scroll
  $(window).scroll(function(){
    if(_scroll){
      _floatbox.animate({"top": "30px"},{duration: 300});
      _scroll = false;
    }
    if(_timer !== false){ clearTimeout(_timer); }           
      _timer = setTimeout(function(){_scroll = true; 
      _floatbox.animate({"top": "10px"},{easing: "linear"}, {duration: 500});}, 400); 
  });
  
  
  
    
  
});
</script>

<script type="text/javascript">
 
$('document').ready(function(){

if($(window).width() <= 767)
  $('#contact_form').attr('style', 'right: -319px !important;');
   else
     $('#contact_form').attr('style', 'right: -319px !important;');

$(window).resize(function() {
   if($(window).width() <= 767)
  $('#contact_form').attr('style', 'right: -319px !important;');
   else
     $('#contact_form').attr('style', 'right: -319px !important;');
});



});

</script>
    <!-- contact form start -->
<div class="floating-form" id="contact_form">
<div class="contact-opener">Feedback</div>
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <div class="floating-form-heading">We'd like your feedback!</div>
    <div id="contact_results"></div>
    <div id="contact_body">
        <form id="feedback" method="post" action="{{url('/feedback')}}">
          {{csrf_field()}}
        <label><span>Name <span class="required">*</span></span>
          <input type="text" name="name" id="name" required="true" class="input-field">
        </label>
        <label><span>Email <span class="required">*</span></span>
          <input type="email" name="email" id="email" required="true" class="input-field">
        </label>
        <label><span>Phone <span class="required">*</span></span>
          <input type="text" name="phone1" id="phone1" maxlength="2" placeholder="+91" required="true" class="tel-number-field">
          —<input type="text" name="phone2" id="phone2" maxlength="10" required="true" class="tel-number-field long">
          <p id="phone2_err" class="text-danger">Number should be 10 digit</p>
        </label>
        <label for="subject"><span>Profile <span class="required">*</span></span>
            <select name="subject" id="subject" class="select-field">
              <option value="" selected="selected">Select</option>
                <option value="Journalist">Journalist</option>
                <option value="Customer">Customer</option>
                <option value="Government official">Government official</option>
                <option value="Student">Student</option>
                <option value="Job seeker">Job seeker</option>
                <option value="otherProfile">Other</option>
            </select>
        </label>
          <label for="field5"><span>Comments <span class="required">*</span></span>
          <textarea name="message" id="message" class="textarea-field" required="true"></textarea>
        </label>
        <label>
          <span>&nbsp;</span><button class="btn btn-danger" id="feedbackbtn" type="submit">Submit</button>
        </label>
       
        
        </form>
    </div>
</div>
</div>
  
<!-- feedback form end -->
<!-- End Header  -->
<script>
  $(document).ready(function(){
    $('#phone2_err').hide();
    $cf = $('#phone2');
    $cf.blur(function(e){
        phone = $(this).val();
        phone = phone.replace(/[^0-9]/g,'');
        if (phone.length != 10)
        {
            $('#phone2_err').show();
            $('#phone2').val('');
            $('#phone2').focus();

        }else{
          $('#phone2_err').hide();
        }
    });
 });

// $(document).ready(function(){
//            $.ajaxSetup({
//               headers: {
//                   'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//               }
//             });
//           $('#feedbackbtn').on('click',function (e) {
//                e.preventDefault();
//                 var name = $('#name').val();
//                 var email = $('#email').val();
//                 var phone1 = $('#phone1').val();
//                 var phone2 = $('#phone2').val();
//                 var subject = $('#subject').val();
//                 var message = $('#message').val();
              
//               $.ajax({
//                 type: 'POST',
//                 url: '/feedback',
//                 data: {name: name, email: email,phone1: phone1,phone2:phone2,subject:subject,message:message},
//                 success: function (data) {
//                     confirm('Are You Sure');
//                     $('#feedback')[0].reset();
//                   }
//               });
//            });
        // });
  
    </script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48209472-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>