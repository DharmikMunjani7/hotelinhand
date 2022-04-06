@extends('RoomUser/MasterPage/roommasterpage')
@section('contant')


	<!--Start Sub Banner-->
   <div class="sub-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="detail">
						<h1>latest news</h1>
						<span>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</span>
						<ul>
							<li><a href="index-hotel.html">Home</a></li>
							<li><a class="select">Latest news</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-img"></div>
   </div>
   
    <!--End Sub Banner-->


    <!--Start Content-->
	<div class="content">
		
		<!--Start Latest Blog-->
			<div class="blog">
				<div class="container">
					<div class="row">
						
						<div class="blog-post">
							
							<div class="col-md-6">
								<div class="post-text">
									<span>april <span class="dot">.</span>  22 <span class="dot">.</span> 2016</span>
									<h3>Hand Make Ingredients</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
									<a href="blog-detail-hotel.html" class="read-more">Continue Reading</a>
								</div>
							</div>
							
							<div class="col-md-6">
								<img src="{{url('hotel/imgs/blog/simple-posts/news-img1.jpg')}}" alt="">
							</div>
							
						</div>
						
						<div class="blog-post">
							
							<div class="col-md-6">
								<img src="{{url('hotel/imgs/blog/simple-posts/news-img2.jpg')}}" alt="">
							</div>
							
							<div class="col-md-6">
								<div class="post-text">
									<span>april <span class="dot">.</span>  13 <span class="dot">.</span> 2016</span>
									<h3>Couple Area</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
									<a href="blog-detail-hotel.html" class="read-more">Continue Reading</a>
								</div>
							</div>
							
						</div>
						
						<div class="blog-post">
							
							<div class="col-md-6">
								<div class="post-text">
									<span>april <span class="dot">.</span>  05 <span class="dot">.</span> 2016</span>
									<h3>Fresh Salad</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
									<a href="blog-detail-hotel.html" class="read-more">Continue Reading</a>
								</div>
							</div>
							
							<div class="col-md-6">
								<img src="{{url('hotel/imgs/blog/simple-posts/news-img3.jpg')}}" alt="">
								
							</div>
							
						</div>
						
						<div class="blog-post">
							
							<div class="col-md-6">
								<img src="{{url('hotel/imgs/blog/simple-posts/news-img4.jpg')}}" alt="">
							</div>
							
							<div class="col-md-6">
								<div class="post-text">
									<span>march <span class="dot">.</span>  25 <span class="dot">.</span> 2016</span>
									<h3>Hot Coffee</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac tortor at tellus feugiat congue quis ut nunc. Semper ac dolor vitae accumsan. interdum hendrerit lacinia.</p>
									<a href="blog-detail-hotel.html" class="read-more">Continue Reading</a>
								</div>
							</div>
							
						</div>
						
						
						
						<div class="more-posts">
							<a href="#." class="newest-post"><i class="icon-angle-left"></i> Newest Posts</a>
							<a href="#." class="older-post">Older Posts <i class="icon-angle-right"></i></a>
						</div>
						
						
						
						
						
					</div>
				</div>
			</div>
		<!--End Latest Blog-->
		
	</div>	
   <!--End Content-->


@endsection