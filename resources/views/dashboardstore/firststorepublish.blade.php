
      @extends('layouts.dashbord-business-user-layout-one')

      @section('contentone')



        <main id="listar-main" class="listar-main listar-haslayout">


       <form action="/application/store/publish" method="POST" enctype="multipart/form-data">

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
                        <span class="step-title">Sales Item</span>
                        <span class="step-info">Enter your product or service </span>
                    </li> 
                 
                    <li class="rms-step ">
                        <span class="step-icon"><i class="fa fa-file-text" aria-hidden="true"></i></span>
                        <span class="step-title">Confirm Your Details</span>
                        <span class="step-info">Confirm and submit</span>
                    </li>
                </ul>

            </div>
            <!--Wizard Navigation Close-->
            <!--Wizard Content Section Start-->


            <div class="rms-content-section">
                <div class="rms-content-box rms-current-section">
                              <div class="rms-content-area animated fadeIn"> 
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-shopping-bag" aria-hidden="true"></i> Sale</b> Information</div>
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

  


     @if(count($datumOne)>0)

            @foreach($datumOne as $result)


                        <div class="rms-content-body"> 
                            <div class="row">
                                   <div class="col-md-8">

                                
  


                                    <input type="hidden" name="businessName" value="{{$result->businessName}}">
                                 
                               


                                           <div class="row">
                                        <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                               <label>Item Title *</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                                                   <input type="text"  name="itemTitle"  id="bus_catGo" class="inpt-control" placeholder="Italian Shoe">
                                                   <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do you need this guide?</span>
                                                       <p class="tooptip-content"> Enter product or service title. This field only accept 80char maximum and 3char minimum. This field is required</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>

                                           <div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                               <label>Item Price *</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-map-signs" aria-hidden="true"></i></span>
                                                   <input type="text"  name="itemPrice" id="bus_adD" class="inpt-control" placeholder="7,000">
                                                   <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do you need this guide?</span>
                                                       <p class="tooptip-content"> Enter product or service price amount. This field only accept 12char maximum and 2char minimum. This field is required</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared. </span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>

                                            <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                             <label> Item image *</label>
                                                <div class="inpt-group">
                               <input type="file" accept=".jpg, .png, .jpeg, .gif" name="itemImage" id="cover_image" class="inpt-control">
                                                  
                                                </div> 
                                            </div>
                                         </div>


                                    </div>


                                           <div class="row">
                                   <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                                <label>Item Description *</label>
                                            <div class="inpt-group">
                                                <span class="inpt-group-addon"><i class="fa fa-building-o" aria-hidden="true"></i></span> 
                                      <textarea name="itemDescription"  id="com_desC" class="inpt-control"> </textarea>
                                                    <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do you need this guide?</span>
                                                       <p class="tooptip-content"> Enter product or service description. This field only accept 100char maximum and 10char minimum. This field is required</p>
                                                        <span class="tooltip-info">Your information is Safe here &amp; never shared.</span>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <br/>
                                  


                                 
                                  

                               
                                     


                                </div>   
                                
                            </div> 


                
                        </div> 

                        
                                        @endforeach
                                        @endif



                    </div>


                </div>
                




                <div class="rms-content-box">
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
    
     <!--Main  Close-->



     @endsection
    