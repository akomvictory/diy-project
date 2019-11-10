
									


							@if(count($datumOne)>0)

							@foreach($datumOne as $post)





									<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg"><a href="/business/{{$post->businessName}}/detail"><img style="width:23em; height:10em;" src="/storage/upload/dashboard/photos/{{$post->coverPhoto}}" alt="image description" class="mCS_img_loaded"></a></figure>
										<div class="listar-postcontent">
											<h3><a href="/business/{{$post->businessName}}/detail">{{substr($post->businessName, 0, 9).'..'}}</a></h3>
											<div class="listar-description">
												<p>{!!substr($post->BusinessInfo, 0, 40).'..'!!}</p>
											</div>
											<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(8 Reviews)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-foods"></i>
													<span>Open Category</span>
												</a>
											</div>
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em>{{$post->cityOfOperation}}</em>
												</a>
												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-tog{{$post->id}}gle"><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
														<div class="listar-shareicons">
															<a href="@if($post->twitterUrl !== NULL){{'https://'.$post->twitterUrl}} @else javascript:void(0); @endif"><i class="fa fa-twitter"></i></a>
															<a href="@if($post->facebookUrl !== NULL){{'https://'.$post->facebookUrl}} @else javascript:void(0); @endif"><i class="fa fa-facebook"></i></a>
															<a href="@if($post->instagramUrl !== NULL){{'https://'.$post->instagramUrl}} @else javascript:void(0); @endif"><i class="fa fa-instagram"></i></a>
														</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>



										<div class="modal fade listar-tog{{$post->id}}gle" tabindex="-1" role="dialog">
		<div class="modal-dialog listar-modaldialog" role="document">
			<div class="modal-content listar-modalcontent">
				<div class="listar-themepost listar-placespost">
					<span class="listar-btnclosequickview" data-toggle="modal" data-target=".listar-tog{{$post->id}}gle">X</span>
					<figure class="listar-featuredimg" data-vide-bg="poster: images/post/img-16.jpg" data-vide-options="position: 50% 50%">
						<span class="listar-contactnumber">
							<i class="icon-"><img src="/images/icons/icon-03.png" alt="image description"></i>
							<em> + {{$post->businessPhoneNumber}}</em>
						</span>
					</figure>
					<div class="listar-postcontent">
						<h3><a href="/business/{{$post->businessName}}/detail">{{substr($post->businessName, 0, 9).'..'}}</a>

						@if($post->ratingFlag ==='ON')
							<i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i>

							@else

							@endif

						</h3>
						<div class="listar-description">
							<p>{!!substr($post->BusinessInfo, 0, 40).'..'!!}</p>
						</div>
						<ul class="listar-listfeatures">
							
							@if($post->streetParking == 'ON')
							<li> Street Parking </li>
							@endif
							
							@if($post->wifiService == 'ON')
							<li> wifi Service </li>
							@endif

							@if($post->airConditioning == 'ON')
							<li> Air Condition </li>
							@endif

							@if($post->cableTv == 'ON')
							<li> Cable Tv </li>
							@endif

							@if($post->sereneEnvironment == 'ON')
							<li> Serene Environment </li>
							@endif

							@if($post->POS == 'ON')
							<li> POS Service </li>
							@endif

							@if($post->suitableForEvents == 'ON')
							<li> Suitable For Events </li>
							@endif

						</ul>

						<div class="listar-reviewcategory">
							<div class="listar-review">
								<span class="listar-stars"><span></span></span>
								<em>(8 Review)</em>
							</div>
							<a href="javascript:void(0);" class="listar-category">
								<i class="icon-tourism"></i>
								<span>Open category</span>
							</a>
						</div>
						<div class="listar-themepostfoot">
							<span class="listar-openinghours">
								<i class="icon-alarmclock2"></i>
								<em>Monday <span class="listar-greenthemecolor">Working Time</span> 
									{{$post->monOperationTime}}
								</em>
							</span>
							<div class="listar-postbtns">
								<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
								<div class="listar-btnquickinfo">
									<div class="listar-shareicons">
															<a href="@if($post->twitterUrl !== NULL){{'https://'.$post->twitterUrl}} @else javascript:void(0); @endif"><i class="fa fa-twitter"></i></a>
															<a href="@if($post->facebookUrl !== NULL){{'https://'.$post->facebookUrl}} @else javascript:void(0); @endif"><i class="fa fa-facebook"></i></a>
															<a href="@if($post->instagramUrl !== NULL){{'https://'.$post->instagramUrl}} @else javascript:void(0); @endif"><i class="fa fa-instagram"></i></a>
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

	
















	@elseif(count($datumTwo)>0)

	@foreach($datumTwo as $post)

		<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg"><a href="/business/{{$post->businessName}}/detail"><img style="width:23em; height:10em;" src="/storage/upload/dashboard/photos/{{$post->coverPhoto}}" alt="image description" class="mCS_img_loaded"></a></figure>
										<div class="listar-postcontent">
											<h3><a href="/business/{{$post->businessName}}/detail">{{substr($post->businessName, 0, 9).'..'}}</a></h3>
											<div class="listar-description">
												<p>{!!substr($post->BusinessInfo, 0, 40).'..'!!}</p>
											</div>
											<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(8 Reviews)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-foods"></i>
													<span>Open Category</span>
												</a>
											</div>
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em>{{$post->cityOfOperation}}</em>
												</a>
												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-tog{{$post->id}}gle"><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
														<div class="listar-shareicons">
															<a href="@if($post->twitterUrl !== NULL){{'https://'.$post->twitterUrl}} @else javascript:void(0); @endif"><i class="fa fa-twitter"></i></a>
															<a href="@if($post->facebookUrl !== NULL){{'https://'.$post->facebookUrl}} @else javascript:void(0); @endif"><i class="fa fa-facebook"></i></a>
															<a href="@if($post->instagramUrl !== NULL){{'https://'.$post->instagramUrl}} @else javascript:void(0); @endif"><i class="fa fa-instagram"></i></a>
														</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>



										<div class="modal fade listar-tog{{$post->id}}gle" tabindex="-1" role="dialog">
		<div class="modal-dialog listar-modaldialog" role="document">
			<div class="modal-content listar-modalcontent">
				<div class="listar-themepost listar-placespost">
					<span class="listar-btnclosequickview" data-toggle="modal" data-target=".listar-tog{{$post->id}}gle">X</span>
					<figure class="listar-featuredimg" data-vide-bg="poster: images/post/img-16.jpg" data-vide-options="position: 50% 50%">
						<span class="listar-contactnumber">
							<i class="icon-"><img src="/images/icons/icon-03.png" alt="image description"></i>
							<em> + {{$post->businessPhoneNumber}}</em>
						</span>
					</figure>
					<div class="listar-postcontent">
						<h3><a href="/business/{{$post->businessName}}/detail">{{substr($post->businessName, 0, 9).'..'}}</a>
                   @if($post->ratingFlag ==='ON')
							<i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i>

							@else

							@endif

						</h3>
						<div class="listar-description">
							<p>{!!substr($post->BusinessInfo, 0, 40).'..'!!}</p>
						</div>
						<ul class="listar-listfeatures">
							
							@if($post->streetParking == 'ON')
							<li> Street Parking </li>
							@endif
							
							@if($post->wifiService == 'ON')
							<li> wifi Service </li>
							@endif

							@if($post->airConditioning == 'ON')
							<li> Air Condition </li>
							@endif

							@if($post->cableTv == 'ON')
							<li> Cable Tv </li>
							@endif

							@if($post->sereneEnvironment == 'ON')
							<li> Serene Environment </li>
							@endif

							@if($post->POS == 'ON')
							<li> POS Service </li>
							@endif

							@if($post->suitableForEvents == 'ON')
							<li> Suitable For Events </li>
							@endif

						</ul>

						<div class="listar-reviewcategory">
							<div class="listar-review">
								<span class="listar-stars"><span></span></span>
								<em>(8 Review)</em>
							</div>
							<a href="javascript:void(0);" class="listar-category">
								<i class="icon-tourism"></i>
								<span>Open category</span>
							</a>
						</div>
						<div class="listar-themepostfoot">
							<span class="listar-openinghours">
								<i class="icon-alarmclock2"></i>
								<em>Mon <span class="listar-greenthemecolor">Working Time</span> 
									{{$post->monOperationTime}}
								</em>
							</span>
							<div class="listar-postbtns">
								<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
								<div class="listar-btnquickinfo">
									<div class="listar-shareicons">
															<a href="@if($post->twitterUrl !== NULL){{'https://'.$post->twitterUrl}} @else javascript:void(0); @endif"><i class="fa fa-twitter"></i></a>
															<a href="@if($post->facebookUrl !== NULL){{'https://'.$post->facebookUrl}} @else javascript:void(0); @endif"><i class="fa fa-facebook"></i></a>
															<a href="@if($post->instagramUrl !== NULL){{'https://'.$post->instagramUrl}} @else javascript:void(0); @endif"><i class="fa fa-instagram"></i></a>
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







	@elseif(count($datumThree)>0)

	@foreach($datumThree as $post)

		<div class="listar-themepost listar-placespost">
										<figure class="listar-featuredimg"><a href="/business/{{$post->businessName}}/detail"><img style="width:23em; height:10em;" src="/storage/upload/dashboard/photos/{{$post->coverPhoto}}" alt="image description" class="mCS_img_loaded"></a></figure>
										<div class="listar-postcontent">
											<h3><a href="/business/{{$post->businessName}}/detail">{{substr($post->businessName, 0, 9).'..'}}</a></h3>
											<div class="listar-description">
												<p>{!!substr($post->BusinessInfo, 0, 40).'..'!!}</p>
											</div>
											<div class="listar-reviewcategory">
												<div class="listar-review">
													<span class="listar-stars"><span></span></span>
													<em>(8 Reviews)</em>
												</div>
												<a href="javascript:void(0);" class="listar-category">
													<i class="icon-foods"></i>
													<span>Open Category</span>
												</a>
											</div>
											<div class="listar-themepostfoot">
												<a class="listar-location" href="javascript:void(0);">
													<i class="icon-icons74"></i>
													<em>{{$post->cityOfOperation}}</em>
												</a>
												<div class="listar-postbtns">
													<a class="listar-btnquickinfo" href="#" data-toggle="modal" data-target=".listar-tog{{$post->id}}gle"><i class="icon-expand"></i></a>
													<a class="listar-btnquickinfo" href="javascript:void(0);"><i class="icon-heart2"></i></a>
													<div class="listar-btnquickinfo">
														<div class="listar-shareicons">
															<a href="@if($post->twitterUrl !== NULL){{'https://'.$post->twitterUrl}} @else javascript:void(0); @endif"><i class="fa fa-twitter"></i></a>
															<a href="@if($post->facebookUrl !== NULL){{'https://'.$post->facebookUrl}} @else javascript:void(0); @endif"><i class="fa fa-facebook"></i></a>
															<a href="@if($post->instagramUrl !== NULL){{'https://'.$post->instagramUrl}} @else javascript:void(0); @endif"><i class="fa fa-instagram"></i></a>
														</div>
														<a class="listar-btnshare" href="javascript:void(0);">
															<i class="icon-share3"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>



										<div class="modal fade listar-tog{{$post->id}}gle" tabindex="-1" role="dialog">
		<div class="modal-dialog listar-modaldialog" role="document">
			<div class="modal-content listar-modalcontent">
				<div class="listar-themepost listar-placespost">
					<span class="listar-btnclosequickview" data-toggle="modal" data-target=".listar-tog{{$post->id}}gle">X</span>
					<figure class="listar-featuredimg" data-vide-bg="poster: images/post/img-16.jpg" data-vide-options="position: 50% 50%">
						<span class="listar-contactnumber">
							<i class="icon-"><img src="/images/icons/icon-03.png" alt="image description"></i>
							<em> + {{$post->businessPhoneNumber}}</em>
						</span>
					</figure>
					<div class="listar-postcontent">
						<h3><a href="/business/{{$post->businessName}}/detail">{{substr($post->businessName, 0, 9).'..'}}</a>

							@if($post->ratingFlag ==='ON')
							<i class="icon-checkmark listar-postverified listar-themetooltip" data-toggle="tooltip" data-placement="top" title="Verified"></i>

							@else

							@endif

						</h3>
						<div class="listar-description">
							<p>{!!substr($post->BusinessInfo, 0, 40).'..'!!}</p>
						</div>
						<ul class="listar-listfeatures">
							
							@if($post->streetParking == 'ON')
							<li> Street Parking </li>
							@endif
							
							@if($post->wifiService == 'ON')
							<li> wifi Service </li>
							@endif

							@if($post->airConditioning == 'ON')
							<li> Air Condition </li>
							@endif

							@if($post->cableTv == 'ON')
							<li> Cable Tv </li>
							@endif

							@if($post->sereneEnvironment == 'ON')
							<li> Serene Environment </li>
							@endif

							@if($post->POS == 'ON')
							<li> POS Service </li>
							@endif

							@if($post->suitableForEvents == 'ON')
							<li> Suitable For Events </li>
							@endif

						</ul>

						<div class="listar-reviewcategory">
							<div class="listar-review">
								<span class="listar-stars"><span></span></span>
								<em>(8 Review)</em>
							</div>
							<a href="javascript:void(0);" class="listar-category">
								<i class="icon-tourism"></i>
								<span>Open category</span>
							</a>
						</div>
						<div class="listar-themepostfoot">
							<span class="listar-openinghours">
								<i class="icon-alarmclock2"></i>
								<em>Mon <span class="listar-greenthemecolor">Work Time</span> 
									{{$post->monOperationTime}}
								</em>
							</span>
							<div class="listar-postbtns">
								<a class="listar-btnquickinfo listar-liked" href="javascript:void(0);"><i class="icon-heart2"></i></a>
								<div class="listar-btnquickinfo">
									<div class="listar-shareicons">
															<a href="@if($post->twitterUrl !== NULL){{'https://'.$post->twitterUrl}} @else javascript:void(0); @endif"><i class="fa fa-twitter"></i></a>
															<a href="@if($post->facebookUrl !== NULL){{'https://'.$post->facebookUrl}} @else javascript:void(0); @endif"><i class="fa fa-facebook"></i></a>
															<a href="@if($post->instagramUrl !== NULL){{'https://'.$post->instagramUrl}} @else javascript:void(0); @endif"><i class="fa fa-instagram"></i></a>
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

