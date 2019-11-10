
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
									<h1>Search Category</h1>
								</div>
								<ol class="listar-breadcrumb">
									<li><a href="/">Home</a></li>
									
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
		<main id="listar-main" class="listar-main listar-innerspeace listar-bglight listar-haslayout">
			<div class="container">
				<div class="row">


					<div id="listar-content" class="listar-content">
						<div class="listar-posts listar-postsgrid listar-postsgridvone">
							

								@if(count($querySeven))

								@foreach($querySeven as $section)
							

							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="listar-themepost listar-post">
									<figure class="listar-featuredimg">
										<a href="/businesses/{{$section->slugTag}}/category"><img style="width:23em; height:10em;" src="/storage/upload/netcategory/photos/{{$section->categoryCoverPhoto}}" alt="image description"></a>
										<a class="listar-postcategory" href="/businesses/{{$section->slugTag}}/category">{{$section->slugTag}}</a>
									</figure>
									<div class="listar-postcontent">
										<figure class="listar-authorimg"><img src="/storage/upload/netcategory/photos/{{$section->categorySlugPhoto}}" height="54" width="54" alt="image description"></figure>
										<h2><a href="/businesses/{{$section->slugTag}}/category"> <td>  {!!substr($section->categoryTitle, 0, 11).'..'!!} </td></a></h2>

										<br/>
									<form action="/business/{searchterm}/{location}" method="GET">

											<label>Search:  <strong>{{$section->slugTag}}</strong> </label>
					<input type="hidden"  name="searchTerm" value="{{$section->slugTag}}" class="form-control">

											
										<label> Location:</label>
									<input type="text"  name="location" required placeholder="Abuja" class="form-control">
																
													

											<br/><br/>
										<input type="submit" name="Find" value="Search" class="btn btn-info">

									</form>

										<div class="listar-themepostfoot">
											<time datetime="2017-08-08">
												<i class="fa fa-street-view"></i>
												<span><!-- (All) --></span>
											</time>
											<span class="listar-postcomment">
											<!--	<i class="fa fa-map-marker"></i> -->
												<span> </span>
											</span>
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
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->

		
			@endsection()