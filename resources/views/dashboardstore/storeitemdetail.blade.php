
			@extends('layouts.simple-header-footer')

			@section('content')


		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->




		<main id="listar-main" class="listar-main listar-haslayout">


			<!--************************************
					Dashboard Banner Start


			*************************************-->

			 <form action="/application/store/publish" method="POST" enctype="multipart/form-data">

			 	 @csrf


			<div class="listar-dashboardbanner">
		
			



   <div id="rms-wizard" class="rms-wizard defaultTheme">
   <!--Wizard Container-->
    <div class="rms-container">
       <!--Wizard Header-->
      <!--  <div class="rms-wizard-header">
          <ul> 

          <ol> <h2 class="title"><span>Business Fast Track >></span> Promote your business to target customers who need your services or products. </h2>
Turn your visitors into paying customers with exciting offers and services on your page.

          </ol>



          </ul>
        </div> -->
        <!--Wizard Header Close--> 
        <div class="rms-form-wizard">
           <!--Wizard Step Navigation Start-->
            <div class="rms-step-section compeletedStepClickable" data-step-counter="true" data-step-image="false">
             <!--   <ul class="rms-multistep-progressbar"> 
                    <li class="rms-step rms-current-step">
                        <span class="step-icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <span class="step-title">Sales Item</span>
                        <span class="step-info">Enter your product or service </span>
                    </li> 
                 
                    <li class="rms-step ">
                        <span class="step-icon"><i class="fa fa-file-text" aria-hidden="true"></i></span>
                        <span class="step-title">Confirm Your Details</span>
                        <span class="step-info">Confirm and submit</span>
                    </li>
                </ul>  -->

            </div>
            <!--Wizard Navigation Close-->
            <!--Wizard Content Section Start-->


            <div class="rms-content-section">
                <div class="rms-content-box rms-current-section">
                	            <div class="rms-content-area animated fadeIn"> 
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-shopping-bag" aria-hidden="true"></i> Store </b> Fitting</div>
                            <div class="step-label">Step 1 - 2 </div> 
                        </div>


     


                       
                        <div class="rms-content-body"> 
                            <div class="row">
                                   <div class="col-md-8">


                                   	@if(count($datumOne)>0)

							@foreach($datumOne as $item)



                                   	  <div class="col-sm-8 col-md-10" >
               
                        <div class="products">
                            <img src="/storage/upload/store/photos/{{$item->itemImage}}" style="width:240em !important; height:24em !important;" class="img-responsive" />
                            <h4 class="text-info">

                             @if(strlen($item->itemTitle)<9) 
                            
                            	{{$item->itemTitle}} 

                            	@else

                            	{{$item->itemTitle}}

                            	@endif

                            </h4>
                           <strong>Price: </strong> <h4>{{$item->itemPrice}}
                            </h4>
                          <p>{{$item->itemDescription}}</p>
                        </div>
                 
                            </div>

                            @endforeach

                            @else

                            <div class="lisatr-alert alert alert-danger fade in alert-dismissable">
				<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
				<strong>Opps!</strong> No store item available yet!.
			
			</div>

                            @endif
                                 
                               




                                    <br/>
                                  


                                 
                                  

                               
                                     


                                </div>   
                                
                            </div> 
                        </div> 
                    </div>


                </div>



              <!--  <div class="rms-content-box">
                    <div class="rms-content-area">
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-file-text" aria-hidden="true"></i> Important</b> Notice <span class="fa fa-info-circle"></span> </div>
                            <div class="step-label">Step 2 - 2 </div> 
                        </div>
                        <div class="rms-content-body"> 
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="desc-container">
                                                <div class="desc-table">
                                                 
                                            
                                	 <label>  Hello NetGuard, please before submitting your application be informed that only the item you provide complete information for title, price, description and image will be publicly available to your NetGuest.</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div> -->
            </div>
            <!--Wizard Content Section Close-->
            <!--Wizard Footer section Start-->
      <!--      <div class="rms-footer-section">
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

                    
            </div> -->


            <!--Wizard Footer Close-->
        </div>
    </div>
    <!--Wizard Container Close-->
    </div>
    <!--Multi Step Wizard Close-->
      
  


        
		

		</main>
		
		
		

			@endsection()