
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
							<form class="listar-formtheme listar-formsearchlisting" method="get" action="/business/{searchterm}/{location}">

									@csrf
									<fieldset>
										<div class="form-group listar-inputwithicon">
											<i class="icon-layers"></i>
											<div class="listar-select">
												<select required name="searchTerm" id="listar-categorieschosen" class="listar-categorieschosen listar-chosendropdown">
													<option>Hotels</option>
												
													@if(count($findInLocation)==1)

													@foreach($searchKeyword as $keyword)

													<option>{{$keyword->keywordOne}}</option>
													<option>{{$keyword->keywordtwo}}</option>
													<option>{{$keyword->keywordThree}}</option>
													<option>{{$keyword->keywordFour}}</option>
													<option>{{$keyword->keywordFive}}</option>
													<option>{{$keyword->keywordSix}}</option>
													<option>{{$keyword->keywordSeven}}</option>
													<option>{{$keyword->keywordEight}}</option>
													<option>{{$keyword->keywordOne}}</option>
													<option>{{$keyword->keywordOne}}</option>
													<option>{{$keyword->businessCategoryOne}}</option>


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
		<!--************************************
				Inner Search End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->


@if(count($queryFive)>0)

@foreach($queryFive as $business)

	<main id="listar-main" class="listar-main listar-haslayout">
			<div class="listar-themepost listar-placespost listar-detail listar-detailvone">
				<figure class="listar-featuredimg"><img src="/storage/upload/dashboard/photos/{{$business->coverPhoto}}" style="width:210em !important; height:39em !important;" alt="image description"></figure>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-postcontent">
								<h1>


									{{$business->businessName}} <i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verified"></i></h1>
								<div class="listar-reviewcategory">
									<div class="listar-review">
										<span class="listar-stars"><span></span></span>
										<em>(6 Review)</em>
									</div>
									<ul class="listar-postinfotags">
										<li><a href="javascript:void(0);"><i class="icon-heart2"></i><span>23</span></a></li>
										<li>
											<div class="listar-btnquickinfo">
												<a class="listar-btnshare" href="javascript:void(0);">
													<i class="icon-share3"></i>
													<span>share</span>
												</a>
												<div class="listar-btnquickinfo">
													<div class="listar-shareicons">

														<a href="@if($business->facebookUrl !== NULL){{'https://'.$business->facebookUrl}} @else javascript:void(0); @endif"><i class="fa fa-facebook"></i></a>

													<a href="@if($business->twitterUrl !== NULL){{'https://'.$business->twitterUrl}} @else javascript:void(0); @endif"><i class="fa fa-twitter"></i></a>


														<a href="@if($business->instagramUrl !== NULL){{'https://'.$business->instagramUrl}} @else javascript:void(0); @endif"><i class="fa fa-instagram"></i></a>

													</div>
												</div>
											</div>
										</li>
										<li><span class="listar-tagviews"><i class="icon-eye2"></i><span>52</span></span></li>
									</ul>
								</div>
								<div class="listar-themepostfoot">
									<ul>
										<li>
											<i class="icon-telephone114"></i>
											<span>{{$business->businessPhoneNumber}} </span>
										</li>
										<li>
											<i class="icon-icons74"></i>
											<span>{{$business->businessAddress}}</span>
										</li>
										
										<li>
											<i class="icon-global"></i>
											<span><a href="{{$business->businessWebUrl}}">{{$business->businessWebUrl}}</a></span>
										</li>
										<li>
											<i class="icon-telephone114"></i>
											<span><span>Guba Handle:</span> {{$business->gubaHandle}} </span>
										</li>
									</ul>
								</div>
							</div>
							<div class="listar-themetabs">
								<ul class="listar-themetabnav" role="tablist">
									<li role="presentation" class="active"><a href="#overview" aria-controls="overview" role="tab" data-toggle="tab">Overview</a></li>
								
									<li role="presentation"><a href="#location" aria-controls="location" role="tab" data-toggle="tab">Location</a></li>
									<li role="presentation"><a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">Reviews</a></li>

										<li role="presentation"><a href="/{{$business->businessName}}/store">Store</a></li>

									<li role="presentation"><a href="#gallery" aria-controls="gallery" role="tab" data-toggle="tab">Gallery</a></li>
								</ul>
								<div class="tab-content listar-themetabcontent">
									<div role="tabpanel" class="tab-pane active listar-overview" id="overview">
										<div class="listar-leftbox">
											<p> {!!$business->BusinessInfo!!} </p>
											<div class="listar-videobox">
												<iframe src="https://player.vimeo.com/video/234265016?byline=0&amp;portrait=0"></iframe>
											</div>
										</div>
										<div class="listar-rightbox">
											<div class="listar-amenitiesarea">
												<div class="listar-title">
													<h3>Amenities</h3>
												</div>
												<ul class="listar-amenities">
													
														@if($business->streetParking == 'ON')
														<li> Street Parking </li>
														@endif
														
														@if($business->wifiService == 'ON')
														<li> wifi Service </li>
													 	@endif
													   
													   @if($business->airConditioning == 'ON')
														<li> Air Condition </li>
														@endif
													
														@if($business->cableTv == 'ON')
														<li> Cable Tv </li>
														@endif

														@if($business->sereneEnvironment == 'ON')
														<li> Serene Environment </li>
														@endif

														@if($business->POS == 'ON')
														<li> POS Service </li>
														@endif
													
														@if($business->suitableForEvents == 'ON')
														<li> Suitable For Events </li>
														@endif
											
												</ul>
											</div>
											<div class="listar-openinghoursarea">
												<div class="listar-title">
													<h3>Opening Hours</h3>
												</div>
												<ul class="listar-openinghours">
													<li>
														<span>Monday</span>
														<span>{{$business->monOperationTime}}</span>
													</li>
													<li>
														<span>Tuesday</span>
														<span>{{$business->tueOperationTime}}</span>
													</li>
													<li>
														<span>Wednesday</span>
														<span>{{$business->wedOperationTime}}</span>
													</li>
													<li>
														<span>Thursday</span>
														<span>{{$business->thursOperationTime}}</span>
													</li>
													<li>
														<span>Friday</span>
														<span>{{$business->friOperationTime}}</span>
													</li>
													<li>
														<span>Saturday</span>
														<span>{{$business->satOperationTime}}</span>
													</li>
													<li>
														<span>Sunday</span>
														<span>{{$business->sunOperationTime}}</span>
													</li>
												</ul>
											</div>
										</div>
									</div>
								
									<div role="tabpanel" class="tab-pane listar-addressmaplocation" id="location">
										<div id="listar-postlocationmap" class="listar-postlocationmap"></div>
									</div>
									<div role="tabpanel" class="tab-pane" id="reviews">
										<ul id="listar-comments" class="listar-comments">
											
										
										
											<li>
												<div class="listar-comment">
													<div class="listar-commentauthorbox">
														<figure><a href="javascript:void(0);">

											<!--<img src="images/img-02.jpg" alt="image description"> -->
										</a></figure>
														<div class="listar-authorinfo">
															<h3>Katie</h3>
															<em>Family Vacation</em>
															<span class="listar-stars"><span></span></span>
														</div>
													</div>
													<a class="listar-helpful" href="javascript:void(0);">
														<i class="icon-thumb-up2"></i>
														<span>Helpful</span>
														<span>5</span>
													</a>
													<div class="listar-commentcontent">
														<time datetime="2017-09-09">
															<i class="icon-alarmclock"></i>
															<span>January 25, 2017</span>
														</time>
														<div class="listar-description">
															<p><!--Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo First, please don’t fall sick. However, if in case something does catchup.--></p>
														</div>
													</div>
												</div>
											</li>
										</ul>
										<nav class="listar-pagination">
											<ul>
												<li class="listar-prevpage"><a href="javascript:void(0);"><i class="fa fa-angle-left"></i></a></li>
												<li><a href="javascript:void(0);">1</a></li>
												<li><a href="javascript:void(0);">2</a></li>
												<li><a href="javascript:void(0);">3</a></li>
												<li class="listar-nextpage"><a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a></li>
											</ul>
										</nav>
										<div class="listar-formreviewarea">
											<h3>Add Review</h3>
											<form class="listar-formtheme listar-formaddreview">
												<fieldset>
													<div class="row">
														<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
															<div class="listar-rating">
																<p>Your rating for this listing</p>
																<span class="listar-stars"></span>
															</div>
														</div>
														<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
															<label class="listar-fileuploadlabel" for="listar-photogallery">
																<i class="icon-upload3"></i>
																<span>Upload Images</span>
																<input id="listar-photogallery" class="listar-fileinput" type="file" name="file">
															</label>
														</div>
														<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
															<div class="form-group">
																<input type="text" name="yourname" class="form-control" placeholder="Your Name">
															</div>
														</div>
														<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
															<div class="form-group">
																<input type="text" name="emailaddress" class="form-control" placeholder="Email Address">
															</div>
														</div>
														<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
															<div class="form-group">
																<span class="listar-select">
																	<select>
																		<option>Family Vacation</option>
																		<option>Family Vacation</option>
																		<option>Family Vacation</option>
																	</select>
																</span>
															</div>
														</div>
														<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
															<div class="form-group">
																<textarea name="review" class="form-control" placeholder="Review"></textarea>
															</div>
														</div>
														<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
															<button class="listar-btn listar-btngreen" type="button">Submit Review</button>
														</div>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
									<div role="tabpanel" class="tab-pane" id="gallery">
										<div id="listar-postgallery" class="listar-postgallery">

											
											<div class="listar-masnory"><figure><a href="/storage/upload/dashboard/photos/{{$business->PhotoOne}}" data-rel="prettyPhoto[gallery]"><img src="/storage/upload/dashboard/photos/{{$business->PhotoOne}}" alt="image description"></a></figure></div>
										

										<div class="listar-masnory"><figure><a href="/storage/upload/dashboard/photos/{{$business->Phototwo}}" data-rel="prettyPhoto[gallery]"><img src="/storage/upload/dashboard/photos/{{$business->Phototwo}}" alt="image description"></a></figure></div>



												<div class="listar-masnory"><figure><a href="/storage/upload/dashboard/photos/{{$business->PhotoThree}}" data-rel="prettyPhoto[gallery]"><img src="/storage/upload/dashboard/photos/{{$business->PhotoThree}}" alt="image description"></a></figure></div>



													<div class="listar-masnory"><figure><a href="/storage/upload/dashboard/photos/{{$business->PhotoFour}}" data-rel="prettyPhoto[gallery]"><img src="/storage/upload/dashboard/photos/{{$business->PhotoFour}}" alt="image description"></a></figure></div>



														<div class="listar-masnory"><figure><a href="/storage/upload/dashboard/photos/{{$business->PhotoFive}}" data-rel="prettyPhoto[gallery]"><img src="/storage/upload/dashboard/photos/{{$business->PhotoFive}}" alt="image description"></a></figure></div>



														<div class="listar-masnory"><figure><a href="/storage/upload/dashboard/photos/{{$business->PhotoSix}}" data-rel="prettyPhoto[gallery]"><img src="/storage/upload/dashboard/photos/{{$business->PhotoSix}}" alt="image description"></a></figure></div>


														<div class="listar-masnory"><figure><a href="/storage/upload/dashboard/photos/{{$business->PhotoSeven}}" data-rel="prettyPhoto[gallery]"><img src="/storage/upload/dashboard/photos/{{$business->PhotoSeven}}" alt="image description"></a></figure></div>

										<div class="listar-masnory"><figure><a href="/storage/upload/dashboard/photos/{{$business->PhotoEight}}" data-rel="prettyPhoto[gallery]"><img src="/storage/upload/dashboard/photos/{{$business->PhotoEight}}" alt="image description"></a></figure></div>

				

											<div class="listar-masnory"><figure><a href="/storage/upload/dashboard/photos/{{$business->PhotoNine}}" data-rel="prettyPhoto[gallery]"><img src="/storage/upload/dashboard/photos/{{$business->PhotoNine}}" alt="image description"></a></figure></div>


										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<!--	<section class="listar-sectionspace listar-bglight listar-listingvtwo listar-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="listar-title">
								<h3>Amenities</h3>
							</div>
							<div id="listar-relatedlistingslider" class="listar-relatedlistingslider listar-gridview owl-carousel">
								<div class="item">
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg">
											<img src="images/post/img-13.jpg" alt="image description">
											<div class="listar-postcontent">
												<h3><a href="javascript:void(0);">Tourist Guide</a></h3>
												<div class="listar-reviewcategory">
													<div class="listar-review">
														<span class="listar-stars"><span></span></span>
														<em>(3 Review)</em>
													</div>
													<a href="javascript:void(0);" class="listar-category">
														<i class="icon-nightlife"></i>
														<span>Night Life</span>
													</a>
												</div>
												<div class="listar-themepostfoot">
													<a class="listar-location" href="javascript:void(0);">
														<i class="icon-icons74"></i>
														<em>New York</em>
													</a>
													<div class="listar-postbtns">
														<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
														<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
														<div class="listar-btnquickinfo">
															<div class="listar-shareicons">
																<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
															</div>
															<a class="listar-btnshare" href="javascript:void(0);">
																<i class="icon-share3"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg">
											<img src="images/post/img-14.jpg" alt="image description">
											<div class="listar-postcontent">
												<h3><a href="javascript:void(0);">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verified"></i></h3>
												<div class="listar-reviewcategory">
													<div class="listar-review">
														<span class="listar-stars"><span></span></span>
														<em>(3 Review)</em>
													</div>
													<a href="javascript:void(0);" class="listar-category">
														<i class="icon-tourism"></i>
														<span>Hotel</span>
													</a>
												</div>
												<div class="listar-themepostfoot">
													<a class="listar-location" href="javascript:void(0);">
														<i class="icon-icons74"></i>
														<em>New York</em>
													</a>
													<div class="listar-postbtns">
														<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
														<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
														<div class="listar-btnquickinfo">
															<div class="listar-shareicons">
																<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
															</div>
															<a class="listar-btnshare" href="javascript:void(0);">
																<i class="icon-share3"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg">
											<img src="images/post/img-15.jpg" alt="image description">
											<div class="listar-postcontent">
												<h3><a href="javascript:void(0);">Tourist Guide</a></h3>
												<div class="listar-reviewcategory">
													<div class="listar-review">
														<span class="listar-stars"><span></span></span>
														<em>(3 Review)</em>
													</div>
													<a href="javascript:void(0);" class="listar-category">
														<i class="icon-foods"></i>
														<span>Food and Drinks</span>
													</a>
												</div>
												<div class="listar-themepostfoot">
													<a class="listar-location" href="javascript:void(0);">
														<i class="icon-icons74"></i>
														<em>New York</em>
													</a>
													<div class="listar-postbtns">
														<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
														<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
														<div class="listar-btnquickinfo">
															<div class="listar-shareicons">
																<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
															</div>
															<a class="listar-btnshare" href="javascript:void(0);">
																<i class="icon-share3"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg">
											<img src="images/post/img-13.jpg" alt="image description">
											<div class="listar-postcontent">
												<h3><a href="javascript:void(0);">Tourist Guide</a></h3>
												<div class="listar-reviewcategory">
													<div class="listar-review">
														<span class="listar-stars"><span></span></span>
														<em>(3 Review)</em>
													</div>
													<a href="javascript:void(0);" class="listar-category">
														<i class="icon-nightlife"></i>
														<span>Night Life</span>
													</a>
												</div>
												<div class="listar-themepostfoot">
													<a class="listar-location" href="javascript:void(0);">
														<i class="icon-icons74"></i>
														<em>New York</em>
													</a>
													<div class="listar-postbtns">
														<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
														<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
														<div class="listar-btnquickinfo">
															<div class="listar-shareicons">
																<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
															</div>
															<a class="listar-btnshare" href="javascript:void(0);">
																<i class="icon-share3"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg">
											<img src="images/post/img-14.jpg" alt="image description">
											<div class="listar-postcontent">
												<h3><a href="javascript:void(0);">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verified"></i></h3>
												<div class="listar-reviewcategory">
													<div class="listar-review">
														<span class="listar-stars"><span></span></span>
														<em>(3 Review)</em>
													</div>
													<a href="javascript:void(0);" class="listar-category">
														<i class="icon-tourism"></i>
														<span>Hotel</span>
													</a>
												</div>
												<div class="listar-themepostfoot">
													<a class="listar-location" href="javascript:void(0);">
														<i class="icon-icons74"></i>
														<em>New York</em>
													</a>
													<div class="listar-postbtns">
														<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
														<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
														<div class="listar-btnquickinfo">
															<div class="listar-shareicons">
																<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
															</div>
															<a class="listar-btnshare" href="javascript:void(0);">
																<i class="icon-share3"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg">
											<img src="images/post/img-15.jpg" alt="image description">
											<div class="listar-postcontent">
												<h3><a href="javascript:void(0);">Tourist Guide</a></h3>
												<div class="listar-reviewcategory">
													<div class="listar-review">
														<span class="listar-stars"><span></span></span>
														<em>(3 Review)</em>
													</div>
													<a href="javascript:void(0);" class="listar-category">
														<i class="icon-foods"></i>
														<span>Food and Drinks</span>
													</a>
												</div>
												<div class="listar-themepostfoot">
													<a class="listar-location" href="javascript:void(0);">
														<i class="icon-icons74"></i>
														<em>New York</em>
													</a>
													<div class="listar-postbtns">
														<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
														<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
														<div class="listar-btnquickinfo">
															<div class="listar-shareicons">
																<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
															</div>
															<a class="listar-btnshare" href="javascript:void(0);">
																<i class="icon-share3"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg">
											<img src="images/post/img-13.jpg" alt="image description">
											<div class="listar-postcontent">
												<h3><a href="javascript:void(0);">Tourist Guide</a></h3>
												<div class="listar-reviewcategory">
													<div class="listar-review">
														<span class="listar-stars"><span></span></span>
														<em>(3 Review)</em>
													</div>
													<a href="javascript:void(0);" class="listar-category">
														<i class="icon-nightlife"></i>
														<span>Night Life</span>
													</a>
												</div>
												<div class="listar-themepostfoot">
													<a class="listar-location" href="javascript:void(0);">
														<i class="icon-icons74"></i>
														<em>New York</em>
													</a>
													<div class="listar-postbtns">
														<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
														<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
														<div class="listar-btnquickinfo">
															<div class="listar-shareicons">
																<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
															</div>
															<a class="listar-btnshare" href="javascript:void(0);">
																<i class="icon-share3"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg">
											<img src="images/post/img-14.jpg" alt="image description">
											<div class="listar-postcontent">
												<h3><a href="javascript:void(0);">Serena Hotel</a><i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Verified"></i></h3>
												<div class="listar-reviewcategory">
													<div class="listar-review">
														<span class="listar-stars"><span></span></span>
														<em>(3 Review)</em>
													</div>
													<a href="javascript:void(0);" class="listar-category">
														<i class="icon-tourism"></i>
														<span>Hotel</span>
													</a>
												</div>
												<div class="listar-themepostfoot">
													<a class="listar-location" href="javascript:void(0);">
														<i class="icon-icons74"></i>
														<em>New York</em>
													</a>
													<div class="listar-postbtns">
														<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
														<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
														<div class="listar-btnquickinfo">
															<div class="listar-shareicons">
																<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
															</div>
															<a class="listar-btnshare" href="javascript:void(0);">
																<i class="icon-share3"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</figure>
									</div>
								</div>
								<div class="item">
									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg">
											<img src="images/post/img-15.jpg" alt="image description">
											<div class="listar-postcontent">
												<h3><a href="javascript:void(0);">Tourist Guide</a></h3>
												<div class="listar-reviewcategory">
													<div class="listar-review">
														<span class="listar-stars"><span></span></span>
														<em>(3 Review)</em>
													</div>
													<a href="javascript:void(0);" class="listar-category">
														<i class="icon-foods"></i>
														<span>Food and Drinks</span>
													</a>
												</div>
												<div class="listar-themepostfoot">
													<a class="listar-location" href="javascript:void(0);">
														<i class="icon-icons74"></i>
														<em>New York</em>
													</a>
													<div class="listar-postbtns">
														<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-placequickview"><i class="icon-expand"></i></a>
														<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
														<div class="listar-btnquickinfo">
															<div class="listar-shareicons">
																<a href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
																<a href="javascript:void(0);"><i class="fa fa-pinterest-p"></i></a>
															</div>
															<a class="listar-btnshare" href="javascript:void(0);">
																<i class="icon-share3"></i>
															</a>
														</div>
													</div>
												</div>
											</div>
										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>  -->
		</main>

		@endforeach



@endif

		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->



			@endsection()