

<!doctype html>
	<html class="no-js" lang="zxx"> 
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

	
	<link rel="stylesheet" href="/css/auto-complete.css">
	<link rel="stylesheet" href="/css/jquery.navhideshow.css">
	<link rel="stylesheet" href="/css/transitions.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/dbstyle.css">
	<link rel="stylesheet" href="/css/color.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<link rel="stylesheet" href="/css/dbresponsive.css">

 <link href="css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet"> 
    <link href="/css/bootstrap-grid.css" rel="stylesheet">
    <link href="/css/multistep.min.css" rel="stylesheet">

   
	<link rel="stylesheet" href="/css/dbstyle.css">

		<link rel="stylesheet" href="css/font-awesome.min.css">

 
	
	


</head>
<body>

	<!--<div class="preloader-outer">
		<div class="pin"></div>
		<div class="pulse"></div>
	</div> -->

	<div id="listar-wrapper" class="listar-wrapper listar-haslayout">

		<header id="listar-dashboardheader" class="listar-dashboardheader listar-haslayout">
			<div class="cd-auto-hide-header listar-haslayout">
				<div class="container-fluid">
					<div class="row">
						<strong class="listar-logo"><a href="/"><img src="/images/NetLogo.jpg" width="117px" height="65px" alt="company logo here"></a></strong>
						<nav class="listar-addnav">
							<ul>
								<li>
									<div class="dropdown listar-dropdown">
										<a class="listar-userlogin listar-btnuserlogin" href="/" id="listar-dropdownuser" data-toggle="dropdown">
											<span><img src="/images/NetLogo.jpg" width="117px" height="65px" alt="company logo here"></span> 
										<!--	<em>John Parker</em>
											<i class="fa fa-angle-down"></i>-->
										</a> 
										<div class="dropdown-menu listar-dropdownmen" aria-labelledby="listar-dropdownuser">
											<ul>
												<!--<li>
													<a href="javascript:void(0);">
														<i class="icon-speedometer2"></i>
														<span>Dashboard</span>
													</a>
												</li> -->
												<li>
													<a href="javascript:void(0);">
														<i class="icon-layers"></i>
														<span>My Listings</span>
													</a>
												</li>
												<li>
													<a href="javascript:void(0);">
														<i class="icon-user2"></i>
														<span>My Profile</span>
													</a>
												</li>
												<li>
													<a href="javascript:void(0);">
														<i class="icon-lock6"></i>
														<span>Logout</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<!--<a class="listar-btn listar-btngreen" href="dashboardaddlisting.html">
										<i class="icon-plus"></i>
										<span>Add Listing</span>
									</a>  -->
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


                       

			<div id="listar-sidebarwrapper" class="listar-sidebarwrapper">
				<strong class="listar-logo"><a href=""><img src="/images/NetLogo.jpg" width="117px" height="65px" alt="company logo here"></a></strong>
				<span id="listar-btnmenutoggle" class="listar-btnmenutoggle"><i class="fa fa-angle-left"></i></span>
				<div id="listar-verticalscrollbar" class="listar-verticalscrollbar">
					<nav id="listar-navdashboard" class="listar-navdashboard">
						<div class="listar-menutitle"><span>Main</span></div>
						<ul>



							<li class="listar-active">
								<a href="dashboard-user-interface.php">
									<i class="icon-speedometer2"></i>
									<span>Dashboard</span>
								</a>
							</li>
						
						<!--	<li>
								<a href="dashboard-customers-reviews.php">
									<i class="icon-star4"></i>
									<span>Reviews</span>
								</a>
							</li> -->



								@isset($datumOne))


							 @foreach($datumOne as $update)

						
							<li>
								<a href="/application/dashboard/{{$update->id}}/refurbish">
									<i class="icon-pencil3"></i>
									<span>Refurbishh Business</span>
								</a>
							</li>   

							@endforeach

							@endisset

							
						</ul>
						<div class="listar-menutitle listar-menutitleaccount"><span>Store</span></div>
						<ul>
							<li>
								<a href="/application/store/list">
									<i class="icon-lock6"></i>
									<span>Show Item</span>
								</a>
							</li>
							
						</ul>


						<div class="listar-menutitle listar-menutitleaccount"><span>Account</span></div>
						<ul>
							<li>
								<a href="/application/dashboard/profile">
									<i class="icon-lock6"></i>
									<span>My Profile</span>
								</a>
							</li>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->


				@yield('contentone')

  
             <!--Main  Close-->



		
		<footer id="listar-footer" class="listar-footer listar-haslayout">
			<div class="listar-footerbar">
				<div class="container-fluid">
					<div class="row">
						<span class="listar-copyright">Copyright &copy; <?php echo date("Y"); ?> NetGuba Inc. All rights reserved.</span>
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

	<script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
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

	<script src="/js/jquery.navhideshow.js"></script>
	<script src="/js/backgroundstretch.js"></script>
	<script src="/js/jquery.sticky-kit.js"></script>
	<script src="/js/bootstrap-slider.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/jquery.vide.min.js"></script>
	<script src="/JS/auto-complete.html"></script>

	<script src="/js/scrollbar.min.js"></script>
	<script src="/js/isotope.pkgd.js"></script>

	<script src="/js/prettyPhoto.js"></script>
	<script src="/js/raphael-min.js"></script>
	<script src="/js/parallax.js"></script>
	<script src="/js/sortable.js"></script>
	
	<script src="/js/dev_themefunction.js"></script>

	  <script type="text/javascript" src="/js/jquery.1.11.3.min.js"></script>  
    <script type="text/javascript" src="/js/multistep.min.js"></script>
    <script>
        $(document).ready(function() { 
            $('#rms-wizard').stepWizard({
                stepTheme: 'defaultTheme',/*defaultTheme,steptheme1,steptheme2*/
                allstepClickable: false,
                compeletedStepClickable: true,
                stepCounter: true,
                StepImage: true, 
                animation: true,
                animationClass: "fadeIn",
                stepValidation: true,
                validation : true, 
                field: {
                     username : { 
                        required : true, 
                        minlength: 2,
                        Regex: /^[a-zA-Z0-9]+$/,  
                    },
                     phone_number : { 
                        required : true, 
                        minlength: 2,
                        Regex: /^[a-zA-Z0-9]+$/,  
                    },
                     password : {
                        required : true,
                        minlength : 5,
                        maxlength : 20,
                        Regex: /^(?=.*[0-9_\W]).+$/, 
                    },
                    email:{
                        required : true,
                        Regex: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
                    },
                },
                message: {
                    username: "Please Enter UserName ", 
                }
                
            });

            $(".disabledLink").tooltip();
    });
    </script> 

</body>


</html>


