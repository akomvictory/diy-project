
      @extends('layouts.dashbord-business-user-layout-one')

      @section('contentone')




		<main id="listar-main" class="listar-main listar-haslayout">


			<!--************************************
					Dashboard Banner Start


			*************************************-->

			 <form action="/application/dashboard/{{$refurbish->id}}/refurbish" method="POST" enctype="multipart/form-data">

			 	@method('PUT')

			 	 @csrf


			<div class="listar-dashboardbanner">
		
			



   <div id="rms-wizard" class="rms-wizard defaultTheme">
   <!--Wizard Container-->
    <div class="rms-container">
       <!--Wizard Header-->
        <div class="rms-wizard-header">
          <ul> 

          <ol> <h2 class="title"><span>Business Fast Track >></span> Promote your business to target customers who need your services or products. </h2>
Turn your visitors into paying customers with exciting offers and services on your page.

          </ol>



          </ul>
        </div>
        <!--Wizard Header Close--> 
        <div class="rms-form-wizard">
           <!--Wizard Step Navigation Start-->
            <div class="rms-step-section compeletedStepClickable" data-step-counter="true" data-step-image="false">
                <ul class="rms-multistep-progressbar"> 
                    <li class="rms-step rms-current-step">
                        <span class="step-icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <span class="step-title">Company Information</span>
                        <span class="step-info">Enter your company basic information </span>
                    </li> 
                    <li class="rms-step ">
                        <span class="step-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <span class="step-title">Company Expertise</span>
                        <span class="step-info">Enter information that identifies your business</span>
                    </li>
                    <li class="rms-step ">
                        <span class="step-icon ml10"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                        <span class="step-title">Additional Information</span>
                        <span class="step-info">Enter information that describe your business</span>
                    </li>
                    <li class="rms-step ">
                        <span class="step-icon"><i class="fa fa-file-text" aria-hidden="true"></i></span>
                        <span class="step-title">Confirm Your Details</span>
                        <span class="step-info">Enter your first time username password details</span>
                    </li>
                </ul>

            </div>
            <!--Wizard Navigation Close-->
            <!--Wizard Content Section Start-->


            <div class="rms-content-section">
                <div class="rms-content-box rms-current-section">
                	            <div class="rms-content-area animated fadeIn"> 
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-lock" aria-hidden="true"></i> Business</b> Information</div>
                            <div class="step-label">Step 1 - 4 </div> 
                        </div>


                        	@if (count($errors))
				  <div class="panel panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading">Check Information</div>
				  <div class="panel-body">

				  
				It seems they were mis-information in your application, we advice you <br/>
				make some changes and try again. <span class="fa fa-cogs"> </span> 
				  </div>

				  <div class="alert alert-danger">

				  <!-- List group -->
				  <ul>

				  		@foreach($errors->all() as $error)

				    <li class="list-group-item"> {{ $error }} </li>
				  
				         @endforeach
				  </ul>

                   </div>

				</div>

				@else

				<script type="text/javascript">

alert("Please make sure to follow the step appropriately as designated by the pop-up alert for each input field, especially pertaining minimum and maximum characters required, failure to do so will result to your application not being submitted");


</script>

@endif



                       
                        <div class="rms-content-body"> 
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                   <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                                <label for="company name">Business Name* {{$refurbish->businessName}} </label>
                                            <div class="inpt-group">
                                                <span class="inpt-group-addon"><i aria-hidden="true"></i></span> 
                                                <input type="hidden" readonly name="businessName" value="{{$refurbish->businessName}}"  id="username" class="inpt-control" placeholder="e.g NetGuba Inc."> 
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do you need this guide?</span>
                                                        <p class="tooptip-content">Enter only business name. Any other info will attract a penalty. This field only accept 90char maximum and 9char minimum</p>
                                                        <span class="tooltip-info">
                                                        Your information is Safe here &amp; never shared.</span>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                               


                                           <div class="row">
                                        <div class="col-md-6">
                                            <div class="inpt-form-group"> 
                                               <label>Venture Category(s)*</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                                                   <input type="text" value="{{$refurbish->businessCategoryOne}}" name="businessCategoryOne"  id="bus_catGo" class="inpt-control" placeholder="Baby Shop">
                                                   <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do you need this guide?</span>
                                                       <p class="tooptip-content"> Multiple business category should be separated with commas e.g baby shop, men clothing. This field only accept 85char maximum and 4char minimum</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>

                                           <div class="col-md-6">
                                            <div class="inpt-form-group"> 
                                               <label>Business Address*</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></span>
                                                   <input type="text" value="{!!$refurbish->businessAddress!!}" name="businessAddress" id="bus_adD" class="inpt-control" placeholder="No1 zx Avenue, Owerri">
                                                   <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do you need this guide?</span>
                                                       <p class="tooptip-content">
                                                      Enter full address of your company. e.g 163xw avenue Wuse II Abuja. This field only accept 95char maximum and 8char minimum</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared. </span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                  

                                  
                          
                                          <div class="row">
                                   <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                                <label>Business Description / About*</label>
                                            <div class="inpt-group">
                                                <span class="inpt-group-addon"><i class="fa fa-building-o" aria-hidden="true"></i></span> 
                                      <textarea name="BusinessInfo" id="com_desC"  id="article-ckeditor" class="inpt-control"> {{$refurbish->BusinessInfo}} </textarea>
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this guide?</span>
                                                        <p class="tooptip-content"> Use professional grammar to describe and express your business expertise. This field only accept 600char maximum and 100char minimum</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    
                                    <div class="row">
                            
        <div class="col-md-6">
                                            <div class="inpt-form-group"> 
                                               <label for="state">State Select*</label>
                                                <div class="inpt-group dropdown-select-icon"> 
                                                   <select name="stateOfOperation" id="state" class="inpt-control"">
                       <option value="" disabled="" selected="">Select State</option>
                                <option>Abia</option>
                    <option>Adamawa</option>
                    <option>Akwa Ibom</option>
                    <option>Anambra</option>
                    <option>Bauchi</option>
                    <option>Bayelsa</option>
                    <option>Benue</option>
                    <option>Borno</option>
                    <option>Cross River</option>
                    <option>Delta</option>
                    <option>Ebonyi</option>
                    <option>Edo</option>
                    <option>Ekiti</option>
                    <option>Enugu</option>
                    <option>Gombe</option>
                    <option>Imo</option>
                    <option>Jigawa</option>
                    <option>Kaduna</option>
                    <option>Kano</option>
                    <option>Katsina</option>
                    <option>Kebbi</option>
                    <option>Kogi</option>
                    <option>Kwara</option>
                    <option>Lagos</option>
                    <option>Nasarawa</option>
                    <option>Niger</option>
                    <option>Ogun</option>
                    <option>Ondo</option>
                    <option>Osun</option>
                    <option>Oyo</option>
                    <option>Plateau</option>
                    <option>Rivers</option>
                    <option>Sokoto</option>
                    <option>Taraba</option>
                    <option>Yobe</option>
                    <option>Zamfara</option>
                    <option>Abuja FCT</option>
                                    </select> 
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">Choose a a state where your business or main branch is located at. This field is required.</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                   </div> 
                                                </div> 
                                            </div>
                                         </div>
                              <div class="col-md-6">
                                            <div class="inpt-form-group"> 
                                               <label>City or Town</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-map-o" aria-hidden="true"></i></span>
                                                   <input type="text" value="{{$refurbish->cityOfOperation}}"  name="cityOfOperation" id="website" class="inpt-control" placeholder="Abuja">
                                                   <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">
                                                       	Enter the city or town where your business is located at.
                                                       	This field only accept 86char maximum and 2char minimum
                                                       </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                         
                                      
                               

                                           <div class="row">
                                  <div class="col-md-8">
                                            <div class="inpt-form-group"> 
                                               <label>Website</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-skyatlas" aria-hidden="true"></i></span>
                                                   <input type="text" value="{{$refurbish->businessWebUrl}}" name="businessWebUrl" id="website" class="inpt-control"   placeholder="Example: http://www.yourwebsite.com">
                                                   <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">
                                                       	Input your business website url.
                                                       	This field only accept 86char maximum and 10char minimum
                                                       </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>

                                                 <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                               <label for="phone Number">Phone Number</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                   <input type="text" name="businessPhoneNumber"  id="phone_number" class="inpt-control" name="{{$refurbish->businessPhoneNumber}}" placeholder="Please Enter your phone Number">
                                                   <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">Enter your company phone number.This field only accept 20char maximum and 11char minimum </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>

                                           <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                               <label>Business Email</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                   <input type="text" name="businessEmailUrl" value="{{$refurbish->businessEmailUrl}}"  id="email" class="inpt-control" placeholder="Ex NetGuba@gmail.com">
                                                   <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">Input your company email address . This will be used for enquiries. This field only accept 87char maximum and 7char minimum </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                   </div>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                </div>  
                                
                            </div> 
                        </div> 
                    </div>


                </div>
                <div class="rms-content-box">
                     <div class="rms-content-area">
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-user" aria-hidden="true"></i> Visibility</b> Information</div>
                            <div class="step-label">Step 2 - 4 </div> 
                        </div>
                         <div class="rms-content-body"> 
                             <div class="row">
                                 <div class="col-md-8">
                                    <div class="row">
                                    <div class="col-md-4">
                                           <div class="inpt-form-group"> 

                                               <label for="guba handle">Guba Handle</label>
                                               <div class="inpt-group">
                                               	  	 <span class="inpt-group-addon"><i class="fa fa-search-minus" aria-hidden="true"></i></span>
                                                   <input type="text" value="{{$refurbish->gubaHandle}}"  name="gubaHandle" id="guba_handle" class="inpt-control" placeholder="Ex emylpizza">
                                                   <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">This field only accept 32char maximum and 4char minimum </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                               <div class="col-md-4">
                                           <div class="inpt-form-group"> 
                                               <label for="keyword one">Search Keyword 1</label>
                                               <div class="inpt-group">
                                               		 <span class="inpt-group-addon"><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                                                   <input type="text" value="{{$refurbish->keywordOne}}" name="keywordOne" maxlength="45" minlength="3" id="keyword" class="inpt-control" placeholder="Fast Food">
                                                   <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">This field only accept 45char maximum and 3char minimum </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>

                                          <div class="col-md-4">
                                           <div class="inpt-form-group"> 
                                               <label for="keyword one">Search Keyword 2</label>
                                               <div class="inpt-group">
                                               		 <span class="inpt-group-addon"><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                                                   <input type="text" value="{{$refurbish->keywordtwo}}" name="keywordtwo" id="keyword" class="inpt-control" placeholder="Baby Wears">
                                                   <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">This field only accept 45char maximum and 3char minimum </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>

                                    </div>

                                     <div class="row">
                                  <div class="col-md-4">
                                           <div class="inpt-form-group"> 
                                               <label for="keyword one">Search Keyword 3</label>
                                               <div class="inpt-group">
                                               		 <span class="inpt-group-addon"><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                                                   <input type="text" value="{{$refurbish->keywordThree}}" name="keywordThree" maxlength="45" minlength="3" id="keyword" class="inpt-control" placeholder="Italian Shoe">
                                                   <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">This field only accept 45char maximum and 3char minimum </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                               <div class="col-md-4">
                                           <div class="inpt-form-group"> 
                                               <label for="keyword one">Search Keyword 4</label>
                                               <div class="inpt-group">
                                               		 <span class="inpt-group-addon"><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                                                   <input type="text" value="{{$refurbish->keywordFour}}" name="keywordFour" maxlength="45" minlength="3" id="keyword" class="inpt-control" placeholder="Men Suits">
                                                   <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">This field only accept 45char maximum and 3char minimum </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>

                                            <div class="col-md-4">
                                           <div class="inpt-form-group"> 
                                               <label for="keyword one">Search Keyword 5</label>
                                               <div class="inpt-group">
                                               		 <span class="inpt-group-addon"><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                                                   <input type="text" value="{{$refurbish->keywordFive}}" name="keywordFive" maxlength="45" minlength="3" id="keyword" class="inpt-control" placeholder="Groceries">
                                                   <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">This field only accept 45char maximum and 3char minimum </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>


                                    </div>




                                        <div class="row">
                                  <div class="col-md-4">
                                           <div class="inpt-form-group"> 
                                               <label for="keyword one">Search Keyword 6</label>
                                               <div class="inpt-group">
                                               		 <span class="inpt-group-addon"><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                                                   <input type="text" name="keywordSix"  value="{{$refurbish->keywordSix}}" id="keyword" class="inpt-control" placeholder="Electronics">
                                                   <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">This field only accept 45char maximum and 3char minimum </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                               <div class="col-md-4">
                                           <div class="inpt-form-group"> 
                                               <label for="keyword one">Search Keyword 7</label>
                                               <div class="inpt-group">
                                               		 <span class="inpt-group-addon"><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                                                   <input type="text" value="{{$refurbish->keywordSeven}}" name="keywordSeven"  id="keyword" class="inpt-control" placeholder="Gadget">
                                                   <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">This field only accept 45char maximum and 3char minimum </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>

                                            <div class="col-md-4">
                                           <div class="inpt-form-group"> 
                                               <label for="keyword one">Search Keyword 8</label>
                                               <div class="inpt-group">
                                               		 <span class="inpt-group-addon"><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                                                   <input type="text" value="{{$refurbish->keywordEight}}" name="keywordEight" maxlength="45" minlength="3" id="keyword" class="inpt-control" placeholder="Stationery">
                                                   <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">This field only accept 45char maximum and 3char minimum </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>


                                    </div>
                            
                                        
                                        <div class="row">
                                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
										<div class="form-group listar-dashboardfield">
											<h4>Amenities</h4>
											<ul class="listar-amenities">
												<li><p><input type="checkbox" value="ON" id="amenities3" name="streetParking">
                                    <label for="amenities3">Street Parking</label></p></li>
												
												<li><p><input type="checkbox" value="ON" id="amenities3" name="wifiService">
                                    <label for="amenities3">Wi-fi Service</label></p></li>


                                    <li><p><input type="checkbox" value="ON" id="amenities3" name="airConditioning">
                                    <label for="amenities3">Air Conditioning</label></p></li>
										
										<li><p><input type="checkbox" value="ON" id="amenities3" name="cableTv">
                                    <label for="amenities3">Cable Tv</label></p></li>
											
												<li><p><input type="checkbox" value="ON" id="amenities3" name=sereneEnvironment">
                                    <label for="amenities3">Serene Environment</label></p></li>
										
											<li><p><input type="checkbox" value="ON" id="amenities3" name="POS">
                                    <label for="amenities3">POS Available</label></p></li>

                                    <li><p><input type="checkbox" value="ON" id="amenities3" name="suitableForEvents">
                                    <label for="amenities3">Suitable For Events</label></p></li>
											
											</ul>
										</div>
									</div>
								</div>
								


                                 
                            
                          
                                </div> 
                             </div> 
                        </div> 
                    </div> 
                </div>
                <div class="rms-content-box">
                     <div class="rms-content-area">
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-credit-card" aria-hidden="true"></i> Page</b> Information</div>
                            <div class="step-label">Step 3 - 4 </div>
                           
                        </div>
                        <div class="rms-content-body"> 
                            <div class="row">
                                <div class="col-md-8">
                               
                                    <div class="row">
                                          <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                             <span class="fa fa-facebook"> facebook</span>
                                                <div class="inpt-group">
                                                    <input type="text" value="{{$refurbish->facebookUrl}}" name="facebookUrl"  id="facebook" class="inpt-control" placeholder="https://www.facebook.com/">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                        <p class="tooptip-content">Enter your business facebook page address. This field only accept 90char maximum and 3char minimum</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>
                                              <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                             <span class="fa fa-twitter"> twitter</span>
                                                <div class="inpt-group">
                                                    <input type="text" value="{{$refurbish->twitterUrl}}" name="twitterUrl"  id="twitter" class="inpt-control" placeholder="https://www.twitter.com/">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                        <p class="tooptip-content">Enter your business twitter page address. This field only accept 90char maximum and 3char minimum</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>

                                               <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                             <span class="fa fa-instagram"> instagram</span>
                                                <div class="inpt-group">
                                                    <input type="text" value="{{$refurbish->instagramUrl}}"  name="instagramUrl" id="cvc" class="inpt-control" placeholder="https://www.instagram.com/">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                        <p class="tooptip-content">Enter your business instagram page address. This field only accept 90char maximum and 3char minimum</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>


                                    </div> 
                        

                                <h4>Business Hours</h4>
                                <label>
Example: 8:00 am - 4:30 pm</label>

                                          <div class="row"> 
                                             <div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                             <span class="fa fa-calendar"> Monday</span>
                                                <div class="inpt-group">
                                                    <input type="text" value="{{$refurbish->monOperationTime}}" name="monOperationTime" id="mon_biz_hour" class="inpt-control" placeholder="">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                        <p class="tooptip-content">Enter your monday business operating hours e.g 80:00 am - 6:00 pm or 90:00 - 58:00. This field only accept 35char maximum</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>

                                            <div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                             <span class="fa fa-calendar"> Tuesday</span>
                                                <div class="inpt-group">
                                                    <input type="text" value="{{$refurbish->tueOPerationTime}}" name="tueOPerationTime" id="tue_biz_hour" class="inpt-control" placeholder="">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                        <p class="tooptip-content">Enter your tuesday business operating hours e.g 80:00 am - 6:00 pm or 90:00 - 58:00. This field only accept 35char maximum</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>

                                                <div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                             <span class="fa fa-calendar"> Wednesday</span>
                                                <div class="inpt-group">
                                                    <input type="text" value="{{$refurbish->wedOperationTime}}" name="wedOperationTime" id="wed_biz_hour" class="inpt-control"  placeholder="">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                        <p class="tooptip-content">Enter your wednesday business operating hours e.g 80:00 am - 6:00 pm or 90:00 - 58:00. This field only accept 35char maximum</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>

                                                <div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                             <span class="fa fa-calendar"> Thursday</span>
                                                <div class="inpt-group">
                                                    <input type="text" name="thursOperationTime" id="thur_biz_hour" class="inpt-control" value="{{$refurbish->thursOperationTime}}" placeholder="">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                        <p class="tooptip-content">Enter your thursday business operating hours e.g 80:00 am - 6:00 pm or 90:00 - 58:00. This field only accept 35char maximum</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>


                                      
                              
                                </div> 


                                <div class="row">
                                	

                                		       <div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                             <span class="fa fa-calendar"> Friday</span>
                                                <div class="inpt-group">
                                                    <input type="text" value="{{$refurbish->friOperationTime}}" name="friOperationTime" id="fri_biz_hour" class="inpt-control" placeholder="">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                        <p class="tooptip-content">Enter your friday business operating hours e.g 80:00 am - 6:00 pm or 90:00 - 58:00. This field only accept 35char maximum</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>

                                                <div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                             <span class="fa fa-calendar"> Saturday</span>
                                                <div class="inpt-group">
                                                    <input type="text" value="{{$refurbish->satOperationTime}}" name="satOperationTime"  id="sat_biz_hour" class="inpt-control" placeholder="">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                        <p class="tooptip-content">Enter your saturday business operating hours e.g 80:00 am - 6:00 pm or 90:00 - 58:00. This field only accept 35char maximum</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>
                                                <div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                             <span class="fa fa-calendar"> Sunday</span>
                                                <div class="inpt-group">
                                                    <input type="text" name="sunOperationTime" id="sun_biz_hour" class="inpt-control" value="{{$refurbish->sunOperationTime}}"  placeholder="">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                        <p class="tooptip-content">Enter your sunday business operating hours e.g 80:00 am - 6:00 pm or 90:00 - 58:00. This field only accept 35char maximum</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>

                                </div>


                                <h4>Media Content</h4>
                                <label>
Upload images of your product or service<br/> cover Image should portray your main image <br/>
each image should be 8MB max</label>



                                <div class="row">


                                	         <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                             <label> Cover Image</label>
                                                <div class="inpt-group">
                               <input type="file" value="{{$refurbish->coverPhoto}}" accept=".jpg, .png, .jpeg, .gif" name="coverPhoto" id="cover_image" class="inpt-control">
                                                  
                                                </div> 
                                            </div>
                                         </div>

                                          <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                             <label> Photo One</label>
                                                <div class="inpt-group">
                               <input type="file" value="{{$refurbish->PhotoOne}}" accept=".jpg, .png, .jpeg, .gif" name="PhotoOne" class="inpt-control">
                                                  
                                                </div> 
                                            </div>
                                         </div>

                                         <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                             <label> Photo Two</label>
                                                <div class="inpt-group">
                               <input type="file" value="{{$refurbish->PhotoTwo}}" accept=".jpg, .png, .jpeg, .gif" name="PhotoTwo" class="inpt-control">
                                                  
                                                </div> 
                                            </div>
                                         </div>
                                   

                              
                                </div>                               	


			   <div class="row">


			                                	         <div class="col-md-4">
			                                            <div class="inpt-form-group"> 
			                                             <label> Photo Three</label>
			                                                <div class="inpt-group">
			                               <input type="file" value="{{$refurbish->PhotoThree}}" accept=".jpg, .png, .jpeg, .gif" name="PhotoThree" id="cover_image" class="inpt-control">
			                                                  
			                                                </div> 
			                                            </div>
			                                         </div>

			                                          <div class="col-md-4">
			                                            <div class="inpt-form-group"> 
			                                             <label> Photo Four</label>
			                                                <div class="inpt-group">
			                               <input type="file" value="{{$refurbish->PhotoFour}}" accept=".jpg, .png, .jpeg, .gif" name="PhotoFour"  class="inpt-control">
			                                                  
			                                                </div> 
			                                            </div>
			                                         </div>

			                                         <div class="col-md-4">
			                                            <div class="inpt-form-group"> 
			                                             <label> Photo Five</label>
			                                                <div class="inpt-group">
			                               <input type="file" value="{{$refurbish->PhotoFive}}" accept=".jpg, .png, .jpeg, .gif" name="PhotoFive" class="inpt-control">
			                                                  
			                                                </div> 
			                                            </div>
			                                         </div>
			                                   

			                              
			                                </div>   


			                                  <div class="row">


                                	         <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                             <label> Photo Six</label>
                                                <div class="inpt-group">
                               <input type="file" value="{{$refurbish->PhotoSix}}" accept=".jpg, .png, .jpeg, .gif" name="PhotoSix" id="cover_image" class="inpt-control">
                                                  
                                                </div> 
                                            </div>
                                         </div>

                                          <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                             <label> Photo Seven</label>
                                                <div class="inpt-group">
                               <input type="file" value="{{$refurbish->PhotoSeven}}" accept=".jpg, .png, .jpeg, .gif" name="PhotoSeven" id="cover_image" class="inpt-control">
                                                  
                                                </div> 
                                            </div>
                                         </div>

                                         <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                             <label> Photo Eight</label>
                                                <div class="inpt-group">
                               <input type="file" value="{{$refurbish->PhotoEight}}" accept=".jpg, .png, .jpeg, .gif" name="PhotoEight" id="cover_image" class="inpt-control">
                                                  
                                                </div> 
                                            </div>
                                         </div>
                                   

                              
                                </div>          


                                  <div class="row">


                                	         <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                             <label> Photo Nine</label>
                                                <div class="inpt-group">
                               <input type="file" value="{{$refurbish->PhotoNine}}" accept=".jpg, .png, .jpeg, .gif" name="PhotoNine" id="cover_image" class="inpt-control">
                                                  
                                                </div> 
                                            </div>
                                         </div>

                                    

                              
                                </div>                    	



                                </div>



                            </div> 
                        </div> 
                    </div> 
                </div>
                <div class="rms-content-box">
                    <div class="rms-content-area">
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-file-text" aria-hidden="true"></i> Confirm</b> Details</div>
                            <div class="step-label">Step 4 - 4 </div> 
                        </div>
                        <div class="rms-content-body"> 
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="desc-container">
                                                <div class="desc-table">
                                                  <!--  <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="desc-label">Username</td>
                                                                <td class="desc-val">John_503in</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Email ID</td>
                                                                <td class="desc-val">john_doe@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Full Name</td>
                                                                <td class="desc-val">John Doe</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Gender</td>
                                                                <td class="desc-val">Male</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Telephone NO.</td>
                                                                <td class="desc-val">325-555-1234</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Address</td>
                                                                <td class="desc-val">111 W.App Ave. Suite 123, Sunway, CA</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Zip Code</td>
                                                                <td class="desc-val">94086</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Country</td>
                                                                <td class="desc-val">USA</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Card Type</td>
                                                                <td class="desc-val">Visa</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Telephone NO.</td>
                                                                <td class="desc-val">4519-1235-9869-4321</td>
                                                            </tr>
                                                        </tbody>
                                                    </table> -->
                                                  <label>  Hello NetGuard, please before submitting your application ensure
                                                    your information is correct and eloquent to elevate your business efficacy. Choose <strong>Keyword(s) </strong> and <strong>Category(s)</strong> options that best depicts your nature of business for higher optimality </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div>
            </div>
            <!--Wizard Content Section Close-->
            <!--Wizard Footer section Start-->
            <div class="rms-footer-section">
                <div class="button-section">
                    <span class="next">
                        <a href="javascript:void(0)" class="btn">Next Step
                            <small>Visibility Information</small>
                        </a>
                    </span>
                    <span class="prev" style="display: none;">
                        <a href="javascript:void(0)" class="btn">Previous Step
                             <small>Your information</small>
                        </a>
                 
  <button class="submit btn btn-primary pull-right" type="submit" name="submit_app" style="display: none;">
                         Upload Data
                         <small>Your information</small>
                         
                        
                    </button>
                     </form>
          
                </div>

                   
            </div>


            <!--Wizard Footer Close-->
        </div>
    </div>
    <!--Wizard Container Close-->
    </div>
    <!--Multi Step Wizard Close-->
      
  


        
		

		</main>
		
	  @endsection
    
