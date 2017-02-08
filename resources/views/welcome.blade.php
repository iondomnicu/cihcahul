<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>CIHCAHUL - Colegiul Iulia Hasdeu Din Cahul</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/headers/header-default.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/footers/footer-v1.css')}}">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="{{URL::asset('assets/plugins/animate.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/plugins/line-icons/line-icons.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/plugins/parallax-slider/css/parallax-slider.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.css')}}">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/theme-colors/default.css" id="style_color')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/theme-skins/dark.css')}}">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/custom.css')}}">
        
        <link rel="stylesheet" href="{{URL::asset('assets/css/pages/page_contact.css')}}">
</head>

<body>
     <div class="top-bar">
	<div class="wrapper">
		<!--=== Header ===-->
		<div class="header">
			<div class="container">
				<!-- Logo -->
				<p class="logo" href="index.html">
					<img src="{{URL::asset('assets/img/logocih.png')}}" alt="Logo">
				</p>
				<!-- End Logo -->

				<!-- Topbar -->
				<div class="topbar">
					<ul class="loginbar pull-right">
						<li class="hoverSelector">
							<i class="fa fa-globe"></i>
							<a>Languages</a>
							<ul class="languages hoverSelectorBlock">
								<li class="active">
									<a href="#">Română <i class="fa fa-check"></i></a>
								</li>
								<li><a href="#">Engleză</a></li>
								<li><a href="#">Rusă</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<!-- End Topbar -->

				<!-- Toggle get grouped for better mobile display -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="fa fa-bars"></span>
				</button>
				<!-- End Toggle -->
			</div><!--/end container-->

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
				<div class="container">
					<ul class="nav navbar-nav">
						<!-- Home -->
						<li class="active">
							<a href="{{route('home')}}">
								Acasă
							</a>
						</li>	

						<!-- Pages -->
						<li class="dropdown">
							<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
								Specialități
							</a>
							<ul class="dropdown-menu">
								<!-- Invoice Page -->
								<li><a href="page_invoice.html">Informatică</a></li>
								<!-- End Invoice Page -->

								<!-- Clients Page -->
								<li><a href="page_clients.html">Contabilitate</a></li>
								<!-- End Clients Page -->

								<!-- Column Pages -->
								<li><a href="page_3_columns.html">Asistență Socială</a></li>
								<!-- End Column Pages -->

								<!-- Privacy Policy -->
								<li><a href="page_privacy.html">Arte</a></li>
								<!-- End Privacy Policy -->
							</ul>
						</li>
						<!-- End Pages -->

						<!-- Blog -->
						<li>
							<a href="#">
								Admitere
							</a>
						</li>
						<!-- End Blog -->

						<!-- Portfolio -->
						<li>
							<a href="http://orar.cihcahul.md/">
								Orar
							</a>
						</li>
						<!-- End Portfolio -->

						<!-- Features -->
						<li>
							<a href="{{route('events')}}">
								Evenimente
							</a>
						</li>
						<!-- End Features -->

						<!-- Shortcodes -->
						<li>
							<a href="{{route('despre')}}">
								Despre
							</a>
						</li>
						<!-- End Shortcodes -->

						<!-- Demo Pages -->
						<li>
							<a href="{{route('contact')}}">
								Contacte
							</a>
						</li>
						<!-- End Demo Pages -->

						<!-- Search Block -->
						<li>
							<i class="search fa fa-search search-btn"></i>
							<div class="search-open">
								<div class="input-group animated fadeInDown">
									<input type="text" class="form-control" placeholder="Search">
									<span class="input-group-btn">
										<button class="btn-u" type="button">Go</button>
									</span>
								</div>
							</div>
						</li>
						<!-- End Search Block -->
					</ul>
				</div><!--/end container-->
			</div><!--/navbar-collapse-->
		</div>
        </div>
     </div>
		<!--=== End Header ===-->

                @yield('content')
                		<!--=== Footer Version 1 ===-->
		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-40">
							<a href="{{route('home')}}"><img id="logo-footer" class="footer-logo" src="{{URL::asset('assets/img/logocih.png')}}" alt=""></a>
							<p>La naștere, natura înzestrează copilul numai cu „semințele științei, ale moralității și religiozității”, ele devin un bun al fiecărui om numai prin educație. Educația este o activitate de stimulare a acestor „semințe”, și implicit, de conducere a procesului de umanizare, omul ”nu poate deveni om decât dacă este educat”.</p>
							</div><!--/col-md-3-->
						<!-- End About -->

						<!-- Latest -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="posts">
								<div class="headline"><h2>Latest Posts</h2></div>
								<ul class="list-unstyled latest-list">
									<li>
										<a href="#">Incredible content</a>
										<small>May 8, 2014</small>
									</li>
									<li>
										<a href="#">Best shoots</a>
										<small>June 23, 2014</small>
									</li>
									<li>
										<a href="#">New Terms and Conditions</a>
										<small>September 15, 2014</small>
									</li>
								</ul>
							</div>
						</div><!--/col-md-3-->
						<!-- End Latest -->

						<!-- Link List -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="headline"><h2>Categorii</h2></div>
							<ul class="list-unstyled link-list">
								<li><a href="{{route('despre')}}">Despre</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Specialități</a><i class="fa fa-angle-right"></i></li>
								<li><a href="{{route('events')}}">Evenimente</a><i class="fa fa-angle-right"></i></li>
								<li><a href="http://orar.cihcahul.md/">Orar</a><i class="fa fa-angle-right"></i></li>
								<li><a href="{{route('contact')}}">Contacte</a><i class="fa fa-angle-right"></i></li>
							</ul>
						</div><!--/col-md-3-->
						<!-- End Link List -->

						<!-- Address -->
						<div class="col-md-3 map-img md-margin-bottom-40">
							<div class="headline"><h2>Contacte</h2></div>
							<address class="md-margin-bottom-40">
								36, Dunării Cahul 3909 <br />
								Republica Moldova <br />
								Phone: +373 0299-4-15-30 <br />
								Email: <a href="mailto:cihsecretariat@cih.md" class="">cihsecretariat@cih.md</a>
							</address>
						</div><!--/col-md-3-->
						<!-- End Address -->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2016 &copy; Toate drepturile rezervate.
							</p>
						</div>

						<!-- Social Links -->
						<div class="col-md-6">
							<ul class="footer-socials list-inline">
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
										<i class="fa fa-skype"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
										<i class="fa fa-dribbble"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div><!--/copyright-->
		</div>
		<!--=== End Footer Version 1 ===-->
	</div><!--/wrapper-->

	

	<!-- JS Global Compulsory -->
	<script type="text/javascript" src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/plugins/jquery/jquery-migrate.min.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="{{URL::asset('assets/plugins/back-to-top.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/plugins/smoothScroll.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/plugins/parallax-slider/js/modernizr.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/plugins/parallax-slider/js/jquery.cslider.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/plugins/owl-carousel/owl-carousel/owl.carousel.js')}}"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="{{URL::asset('assets/js/custom.js')}}"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="{{URL::asset('assets/js/app.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/js/plugins/owl-carousel.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/js/plugins/style-switcher.js')}}"></script>
	<script type="text/javascript" src="{{URL::asset('assets/js/plugins/parallax-slider.js')}}"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			OwlCarousel.initOwlCarousel();
			StyleSwitcher.initStyleSwitcher();
			ParallaxSlider.initParallaxSlider();
		});
	</script>
        
		<!--[if lt IE 9]>
			<script src="assets/plugins/respond.js"></script>
			<script src="assets/plugins/html5shiv.js"></script>
			<script src="assets/plugins/placeholder-IE-fixes.js"></script>
		<![endif]-->

	</body>
	</html>
