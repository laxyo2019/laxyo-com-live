
    <div class="top_head">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-7">
            <ul class="top_contact">
              <li class="t_phone"><p>{{ get_site_val('topnav_phone') }}</p></li>
              {{-- <li class="t_mail"><p>{{ get_site_val('topnav_email') }}</p></li> --}}
            </ul>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12">
            <a href="{{url('/vendor-registration')}}" class="pull-right vendor">
              <i class="fa fa-user"></i> &nbsp;Vendor Registration
            </a> 
             <a href="{{url('careers')}}" class="vendor">
              <i class="fa fa-plus" aria-hidden="true"></i> &nbsp;Career
            </a>
            
          </div>
          <div class="col-lg-2 col-md-2 col-sm-12">
            <ul class="social_media">
              <li><a href="https://www.facebook.com/laxyoGroup/" data-placement="bottom" data-toggle="tooltip" title="Facebook" class="fa fa-facebook">Facebbok</a></li>
              <li><a href="https://twitter.com/LaxyoGroup" data-placement="bottom" data-toggle="tooltip" class="fa fa-twitter" title="Twitter">Twitter</a></li>
              <li><a href="https://in.linkedin.com/in/laxyo-group-21242a118" data-placement="bottom" data-toggle="tooltip" class="fa fa-linkedin" title="Linkedin">Linkedin</a></li>
              
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Header -->
    <header class="header"> <!-- Static navbar -->
      <div class="hed affix-top">
        <div class="container">
          <div class="row">   
            <div class="col-lg-2 col-md-2 col-sm-12">
              <div id="mobile-navigation"> 
                <a href="#menu" class="menu-trigger"> 
                  <i class="fa fa-bars"></i> 
                </a> 
              </div>

              <div class="navbar_brand"> <a href="http://www.laxyo.com"><img alt="laxyo logo" src="{{ asset('images/laxyo-logo.png') }}"></a> </div>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 pull-right">
              <nav id="navigation" class="menu">
                <ul id="responsive">
                  <li class="active">
                  <a href="{{url('/')}}">Home</a>
                  </li>
                  <li><a href="{{url('/about')}}">About</a></li>
                  <li><a href="{{url('laxyo-group-companies')}}">Laxyo Group Companies<span class="marker"><i class="fa fa-angle-down"></i></span></a>
                    <div class="megamenu rew">
                      <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <div class="title_wmm">
                            <img src="{{ asset('images/laxyo-group-companies.jpg')}}" alt="laxyo group companies">
                          </div>
                         </div>

                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <div class="title_wmm">
                            <h3>Our Group of Comapnies</h3>
                          </div>

                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="tpl2">
                                <ul class="popular_posts_list">

                                  <li> <span> <a target="_blank" href="http://www.laxyofinance.com/" class="post-img"> 

<img src="{{asset('images/laxyo-finance-limited.jpg')}}" alt="laxyo finance limited"> <span class="overlay"></span> </a> </span>

                                    <p class="wrap"> <a class="rp_title" target="_blank" href="http://www.laxyofinance.com/">Laxyo Finance Limited</a> <a target="_blank" href="http://www.laxyofinance.com/"><small class="rp_date"><i>www.laxyofinance.com</i></small></a> </p>
                                  </li>

                                  <li> <span> <a target="_blank" href="http://www.laxyosolutionsoft.com/" class="post-img"> 
                                  <img src="{{asset('images/Laxyo-SolutionSoft.jpg')}}" alt="Laxyo SolutionSoft"> <span class="overlay"></span> </a> </span>
                                    <p class="wrap"> <a target="_blank" href="http://www.laxyosolutionsoft.com/" class="rp_title">Laxyo Solution Soft Pvt. Ltd.</a> <a href="http://www.laxyosolutionsoft.com/" target="_blank"><small class="rp_date"><i>www.laxyosolutionsoft.com</i></small></a> </p>
                                  </li>
                                  
                                  <li> <span> <a target="_blank" href="http://www.apnagps.com/" class="post-img"> 
<img src="{{asset('images/apnagps.jpg')}}" alt="apnagps"> <span class="overlay"></span> </a> </span>
                                    <p class="wrap"> <a target="_blank" href="http://www.apnagps.com/" class="rp_title">APNA GPS - The Tracker</a> <a href="http://www.apnagps.com/" target="_blank"><small class="rp_date"><i>www.apnagps.com</i></small></a> </p>
                                  </li>
                                  
                                  <li> <span> <a target="_blank" href="http://www.advocatemail.com/" class="post-img"> <img src="{{asset('images/advocatemail.jpg')}}" alt="advocatemail"> <span class="overlay"></span> </a> </span>
                                    <p class="wrap"> <a target="_blank" href="http://www.advocatemail.com/" class="rp_title">Advocate Mail</a> <a href="http://www.advocatemail.com/" target="_blank"><small class="rp_date"><i>www.advocatemail.com</i></small></a> </p>
                                  </li>

                                  <li> <span> <a target="_blank" href="http://www.lapinkcafe.com/" class="post-img"> 
<img src="{{asset('images/lapinkcafe-icon.jpg')}}" alt="lapinkcafe"> <span class="overlay"></span> </a> </span>
                                    <p class="wrap"> <a target="_blank" href="http://www.lapinkcafe.com/" class="rp_title">La' Pink Cafe</a> <a href="http://www.lapinkcafe.com/" target="_blank"><small class="rp_date"><i>www.lapinkcafe.com</i></small></a> </p>
                                  </li>
                                </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="tpl2">
                              <ul class="popular_posts_list">
                              	  <li> <span> <a target="_blank" href="http://www.yolaxinfra.com/" class="post-img"> 
<img src="{{asset('images/yolax.jpg')}}" alt="yolax"> <span class="overlay"></span> </a> </span>
                                    <p class="wrap"> <a target="_blank" href="http://www.yolaxinfra.com/" class="rp_title">Yolax Infranergy Pvt. Ltd.</a> <a href="http://www.yolaxinfra.com/" target="_blank"><small class="rp_date"><i>www.yolaxinfra.com</i></small></a> </p>
                                  </li>
                                  <li> <span> <a target="_blank" href="http://lakshyainternationalschool.org/" class="post-img"> 
<img src="{{ asset('images/lakshya-international-school.jpg') }}" alt="lakshya international school"> <span class="overlay"></span> </a> </span>
                                    <p class="wrap"> <a target="_blank" href="http://lakshyainternationalschool.org/" class="rp_title">Lakshya International School</a> <a href="http://lakshyainternationalschool.org/" target="_blank"><small class="rp_date"><i>www.lakshyainternationalschool.org</i></small></a> </p>
                                  </li>    
                                  <li> <span> <a target="_blank" href="http://www.discountbrandfactory.com/" class="post-img"> <img src="{{asset('images/discount-brand-factory.jpg')}}" alt="discount brand factory"> <span class="overlay"></span> </a> </span>
                                    <p class="wrap"> <a target="_blank" href="http://www.discountbrandfactory.com/" class="rp_title">Discount Brand Factory</a> <a href="http://www.discountbrandfactory.com/" target="_blank"><small class="rp_date"><i>www.discountbrandfactory.com</i></small></a> </p>
                                  </li>                       
                                  <li> <span> <a target="_blank" href="http://www.maagayatrihospital.org/" class="post-img"> <img src="{{asset('images/maa-gayatri-hospital.jpg')}}" alt="maa gayatri hospital"> <span class="overlay"></span> </a> </span>
                                    <p class="wrap"> <a target="_blank" href="http://www.maagayatrihospital.org/" class="rp_title">Maa Gayatri Hospital</a> <a href="http://www.maagayatrihospital.org/" target="_blank"><small class="rp_date"><i>www.maagayatrihospital.org</i></small> </a></p>
                                  </li>
                                  <li> <span> <a target="_blank" href="#" class="post-img"> 
            <img src="{{asset('images/apnasolar-icon.jpg')}}" alt="apnasolar"> <span class="overlay"></span> </a> </span>
                                    <p class="wrap"> <a target="_blank" href="http://www.apnasolar.in/" class="rp_title">Apna Solar</a> <a href="http://www.apnasolar.in/" target="_blank"><small class="rp_date"><i>www.apnasolar.in</i></small></a> </p>
                                  </li>
                                </ul>
                            </div>
                          </div>
                          </div>
                          <!-- he wrap --> 
                        </div>
                    </div>
                  </li>

                  <li><a href="{{url('services')}}">Services<span class="marker"><i class="fa fa-angle-down"></i></span></a>
                    <div class="megamenu rew">
                      <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <div class="title_wmm">
       {{--  <img src="images/laxyo-services.jpg" alt="laxyo services"> --}}
        <img src="{{ asset('images/laxyo-services.jpg')}}" alt="laxyo group companies">
                          </div>
                         </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <div class="title_wmm">
                            <h3>Services We Offered</h3>
                          </div>
                          <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="tpl2">
                              <ul>
                                <li>
                                  <span><a href="{{url('/railway-contractors')}}"><i class="fa fa-angle-right"></i> &nbsp;Railway Contractors</a></span>
                                </li>
                               
                               <li>
                                  <span><a href="{{url('/mining-services')}}"><i class="fa fa-angle-right"></i> &nbsp;Mining Services</a></span>
                                </li>
                                
                                <li>
                                  <span><a href="{{url('/renewable-energy-system')}}"><i class="fa fa-angle-right"></i> &nbsp;Renewable Energy System</a></span>
                                </li>
                                <li>
                                  <span><a href="{{url('/amphibious-excavator')}}"><i class="fa fa-angle-right"></i> &nbsp;Amphibious Excavator</a></span>
                                </li>
                                <li>
                                  <span><a href="{{url('/pway-signaling-and-telecom-material')}}"><i class="fa fa-angle-right"></i> &nbsp;P Way Material</a></span>
                                </li>
                                 
                              </ul>
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-6 col-xs-12">

                            <div class="tpl2">
                              <ul>
                              	 <li>
                                  <span><a href="{{url('/operation-and-maintenance-contractors')}}"><i class="fa fa-angle-right"></i> &nbsp;Operation and Maintenance Contractors</a></span>
                                </li>
                                
                                 <li>
                                  <span><a href="{{url('/dredging-and-reclamation')}}"><i class="fa fa-angle-right"></i> &nbsp;Dredging &amp; Reclamation</a></span>
                                </li>

                                <li>
                                  <span><a href="{{url('/construction-equipment-rental-services')}}"><i class="fa fa-angle-right"></i> &nbsp;Rental Services</a></span>
                                </li>

                                <li>
                                  <span><a href="{{url('/material-handling-contractor')}}"><i class="fa fa-angle-right"></i> &nbsp;Material Handling Contractor</a></span>
                                </li>

                              </ul>
                            </div>
                          </div>
                          </div>
                          <!-- he wrap --> 
                        </div>
                    </div>
                  </li>

                  <li><a href="javascript:void(0)">Our Products<span class="marker"><i class="fa fa-angle-down"></i></span></a>
                    <div class="megamenu rew">
                      <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <div class="title_wmm">
                            <img src="images/laxyo-product.jpg" alt="laxyo product">
                          </div>
                         </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <div class="title_wmm">
                            <h3><a href="http://www.apnagps.com/">APNA GPS - The Tracker</a></h3>
                          </div>
                          <div class="tpl2">
                            
                            <p>ApnaGPS is a vehicle tracking system developed and designed by Laxyo group, included with varied features concerned towards the safety of 'vehicles/humans' and created as to track and assure safety for home based vehicles, personal and commercial vehicles. ApnaGPS tracker has the capability to track any single or fleet of vehicles along with safety features as to provide you a real time vehicle tracking.</p>
                            <a target="_blank" href="http://www.apnagps.com/">Know More</a>
                          </div>
                          <!-- he wrap --> </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <div class="title_wmm">
                            <h3><a href="http://www.discountbrandfactory.com/">Discount Brand Factory</a></h3>
                          </div>
                          <div class="tpl2">
                            <p>DBF – Discount brand factory is the venture of Laxyo Group. Run and managed by the team of experienced professionals from the Indian retail management system working in the direction to serve quality shopping while it comes to Indian market. Discount Brand Factory(DBF) offers revolutionizing value shopping by offering branded products at discounted price. Buy the products at the real value of money.</p>
                            <a target="_blank" href="http://www.discountbrandfactory.com/">Know More</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li><a href="{{url('/clients')}}">Clients</a></li>
                  <li><a href="{{url('/infrastructure')}}">Infrastructure</a></li>
                  <li><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <script type="text/javascript">
		$(document).ready(function() {
		  $(".menu-trigger").click(function () {
		    $(".menu,#responsive").toggleClass("open");
		});

		});

	</script>
	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/983c841b4568323151722b812/d7ea3f42db66c2e6d4db7ff51.js");</script>