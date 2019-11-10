


      @extends('layouts.dashbord-business-user-layout-one')

      @section('contentone')


		<main id="listar-main" class="listar-main listar-haslayout">


			<!--************************************
					Dashboard Banner Start


			*************************************-->

			 



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
                        <span class="step-title"> Write Blog Post</span>
                        <span class="step-info">Use Correct Grammar And Punctuation.</span>
                    </li> 
                  <!--  <li class="rms-step ">
                        <span class="step-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                 <span class="step-title">Sales Item</span>
                        <span class="step-info">Enter your product or service </span>
                    </li> -->
                    <li class="rms-step ">
                        <span class="step-icon ml10"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                        <span class="step-title">Confirm Blog Post</span>
                        <span class="step-info">Enter Appropriate Information </span>
                    </li>
                  <!--  <li class="rms-step ">
                        <span class="step-icon"><i class="fa fa-file-text" aria-hidden="true"></i></span>
                        <span class="step-title">Confirm Your Details</span>
                        <span class="step-info">Confirm and submit</span>
                    </li> -->
                </ul>

            </div>
            <!--Wizard Navigation Close-->
            <!--Wizard Content Section Start-->


            <div class="rms-content-section">
                <div class="rms-content-box rms-current-section">
                	            <div class="rms-content-area animated fadeIn"> 
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-newspaper-o" aria-hidden="true"></i> Item </b> List</div>
                            <div class="step-label">Step 1 - 2 </div> 
                        </div>


                               



                                   	<div class="row">

                                   		<div class="col-md-12">
                                   			

                                   			@if(count($allPost) > 0)

                                   			<table class="table table-hover">

                                   				<tr>	  

                                   					<td> <strong> S / N  </strong> </td> 

                                   					<td class="info"> <strong> Item Title </strong> <span class="fa fa-edit (alias)"></span> </td> 

                                   					<td class="info"> <strong> Item Price </strong> <span class="fa fa-money (alias)"></span> </td> 

                                   					<td class="success"> <strong> Updated At  </strong> <span class="fa fa-calendar-check-o"></span> </td> 

                                   				</tr>

                                   			

                                   			@foreach($allPost as $result)

                                   			 <tr> 

                                   		  <td class="alert alert-success">  {{$result->id}} </td> 

                                   		   <td> {!!substr($result->itemTitle, 0, 11).'..'!!}</td>

                                   		   <td>  {{$result->itemPrice}} </td>

                                   		    <td>  {{$result->updated_at->diffForHumans()}} </td>


                                   		    <td>  



                                   		    	<a href="/application/store/{{$result->id}}/refurbish" class="btn btn-default"> Update </a>  </td>

                                   		    	<td>

                                   		    <form action="/application/store/{{$result->id}}/delete" method="POST">

			 	                                @csrf

			 	                                 @method('DELETE')


			 	                                <input type="submit" value="Discard" name="Delete" class="btn btn-danger">

			 	                            </form>

                                   		       </td>


                                   		</tr>
                                   				@endforeach

                                   		

                                   			
                                   			</table>



                                   			@else

                                   			<span class="lisatr-alert alert alert-warning fade in alert-dismissable">No item posted yet!</span>

                                   			

                                   			@endif



                                   		</div>
                                   		



                                   	</div>

                                
                            

                                               <br/>
                                       


                              
                    </div>


                </div>

























             <!-- <div class="rms-content-box">
                     <div class="rms-content-area">
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-shopping-bag" aria-hidden="true"></i>Sale</b> Information</div>
                            <div class="step-label">Step 2 - 4 </div> 
                        </div>
                                       <div class="rms-content-body"> 
                             <div class="row">
                                 <div class="col-md-8">
                                     
                                 

                                    </div>

                          
                                </div> 
                             </div> 
                    </div> 
                </div> -->
                <div class="rms-content-box">
                     <div class="rms-content-area">
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-credit-card" aria-hidden="true"></i> Important</b> Notice <span class="fa fa-info-circle"></span></div>
                            <div class="step-label">Step 2 - 2 </div>
                           
                        </div>
                        <div class="rms-content-body"> 
                            <div class="row">
                                <div class="col-md-8">
                               
                                
                        
                                	 <label>  Hello NetGuardian, Do ensure to validate and cross-check the post, by using correct grammar and punctuation before submitting the post.</label>
                                           




                                </div>



                            </div> 
                        </div> 
                    </div> 
                </div>


                <!-- <div class="rms-content-box">
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
                                           
                                               
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div>  -->


            </div>
            <!--Wizard Content Section Close-->
            <!--Wizard Footer section Start-->
         <!--   <div class="rms-footer-section">
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
                   
          
                </div>

                   
            </div> -->


            <!--Wizard Footer Close-->
        </div>
    </div>
    <!--Wizard Container Close-->
    </div>
    <!--Multi Step Wizard Close-->
      
  


        
		

		</main>
		
		
     @endsection
    