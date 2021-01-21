
<!doctype html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Time research & innovation</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
      <!--=== Reset Css ===-->
      <link rel="stylesheet" href="{{asset('trilogy-home')}}/css/normalize.css">
      <!--=== Font family Css ===-->
      <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
      <!--=== Bootstrap 4===-->
      <link rel="stylesheet" href="{{asset('trilogy-home')}}/css/bootstrap.min.css">
      <!--=== Fontawesome icon 5.9 ===-->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
      <!--=== Owl carousel 2.3.4===-->
      <link rel="stylesheet" href="{{asset('trilogy-home')}}/css/plugin/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
      <link rel="stylesheet" href="{{asset('trilogy-home')}}/css/plugin/owl.theme.default.min.css">
      <!--=== Magnific PopUp ===-->
      <link rel="stylesheet" href="{{asset('trilogy-home')}}/css/plugin/magnific-popup.css">
      <!--=== Main Css ===-->
      <link rel="stylesheet" href="{{asset('trilogy-home')}}/css/style.css">
      <!--=== Responsive Css ===-->
      <link rel="stylesheet" href="{{asset('trilogy-home')}}/css/responsive.css">
      <script src="{{asset('trilogy-home')}}/js/vendor/modernizr-2.8.3.min.js"></script>    
   </head>
   <body>

      <!--====== Header Start ======-->
      <header id="header">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-xl">
               <div class="header-left">
                  <div class="headerLogo">
                     <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{asset('trilogy-home')}}/img/logo-top.png" alt="our logo">
                     </a>
                     <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                     </form>
                  </div>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon">
                     <i class="fas fa-bars"></i>
                  </span>
               </button>
               <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
                  <div class="headerMenu ml-auto">
                     <ul class=" navbar-nav  mt-2 mt-lg-0">
                        <li class="nav-item">
                           <a class="active" href="index.html">Home</a> 
                        </li>
                        <li>
                           <a  href="#">Who we are</a>
                           <ul class="submenu">
                              <li class="nav-item"><a  href="about.html">About Us</a></li>
                              <li class="nav-item"><a  href="mission.html">Mission & Vision</a></li>
                              <li class="nav-item"><a  href="collaborators.html">Collaborators</a></li>
                              <li class="nav-item"><a  href="team.html">Team Members</a></li>
                           </ul>
                        </li>
                        <li>
                           <a  href="#">What we do</a>
                           <ul class="submenu">
                              <li class="nav-item"><a  href="service.html">Services</a></li>
                              <li class="nav-item"><a  href="project.html">Work in Progress</a></li>
                              <li class="nav-item"><a  href="event.html">Upcoming Events</a></li>
                              <li class="nav-item"><a  href="artgallery.html">Art Gallery</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a   href="contact.html">Contact Us</a>
                        </li>
                        <li class="nav-item">
                           <a  href="testimonial.html">Testimonials</a>
                        </li>

                        <li class="nav-item">
                           <a  href="faqs.html">FAQs </a>
                        </li>
                        <li class="nav-item">
                           <a  href="career.html">Career </a>
                        </li>
                        @if (Route::has('login'))
                        <div class="login">
                        @auth
                          <a href="{{ route('login') }}" class="btn  btn-rounded">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="btn  btn-rounded">Login</a>
                        @endauth
                        </div>
                        @endif  
                         <div class="select-country">
                        <select class="goog-te-combo" aria-label="Language Translate Widget">
                           <option value="">Select Language</option>
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
                  </ul>
                  </div>
               </div>
            </nav>
         </div>
      </header>
      <!--====== Header End   ======-->
      @yield('content')


      <!--====== Footer Start ======-->
      <footer id="footer" class="py-5">
         <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-10">
                 <div class="row">
                     <div class="col-md-5 col-lg-5">
                        <div class="row">
                           <div class="col-md-5 col-lg-5 d-flex align-items-center">
                              <div class="footer-logo">
                                 <a href="index.html">
                                    <img src="{{asset('trilogy-home')}}/img/footerlogo.png" alt="our logo">
                                 </a>
                                 
                              </div>
                           </div>
                           <div class="col-md-7 col-lg-7">
                              <div class="footer-address m-10">
                                 <h4>Address</h4>
                                 <div class="main">

                                    <div class="slider slider-nav">
                                     <div> <img src="{{asset('trilogy-home')}}/img/ukn.png" alt="uk"></div>
                                     <div><img src="{{asset('trilogy-home')}}/img/bangladesh.png" alt="bd"></div>
                                     <div><img src="{{asset('trilogy-home')}}/img/usa.png" alt="usa"></div>
                                     <div><img src="{{asset('trilogy-home')}}/img/canada.png" alt="canada"></div>
                                  </div>
                                  <div class="slider slider-for">
                                    <div>
                                       <h6>United Kingdom</h6>
                                       <p>189 Foundry Lane Southampton <br>
                                          SO153JZ<br>
                                          +044 755 482 3078
                                       </p>
                                    </div>
                                    <div>
                                       <h6>Bangladesh</h6>
                                       <p>East Rampura, Khaligaon<br>
                                          Dhaka-1219<br>
                                          +880174396600
                                       </p>
                                    </div>
                                    <div>
                                       <h6>Canada</h6>
                                       <p>189 Foundry Lane Southampton <br>
                                          SO153JZ<br>
                                          +044 755 482 3078
                                       </p>
                                    </div>
                                 </div>
                              </div>
                              </div>
                          </div>
                        </div>
                     </div>
                     <div class="col-md-7 col-lg-7">
                        <div class="footer-nav">
                           <div class="footer-link">
                              <ul>
                                 <li><a href="career.html">Career</a></li>
                                 <li><a href="blog.html">Blog</a></li>
                                 <li><a href="testimonial.html">Add Testimonial</a></li>
                                 <li><a href="partner.html">Become a Partner</a></li>
                              </ul>
                           </div>
                           <div class="footer-link">
                              <ul>
                                 <li><a href="affiliate.html">Affiliate Websites</a></li>
                                 <li><a href="terms.html">Terms & Conditions</a></li>
                                 <li><a href="privacy.html">Privacy Policy</a></li>
                                 <li><a href="sitemap.html">Site Map</a></li>
                              </ul>
                           </div>
                           <div class="footer-link">
                              <ul>
                                 <li><a href="collaborators.html">Collaborators</a></li>
                                 <li><a href="event.html">Upcoming Events</a></li>
                                 <li><a href="#">Image & Media Credits</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright text-center">
                  <p><img src="{{asset('trilogy-home')}}/img/copyr8.png" alt=""> Copyright Time research And innovation. All Rights Reserved</p>
            </div>

            
         </div>
      </footer>
      <!--====== Footer End   ======-->
      <!--====== GoTop Start   ======-->
      <div class="goTop" id="goTop">
        <i class="fa fa-arrow-up"></i>
      </div>


      <!--====== goTop End   ======-->

      <!--========================== javascript ======================================-->
      <script type="text/javascript" src="{{asset('trilogy-home')}}/js/jquery-3.2.0.min.js"></script>
       <script type="text/javascript" src="{{asset('trilogy-home')}}/js/bootstrap.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
      <!--=== All Plugin ===-->
      <script type="text/javascript" src="{{asset('trilogy-home')}}/js/plugin/typed.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script type="text/javascript" src="{{asset('trilogy-home')}}/js/plugin/jquery.magnific-popup.min.js"></script>
      <script type="text/javascript" src="{{asset('trilogy-home')}}/js/plugin/mixitup.min.js"></script> 
      <script src="{{asset('trilogy-home')}}/js/isotope.pkgd.min.js"></script>
      <script type="text/javascript" src="{{asset('trilogy-home')}}/js/plugin/owl.carousel.min.js"></script>

      <!--=== All ===-->
      <script type="text/javascript" src="{{asset('trilogy-home')}}/js/main.js"></script> 
       <script>
         $( document ).ready(function() {
         $('#slider-for').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: false,
         fade: true,
         asNavFor: '#slider-nav'
         });
         $('#slider-nav').slick({
         slidesToShow: 4,
         slidesToScroll: 1,
         asNavFor: '#slider-for',
         dots: false,
         focusOnSelect: true
         });
         
         // external js: isotope.pkgd.js
         
         // init Isotope
         var $grid = $('.grid').isotope({
         itemSelector: '.color-shape'
         });
         
         // store filter for each group
         var filters = {};
         
         $('.filters').on( 'change', function( event ) {
         var $select = $( event.target );
         // get group key
         var filterGroup = $select.attr('value-group');
         // set filter for group
         filters[ filterGroup ] = event.target.value;
         // combine filters
         var filterValue = concatValues( filters );
         // set filter for Isotope
         $grid.isotope({ filter: filterValue });
         });
         
         // flatten object by concatting values
         function concatValues( obj ) {
         var value = '';
         for ( var prop in obj ) {
         value += obj[ prop ];
         }
         return value;
         }
         // filter items on button click
$('.filter-button-group').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  $grid.isotope({ filter: filterValue });
});
         
         });
      </script>
   
   </body>
</html>