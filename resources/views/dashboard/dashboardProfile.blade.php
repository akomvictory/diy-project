
      @extends('layouts.dashbord-business-user-layout-one')

      @section('contentone')

		<main id="listar-main" class="listar-main listar-haslayout">


			

			


			<!--************************************
					Dashboard Banner Start
			*************************************-->
			<div class="listar-dashboardbanner">
				<ol class="listar-breadcrumb">
					<li><a href="javascript:void(0);">Home</a></li>
					<li class="listar-active">My Profile</li>
				</ol>
				<h1>My Profile</h1>
				<div class="listar-description">
					<span>Business Fast Track >> </span> Promote your business to target customers who need your services or products. 
				</div>
			</div>
			<!--************************************
					Dashboard Banner End
			*************************************-->
			<!--************************************
					Dashboard Content Start
			*************************************-->
					@if(count($datumTwo)==1)

					@foreach($datumTwo as $user)

			<div id="listar-content" class="listar-content">
				<form class="listar-formtheme listar-formaddlisting">
					<fieldset>
						<div class="listar-boxtitle">
							<h3> <a href="/business/{{$user->businessName}}/detail" style="color:#6fbf17">My Business Page </a> </h3>
						
						</div>
						<div class="listar-dashboardmyprofile">
							<figure class="listare-profilepic">
								<img src="/storage/upload/dashboard/photos/{{$user->coverPhoto}}" height="250px" width="250px" alt="image description">
								<figcaption><a class="listar-btnuploadimg" href="javascript:void(0);"><i class="icon-upload2"></i>Upload Images</a></figcaption>
							</figure>
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="form-group listar-dashboardfield">
										<label><a href="/business/{{$user->businessName}}/detail">Business Name</a></label>
										<input type="text" name="name" class="form-control" placeholder="{{$user->businessName}}">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="form-group listar-dashboardfield">
										<label>Email Address</label>
										<input type="email" name="email" class="form-control" placeholder="{{$user->businessEmailUrl}}">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="form-group listar-dashboardfield">
										<label>Phone Number</label>
										<input type="text" name="phonenumber" class="form-control" placeholder="{{$user->businessPhoneNumber}}">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="form-group listar-dashboardfield">
										<label>Website</label>
										<input type="url" name="yoururl" class="form-control" placeholder="{{$user->businessWebUrl}}">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="form-group listar-dashboardfield">
										<label>About</label> BusinessInfo
										<textarea placeholder="About Business"></textarea>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
				<!--	<fieldset>
						<div class="listar-boxtitle">
							<h3>Social Connection</h3>
						</div>
						<div class="listar-dashboardsocial">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<div class="form-group listar-dashboardfield">
										<label>Facebook</label>
										<input type="text" name="name" class="form-control" placeholder="enter facebook profile url">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<div class="form-group listar-dashboardfield">
										<label>Twitter</label>
										<input type="email" name="email" class="form-control" placeholder="enter twitter profile url">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<div class="form-group listar-dashboardfield">
										<label>Linkedin</label>
										<input type="text" name="phonenumber" class="form-control" placeholder="enter linkedin profile url">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<div class="form-group listar-dashboardfield">
										<label>Google</label>
										<input type="url" name="yoururl" class="form-control" placeholder="enter google profile url">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<div class="form-group listar-dashboardfield">
										<label>Instagram</label>
										<input type="url" name="yoururl" class="form-control" placeholder="enter Instagram profile url">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<div class="form-group listar-dashboardfield">
										<label>Pinterest</label>
										<input type="url" name="yoururl" class="form-control" placeholder="enter pintrest profile url">
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<fieldset>
						<div class="listar-boxtitle">
							<h3>Update Password</h3>
						</div>
						<div class="listar-dashboardpassword">
							<div class="row">
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<div class="form-group listar-dashboardfield">
										<label>New Password</label>
										<input type="password" name="password" class="form-control" placeholder="your new password">
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<div class="form-group listar-dashboardfield">
										<label>Repeat Password</label>
										<input type="password" name="password" class="form-control" placeholder="write again your new password">
									</div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<span>Enter same password in both fields Use an uppercase letter and a number for stronger password.</span>
									<a class="listar-btn listar-btngreen" href="javascript:void(0);">Update Profile</a>
								</div>
							</div>
						</div>
					</fieldset> -->
				</form>
			</div>

				@endforeach

				@endif

			<!--************************************
						Dashboard Content End
			*************************************-->
		</main>
		 @endsection
    