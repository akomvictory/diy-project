

	@extends('layouts.blog-layout-one')

	@section('content')









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
									<h1>Blog Article</h1>
								</div>
								<ol class="listar-breadcrumb">
									<li><a href="netguba.com">Home</a></li>
								
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


							@if(count($datumOne) > 0)

								@foreach($datumOne as $post)


							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
								<div class="listar-themepost listar-post">
									<figure class="listar-featuredimg">
										<a href="/resources/blog/{{$post->id}}/article"><img style="width: 19em; height: 13em" src="/storage/upload/blog/photos/{{$post->postCoverPhoto}}" alt="image description"></a>
									
									</figure>
									<div class="listar-postcontent">
										<figure class="listar-authorimg"><img src="/storage/upload/blog/photos/{{$post->publisherPhoto}}" height="54" width="54" alt="image description"></figure>
										<h2><a href="/resources/blog/{{$post->id}}/article">{{substr($post->postTitle, 0, 20).'..'}}</a></h2>
										<div class="listar-themepostfoot">
											<time datetime="2017-08-08">
												<i class="icon-clock4"></i>
												<span>{{$post->updated_at->diffForHumans()}}</span>
											</time>
											<span class="listar-postcomment">
												<i class="icon-comment"></i>
												<span>3 Comments</span>
											</span>
										</div>
									</div>
								</div>
							</div>
						
							@endforeach
							@endif
							

									<aside class="col-lg-3 col-sm-4 pull-right">


        	
            <ul class="nav nav-pills nav-stacked">
               

                <li class="active"><a href="#"><h3 style="color:snow;">Post Category</h3></a></li>
           

            @if(count($datumTwo)>0)

                	@foreach($datumTwo as $post)

                 <li><a href="/resources/blog/{{$post->postSlug}}/pane">{!!substr($post->postSlug, 0, 40).'..'!!}</a></li>
                

                @endforeach

                @else

              	    <div class="lisatr-alert alert alert-danger fade in alert-dismissable">
				<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
				<strong>Opps!</strong> No category published yet!.
			
			</div>
                @endif






                <li class="active"><a href="#"><h3 style="color:snow;">Featured Post</h3></a></li>

                	@if(count($datumThree)>0)

                	@foreach($datumThree as $post)

                 <li><a href="/resources/blog/{{$post->id}}/article">{!!substr($post->postTitle, 0, 35).'..'!!}</a></li>
                

                @endforeach

                @else

                	    <div class="lisatr-alert alert alert-danger fade in alert-dismissable">
				<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
				<strong>Opps!</strong> No post Published yet!.
			
			</div>

                @endif


            </ul> 
         </aside>

 


				
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