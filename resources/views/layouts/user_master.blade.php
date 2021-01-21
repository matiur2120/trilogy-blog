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
		<link rel="stylesheet" href="asset/css/normalize.css" />
		<!--=== Font family Css ===-->
		<link
			href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
			rel="stylesheet"
		/>
		<!--=== Bootstrap 4===-->
		<link rel="stylesheet" href="{{ asset('fontend')}}/css/bootstrap.min.css" />
		<!--=== Fontawesome icon 5.9 ===-->
		<link
			rel="stylesheet"
			type="text/css"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css"
		/>
		<!--=== Owl carousel 2.3.4===-->
		<link rel="stylesheet" href="{{asset('fontend')}}/css/plugin/owl.carousel.min.css" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
		/>
		<link rel="stylesheet" href="{{asset('fontend')}}/css/plugin/owl.theme.default.min.css" />
		<!--=== Magnific PopUp ===-->
		<link rel="stylesheet" href="{{asset('fontend')}}/css/plugin/magnific-popup.css" />
		<!--=== Main Css ===-->
		<link rel="stylesheet" href="{{asset('fontend')}}/css/style.css" />
		<link rel="stylesheet" href="{{asset('fontend')}}/css/blog-dashboard.css" />
		<!--=== Responsive Css ===-->
		<link rel="stylesheet" href="{{asset('fontend')}}/css/responsive.css" />
		<script src="{{asset('fontend')}}/js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
	<body>
		<!--====== Header Start ======-->
		<header id="header">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-xl">
					<div class="header-left">
						<div class="headerLogo">
							<a class="navbar-brand" href="#">
								<img src="{{asset('fontend')}}/img/logo-top.png" alt="our logo" />
							</a>
							<form action="/action_page.php">
								<input type="text" placeholder="Search.." name="search" />
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
					<button
						class="navbar-toggler"
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
							<ul class="navbar-nav mt-2 mt-lg-0">
								<li class="nav-item">
								<a href="{{route('research-group')}}">
										<img src="{{asset('fontend')}}/img/covid-logo.png" alt="" class="mr-10" />
										<strong style="color: #000">Research Group</strong>
									</a>
								</li>
								<div class="select-group">
									<select>
										<option value="">Comment on a D iscussion</option>
										<option value="af">iscussion</option>
									</select>
								</div>
								<div class="select-group">
									<select>
										<option value="">Post a Discussion</option>
										<option value="af">iscussion</option>
									</select>
								</div>
                <div class="login" aria-labelledby="navbarDropdown">
                    <a class="btn btn-rounded" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                  </div>
								<div class="select-country">
									<select
										class="goog-te-combo"
										aria-label="Language Translate Widget"
									>
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

		<div class="blog_carousel_container">
			<div class="owl-carousel owl-theme">
				<div class="single_research_card">
					<div class="avater">
						<img src="{{asset('fontend')}}/img/ceo.png" alt="" />
					</div>
					<div class="single_research_card_info">
						<h4>John Doe</h4>
						<p class="card_reating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star default"></i>
							<span class="rating">4.8</span>
						</p>
						<p class="review">1040 <span>reviews</span></p>
					</div>
				</div>
				<div class="single_research_card">
					<div class="avater">
						<img src="{{asset('fontend')}}/img/ceo.png" alt="" />
					</div>
					<div class="single_research_card_info">
						<h4>John Doe</h4>
						<p class="card_reating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star default"></i>
							<span class="rating">4.8</span>
						</p>
						<p class="review">1040 <span>reviews</span></p>
					</div>
				</div>
				<div class="single_research_card">
					<div class="avater">
						<img src="{{asset('fontend')}}/img/ceo.png" alt="" />
					</div>
					<div class="single_research_card_info">
						<h4>John Doe</h4>
						<p class="card_reating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star default"></i>
							<span class="rating">4.8</span>
						</p>
						<p class="review">1040 <span>reviews</span></p>
					</div>
				</div>
				<div class="single_research_card">
					<div class="avater">
						<img src="{{asset('fontend')}}/img/ceo.png" alt="" />
					</div>
					<div class="single_research_card_info">
						<h4>John Doe</h4>
						<p class="card_reating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star default"></i>
							<span class="rating">4.8</span>
						</p>
						<p class="review">1040 <span>reviews</span></p>
					</div>
				</div>
				<div class="single_research_card">
					<div class="avater">
						<img src="{{asset('fontend')}}/img/ceo.png" alt="" />
					</div>
					<div class="single_research_card_info">
						<h4>John Doe</h4>
						<p class="card_reating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star default"></i>
							<span class="rating">4.8</span>
						</p>
						<p class="review">1040 <span>reviews</span></p>
					</div>
				</div>
				<div class="single_research_card">
					<div class="avater">
						<img src="{{asset('fontend')}}/img/ceo.png" alt="" />
					</div>
					<div class="single_research_card_info">
						<h4>John Doe</h4>
						<p class="card_reating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star default"></i>
							<span class="rating">4.8</span>
						</p>
						<p class="review">1040 <span>reviews</span></p>
					</div>
				</div>
				<div class="single_research_card">
					<div class="avater">
						<img src="{{asset('fontend')}}/img/ceo.png" alt="" />
					</div>
					<div class="single_research_card_info">
						<h4>John Doe</h4>
						<p class="card_reating">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star default"></i>
							<span class="rating">4.8</span>
						</p>
						<p class="review">1040 <span>reviews</span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="side_mini_menu">
			<i onclick="showSideMenu()" class="fa fa-bars" aria-hidden="true"></i>
		</div>
		<div></div>
		<div class="research_group_main_content row">
			<div class="research_group_sidebar_menu col-md-3" id="sidemenu">
				<div class="menu_item">
					<div class="sidenav" id="sidenav_scrollbar">
						<a class="sidenav_public" href="#">Public</a>
						<a class="sidenav_group_discussion" href="#"
							><i class="fas fa-th-large"></i>Group Discussion</a
						>
						<button class="dropdown-btn">
							PBDL
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-container">
							<a href="#">Link 1</a>
							<a href="#">Link 2</a>
							<a href="#">Link 3</a>
						</div>
						<button class="dropdown-btn">
							CRX
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-container">
							<a href="#">Link 1</a>
							<a href="#">Link 2</a>
							<a href="#">Link 3</a>
						</div>
						<button class="dropdown-btn">
							Network Complexity
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-container">
							<a href="#">Link 1</a>
							<a href="#">Link 2</a>
							<a href="#">Link 3</a>
						</div>
						<button class="dropdown-btn">
							Neural Network
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-container">
							<a href="#">Link 1</a>
							<a href="#">Link 2</a>
							<a href="#">Link 3</a>
						</div>
						<button class="dropdown-btn">
							ABCD
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-container">
							<a href="#">Link 1</a>
							<a href="#">Link 2</a>
							<a href="#">Link 3</a>
						</div>
						<button class="dropdown-btn">
							GXT
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-container">
							<a href="#">Link 1</a>
							<a href="#">Link 2</a>
							<a href="#">Link 3</a>
						</div>
						<button class="dropdown-btn">
							Network
							<i class="fa fa-caret-down"></i>
						</button>
						<div class="dropdown-container">
							<a href="#">Link 1</a>
							<a href="#">Link 2</a>
							<a href="#">Link 3</a>
						</div>
						<a class="single_sidebar_item" href="#"
							><img src="{{asset('fontend')}}/img/Path473.png" alt="" />
							<span>Group ratings</span>
						</a>
						<a class="single_sidebar_item" href="#"
							><img src="{{asset('fontend')}}/img/Group501.png" alt="" />
							<span>Group Vote</span>
						</a>
						<a class="single_sidebar_item" href="{{route('add.discussion-category')}}"
							><img src="{{asset('fontend')}}/img/Group501.png" alt="" />
							<span>Add Discussion Category</span>
						</a>
						<a class="single_sidebar_item" href="{{route('group-activities')}}"
							><img src="{{asset('fontend')}}/img/Group522.png" alt="" />
							<span>Group Activities</span>
						</a>
						<a class="single_sidebar_item box_shadow" href="#"
							><img src="{{asset('fontend')}}/img/Group509.png" alt="" />
							<span>Group Members</span>
						</a>
						<a class="single_sidebar_item" href="#"
							><img src="{{asset('fontend')}}/img/Group509.png" alt="" />
							<span>Group Members</span>
						</a>
						<a class="single_sidebar_item" href="#"
							><img src="{{asset('fontend')}}/img/Group509.png" alt="" />
							<span>Group Test</span>
						</a>
						<a class="single_sidebar_item" href="#"
							><img src="{{asset('fontend')}}/img/Group503.png" alt="" />
							<span>Personal Ratings</span>
						</a>
						<a class="single_sidebar_item sidebar_menu_space_bottom" href="#"
							><img src="{{asset('fontend')}}/img/Group509.png" alt="" />
							<span>Ext Group Discussion</span>
						</a>
						<a class="single_sidebar_item" href="#"
							><img src="{{asset('fontend')}}/img/Group526.png" alt="" />
							<span>Tag</span>
						</a>
						<a class="single_sidebar_item" href="#"
							><img src="{{asset('fontend')}}/img/Group539.png" alt="" />
							<span>Upcoming Events</span>
						</a>
						<a class="single_sidebar_item" href="#"
							><img src="{{asset('fontend')}}/img/Group651.png" alt="" />
							<span>Research Papers</span>
						</a>
						<a class="single_sidebar_item sidebar_menu_space_bottom" href="#"
							><img src="{{asset('fontend')}}/img/Group639.png" alt="" />
							<span>Dashboard</span>
						</a>
					</div>
				</div>
			</div>
			<!-- Middle Content start here..... -->
			<div class="research_group_blog_container col-md-8 col-lg-6">
			@yield('content');
			</div>
			<!-- Middle content end here......... -->
			<div
				class="research_group_right_sidebar col-md-12 col-lg-3"
				id="right_sidebar_scroll"
			>
				<div class="right_sidebar_sponsoer">
					<h2 class="box_shadow">Sponsored</h2>
					<div class="single_sponsoer box_shadow">
						<img src="{{asset('fontend')}}/img/Gold_Card.png" alt="our logo" />
						<p>
							American Express <sup><i class="far fa-registered"></i></sup>
						</p>
					</div>
				</div>
				<div class="right_sidebar_suggest_post box_shadow">
					<h2>Suggested Post</h2>
					<div class="single_suggest_post card">
						<div class="single_research_card">
							<div class="avater">
								<img src="{{asset('fontend')}}/img/ceo.png" alt="" />
							</div>
							<div class="single_research_card_info">
								<h4>John Doe</h4>
								<p class="card_reating">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star default"></i>
									<span class="rating">4.8</span>
								</p>
								<p class="review">1040 <span>reviews</span></p>
							</div>
						</div>
						<p>
							Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum
							dolor sit amet
						</p>
						<div class="suggest_post_f">
							<p>Ask <img src="{{asset('fontend')}}/img/ask1.png" alt="" /></p>
							<p>Share <img src="{{asset('fontend')}}/img/share.png" alt="" /></p>
							<p>Discuss <img src="{{asset('fontend')}}/img/discuss.png" alt="" /></p>
						</div>
					</div>
					<div class="single_suggest_post card">
						<div class="single_research_card">
							<div class="avater">
								<img src="{{asset('fontend')}}/img/ceo.png" alt="" />
							</div>
							<div class="single_research_card_info">
								<h4>John Doe</h4>
								<p class="card_reating">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star default"></i>
									<span class="rating">4.8</span>
								</p>
								<p class="review">1040 <span>reviews</span></p>
							</div>
						</div>
						<p>
							Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum
							dolor sit amet
						</p>
						<div class="suggest_post_f">
							<p>Ask <img src="{{asset('fontend')}}/img/ask1.png" alt="" /></p>
							<p>Share <img src="{{asset('fontend')}}/img/share.png" alt="" /></p>
							<p>Discuss <img src="{{asset('fontend')}}/img/discuss.png" alt="" /></p>
						</div>
					</div>
				</div>
				<div class="right_sidebar_suggest_post box_shadow">
					<h2>Most Discussed</h2>
					<div class="single_suggest_post card">
						<div class="single_research_card">
							<div class="avater">
								<img src="{{asset('fontend')}}/img/ceo.png" alt="" />
							</div>
							<div class="single_research_card_info">
								<h4>John Doe</h4>
								<p class="card_reating">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star default"></i>
									<span class="rating">4.8</span>
								</p>
								<p class="review">1040 <span>reviews</span></p>
							</div>
						</div>
						<p>
							Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum
							dolor sit amet
						</p>
						<div class="suggest_post_f">
							<p>Ask <img src="{{asset('fontend')}}/img/ask1.png" alt="" /></p>
							<p>Share <img src="{{asset('fontend')}}/img/share.png" alt="" /></p>
							<p>Discuss <img src="{{asset('fontend')}}/img/discuss.png" alt="" /></p>
						</div>
					</div>
					<div class="single_suggest_post card">
						<div class="single_research_card">
							<div class="avater">
								<img src="{{asset('fontend')}}/img/ceo.png" alt="" />
							</div>
							<div class="single_research_card_info">
								<h4>John Doe</h4>
								<p class="card_reating">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star default"></i>
									<span class="rating">4.8</span>
								</p>
								<p class="review">1040 <span>reviews</span></p>
							</div>
						</div>
						<p>
							Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum
							dolor sit amet
						</p>
						<div class="suggest_post_f">
							<p>Ask <img src="{{asset('fontend')}}/img/ask1.png" alt="" /></p>
							<p>Share <img src="{{asset('fontend')}}/img/share.png" alt="" /></p>
							<p>Discuss <img src="{{asset('fontend')}}/img/discuss.png" alt="" /></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--====== Footer Start ======-->

		<!--====== Footer End   ======-->
		<!--====== GoTop Start   ======-->
		<div class="goTop" id="goTop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!--====== goTop End   ======-->

		<!--========================== javascript ======================================-->
		<script type="text/javascript" src="{{asset('fontend')}}/js/jquery-3.2.0.min.js"></script>
		<script type="text/javascript" src="{{asset('fontend')}}/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
		<!--=== All Plugin ===-->
		<script type="text/javascript" src="{{asset('fontend')}}/js/plugin/typed.min.js"></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
			integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
			crossorigin="anonymous"
		></script>
		<script
			type="text/javascript"
			src="{{asset('fontend')}}/js/plugin/jquery.magnific-popup.min.js"
		></script>
		<script
			type="text/javascript"
			src="{{asset('fontend')}}/js/plugin/mixitup.min.js"
		></script>
		<script src="{{asset('fontend')}}/js/isotope.pkgd.min.js"></script>
		<script
			type="text/javascript"
			src="{{asset('fontend')}}/js/plugin/owl.carousel.min.js"
		></script>

		<!--=== All ===-->
		<script type="text/javascript" src="{{asset('fontend')}}/js/main.js"></script>

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
		</script>
	</body>
</html>
