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
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
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
<body class="listar-home listar-homeone">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Preloader Start
	*************************************-->
<!--<div class="preloader-outer">
		<div class="pin"></div>
		<div class="pulse"></div>
	</div>  -->
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
		<header id="listar-header" class="listar-header listar-haslayout">
			<div class="container">
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

									@guest
									<li class="current-menu-item"><a href="{{ route('login') }}" class="listar-btn listar-btnblue">{{ __('Login') }}</a></li>

									<li class="current-menu-item">
                                <a  href="{{ route('register') }}" class="listar-btn listar-btnblue">{{ __('Register') }}</a>
                            </li>
									
								
									@else 
									<li class="menu-item-has-children">

									 <a href=""> <span class="fa fa-user""> </span> {{ Auth::user()->name }} </a>
										<ul class="sub-menu">
											<li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>

                                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                    </li>
									
										</ul>
									</li>

									 @endguest

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
				Home Slider Start
		*************************************-->
		<div class="listar-homebannerslider">
		<div id="listar-homeslider" class="listar-homeslider owl-carousel">
				
				<div class="item"><figure><img src="images/slider/pexels-photo-395132.jpeg" alt="image description"></figure></div>
				<div class="item"><figure><img src="images/slider/woman-flowers-holidays-girl-6270.jpg" alt="image description"></figure></div>
			
				<div class="item"><figure><img src="images/slider/pexels-photo-761963.jpeg" alt="image description"></figure></div>
				
				<div class="item"><figure><img src="images/slider/img-01.jpg" alt="image description"></figure></div>

			</div>
			<div class="listar-homebanner">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-bannercontent">
								<h1>Find Best Services</h1>
								<div class="listar-description">
									<p>Find the best places in the city for food, activities and relaxation</p>
								</div>
								<form class="listar-formtheme listar-formsearchlisting" method="get" action="/business/{searchterm}/{location}">

									@csrf
									<fieldset>
										<div class="form-group listar-inputwithicon">
											<i class="icon-layers"></i>
											<div class="listar-select">
												<select required name="searchTerm" id="listar-categorieschosen" class="listar-categorieschosen listar-chosendropdown">
													<option>Hotels</option>
												
													@if(count($searchKeyword)>0)

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
													


																@endforeach
															      @endif
												
												</select>
											</div>
										</div>
										<div class="form-group listar-inputwithicon">
											
											<p>Checkout: </p>
										<!--	<input name="price" id="listar-rangeslider" class="listar-rangeslider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"> -->
										</div>
										<button type="submit"  class="listar-btn listar-btngreen">Search Places</button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->

<section class="listar-sectionspace listar-bglight listar-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-sectionhead">
								<div class="listar-sectiontitle">
									<h2>Viewers MV Brands</h2>
								</div>
								<div class="listar-description">
											<p>Checkout some of our users most referred service providers ready to do something awesome for you. Get business addresses, contact information, user rating and reviews.</p>
								</div>
							</div>
							<div class="listar-horizontalthemescrollbar">
								<div class="listar-themeposts listar-placesposts">


										@if(count($findFlagRatedBusiness) > 0)


								@foreach($findFlagRatedBusiness as $flagRatedBusiness)


						
									<div class="listar-themepost listar-placespost">
										<figure style="padding:12px;" class="listar-featuredimg"><a href="/business/{{ $flagRatedBusiness->businessName }}/detail"><img src="/storage/upload/dashboard/photos/{{$flagRatedBusiness->coverPhoto}}" style="width: 22em; height: 12em" alt="image description"></a></figure> <br> <br/><br/>
										<div class="listar-postcontent">
											<h3><a href="/business/{{ $flagRatedBusiness->businessName }}/detail">{{ $flagRatedBusiness->businessName }} </a>

												<i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i>

											</h3>
											<div class="listar-description">
												<p>
														@if(strlen($flagRatedBusiness->BusinessInfo) > 70)


													{!!substr($flagRatedBusiness->BusinessInfo, 0, 70).'..'!!}


													@endif
													
												</p>
											</div>
											<!--<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-foods"></i>
													<span>Food and Drinks</span>
												</a>
											</div> -->
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em> {{$flagRatedBusiness->cityOfOperation }} </em>
												</a>


					
						<!--<span class="listar-contactnumber">
							<i class="icon-"><img src="images/icons/icon-03.png" alt="image description"></i>
							<em> {{ $flagRatedBusiness->businessPhoneNumber }}  </em>
						</span> -->

												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".{{ $flagRatedBusiness->id }} "><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>

													<div class="listar-btnquickinfo">
															<div class="listar-shareicons">
										<a href="@if($flagRatedBusiness->twitterUrl !== NULL){{'https://'.$flagRatedBusiness->twitterUrl}} @else javascript:void(0); @endif"><i class="fa fa-twitter"></i></a>

										<a href="@if($flagRatedBusiness->facebookUrl !== NULL){{'https://'.$flagRatedBusiness->facebookUrl}} @else javascript:void(0); @endif"><i class="fa fa-facebook"></i></a>
										
										<a href="@if($flagRatedBusiness->instagramUrl !== NULL){{'https://'.$flagRatedBusiness->instagramUrl}} @else javascript:void(0); @endif"><i class="fa fa-instagram"></i></a>
									</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>








	<div class="modal fade {{$flagRatedBusiness->id}}" tabindex="-1" role="dialog">
		<div class="modal-dialog listar-modaldialog" role="document">
			<div class="modal-content listar-modalcontent">
				<div class="listar-themepost listar-placespost">
					<span class="listar-btnclosequickview" data-toggle="modal" data-target=".{{$flagRatedBusiness->id}}">X</span>
					<figure class="listar-featuredimg" data-vide-bg="poster: images/post/img-16.jpg" data-vide-options="position: 50% 50%">
						<span class="listar-contactnumber">
							<i class="icon-"><img src="/images/icons/icon-03.png" alt="image description"></i>
							<em> {{ $flagRatedBusiness->businessPhoneNumber }}  </em>
						</span>
					</figure>
					<div class="listar-postcontent">
						<h3><a href="/business/{{ $flagRatedBusiness->businessName }}/detail"> {{$flagRatedBusiness->businessName }}  </a>

							<i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i>

						</h3>
						<div class="listar-description">
							<p>
								@if(strlen($flagRatedBusiness->BusinessInfo) > 39)


													{!!substr($flagRatedBusiness->BusinessInfo, 0, 70).'..'!!}


													@endif

							</p>
						</div>
						<ul class="listar-listfeatures">
							
							@if($flagRatedBusiness->streetParking == 'ON')
							<li> Street Parking </li>
							@endif
							
							@if($flagRatedBusiness->wifiService == 'ON')
							<li> wifi Service </li>
							@endif

							@if($flagRatedBusiness->airConditioning == 'ON')
							<li> Air Condition </li>
							@endif

							@if($flagRatedBusiness->cableTv == 'ON')
							<li> Cable Tv </li>
							@endif

							@if($flagRatedBusiness->sereneEnvironment == 'ON')
							<li> Serene Environment </li>
							@endif

							@if($flagRatedBusiness->POS == 'ON')
							<li> POS Service </li>
							@endif

							@if($flagRatedBusiness->suitableForEvents == 'ON')
							<li> Suitable For Events </li>
							@endif

						</ul>



						<!--<div class="listar-reviewcategory">
							<div class="listar-review">
								<span class="listar-stars"><span></span></span>
								<em>(3 Review)</em>
							</div>
							<a href="javascript:void(0);" class="listar-category">
								<i class="icon-tourism"></i>
								<span>Hotel</span>
							</a>
						</div> -->
						<div class="listar-themepostfoot">
							<span class="listar-openinghours">
								<i class="icon-alarmclock2"></i>
								<em>Monday <span class="listar-greenthemecolor">Work Time </span>

								@if($flagRatedBusiness->suitableForEvents !== NULL)
									{{$flagRatedBusiness->monOperationTime}}

									@else

										Closed 
							@endif

								</em>
							</span>

							<!--<span class="listar-openinghours">
								<i class="icon-alarmclock2"></i>
								<em>Monday <span class="listar-greenthemecolor">Open Work Hour(s)</span> 							@if($flagRatedBusiness->suitableForEvents !== NULL)
									{{$flagRatedBusiness->monOperationTime}}

									@else

									<em> Closed </em>
							@endif

						    </em>
							</span> -->



							<div class="listar-postbtns">
								<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>

									<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>

								<div class="listar-btnquickinfo">
									<div class="listar-shareicons">
										<a href="@if($flagRatedBusiness->twitterUrl !== NULL){{'./'.$flagRatedBusiness->facebookUrl}} @else javascript:void(0); @endif"><i class="fa fa-twitter"></i></a>

										<a href="@if($flagRatedBusiness->facebookUrl !== NULL){{'./'.$flagRatedBusiness->facebookUrl}} @else javascript:void(0); @endif"><i class="fa fa-facebook"></i></a>
										
										<a href="@if($flagRatedBusiness->instagramUrl !== NULL){{'./'.$flagRatedBusiness->facebookUrl}} @else javascript:void(0); @endif"><i class="fa fa-instagram"></i></a>
									</div>
									<a class="listar-btnshare" href="javascript:void(0);">
										<i class="icon-share3"></i>
									</a>
								</div>
							</div>

						</div>


					</div>
				</div>
			</div>
		</div>
	</div>














	@endforeach


								@endif


								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		
		<main id="listar-main" class="listar-main listar-haslayout">
			<!--************************************
					Explore The City Start
			*************************************-->





			<section class="listar-sectionspace listar-haslayout">
				<div class="container">




					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-sectionhead">
								<div class="listar-sectiontitle">
									<h2>Explore Your City</h2>
								</div>
								<div class="listar-description">
									<p>Explore top-rated attractions, activities, businesses, services and products around your city. We'll help you uncover the best places to eat, drink, and shop nearest to you.</p>
								</div>
							</div>
						</div>
						<div class="listar-themeposts listar-categoryposts">
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="listar-themepost listar-categorypost">
									<figure class="listar-featuredimg">
										<a href="/search/Port Harcourt/location">
											<img src="images/post/pexels-photo-936015.jpeg" alt="image description">
											<div class="listar-contentbox">
												<div class="listar-postcontent">
													<span class="listar-categoryicon listar-flip"><i class="icon-foods"></i></span>
													<h3>Rivers State</h3>
													<h4>
														63 Listings
														
												</h4>
												</div>
											</div>
										</a>
									</figure>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="listar-themepost listar-categorypost">
									<figure class="listar-featuredimg">
										<a href="/search/Owerri/location">
											<img src="images/post/pexels-photo-763934.jpeg" alt="image description">
											<div class="listar-contentbox">
												<div class="listar-postcontent">
													<span class="listar-categoryicon listar-flip"><i class="icon-tourism"></i></span>
													<h3>Imo State</h3>
													<h4>120 listing</h4>
												</div>
											</div>
										</a>
									</figure>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="listar-themepost listar-categorypost">
									<figure class="listar-featuredimg">
										<a href="/search/Aba/location">
											<img src="images/post/pexels-photo-936050.jpeg" alt="image description">
											<div class="listar-contentbox">
												<div class="listar-postcontent">
													<span class="listar-categoryicon listar-flip"><i class="icon-nightlife"></i></span>
													<h3>Aba</h3>
													<h4>Abia State</h4>
												</div>
											</div>
										</a>
									</figure>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="listar-themepost listar-categorypost">
									<figure class="listar-featuredimg">
										<a href="/search/Calabar/location">
											<img src="images/post/pexels-photo-1002309.jpeg" alt="image description">
											<div class="listar-contentbox">
												<div class="listar-postcontent">
													<span class="listar-categoryicon listar-flip"><i class="icon-entertainment"></i></span>
													<h3>Calabar</h3>
													<h4>Cross River</h4>
												</div>
											</div>
										</a>
									</figure>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="listar-themepost listar-categorypost">
									<figure class="listar-featuredimg">
										<a href="/search/Festac/location">
											<img src="images/post/pexels-photo-286744.jpeg" alt="image description">
											<div class="listar-contentbox">
												<div class="listar-postcontent">
													<span class="listar-categoryicon listar-flip"><i class="icon-localservice"></i></span>
													<h3>Festac</h3>
													<h4>Lagos</h4>
												</div>
											</div>
										</a>
									</figure>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="listar-themepost listar-categorypost">
									<figure class="listar-featuredimg">
										<a href="/search/Abuja/location">
											<img src="images/post/pexels-photo-108601.jpeg" alt="image description">
											<div class="listar-contentbox">
												<div class="listar-postcontent">
													<span class="listar-categoryicon listar-flip"><i class="icon-healthfitness"></i></span>
													<h3>Abuja</h3>
													<h4>FCT</h4>
												</div>
											</div>
										</a>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Explore The City End
			*************************************-->
			<!--************************************
					Best Theme Video Start
			*************************************-->
			<section class="listar-themeparallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/photo-744780.jpeg">
				<div class="listar-parallaxcolor">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-push-2 col-md-8 col-lg-push-2 col-lg-8">
								<div class="listar-videobox listar-prettyPhoto">
									<h2>Our Main Goal -<span>The One Stop Business  Solution</span></h2>
									<figure>
										<img src="images/photo-744780.jpeg" alt="image description">
										<figcaption>
											<a id="lister-video" class="listar-btnplay" href="https://mobile.facebook.com/hashtag/flashcards_netguba?_ft_=mf_story_key.564060324002356%3Atop_level_post_id.564060324002356%3Atl_objid.564060324002356%3Acontent_owner_id_new.489530394788683%3Athrowback_story_fbid.564060324002356%3Apage_id.489530394788683%3Aphoto_id.413994399183152%3Astory_location.4%3Astory_attachment_style.video_inline%3Apage_insights.%7B%22489530394788683%22%3A%7B%22role%22%3A1%2C%22page_id%22%3A489530394788683%2C%22post_context%22%3A%7B%22story_fbid%22%3A564060324002356%2C%22publish_time%22%3A1557253173%2C%22story_name%22%3A%22EntStatusCreationStory%22%2C%22object_fbtype%22%3A266%7D%2C%22actor_id%22%3A489530394788683%2C%22psn%22%3A%22EntStatusCreationStory%22%2C%22sl%22%3A4%2C%22dm%22%3A%7B%22isShare%22%3A0%2C%22originalPostOwnerID%22%3A0%7D%2C%22targets%22%3A%5B%7B%22page_id%22%3A489530394788683%2C%22actor_id%22%3A489530394788683%2C%22role%22%3A1%2C%22post_id%22%3A564060324002356%2C%22share_id%22%3A0%7D%5D%7D%7D%3Athid.489530394788683%3A306061129499414%3A2%3A0%3A1559372399%3A-2956799716100994536&__tn__=%2As-R&_rdr"><i class="icon-play3"></i></a>
										</figcaption>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Best Theme Video End
			*************************************-->
			<!--************************************
					Theme Features Start
			*************************************-->
		
	
	
			<!--************************************
					Explore The City End
			*************************************-->
			<!--************************************
					Discover New Places Start
			*************************************-->
					<section class="listar-sectionspace listar-overlapcontent listar-bglight listar-haslayout">
				<div class="container">
					<div class="row">
						<div class="listar-features">
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="listar-feature">
									<span class="listar-featureicon"><i class="icon-layers"></i></span>
									<h2><span class="listar-bluethemecolor">01</span> Find Business</h2>
									<div class="listar-description">
										<p>Find businesses offering the best products and services you are looking for.</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="listar-feature">
									<span class="listar-featureicon"><i class="icon-map3"></i></span>
								<!--	<h2><span class="listar-bluethemecolor">02</span> Find Location</h2>-->
									<div class="listar-description">
										<p>Get business addresses, contact information, user rating and reviews.




										</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="listar-feature">
									<span class="listar-featureicon"><i class="icon-hotairballoon"></i></span>
									<h2><span class="listar-bluethemecolor">03</span> Go have Fun</h2>
									<div class="listar-description">
										<p>Choose a business or service provider of your choice and go have fun.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Best Theme Video End
			*************************************-->
			<!--************************************
					Theme Features Start
			*************************************-->
		
	
	
			<!--************************************
					Explore The City End
			*************************************-->
			<!--************************************
					Discover New Places Start
			*************************************-->
				
			<!--************************************
					Theme Features End
			*************************************-->
			<!--************************************
					Explore The City Start
			*************************************-->
			<section class="listar-sectionspace listar-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-sectionhead">
								<div class="listar-sectiontitle">
									<h2>Latest Categories</h2>
								</div>
								<div class="listar-description">
									<p>Explore some of the best businesses with high value offering and customer satisfaction you can trust.<a class="listar-bluethemecolor" href="javascript:void(0);">See All Categories</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div id="listar-categoriespostslider" class="listar-themeposts listar-categoryposts listar-gridslider owl-carousel">
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/Boutique/category">
												<img src="images/post/pexels-photo-135620.jpeg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-foods"></i></span>
														<h3>Boutique</h3>
														<h4>32 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/Restaurants/category">
												<img src="images/post/cafe-chairs-menu-6267.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-nightlife"></i></span>
														<h3>Restaurants</h3>
														<h4>230 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/hotels/category">
												<img src="images/post/photo-271624er.jpeg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-tourism"></i></span>
														<h3>Hotels</h3>
														<h4>18 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/Grocery/category">
												<img src="images/post/pexels-photo-375897 (1).jpeg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-healthfitness"></i></span>
														<h3>Grocery</h3>
														<h4>1,232 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/Hospitals/category">
												<img src="images/post/bed-clinic-empty-236380.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-entertainment"></i></span>
														<h3>Hospitals</h3>
														<h4>67 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/Computer Services/category">
												<img src="images/post/photo-204611er.jpeg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-shopping"></i></span>
														<h3>Computer Services</h3>
														<h4>20 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="businesses/Laundry Service/category">
												<img src="images/post/pexels-photo-210892.jpeg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-foods"></i></span>
														<h3>Laundry Service</h3>
														<h4>1,320 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/Building Materials/category">
												<img src="images/post/architecture-building-construction-534220.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-nightlife"></i></span>
														<h3>Building Materials</h3>
														<h4>326 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/Car Dealers/category">
												<img src="images/post/pexels-photo-109361.jpeg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-tourism"></i></span>
														<h3>Car Dealers</h3>
														<h4>68 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/Event Organisers/category">
												<img src="images/post/photo-460537er.jpeg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-healthfitness"></i></span>
														<h3>Event Organisers</h3>
														<h4>11 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/Transport Companies/category">
												<img src="images/post/photo-109361er.jpeg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-entertainment"></i></span>
														<h3>Transport Companies</h3>
														<h4>345 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/Petrol Station/category">
												<img src="images/post/car-refill-transportation-transport.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-shopping"></i></span>
														<h3>Petrol Station</h3>
														<h4>2,453 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/Caters/category">
												<img src="images/post/img-07.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-foods"></i></span>
														<h3>Caters</h3>
														<h4>120 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/ATM Spots/category">
												<img src="images/post/atm-bank-banking-259200.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-nightlife"></i></span>
														<h3>ATM Spots</h3>
														<h4>86 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/Cinama/category">
												<img src="images/post/cinema-food-movie-theater-33129.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-tourism"></i></span>
														<h3>Cinema</h3>
														<h4>18 Listings</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/Weeding Planners/category">
												<img src="images/post/photo-67468ed.jpeg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-healthfitness"></i></span>
														<h3>Weeding Planners</h3>
														<h4>11 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/Barbers Shop/category">
												<img src="images/post/adult-barber-barbershop-897253.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-entertainment"></i></span>
														<h3>Barbers Shop</h3>
														<h4>1,340 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
									<div class="listar-themepost listar-categorypost">
										<figure class="listar-featuredimg">
											<a href="/businesses/Education/category">
												<img src="images/post/cabinet-discussing-facial-expression-1181398.jpg" alt="image description">
												<div class="listar-contentbox">
													<div class="listar-postcontent">
														<span class="listar-categoryicon listar-flip"><i class="icon-shopping"></i></span>
														<h3>Education</h3>
														<h4>20 Listing</h4>
													</div>
												</div>
											</a>
										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Explore The City End
			*************************************-->
			<!--************************************
					Discover New Places Start
			*************************************-->
			<section class="listar-sectionspace listar-bglight listar-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-sectionhead">
								<div class="listar-sectiontitle">
									<h2>Discover New Places</h2>
								</div>
								<div class="listar-description">
											<p>Choose from our curated list of service providers ready to do something awesome for you. Get business addresses, contact information, user rating and reviews.</p>
								</div>
							</div>
							<div class="listar-horizontalthemescrollbar">
								<div class="listar-themeposts listar-placesposts">


										@if(count($findFlagRatedBusiness) > 0)


								@foreach($findFlagRatedBusiness as $flagRatedBusiness)


						
									<div class="listar-themepost listar-placespost">
										<figure style="padding:12px;" class="listar-featuredimg"><a href="/business/{{ $flagRatedBusiness->businessName }}/detail"><img src="/storage/upload/dashboard/photos/{{$flagRatedBusiness->coverPhoto}}" style="width: 22em; height: 12em" alt="image description"></a></figure> <br> <br/><br/>
										<div class="listar-postcontent">
											<h3><a href="/business/{{ $flagRatedBusiness->businessName }}/detail">{{ $flagRatedBusiness->businessName }} </a>

												<i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i>

											</h3>
											<div class="listar-description">
												<p>
														@if(strlen($flagRatedBusiness->BusinessInfo) > 70)


													{!!substr($flagRatedBusiness->BusinessInfo, 0, 70).'..'!!}


													@endif
													
												</p>
											</div>
											<!--<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(3 Review)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-foods"></i>
													<span>Food and Drinks</span>
												</a>
											</div> -->
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em> {{$flagRatedBusiness->cityOfOperation }} </em>
												</a>


					
						<!--<span class="listar-contactnumber">
							<i class="icon-"><img src="images/icons/icon-03.png" alt="image description"></i>
							<em> {{ $flagRatedBusiness->businessPhoneNumber }}  </em>
						</span> -->

												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".{{ $flagRatedBusiness->id }} "><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
															<div class="listar-shareicons">
										<a href="@if($flagRatedBusiness->twitterUrl !== NULL){{'https://'.$flagRatedBusiness->twitterUrl}} @else javascript:void(0); @endif"><i class="fa fa-twitter"></i></a>

										<a href="@if($flagRatedBusiness->facebookUrl !== NULL){{'https://'.$flagRatedBusiness->facebookUrl}} @else javascript:void(0); @endif"><i class="fa fa-facebook"></i></a>
										
										<a href="@if($flagRatedBusiness->instagramUrl !== NULL){{'https://'.$flagRatedBusiness->instagramUrl}} @else javascript:void(0); @endif"><i class="fa fa-instagram"></i></a>
									</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>








	<div class="modal fade {{$flagRatedBusiness->id}}" tabindex="-1" role="dialog">
		<div class="modal-dialog listar-modaldialog" role="document">
			<div class="modal-content listar-modalcontent">
				<div class="listar-themepost listar-placespost">
					<span class="listar-btnclosequickview" data-toggle="modal" data-target=".{{$flagRatedBusiness->id}}">X</span>
					<figure class="listar-featuredimg" data-vide-bg="poster: images/post/img-16.jpg" data-vide-options="position: 50% 50%">
						<span class="listar-contactnumber">
							<i class="icon-"><img src="/images/icons/icon-03.png" alt="image description"></i>
							<em> {{ $flagRatedBusiness->businessPhoneNumber }}  </em>
						</span>
					</figure>
					<div class="listar-postcontent">
						<h3><a href="/business/{{ $flagRatedBusiness->businessName }}/detail"> {{$flagRatedBusiness->businessName }}  </a>

							<i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i>

						</h3>
						<div class="listar-description">
							<p>
								@if(strlen($flagRatedBusiness->BusinessInfo) > 39)


													{!!substr($flagRatedBusiness->BusinessInfo, 0, 70).'..'!!}


													@endif

							</p>
						</div>
						<ul class="listar-listfeatures">
							
							@if($flagRatedBusiness->streetParking == 'ON')
							<li> Street Parking </li>
							@endif
							
							@if($flagRatedBusiness->wifiService == 'ON')
							<li> wifi Service </li>
							@endif

							@if($flagRatedBusiness->airConditioning == 'ON')
							<li> Air Condition </li>
							@endif

							@if($flagRatedBusiness->cableTv == 'ON')
							<li> Cable Tv </li>
							@endif

							@if($flagRatedBusiness->sereneEnvironment == 'ON')
							<li> Serene Environment </li>
							@endif

							@if($flagRatedBusiness->POS == 'ON')
							<li> POS Service </li>
							@endif

							@if($flagRatedBusiness->suitableForEvents == 'ON')
							<li> Suitable For Events </li>
							@endif

						</ul>



						<!--<div class="listar-reviewcategory">
							<div class="listar-review">
								<span class="listar-stars"><span></span></span>
								<em>(3 Review)</em>
							</div>
							<a href="javascript:void(0);" class="listar-category">
								<i class="icon-tourism"></i>
								<span>Hotel</span>
							</a>
						</div> -->
						<div class="listar-themepostfoot">
							<span class="listar-openinghours">
								<i class="icon-alarmclock2"></i>
								<em>Monday <span class="listar-greenthemecolor">Work Time </span>

								@if($flagRatedBusiness->suitableForEvents !== NULL)
									{{$flagRatedBusiness->monOperationTime}}

									@else

										Closed 
							@endif

								</em>
							</span>

							<!--<span class="listar-openinghours">
								<i class="icon-alarmclock2"></i>
								<em>Monday <span class="listar-greenthemecolor">Open Work Hour(s)</span> 							@if($flagRatedBusiness->suitableForEvents !== NULL)
									{{$flagRatedBusiness->monOperationTime}}

									@else

									<em> Closed </em>
							@endif

						    </em>
							</span> -->



							<div class="listar-postbtns">
								<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
								<div class="listar-btnquickinfo">
									<div class="listar-shareicons">
										<a href="@if($flagRatedBusiness->twitterUrl !== NULL){{'./'.$flagRatedBusiness->facebookUrl}} @else javascript:void(0); @endif"><i class="fa fa-twitter"></i></a>

										<a href="@if($flagRatedBusiness->facebookUrl !== NULL){{'./'.$flagRatedBusiness->facebookUrl}} @else javascript:void(0); @endif"><i class="fa fa-facebook"></i></a>
										
										<a href="@if($flagRatedBusiness->instagramUrl !== NULL){{'./'.$flagRatedBusiness->facebookUrl}} @else javascript:void(0); @endif"><i class="fa fa-instagram"></i></a>
									</div>
									<a class="listar-btnshare" href="javascript:void(0);">
										<i class="icon-share3"></i>
									</a>
								</div>
							</div>

						</div>


					</div>
				</div>
			</div>
		</div>
	</div>














	@endforeach


								@endif


								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!--************************************
					Discover New Places End
			*************************************-->
			<!--************************************
					Add Listing Start
			*************************************-->
			<section class="listar-themeparallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/photo-744780.jpeg">
				<div class="listar-parallaxcolor listar-parallaxaddlisting">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-push-2 col-md-8 col-lg-push-2 col-lg-8">
			<div class="listar-addlisting">
				<h2>Run and Grow Your Business With NetGuba from Anywhere</h2>
									







@auth

								@if(Auth::user()->registrationPurpose ==='Business')
							
								</li>

								<a class="listar-btn listar-btngreen" href="/application/dashboard/profile">
										<i class="icon-plus"></i>
										<span>Dashboard</span>
									</a>

								@endif

								@endauth

								@guest
<a class="listar-btn listar-btngreen" href="{{ route('register') }}">
										
										<span>Add Listing</span>
									</a>

								@endguest























								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Add Listing End
			*************************************-->
			<!--************************************
					Blog Post Start
			*************************************-->
		

		
		
			<!--************************************
					Add Listing End
			*************************************-->
			<!--************************************
					Blog Post Start
			*************************************-->
			<section class="listar-sectionspace listar-haslayout listar-bglight">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-sectionhead">
								<div class="listar-sectiontitle">
									<h2>Latest News Posts</h2>
								</div>
								<div class="listar-description">
									<p>Checkout Latest News and Articles from <a class="listar-bluethemecolor" href="javascript:void(0);">Our Blog</a></p>
								</div>
							</div>
						</div>
						<div class="listar-themeposts listar-blogposts">
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="listar-themepost listar-post">
									<figure class="listar-featuredimg">
										<a href="javascript:void(0);"><img src="/images/post/pexels-photo-327173.jpeg" alt="image description"></a>
										<a class="listar-postcategory" href="javascript:void(0);">Business</a>
									</figure>
									<div class="listar-postcontent">
										<figure class="listar-authorimg"><img src="/images/author/img-01.jpg" height="54" width="54" alt="image description"></figure>
										<h3><a href="javascript:void(0);">8 Absolute Myth's About Starting A Business</a></h3>
										<div class="listar-themepostfoot">
											<time datetime="2017-08-08">
												<i class="icon-clock4"></i>
												<span>Apr 22, 2018</span>
											</time>
											<span class="listar-postcomment">
												<i class="icon-comment"></i>
												<span>12 Comments</span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="listar-themepost listar-post">
									<figure class="listar-featuredimg">
										<a href="javascript:void(0);"><img src="/images/post/pexels-photo-583846.jpeg" alt="image description"></a>
										<a class="listar-postcategory" href="javascript:void(0);">Finance</a>
									</figure>
									<div class="listar-postcontent">
										<figure class="listar-authorimg"><img src="/images/author/img-02.jpg" alt="image description"></figure>
										<h3><a href="javascript:void(0);">How To Start A Business With Little Resources</a></h3>
										<div class="listar-themepostfoot">
											<time datetime="2017-08-08">
												<i class="icon-clock4"></i>
												<span>Apr 22, 2018</span>
											</time>
											<span class="listar-postcomment">
												<i class="icon-comment"></i>
												<span>3 Comments</span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="listar-themepost listar-post">
									<figure class="listar-featuredimg">
										<a href="javascript:void(0);"><img src="/images/post/pexels-photo-346752.jpeg" alt="image description"></a>
										<a class="listar-postcategory" href="javascript:void(0);">Marketing</a>
									</figure>
									<div class="listar-postcontent">
										<figure class="listar-authorimg"><img src="/images/author/img-03.jpg" alt="image description"></figure>
										<h3><a href="javascript:void(0);">Best Tactic's To Win Potential Client Every Time</a></h3>
										<div class="listar-themepostfoot">
											<time datetime="2017-08-08">
												<i class="icon-clock4"></i>
												<span>Apr 22, 2018</span>
											</time>
											<span class="listar-postcomment">
												<i class="icon-comment"></i>
												<span>3 Comments</span>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Blog Post End
			*************************************-->
			<!--************************************
					Testimonials Start
			*************************************-->
			<section class="listar-sectionspace listar-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-sectionhead">
								<div class="listar-sectiontitle">
									<h2>People Feedback</h2>
								</div>
								<div class="listar-description">
									<p>What our Clients Says <a class="listar-bluethemecolor" href="javascript:void(0);">View All</a></p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-2 col-lg-8">
							<div id="listar-testimonialslider" class="listar-testimonialslider listar-testimonials owl-carousel">






									<div class="item listar-testimonial">
									<figure>
										<img src="images/author/pexels-photo-428.jpeg" alt="image description">
										<figcaption>
											<h3>Anonymous</h3>
											<h4><!--Manager at GreenTech--></h4>
										</figcaption>
									</figure>
									<blockquote>
										<h5>Classic Solution</h5>
										<q>You guys are simply the best, that ever happen to my business.
											With very little effort I now have clients calling for my laundry service within and outside my local region. Port Harcourt.
										</q>
									</blockquote>
								</div>


					
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Testimonials End
			*************************************-->
			<!--************************************
					Three Columns Start
			*************************************-->
			<section class="listar-haslayout">
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 pull-left">
					<div class="row">
						<div class="listar-postfirstlisting" style="background: url(/images/parallax/pexels-photo-1498008.JPEG) no-repeat;
	-webkit-background-size: cover;
			background-size: cover;">
							<figure><a href="javascript:void(0);"><img src="images/placeholder-03.png" alt="image description"></a></figure>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 pull-right">
					<div class="row">
						<div class="listar-followus" style="background: url(/images/parallax/pexels-photo-1586486.JPEG) no-repeat;
	-webkit-background-size: cover;
			background-size: cover;">
							<figure><a href="javascript:void(0);"><img src="images/placeholder-03.png" alt="image description"></a></figure>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="row">
						<div class="listar-newsletter" style="background: url(/images/parallax/pexels-photo-230557gh.JPEG) no-repeat;
	-webkit-background-size: cover;
			background-size: cover;">
							<div class="listar-newsletteroverlay">
								<h2>Newsletter</h2>
								<div class="listar-description">
									<p>Subscribe to stay on the know with latest information and improvement from us. We implement specialized components to <br/>help grow your expertise.</p>
								</div>
								<form class="listar-formtheme listar-formnewsletter" action="/email/Subscribtion" method="POST">

									@csrf

									<fieldset>
										<input type="email" required name="email" class="form-control" placeholder="Your email address">
										<input type="submit" value="Subscribe" class="btn btn-default" name="submit"><i></i>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Three Columns End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
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
		<script src="/js/vendor/jquery-2.1.4.min.js"></script>
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
	<script src="/js/users-page-like.js"></script>
</body>


</html>