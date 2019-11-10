
			@extends('layouts.article-dashboard-interface')

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

			 <form action="/resources/coursepane/publish" method="POST" enctype="multipart/form-data">

			 	 @csrf


			<div class="listar-dashboardbanner">
		
			



   <div id="rms-wizard" class="rms-wizard defaultTheme">
   <!--Wizard Container-->
    <div class="rms-container">
       <!--Wizard Header-->
        <div class="rms-wizard-header">
          <ul> 

   <!--       <ol> <h2 class="title"><span>Business Fast Track >></span> Promote your business to target customers who need your services or products. </h2>
Turn your visitors into paying customers with exciting offers and services on your page.

          </ol> -->



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
                            <div class="leftside-title"><b> <i class="fa fa-shopping-bag" aria-hidden="true"></i> Blog</b> Content</div>
                            <div class="step-label">Step 1 - 2 </div> 
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

			
@endif



                       
                        <div class="rms-content-body"> 
                            <div class="row">
                                   <div class="col-md-8">
                                 
                               


                                           <div class="row">
                                        <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                               <label>Publisher Name*</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-id-badge" aria-hidden="true"></i></span>
                                                   <input type="text"  name="publisherName"  id="bus_catGo" class="inpt-control" placeholder="Victory Akom">
                                                   <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do you need this guide?</span>
                                                       <p class="tooptip-content"> Specify your name as post publisher.</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>


                                             <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                             <label> Publisher Photo*</label>
                                                <div class="inpt-group">
                               <input type="file" accept=".jpg, .png, .jpeg, .gif" name="publisherPhoto" id="cover_image" class="inpt-control">
                                                  
                                                </div> 
                                            </div>
                                         </div>


                                         

                                        

                                    </div>

                                    <div class="row">
                                    	

                                      <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                               <label>Course Title*</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-cc-amex" aria-hidden="true"></i></span>
                                                   <input type="text"  name="postTitle" id="bus_adD" class="inpt-control" placeholder="How To Win Client">
                                                   <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do you need this guide?</span>
                                                       <p class="tooptip-content"> Enter the title for this post. </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared. </span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>



                                           <div class="row">
                                   <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                                <label>Course Section One</label>
                                            <div class="inpt-group">
                                                <span class="inpt-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span> 
                                      <textarea name="postSectionOne"  id="article-ckeditor" class="inpt-control"> </textarea>
                                                    <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do you need this guide?</span>
                                                       <p class="tooptip-content"> Enter post content for section one. </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br/>

                                               <div class="row">
                                   <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                                <label>Course Section Two</label>
                                            <div class="inpt-group">
                                                <span class="inpt-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span> 
                                      <textarea name="postSectionTwo"  id="com_desC" class="inpt-control"> </textarea>
                                                    <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do you need this guide?</span>
                                                       <p class="tooptip-content"> Enter post content for section two. </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br/>

                                               <div class="row">
                                   <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                                <label>Course Section Three</label>
                                            <div class="inpt-group">
                                                <span class="inpt-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span> 
                                      <textarea name="postSectionThree"  id="com_desC" class="inpt-control"> </textarea>
                                                    <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do you need this guide?</span>
                                                       <p class="tooptip-content">Enter post content for section three. </p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br/>


                                               <div class="row">
                                   <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                                <label>Course Section Four</label>
                                            <div class="inpt-group">
                                                <span class="inpt-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span> 
                                      <textarea name="postSectionFour"  id="com_desC" class="inpt-control"> </textarea>
                                                    <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do you need this guide?</span>
                                                       <p class="tooptip-content"> Enter post content for section four.</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br/>

                                               <div class="row">
                                   <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                                <label>Course Section Five</label>
                                            <div class="inpt-group">
                                                <span class="inpt-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span> 
                                      <textarea name="postSectionFive"  id="com_desC" class="inpt-control"> </textarea>
                                                    <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do you need this guide?</span>
                                                       <p class="tooptip-content"> Enter post content for section five.</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br/>
                                  



                                 
                                       
                                  

                                  

                                    
                                    
                        <br/>
                                           <div class="row">
                                            <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                               <label for="state">Course Slug*</label>
                                                <div class="inpt-group dropdown-select-icon"> 
                                                   <select name="postSlug" id="state" class="inpt-control"">
                       <option value="" disabled="" selected="">Select Course Category</option>
                           <option>Start Business</option>
                    <option>Strive Business</option>
                    <option>Thrive Business </option>
                                <option>Business</option>
                    <option>Entrepreneurship</option>
                    <option>Technology</option>
                 
                    <option>Sport</option>
                    <option>Inspiration</option>
                    <option>Personal Development</option>
                     <option>Health & Care</option>
                     <option>Out Door</option>
                     <option>Tourism</option>
                       <option>Design</option>
                       <option>Lifestyle</option>
                        <option>Uncategorised</option>
                                    </select> 
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">Choose a category that this post should belong to. This field is required.</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                   </div> 
                                                </div> 
                                            </div>
                                         </div>

                                           <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                               <label for="state">Course Accessibility*</label>
                                                <div class="inpt-group dropdown-select-icon"> 
                                                   <select name="postAccessibilty" id="state" class="inpt-control"">
                       <option value="" disabled="" selected="">Select Accessibility Mode</option>
                                <option>Regular</option>
                    <option>Homestead</option>
                  
              
                                    </select> 
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">Choose accessibility mode for this post. This field is required.</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                   </div> 
                                                </div> 
                                            </div>
                                         </div>

                                             <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                               <label for="state">Course Flag*</label>
                                                <div class="inpt-group dropdown-select-icon"> 
                                                   <select name="postFlag" id="state" class="inpt-control"">
                       <option value="" disabled="" selected="">Select Post Flag</option>
                                <option>Regular</option>
                    <option>Featured</option>
                   
              
                                    </select> 
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do you need this info?</span>
                                                       <p class="tooptip-content">Choose a post flag. This field is required.</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                   </div> 
                                                </div> 
                                            </div>
                                         </div>

                                    </div>


                                               <br/>
                                           <div class="row">
                                         <div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                             <label> Cover Photo</label>
                                                <div class="inpt-group">
                               <input type="file" accept=".jpg, .png, .jpeg, .gif" name="postCoverPhoto" id="cover_image" class="inpt-control">
                                                  
                                                </div> 
                                            </div>
                                         </div>

<div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                             <label> Course Photo 1*</label>
                                                <div class="inpt-group">
                               <input type="file" accept=".jpg, .png, .jpeg, .gif" name="postPhotoOne" id="cover_image" class="inpt-control">
                                                  
                                                </div> 
                                            </div>
                                         </div>


                                         <div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                             <label> Course Photo 2*</label>
                                                <div class="inpt-group">
                               <input type="file" accept=".jpg, .png, .jpeg, .gif" name="postPhotoTwo" id="cover_image" class="inpt-control">
                                                  
                                                </div> 
                                            </div>
                                         </div>

                                          <div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                             <label> Course Photo 3*</label>
                                                <div class="inpt-group">
                               <input type="file" accept=".jpg, .png, .jpeg, .gif" name="postPhotoThree" id="cover_image" class="inpt-control">
                                                  
                                                </div> 
                                            </div>
                                         </div>



                                    </div>

                                           <div class="row">


                                 <div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                             <label> Course Photo 4*</label>
                                                <div class="inpt-group">
                               <input type="file" accept=".jpg, .png, .jpeg, .gif" name="postPhotoFour" id="cover_image" class="inpt-control">
                                                  
                                                </div> 
                                            </div>
                                         </div>


  											<div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                             <label> Course Photo 5*</label>
                                                <div class="inpt-group">
                               <input type="file" accept=".jpg, .png, .jpeg, .gif" name="postPhotoFive" id="cover_image" class="inpt-control">
                                                  
                                                </div> 
                                            </div>
                                         </div>


                                    </div>



                                               <br/>
                                       


                                </div>   
                                
                            </div> 
                        </div> 
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
                               
                                
                        
                                	 <label>  Hello NetGuardian, Do ensure to validate and cross-check the post, by using correct grammar and punctuation before submitting the course.</label>
                                           




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
                                           
                                               --
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
