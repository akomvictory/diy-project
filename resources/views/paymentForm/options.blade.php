
			@extends('layouts.simple-header-footer')

			@section('content')
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Inner Search Start
		*************************************-->

		<!--************************************
				Inner Search End
		*************************************-->
		<!--************************************
				Inner Banner Start
		*************************************-->
		<div class="listar-innerbanner">
			<div class="listar-parallaxcolor listar-innerbannerparallaxcolor">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-innerbannercontent">
								<div class="listar-pagetitle">
									<h1>Choose a Pricing Plan</h1>
								</div>
								<ol class="listar-breadcrumb">
									<li><a href="/">Home</a></li>
									<li class="listar-active"><span>Pricing Plan</span></li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->


	
			
		<main id="listar-main" class="listar-main listar-innerspeace listar-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div id="listar-content" class="listar-content">
							<div class="listar-pricingplans">
								<div class="listar-pricingplan">
									<div class="listar-pricingplanhead">
										<h2>Homestead</h2>
									</div>
									<div class="listar-pricingplanbody">
										<strong style="font-size:23px;"><sup></sup><!--Offer Last--></strong>
										<h4>Starter Plan</h4>
										<ul>
											<li>
												<i class="icon-checkmark"></i>
												<span>8 Search Keyword</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>Edit Your Listings</span>
											</li>
											<li class="listar-notinpkgplan">
												<i class="icon-cross"></i>
												<span>Featured Listing</span>
											</li>
												<li>
												<i class="icon-checkmark"></i>
												<span>Guba Handle</span>
											</li>
											<li>
												<i class="icon-cross"></i>
												<span>Unlimited Support</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>Accept Reviews</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>Online Store</span>
											</li>

											<li>
												<i class="icon-checkmark"></i>
												<span>9 Images</span>
											</li>
										</ul>
									</div>
									<div class="listar-pricingplanfoot">
										<form action="/payment/{{$postId}}/free" method="POST">
											
			@csrf

		@method('PUT')
									<button type="submit" class="listar-btn listar-btngreen" name="submit">	

									Get Started
									</button>

									</form>

									</div>
								</div>
							<!--	<div class="listar-pricingplan">
									<div class="listar-pricingplanhead">
										<h2>Basic</h2>
									</div>
									<div class="listar-pricingplanbody">
										<strong style="font-size:40px;"><sup>#</sup>1,000</strong>
										<h4>3 Months</h4>
										<ul>
											<li>
												<i class="icon-checkmark"></i>
												<span>Business Expo</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>Guba Handle</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>3 Categories</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>Featured Listing</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>Unlimited Support</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>Accept Reviews</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>4 keywords</span>
											</li>

											<li class="listar-notinpkgplan">
												<i class="icon-cross"></i>
												<span>Sub Domain</span>
											</li>
											<li class="listar-notinpkgplan">
												<i class="icon-cross"></i>
												<span>Online Store</span>
											</li>


											<li>
												<i class="icon-checkmark"></i>
												<span>Edit Your Listing</span>
											</li>
										</ul>
									</div>
								<div class="listar-pricingplanfoot">
										<a class="listar-btn listar-btngreen" href="../NetGuba-group-page/registration-form.php">In Progress</a>
									</div>
								</div> -->
							<!--	<div class="listar-pricingplan">
									<div class="listar-pricingplanhead">
										<h2>Extended</h2>
									</div>
									<div class="listar-pricingplanbody">
									 <strong style="font-size:40px;"><sup>#</sup>3,000</strong>
										<h4>8 Months</h4>
										<ul>
											<li>
												<i class="icon-checkmark"></i>
												<span>Online Store</span>
											</li>
<li>
												<i class="icon-checkmark"></i>
												<span>5 keywords</span>
											</li>


											
										
											<li>
												<i class="icon-checkmark"></i>
												<span>Featured Listing</span>
											</li>

											<li>
												<i class="icon-checkmark"></i>
												<span>5 Categories</span>
											</li>

											

											<li class="listar-notinpkgplan">
												<i class="icon-cross"></i>
												<span>Sub Domain</span>
											</li>
											<li>



												<i class="icon-checkmark"></i>
												<span>Unlimited Support</span>
											</li>

											<li>
												<i class="icon-checkmark"></i>
												<span>Guba Handle</span>
											</li>

											
											<li>
												<i class="icon-checkmark"></i>
												<span>Accept Reviews</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>Edit Your Listing</span>
											</li>
										</ul>
									</div>
								<div class="listar-pricingplanfoot">
										<a class="listar-btn listar-btngreen" href="../NetGuba-group-page/registration-form.php">In Progress</a>
									</div>
								</div> -->
							<!--	<div class="listar-pricingplan">
									<div class="listar-pricingplanhead">
										<h2>Professional</h2>
									</div>
									<div class="listar-pricingplanbody">
											 <strong style="font-size:40px;"><sup>#</sup>5,000</strong>
										<h4>18 Months</h4>
										<ul>
											
											<li>
												<i class="icon-checkmark"></i>
												<span>Featured Listing</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>7 Categories</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>Sub Domain </span>
											</li>

											<li>
												<i class="icon-checkmark"></i>
												<span>Online Store</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>Support Bulk SMS</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>Unlimited Support</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>Accept Reviews</span>
											</li>
											<li>
												<i class="icon-checkmark"></i>
												<span>Edit Your Listing</span>
											</li>
										</ul>
									</div>
								<div class="listar-pricingplanfoot">
										<a class="listar-btn listar-btngreen" href="../NetGuba-group-page/registration-form.php">In Progress</a>
									</div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->

			

			@endsection()