<!DOCTYPE html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <title>Time research & innovation</title>
      <meta name="description" content="" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
      <!--=== Reset Css ===-->
      <link rel="stylesheet" href="{{asset('backend')}}/css/normalize.css" />
      <!--=== Font family Css ===-->
      <link
         href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
         rel="stylesheet"
         />
      <!--=== Bootstrap 4===-->
      <link rel="stylesheet" href="{{asset('backend')}}/css/bootstrap.min.css" />
      <!--=== Fontawesome icon 5.9 ===-->
      <link
         rel="stylesheet"
         type="text/css"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
         />
      <!--=== Owl carousel 2.3.4===-->
      <link rel="stylesheet" href="{{asset('backend')}}/css/plugin/owl.carousel.min.css" />
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
         />
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
         />
      <link rel="stylesheet" href="{{asset('backend')}}/css/plugin/owl.theme.default.min.css" />
      <!--=== Magnific PopUp ===-->
      <link rel="stylesheet" href="{{asset('backend')}}/css/plugin/magnific-popup.css" />
      <!--=== Main Css ===-->
      <link rel="stylesheet" href="{{asset('backend')}}/css/style.css" />
      <link rel="stylesheet" href="{{asset('backend')}}/css/blog-dashboard.css" />
      <!--=== Responsive Css ===-->
      <link rel="stylesheet" href="{{asset('backend')}}/css/responsive.css" />
      <script src="{{asset('backend')}}/js/vendor/modernizr-2.8.3.min.js"></script>
   </head>
   <body class="services-dashboard">
      <!--====== Header Start ======-->
      <header id="header">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-xl">
               <div class="header-left">
                  <div class="headerLogo">
                     <a class="navbar-brand" href="#">
                     <img src="{{asset('backend')}}/img/logo-top.png" alt="our logo" />
                     </a>
                     <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search" />
                        <button type="submit"><i class="fa fa-search"></i></button>
                     </form>
                  </div>
               </div>
               <button class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarTogglerDemo02"
                  aria-controls="navbarTogglerDemo02"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                  >
               <span class="navbar-toggler-icon">
               <i class="fas fa-bars"></i>
               </span>
               </button>
               <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <div class="headerMenu research-header ml-auto">
                     <ul class="nav navbar-right top-nav navbar-nav mt-2 mt-lg-0">
                        <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img src="{{asset('backend')}}/img/service/mesage.png" alt="" class="admin-img">
                           </a>
                        </li>
                        <li>
                           <a href="#" class="icon-info">
                              <img src="{{asset('backend')}}/img/service/notifications-button.png" alt="" class="admin-img">
                           </a>
                        </li>
                        <li class="dropdown">
                           <a href="#" data-toggle="dropdown">
                           {{ Auth::user()->name }}
                           <img src="{{asset('backend')}}/img/service/admin.png" alt="" class="admin-img">
                           <b class="fa fa-angle-down"></b>
                           </a>
                           <ul class="dropdown-menu">
                              <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                              <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                              <li class="divider"></li>
                              <li><a class="btn btn-rounded" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();"><i class="fa fa-fw fa-power-off"></i> {{ __('Logout') }}
                                      </a>
                                </li>
                           </ul>
                        </li>
                     </ul>
                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                     <!-- <div class="login" aria-labelledby="navbarDropdown">
                    <a class="btn btn-rounded" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </div> -->
                  </div>
               </div>
            </nav>
         </div>
      </header>
      <!--====== Header End   ======-->
      <!--====== Register   Start======-->
      <section class="section-padding content-top-space">
         <div class="container">
            <div class="section-heading text-center">
               <h2>
                  Covid-19 Research Group
                  <span class="bar1"></span>
                  <span class="bar2"></span>
                  <span class="bar3"></span>
               </h2>
            </div>
         </div>
      </section>
      <div class="container">
         <div class="blog_carousel_container1 row">
            <div class="services-carousel1 owl-carousel owl-theme">
               <div class="single_research_card first">
                  <div class="avater1 bg-1">
                     <div class="circle-das text-center">
                        <img src="{{asset('backend')}}/img/service/date.png" alt="" class="text-center" />	
                     </div>
                  </div>
                  <div class="services-single_research_card_info">
                     <div>
                        <h4>Training</h4>
                     </div>
                     <div>
                        <h3 style="color: #0E7AE6;">2</h3>
                     </div>
                  </div>
               </div>
               <div class="single_research_card">
                  <div class="avater1 bg-2">
                     <div class="circle-das text-center">
                        <img src="{{asset('backend')}}/img/service/project.png" alt="" class="text-center" />	
                     </div>
                  </div>
                  <div class="services-single_research_card_info">
                     <div>
                        <h4>Project</h4>
                     </div>
                     <div>
                        <h3>24</h3>
                     </div>
                  </div>
               </div>
               <div class="single_research_card">
                  <div class="avater1 bg-3">
                     <div class="circle-das text-center">
                        <img src="{{asset('backend')}}/img/service/recharch.png" alt="" class="text-center" />	
                     </div>
                  </div>
                  <div class="services-single_research_card_info">
                     <div>
                        <h4>Research Paper</h4>
                     </div>
                     <div>
                        <h3>2</h3>
                     </div>
                  </div>
               </div>
               <div class="single_research_card">
                  <div class="avater1">
                     <div class="circle-das text-center">
                        <img src="{{asset('backend')}}/img/ceo.png" alt="" class="text-center" />	
                     </div>
                  </div>
                  <div class="services-single_research_card_info">
                     <div>
                        <h4>John Doe</h4>
                     </div>
                     <div>
                        <h3>2</h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
<!--       <div class="side_mini_menu">
         <i onclick="showSideMenu()" class="fa fa-bars" aria-hidden="true"></i>
      </div>
      <div></div> -->
      <div class=" row">
         <div class="col-md-12 col-lg-2">
            <div class="menu_item">
               <div class="sidenav" id="sidenav_scrollbar">
                  <a class="single_sidebar_item" href="#">
                  <img src="{{asset('backend')}}/img/service/menu/home.png" alt="" />
                  <span>Home</span>
                  </a>
                  <a class="single_sidebar_item" href="#">
                  <img src="{{asset('backend')}}/img/service/menu/mail.png" alt="" />
                  <span>Message</span>
                  </a>
                  <a class="single_sidebar_item" href="#" data-toggle="dropdown">
                  <img src="{{asset('backend')}}/img/service/menu/cv-link.png" alt="" />
                  <span class="mr-5">Cv Clinic</span>
                  <b class="fa fa-angle-down"></b>

                  </a>
                  <div class="dropdown-menu">
                     <li><a href="#">Sevice</a></li>
                     <li><a href="#">Sevice</a></li>
                  </div>
                  <a class="single_sidebar_item" href="#">
                  <img src="{{asset('backend')}}/img/service/menu/mars.png" alt="" />
                  <span>Mars</span>
                  </a>

                  <a class="single_sidebar_item" href="{{route('all.group')}}">
                  <img src="{{asset('backend')}}/img/service/training2.png" alt="" />
                  <span>Create Group</span>
                  </a>
               </div>
            </div>
         </div>

        <div class="research_group_main_content  col-md-12 col-lg-10">
        	<div class="row">
        		<div class="col-lg-12 ">
        			<div class="top-recharge">
        				<div class="d-flex-small">
        					<div class="bord_icon">
		                  <a class="d-flex align-items-center" href="#">
		                  <img src="{{asset('backend')}}/img/service/menu/home.png" alt="" />
		                  <span class="mt-2 ml-3">Home</span>
		                  </a>
		               </div>
		               <div class="bord_icon">
		                  <a class="d-flex align-items-center" href="#">
		                  <img src="{{asset('backend')}}/img/dashboard.png" alt="" />
		                  <span class="mt-2 ml-3">Dashboard</span>
		                  </a>
		               </div>
		               <div class="bord_icon">
		                  <a class="d-flex align-items-center" href="#">
		                  <img src="{{asset('backend')}}/img/service/training2.png" alt="" />
		                  <span class="mt-2 ml-3">Training</span>
		                  </a>
		               </div>
                        <div class="text-right country-none">
                        <div class="select-country">
                            <img src="{{asset('backend')}}/img/service/menu/language.png" alt="" />
                        <select class="goog-te-combo" aria-label="Language Translate Widget">
                       
                           <option value=""> Select Language</option>
                           <option value="af">Afrikaans</option>
                           <option value="sq">Albanian</option>
                           <option value="am">Amharic</option>
                           <option value="ar">Arabic</option>
                           <option value="hy">Armenian</option>
                           <option value="az">Azerbaijani</option>
                           <option value="eu">Basque</option>
                           <option value="be">Belarusian</option>
                           <option value="bn">Bengali</option>
                           <option value="bs">Bosnian</option>
                           <option value="bg">Bulgarian</option>
                           <option value="ca">Catalan</option>
                           <option value="ceb">Cebuano</option>
                           <option value="ny">Chichewa</option>
                           <option value="zh-CN">Chinese (Simplified)</option>
                           <option value="zh-TW">Chinese (Traditional)</option>
                           <option value="co">Corsican</option>
                           <option value="hr">Croatian</option>
                           <option value="cs">Czech</option>
                           <option value="da">Danish</option>
                           <option value="nl">Dutch</option>
                           <option value="eo">Esperanto</option>
                           <option value="et">Estonian</option>
                           <option value="tl">Filipino</option>
                           <option value="fi">Finnish</option>
                           <option value="fr">French</option>
                           <option value="fy">Frisian</option>
                           <option value="gl">Galician</option>
                           <option value="ka">Georgian</option>
                           <option value="de">German</option>
                           <option value="el">Greek</option>
                           <option value="gu">Gujarati</option>
                           <option value="ht">Haitian Creole</option>
                           <option value="ha">Hausa</option>
                           <option value="haw">Hawaiian</option>
                           <option value="iw">Hebrew</option>
                           <option value="hi">Hindi</option>
                           <option value="hmn">Hmong</option>
                           <option value="hu">Hungarian</option>
                           <option value="is">Icelandic</option>
                           <option value="ig">Igbo</option>
                           <option value="id">Indonesian</option>
                           <option value="ga">Irish</option>
                           <option value="it">Italian</option>
                           <option value="ja">Japanese</option>
                           <option value="jw">Javanese</option>
                           <option value="kn">Kannada</option>
                           <option value="kk">Kazakh</option>
                           <option value="km">Khmer</option>
                           <option value="rw">Kinyarwanda</option>
                           <option value="ko">Korean</option>
                           <option value="ku">Kurdish (Kurmanji)</option>
                           <option value="ky">Kyrgyz</option>
                           <option value="lo">Lao</option>
                           <option value="la">Latin</option>
                           <option value="lv">Latvian</option>
                           <option value="lt">Lithuanian</option>
                           <option value="lb">Luxembourgish</option>
                           <option value="mk">Macedonian</option>
                           <option value="mg">Malagasy</option>
                           <option value="ms">Malay</option>
                           <option value="ml">Malayalam</option>
                           <option value="mt">Maltese</option>
                           <option value="mi">Maori</option>
                           <option value="mr">Marathi</option>
                           <option value="mn">Mongolian</option>
                           <option value="my">Myanmar (Burmese)</option>
                           <option value="ne">Nepali</option>
                           <option value="no">Norwegian</option>
                           <option value="or">Odia (Oriya)</option>
                           <option value="ps">Pashto</option>
                           <option value="fa">Persian</option>
                           <option value="pl">Polish</option>
                           <option value="pt">Portuguese</option>
                           <option value="pa">Punjabi</option>
                           <option value="ro">Romanian</option>
                           <option value="ru">Russian</option>
                           <option value="sm">Samoan</option>
                           <option value="gd">Scots Gaelic</option>
                           <option value="sr">Serbian</option>
                           <option value="st">Sesotho</option>
                           <option value="sn">Shona</option>
                           <option value="sd">Sindhi</option>
                           <option value="si">Sinhala</option>
                           <option value="sk">Slovak</option>
                           <option value="sl">Slovenian</option>
                           <option value="so">Somali</option>
                           <option value="es">Spanish</option>
                           <option value="su">Sundanese</option>
                           <option value="sw">Swahili</option>
                           <option value="sv">Swedish</option>
                           <option value="tg">Tajik</option>
                           <option value="ta">Tamil</option>
                           <option value="tt">Tatar</option>
                           <option value="te">Telugu</option>
                           <option value="th">Thai</option>
                           <option value="tr">Turkish</option>
                           <option value="tk">Turkmen</option>
                           <option value="uk">Ukrainian</option>
                           <option value="ur">Urdu</option>
                           <option value="ug">Uyghur</option>
                           <option value="uz">Uzbek</option>
                           <option value="vi">Vietnamese</option>
                           <option value="cy">Welsh</option>
                           <option value="xh">Xhosa</option>
                           <option value="yi">Yiddish</option>
                           <option value="yo">Yoruba</option>
                           <option value="zu">Zulu</option>
                        </select>
                        </div>
                  </div>
                  

        				</div>
                     <div class="text-right country-sm">
                        <div class="select-country">
                            <img src="{{asset('backend')}}/img/service/menu/language.png" alt="" />
                        <select class="goog-te-combo" aria-label="Language Translate Widget">
                       
                           <option value=""> Select Language</option>
                           <option value="af">Afrikaans</option>
                           <option value="sq">Albanian</option>
                           <option value="am">Amharic</option>
                           <option value="ar">Arabic</option>
                           <option value="hy">Armenian</option>
                           <option value="az">Azerbaijani</option>
                           <option value="eu">Basque</option>
                           <option value="be">Belarusian</option>
                           <option value="bn">Bengali</option>
                           <option value="bs">Bosnian</option>
                           <option value="bg">Bulgarian</option>
                           <option value="ca">Catalan</option>
                           <option value="ceb">Cebuano</option>
                           <option value="ny">Chichewa</option>
                           <option value="zh-CN">Chinese (Simplified)</option>
                           <option value="zh-TW">Chinese (Traditional)</option>
                           <option value="co">Corsican</option>
                           <option value="hr">Croatian</option>
                           <option value="cs">Czech</option>
                           <option value="da">Danish</option>
                           <option value="nl">Dutch</option>
                           <option value="eo">Esperanto</option>
                           <option value="et">Estonian</option>
                           <option value="tl">Filipino</option>
                           <option value="fi">Finnish</option>
                           <option value="fr">French</option>
                           <option value="fy">Frisian</option>
                           <option value="gl">Galician</option>
                           <option value="ka">Georgian</option>
                           <option value="de">German</option>
                           <option value="el">Greek</option>
                           <option value="gu">Gujarati</option>
                           <option value="ht">Haitian Creole</option>
                           <option value="ha">Hausa</option>
                           <option value="haw">Hawaiian</option>
                           <option value="iw">Hebrew</option>
                           <option value="hi">Hindi</option>
                           <option value="hmn">Hmong</option>
                           <option value="hu">Hungarian</option>
                           <option value="is">Icelandic</option>
                           <option value="ig">Igbo</option>
                           <option value="id">Indonesian</option>
                           <option value="ga">Irish</option>
                           <option value="it">Italian</option>
                           <option value="ja">Japanese</option>
                           <option value="jw">Javanese</option>
                           <option value="kn">Kannada</option>
                           <option value="kk">Kazakh</option>
                           <option value="km">Khmer</option>
                           <option value="rw">Kinyarwanda</option>
                           <option value="ko">Korean</option>
                           <option value="ku">Kurdish (Kurmanji)</option>
                           <option value="ky">Kyrgyz</option>
                           <option value="lo">Lao</option>
                           <option value="la">Latin</option>
                           <option value="lv">Latvian</option>
                           <option value="lt">Lithuanian</option>
                           <option value="lb">Luxembourgish</option>
                           <option value="mk">Macedonian</option>
                           <option value="mg">Malagasy</option>
                           <option value="ms">Malay</option>
                           <option value="ml">Malayalam</option>
                           <option value="mt">Maltese</option>
                           <option value="mi">Maori</option>
                           <option value="mr">Marathi</option>
                           <option value="mn">Mongolian</option>
                           <option value="my">Myanmar (Burmese)</option>
                           <option value="ne">Nepali</option>
                           <option value="no">Norwegian</option>
                           <option value="or">Odia (Oriya)</option>
                           <option value="ps">Pashto</option>
                           <option value="fa">Persian</option>
                           <option value="pl">Polish</option>
                           <option value="pt">Portuguese</option>
                           <option value="pa">Punjabi</option>
                           <option value="ro">Romanian</option>
                           <option value="ru">Russian</option>
                           <option value="sm">Samoan</option>
                           <option value="gd">Scots Gaelic</option>
                           <option value="sr">Serbian</option>
                           <option value="st">Sesotho</option>
                           <option value="sn">Shona</option>
                           <option value="sd">Sindhi</option>
                           <option value="si">Sinhala</option>
                           <option value="sk">Slovak</option>
                           <option value="sl">Slovenian</option>
                           <option value="so">Somali</option>
                           <option value="es">Spanish</option>
                           <option value="su">Sundanese</option>
                           <option value="sw">Swahili</option>
                           <option value="sv">Swedish</option>
                           <option value="tg">Tajik</option>
                           <option value="ta">Tamil</option>
                           <option value="tt">Tatar</option>
                           <option value="te">Telugu</option>
                           <option value="th">Thai</option>
                           <option value="tr">Turkish</option>
                           <option value="tk">Turkmen</option>
                           <option value="uk">Ukrainian</option>
                           <option value="ur">Urdu</option>
                           <option value="ug">Uyghur</option>
                           <option value="uz">Uzbek</option>
                           <option value="vi">Vietnamese</option>
                           <option value="cy">Welsh</option>
                           <option value="xh">Xhosa</option>
                           <option value="yi">Yiddish</option>
                           <option value="yo">Yoruba</option>
                           <option value="zu">Zulu</option>
                        </select>
                        </div>
                  </div>


		            </div>
		            

        		</div>
        	</div>
        	<div class="row">
        		<div class="col-sm-12 col-md-12 col-lg-10">
		            <div class="table-content my-5">
		               <div class="plus-right">
                        <div class="">
                         <div class="modal-popup edit">


            <div class="center text-right">
              <button data-toggle="modal" data-target="#squarespaceModal" class=" center-block">
                <i class="fa fa-plus" aria-hidden="true" style="font-size: 20px;"></i>

            </button>
            </div>


            <!-- line modal -->
             <div class="modal fade content-top-space mt-5" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                  </div>
                  <div class="modal-body">
                    <!-- content goes here -->
                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <input type="file" id="exampleInputFile">
                        <p class="help-block">Example block-level help text here.</p>
                      </div>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Check me out
                        </label>
                      </div>
                      <button type="submit" class="btn btn-default submit">Submit</button>
                    </form>

                  </div>
                  <div class="modal-footer">
                    <div class="btn-group btn-group-justified" role="group" aria-label="group button">
                      <div class="btn-group" role="group">
                        <button type="button" class="btn btn-default" data-dismiss="modal" role="button">Close</button>
                      </div>
                      <div class="btn-group btn-delete hidden" role="group">
                        <button type="button" id="delImage" class="btn btn-default btn-hover-red" data-dismiss="modal" role="button">Delete</button>
                      </div>
                      <div class="btn-group" role="group">
                        <button type="button" id="saveImage" class="btn btn-default btn-hover-green" data-action="save" role="button">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             </div>
             </div>
            </div>
            
            </div>
          @yield("content")
		            </div>
		           
	            </div>
	            <div class="col-md-12 col-lg-2 my-5">
			        <div class="research_group_right_sidebar"   id="right_sidebar_scroll">
			            <div class="right_sidebar_sponsoer">
			               <h2 class="box_shadow">Sponsored</h2>
			               <div class="single_sponsoer box_shadow">
			                  <img src="{{asset('backend')}}/img/Gold_Card.png" alt="our logo" />
			                  <p>
			                     American Express <sup><i class="far fa-registered"></i></sup>
			                  </p>
			               </div>
			            </div>
			        </div>
		        </div>
        		
        	</div>
        </div>
      </div>


    


<!--         <section class="section3">
            <div class="hiuser">
                <h3>Welcome back <span id="name-user">User</span>!</h3>
                <p>Yesterday I was clever, so I wanted to change the world. Today I am wise, so I am changing myself.</p>
            </div>
            <div class="flex-container">
              <a href=""type="button" name="dang ky">Registration</a>
              <div class="member">
                <div class="delete">
                  <div class="overplay"></div>
                  <div class="choice-delete">
                      <i class="fas fa-times"></i>
                      <h1>Do you delete?</h1>
                      <button type="button" name="cancel-delete" class="btn">Cancel</button>
                      <button type="button" name="yes-delete" class="btn">Delete</button>
                  </div>
                </div>
                <table class="content-member">
                  <thead>
                      <tr class="name-row">
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Email</th>
                          <th>Account</th>
                          <th>Password</th>
                          <th></th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="edit">Tran Tri Thanh</td>
                      <td class="edit">123456789</td>
                      <td class="edit">tran@gmail.com</td>
                      <td class="edit">ttt</td>
                      <td class="edit">123456</td>
                      <td class="edit-save">
                        <button type="button" name="edit" class="edit-member">Edit</button>
                        <button type="button" name="save" class="save-member">Save</button>
                      </td>
                      <td><button type="button" name="delete" class="delete-member">Delete</button></td>
                    </tr>
                    <tr>
                      <td class="edit">Tran Tri Thanh</td>
                      <td class="edit">123456789</td>
                      <td class="edit">tran@gmail.com</td>
                      <td class="edit">ttt</td>
                      <td class="edit">123456</td>
                      <td class="edit-save">
                        <button type="button" name="edit" class="edit-member">Edit</button>
                        <button type="button" name="save" class="save-member">Save</button>
                      </td>
                      <td><button type="button" name="delete" class="delete-member">Delete</button></td>
                    </tr>
                    <tr>
                      <td class="edit">Tran Tri Thanh</td>
                      <td class="edit">123456789</td>
                      <td class="edit">tran@gmail.com</td>
                      <td class="edit">ttt</td>
                      <td class="edit">123456</td>
                      <td class="edit-save">
                        <button type="button" name="edit" class="edit-member">Edit</button>
                        <button type="button" name="save" class="save-member">Save</button>
                      </td>
                      <td><button type="button" name="delete" class="delete-member">Delete</button></td>
                    </tr>
                    <tr>
                      <td class="edit">Tran Tri Thanh</td>
                      <td class="edit">123456789</td>
                      <td class="edit">tran@gmail.com</td>
                      <td class="edit">ttt</td>
                      <td class="edit">123456</td>
                      <td class="edit-save">
                        <button type="button" name="edit" class="edit-member">Edit</button>
                        <button type="button" name="save" class="save-member">Save</button>
                      </td>
                      <td><button type="button" name="delete" class="delete-member">Delete</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
        </section> -->
      <!--====== Footer Start ======-->
      <!--====== Footer End   ======-->
      <!--====== GoTop Start   ======-->
      <div class="goTop" id="goTop">
         <i class="fa fa-arrow-up"></i>
      </div>


      <!--====== goTop End   ======-->
      <!--========================file:///C:/Users/ASHIK/Downloads/blog-dashboard%20Motiur%20vai/blog-dashboard/{{asset('backend')}}/img/Group1.png== javascript ======================================-->
      <script type="text/javascript" src="{{asset('backend')}}/js/jquery-3.2.0.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
      <!--=== All Plugin ===-->
      <script type="text/javascript" src="{{asset('backend')}}/js/plugin/typed.min.js"></script>
      <script
         src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
         integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
         crossorigin="anonymous"
         ></script>
      <script
         type="text/javascript"
         src="{{asset('backend')}}/js/plugin/jquery.magnific-popup.min.js"
         ></script>
      <script
         type="text/javascript"
         src="{{asset('backend')}}/js/plugin/mixitup.min.js"
         ></script>
      <script src="{{asset('backend')}}/js/isotope.pkgd.min.js"></script>
      <script
         type="text/javascript"
         src="{{asset('backend')}}/js/plugin/owl.carousel.min.js"
         ></script>
      <!--=== All ===-->
      <script type="text/javascript" src="{{asset('backend')}}/js/main.js"></script>
      <script>
         var dropdown = document.getElementsByClassName("dropdown-btn");
         var i;
         
         for (i = 0; i < dropdown.length; i++) {
         	dropdown[i].addEventListener("click", function () {
         		this.classList.toggle("sidemenu_active");
         		var dropdownContent = this.nextElementSibling;
         		if (dropdownContent.style.display === "block") {
         			dropdownContent.style.display = "none";
         		} else {
         			dropdownContent.style.display = "block";
         		}
         	});
         }
      </script>
      <script>
         function showSideMenu() {
         	var element = document.getElementById("sidemenu");
         	element.classList.toggle("toggle_sidebar");
         }

         $("#add").on('click',function(){
    var name = $("input[name='name']").val();
    var phone = $("input[name='phone']").val();
    var email = $("input[name='email']").val();
    var account = $("input[name='account']").val();
    var password = $("input[name='password']").val();
    var markup = "<tr><td>" + name + "</td><td>" + phone + "</td><td>" + email + "</td><td>" + account + "</td><td>" + password + "</td><td><button type='button' name='edit' class='edit-member'>Edit</button><button type='button' name='save' class='save-member'>Save</button></td><td><button type='button' name='delete' class='delete-member'>Delete</button></td></tr>";
  $(".section3 .flex-container .member .fixed-new .overplay").fadeOut(500);
  $(".section3 .flex-container .member .fixed-new .new-account").fadeOut(500);
  $(".section3 .flex-container .member table tbody").append(markup);
  //edit
  $('button[name=edit]').click(function(){
    $(this).hide();
    $('td:nth-child(1)').each(function(){
      var content = $(this).html();
      $(this).html('<textarea>' + content + '</textarea>');
    });
    $('td:nth-child(2)').each(function(){
      var content = $(this).html();
      $(this).html('<textarea>' + content + '</textarea>');
    });
    $('td:nth-child(3)').each(function(){
      var content = $(this).html();
      $(this).html('<textarea>' + content + '</textarea>');
    });
    $('td:nth-child(4)').each(function(){
      var content = $(this).html();
      $(this).html('<textarea>' + content + '</textarea>');
    });
    $('td:nth-child(5)').each(function(){
      var content = $(this).html();
      $(this).html('<textarea>' + content + '</textarea>');
    });

    $('button[name=save]').show();
  });
  $('button[name=save]').click(function(){
    $('textarea:nth-child(1)').each(function(){
      var content = $(this).val();//.replace(/\n/g,"<br>");
      $(this).html(content);
      $(this).contents().unwrap();
    });
    $('textarea:nth-child(2)').each(function(){
      var content = $(this).val();//.replace(/\n/g,"<br>");
      $(this).html(content);
      $(this).contents().unwrap();
    });
    $('textarea:nth-child(3)').each(function(){
      var content = $(this).val();//.replace(/\n/g,"<br>");
      $(this).html(content);
      $(this).contents().unwrap();
    });
    $('textarea:nth-child(4)').each(function(){
      var content = $(this).val();//.replace(/\n/g,"<br>");
      $(this).html(content);
      $(this).contents().unwrap();
    });
    $('textarea:nth-child(5)').each(function(){
      var content = $(this).val();//.replace(/\n/g,"<br>");
      $(this).html(content);
      $(this).contents().unwrap();
    });
    $(this).hide();
    $('button[name=edit]').show();
  });
  //delete
  $(".section3 .flex-container .member table tbody tr td button[name='delete']").on('click',function(){
    $(this).parent().parent().remove();
  });
});
//delete
$(".section3 .flex-container .member table tbody tr td button[name='delete']").on('click',function(){
   var abc = $(this) ;
  $('.section3 .flex-container .member .delete').fadeIn(500);
  $('.section3 .flex-container .member .delete .choice-delete button[name="cancel-delete"]').on('click',function(){
    $('.section3 .flex-container .member .delete').fadeOut(500);
  });
  $('.section3 .flex-container .member .delete .choice-delete i').on('click',function(){
    $('.section3 .flex-container .member .delete').fadeOut(500);
  });
  $('.section3 .flex-container .member .delete .choice-delete button[name="yes-delete"]').on('click',function(){
    $(abc).parent().parent().remove();
    $('.section3 .flex-container .member .delete').fadeOut(500);
  });
});
//edit
$('button[name=edit]').click(function(){
  $(this).hide();
  var abc = $(this).parent().siblings(".edit");

  $(abc).each(function(){
    var content = $(this).html();
    $(this).html('<textarea>' + content + '</textarea>');
  });
  $(this).parent().find('.save-member').show();
});

$('button[name=save]').click(function(){
  $('textarea').each(function(){
    var content = $(this).val();//.replace(/\n/g,"<br>");
    $(this).html(content);
    $(this).contents().unwrap();
  });
  $(this).hide();
  $(this).parent().find('.edit-member').show();
});
      </script>
      <script type="text/javascript" src="{{asset('backend')}}/js/bootstrap.min.js"></script>
   </body>
</html>