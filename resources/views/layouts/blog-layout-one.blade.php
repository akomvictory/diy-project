<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="zxx"> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang="zxx"> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang="zxx"> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Search Engine Find products, services and businesses around you. Quick and easy.</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/bootstrap-slider.css">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/icomoon.css">
	<link rel="stylesheet" href="/css/chosen.css">
	<link rel="stylesheet" href="/css/prettyPhoto.css">
	<link rel="stylesheet" href="/css/scrollbar.css">
	<link rel="stylesheet" href="/css/morris.css">
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<link rel="stylesheet" href="/css/YouTubePopUp.css">
	<link rel="stylesheet" href="/css/auto-complete.css">
	<link rel="stylesheet" href="/css/jquery.navhideshow.css">
	<link rel="stylesheet" href="/css/transitions.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/color.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Preloader Start
	*************************************-->
	<div class="preloader-outer">
		<div class="pin"></div>
		<div class="pulse"></div>
	</div>
	<!--************************************
			Preloader End
	*************************************-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="listar-wrapper" class="listar-wrapper listar-haslayout">
		<!--************************************
				Header Start
		*************************************-->
<header id="listar-header" class="listar-header listar-fixedheader listar-haslayout">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<strong class="listar-logo"><a href="/"><img src="/images/NetLogo.jpg" width="117px" height="65px" alt="company logo here"></a></strong>
						<nav class="listar-addnav">
							<ul>

								@auth

								@if(Auth::user()->registrationPurpose ==='Business')
								
								<li>
									<a class="listar-btn listar-btngreen" href="/application/dashboard/profile">
										<i class=""></i>
										<span>Dashboard</span>
									</a>
								</li>

								@endif

								@endauth

								@guest

								<li>
									<a class="listar-btn listar-btnblue" href="{{ route('register') }}">
										<i class="icon-plus"></i>
										<span>Add Business</span>
									</a>
								</li>

								@endguest


								<li>
									<div class="dropdown listar-themedropdown">
										<a id="listar-cartdropdown" class="listar-btn listar-btnround listar-btncartdropdown" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<em class="fa fa-check-circle-o"></em>
											<i class="fa fa-search-plus"></i>
										</a>
										<div class="dropdown-menu listar-themedropdownmenu listar-minicart" aria-labelledby="listar-cartdropdown">
										
										
											<div class="listar-cartitem listar-totalarea">
												<span>Search Guba Handle:</span>
												<span class="fa fa-compass"></span>
											</div>
												<form action="/search/guba/{handle}/function" method="GET">
												<div class="listar-cartitem">
											
												<div class="listar-iteminfo">
													<input type="text" required name="gubaHandle">
												</div>
											</div>
											<button type="submit" class="btn btn-success btn-md" name="gubahandle"> Search</button>

											</form>
										</div>  
									</div> 
								</li>
							</ul>
						</nav>
						<nav id="listar-nav" class="listar-nav">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#listar-navigation" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div id="listar-navigation" class="collapse navbar-collapse listar-navigation">
								<ul>
									


								
	<li class="current-menu-item"><a href="/resources/blog/homestead">Blog</a></li>
										<li class="current-menu-item"><a href="/resources/course/homestead">Courses</a></li>
									
											<li class="current-menu-item"><a href="/about">About</a></li>
										<li class="current-menu-item"><a href="/Services">Services</a></li>
										

								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Inner Search Start
		*************************************-->
		<div class="listar-innerpagesearch">
			<a id="listar-btnsearchtoggle" class="listar-btnsearchtoggle" href="javascript:void(0);"><i class="icon-icons185"></i></a>
			<div id="listar-innersearch" class="listar-innersearch">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<form class="listar-formtheme listar-formsearchlisting" method="get" action="/business/{searchterm}/{location}">

									@csrf
									<fieldset>
										<div class="form-group listar-inputwithicon">
											<i class="icon-layers"></i>
											<div class="listar-select">
												<select required name="searchTerm" id="listar-categorieschosen" class="listar-categorieschosen listar-chosendropdown">
													<option>Hotels</option>
												
													@if(count($findInLocation)>0)

													@foreach($searchKeyword as $keyword)

													<option>{{$keyword->keywordOne}}</option>
													<option>{{$keyword->keywordtwo}}</option>
													<option>{{$keyword->keywordThree}}</option>
													<option>{{$keyword->keywordFour}}</option>
													<option>{{$keyword->keywordFive}}</option>
													<option>{{$keyword->keywordSix}}</option>
													<option>{{$keyword->keywordSeven}}</option>
													<option>{{$keyword->keywordEight}}</option>
													


																@endforeach
															      @endif
												
												</select>
											</div>
										</div>
										<div class="form-group listar-inputwithicon">
											<i class="icon-global"></i>
											<div class="listar-select listar-selectlocation">
												<select required name="location" id="listar-locationchosen" class="listar-locationchosen listar-chosendropdown">
													<option> Abuja </option>

														@if(count($findInLocation)>0)

													@foreach($findInLocation as $searchLocation)

													<option>{{$searchLocation->cityOfOperation}}</option>
													<option>{{$searchLocation->stateOfOperation}}</option>


																@endforeach
															      @endif
												
												</select>
											</div>
										</div>
										<div class="form-group listar-inputwithicon">
											<i class=""><img src="/images/icons/icon-01.png" alt="image description"></i>
											<p>Price: </p>
											<input name="price" id="listar-rangeslider" class="listar-rangeslider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">
										</div>
										<button type="submit"  class="listar-btn listar-btngreen">Search Places</button>
									</fieldset>
								</form>
						</div>
					</div>
				</div>
			</div>
		</div>






			@yield('content')




<footer id="listar-footer" class="listar-footer listar-haslayout">
			<div class="listar-footeraboutarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-upperbox">
								<strong class="listar-logo"><a href="javascript:void(0);"><img src="/images/NetLogo.jpg" width="117px" height="65px" alt="company logo here"></a></strong>
								<ul class="listar-socialicons">
									<li class="listar-facebook"><a href="facebook.com/NetGubaOnline"><i class="fa fa-facebook"></i></a></li>
									<li class="listar-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
									<li class="listar-linkedin"><a href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
							
									<li class="listar-vimeo"><a href="javascript:void(0);"><i class="fa fa-youtube"></i></a></li>
								</ul>
								<nav class="listar-navfooter">
									<ul>
									<li><a href="/resources/blog/homestead">Blog</a></li>
										<li><a href="/resources/course/homestead">Courses</a></li>
									
										<li><a href="/about">About</a></li>
										<li><a href="/services">Services</a></li>
										
									</ul>
								</nav>
							</div>
							<div class="listar-lowerbox">
								<div class="listar-description">
								<p>NetGuba is an IT and business directory platform. To provide maximum customer experience we offer exceptional business development solutions to help businesses expand their reach.</p>
								</div>
								<address><strong>Address:</strong> FCT Abuja, Nigeria. <span><strong>Tel:</strong> +234 816 1544 559</span></address>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="listar-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<span class="listar-copyright">Copyright &copy; {{date('Y')}} NetGuba. All rights reserved.</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<!--************************************
			Theme Modal Box Start
	*************************************-->

	<!--************************************
			Theme Modal Box End
	*************************************-->
	<!--************************************
			Login Singup Start
	*************************************-->
	
	<!--************************************
			Login Singup End
	*************************************-->
	<script src="/js/vendor/jquery-library.js"></script>
	<script src="/js/vendor/bootstrap.min.js"></script>
	<script src="/js/mapclustering/data.json"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="/js/tinymce/tinymce.min4bb5.js?apiKey=4cuu2crphif3fuls3yb1pe4qrun9pkq99vltezv2lv6sogci"></script>
	<script src="/js/mapclustering/markerclusterer.min.js"></script>
	<script src="/js/mapclustering/infobox.js"></script>
	<script src="/js/mapclustering/map.js"></script>
	<script src="/js/ResizeSensor.js.js"></script>
	<script src="/js/jquery.sticky-sidebar.js"></script>
	<script src="/js/YouTubePopUp.jquery.js"></script>
	<script src="/js/jquery.navhideshow.js"></script>
	<script src="/js/backgroundstretch.js"></script>
	<script src="/js/jquery.sticky-kit.js"></script>
	<script src="/js/bootstrap-slider.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/jquery.vide.min.js"></script>
	<script src="/JS/auto-complete.html"></script>
	<script src="/js/chosen.jquery.js"></script>
	<script src="/js/scrollbar.min.js"></script>
	<script src="/js/isotope.pkgd.js"></script>
	<script src="/js/jquery.steps.js"></script>
	<script src="/js/prettyPhoto.js"></script>
	<script src="/js/raphael-min.js"></script>
	<script src="/js/parallax.js"></script>
	<script src="/js/sortable.js"></script>
	<script src="/js/countTo.js"></script>
	<script src="/js/appear.js"></script>
	<script src="/js/gmap3.js"></script>
	<script src="/js/dev_themefunction.js"></script>
</body>


</html>