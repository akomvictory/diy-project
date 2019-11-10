
			@extends('layouts.simple-header-footer')

			@section('content')
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="listar-main" class="listar-main listar-haslayout">
			<div id="listar-content" class="listar-content">
				<div class="listar-listing listar-listingvone">
					
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
						<div class="row">
							<div class="listar-listingarea">
								<div class="listar-innerpagesearch">
									<div class="listar-innersearch">
										<div class="listar-searchstatus"><h1><span>Search</span> Results Found</h1></div>
										<form class="listar-formtheme listar-formsearchlisting" action="/business/{searchterm}/{location}" method="get">
											<fieldset>
												<div class="form-group listar-inputwithicon">
													<i class="icon-icons185"></i>
													<input type="text" name="searchTerm" required id="listar-autosearch" class="form-control"  value="Restaurant">
												</div>

												<div class="form-group listar-inputwithicon">
													<i class="icon-icons185"></i>
													<input type="text" name="location" required id="listar-autosearch" class="form-control"  value="Abuja">
												</div>

											</fieldset>
											<fieldset>
												
											</fieldset>
											<fieldset>
												<div class="listar-leftbox">
													<a id="listar-btnadvancefeatures" class="listar-btnadvancefeatures" href="javascript:void(0);"><i class="icon-minus"></i><span>Advanced Features</span></a>
												</div>
											
												<div id="listar-advancefitures" class="listar-advancefitures">
													
													<span class="listar-checkbox">
														<input id="listar-freeparking" type="checkbox" name="streetParking" value="ON">
														<label for="listar-freeparking">Street Parking</label>
													</span>
													<span class="listar-checkbox">
														<input id="listar-cardpayment" type="checkbox" name="POS" value="ON">
														<label for="listar-cardpayment">POS Payment</label>
													</span>
													
													<span class="listar-checkbox">
														<input id="listar-wifi" type="checkbox" name="wifiService" value="ON">
														<label for="listar-wifi">Wi-Fi Service</label>
													</span>
													
													<span class="listar-checkbox">
														<input id="listar-balcony" type="checkbox" name="suitableForEvents" value="ON">
														<label for="listar-balcony">Suitable For Events</label>
													</span>
													<span class="listar-checkbox">
														<input id="listar-reservations" type="checkbox" name="airConditioning" value="ON">
														<label for="listar-reservations">Air Conditioning</label>
													</span>
													<span class="listar-checkbox">
														<input id="listar-snackbar" type="checkbox" name="cableTv" value="ON">
														<label for="listar-snackbar">Cable TV </label>
													</span>
													<span class="listar-checkbox">
														<input id="listar-familyfriendly" type="checkbox" name="sereneEnvironment" value="Family Friendly">
														<label for="listar-familyfriendly">Serene Environment</label>
													</span>
													
												</div>
											</fieldset>
											<button type="Submit" name="Submit" class="listar-btn listar-btngreen">Search</button>
										</form>
									</div>
								</div>






































								<div class="listar-themeposts listar-placesposts listar-gridview">
									

										@include('QueryModel.categoryQuery')



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

		
			@endsection()