


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Search Engine Find products, services and businesses around you. Quick and easy.</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/bootstrap-slider.css">
	<link rel="stylesheet" href="/css/normalize.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/icomoon.css">
	<link rel="stylesheet" href="/css/chosen.css">
	<link rel="stylesheet" href="/css/prettyPhoto.css">
	<link rel="stylesheet" href="/css/scrollbar.css">
	<link rel="stylesheet" href="/css/morris.css">
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<link rel="stylesheet" href="/css/YouTubePopUp.css">
	<link rel="stylesheet" href="/css/auto-complete.css">
	<link rel="stylesheet" href="/css/jquery.navhideshow.css">
	<link rel="stylesheet" href="/css/transitions.css">
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/color.css">
	<link rel="stylesheet" href="/css/responsive.css">
	<script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body>

<br/><br/>
	<div class="container">



 <div class="lisatr-alert alert alert-success fade in alert-dismissable">
				<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
				<strong class="badge ">Notice!</strong> Hooray, welcome back. You are currently registered as a regular user, choose an option to proceed with 
				<a class="listar-btnaction" href="javascript:void(0);">Note! either step is irrevocable</a>
			</div>


	<form action="/account/regular/{{$id}}" method="POST">

		@csrf

		@method('PUT')

<button class="btn btn-default" type="submit" name="submit"> <span class="badge">1</span>
  Continue as a regular user 

</button>

</form>

<br/>


<form action="/account/business/{{$id}}" method="POST">

			@csrf

		@method('PUT')

<button class="btn btn-info" type="submit" name="submit"> <span class="badge">2</span>
  Proceed to add business 

</button>

</form>



</div>

</body>
</html>