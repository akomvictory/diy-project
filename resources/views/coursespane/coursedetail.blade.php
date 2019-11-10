
			@extends('layouts.simple-header-footer')

			@section('content')


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
						<!--	<form class="listar-formtheme listar-formsearchlisting">
								<fieldset>
									<div class="form-group listar-inputwithicon">
										<i class="icon-layers"></i>
										<div class="listar-select">
											<select id="listar-categorieschosen" class="listar-categorieschosen listar-chosendropdown">
												<option>Ex: Food, Retail, hotel, cinema</option>
												<option class="icon-entertainment">Art &amp; Entertainment</option>
												<option class="icon-shopping">Beauty &amp; Health</option>
												<option class="icon-study">Education</option>
												<option class="icon-healthfitness">Fitness</option>
												<option class="icon-icons240">Hotels</option>
												<option class="icon-localservice">Motor Mechanic</option>
												<option class="icon-nightlife">Night Life</option>
												<option class="icon-tourism">Restaurant</option>
												<option class="icon-shopping">Real Estate</option>
												<option class="icon-shopping">Shopping</option>
											</select>
										</div>
									</div>
									<div class="form-group listar-inputwithicon">
										<i class="icon-global"></i>
										<div class="listar-select listar-selectlocation">
											<select id="listar-locationchosen" class="listar-locationchosen listar-chosendropdown">
												<option>Choose a Location</option>
												<option>Lahore</option>
												<option>Bayonne</option>
												<option>Greenville</option>
												<option>Manhattan</option>
												<option>Queens</option>
												<option>The Heights</option>
											</select>
										</div>
									</div>
									<div class="form-group listar-inputwithicon">
										<i class=""><img src="images/icons/icon-01.png" alt="image description"></i>
										<p>Price: </p>
										<!-- <input id="listar-rangeslider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"> -->
										<input id="listar-rangeslider" class="listar-rangeslider" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14">
									</div>
									<button type="button" class="listar-btn listar-btngreen">Search Places</button>
								</fieldset>
							</form> -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Search End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->




		<main id="listar-main" class="listar-main listar-haslayout">
			<div id="listar-twocolumns" class="listar-twocolumns">
				<div class="listar-themepost listar-post listar-detail listar-postdetail">
					<figure class="listar-featuredimg">
						<img  src="/storage/upload/blog/photos/{{$post->courseCoverPhoto}}" alt="image description">
						<figcaption>
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="listar-postcontent">
											<div class="listar-postauthordpname">
												<span class="listar-postauthordp"><a href="javascript:void(0);"><img src="/storage/upload/blog/photos/{{$post->publisherPhoto}}" style="width: 18em; height: 8em" alt="image description"></a></span>
												<span class="listar-postauhorname"><a href="javascript:void(0);">{{$post->publisherName}}</a></span>
											</div>
											<time datetime="2017-08-08">
												<i class="icon-clock4"></i>
												<span>{{$post->updated_at->diffForHumans()}}</span>
											</time>
											<span class="listar-postcomment">
												<i class="icon-comment"></i>
												<span>3 Comments</span>
											</span>
											<div class="listar-btnquickinfo">
												<div class="listar-shareicons">
													<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
													<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
													<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
												</div>
												<a class="listar-btnshare" href="javascript:void(0);">
													<i class="icon-share3"></i>
													<span>Share</span>
												</a>
											</div>
											<h1>{{$post->postTitle}}</h1>
										</div>
									</div>
								</div>
							</div>
						</figcaption>
					</figure>
					<div class="clearfix"></div>
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-push-1 col-md-10 col-lg-push-1 col-lg-10">
								<div id="listar-detailcontent" class="listar-detailcontent">
									<div class="listar-description">
										<p>{!!$post->courseSectionOne!!}</p>


											<p>{!!$post->courseSectionTwo!!}</p>


											<blockquote>
										<p>{!!$post->courseSectionThree!!}</q>
										</blockquote>
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<figure class="listar-imgbox"><img src="/storage/upload/blog/photos/{{$post->coursePhotoOne}}" alt="image description"></figure>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
												<figure class="listar-imgbox"><img src="/storage/upload/blog/photos/{{$post->coursePhotoTwo}}" alt="image description"></figure>
											</div>
										</div>
										
									</div>
								
								
									<section class="listar-comments">
										<div class="listar-heading listar-headingvtwo">
										<!--	<h2>2 Responses</h2> -->
										</div>
										<ul id="listar-comments" class="listar-comments">

											@if(count($userReviews)>0)

											@foreach($userReviews as $review)
										
											
											<li>
												<div class="listar-comment">
													<figure><img src="/images/author/photo_15.png" alt="image description"></figure>
													<div class="listar-content">
														<div class="listar-commenthead">
															<div class="listar-author">
																<h3>{!!substr($review->reviewerName, 0, 14).'..'!!}</h3>
																<time datetime="2017-12-12">{{$review->updated_at->diffForHumans()}}</time>
															</div>
															<a class="listar-reply" href="javascript:void(0);">reply</a>
														</div>
														<div class="listar-description">
															<p>{!!$review->reviewerComment!!}</p>
														</div>
													</div>
												</div>
											</li> 

												@endforeach

												@else

												<p> No Comment Yet </p>

												@endif
										</ul>
									</section>
								<section class="listar-formreviewarea">
										<form class="listar-formtheme listar-formaddreview" method="POST" action="/course/user/review" enctype="multipart/form-data">

			 								 @csrf
											<fieldset>
												<div class="row">



													<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
														<div class="form-group">
															<input type="text" name="reviewerName" class="form-control" placeholder="Your Name">
														</div>
													</div>

													<input type="hidden" name="course_id" value="{{$post->id}}">

													<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
														<div class="form-group">
															<input type="text" name="reviewerEmail" class="form-control" placeholder="Email Address">
														</div>
													</div>



													
													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<div class="form-group">

															<textarea name="reviewerComment" class="form-control" placeholder="Message"></textarea>
														</div>
													</div>

													<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
														<button class="listar-btn listar-btngreen" type="submit" name="submit">Post Comment</button>
													</div>
												</div>
											</fieldset>
										</form>
									</section>
								</div>
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
	
	

			@endsection

