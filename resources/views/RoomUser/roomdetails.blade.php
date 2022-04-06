@extends('RoomUser/MasterPage/roommasterpage')
@section('contant')

	
	<!--Start Sub Banner-->
   <div class="sub-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="detail">
						<h1>rooms</h1>
						<span>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</span>
						<ul>
							<li><a href="index-hotel.html">Home</a></li>
							<li><a class="select">Rooms</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-img"></div>
   </div>
   
   
   <!--End Sub Banner-->
   	<div class="content">
	
		<!--Start Rooms-->
			<div class="hotel-rooms">
				
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							
							<div class="room-sec">
								<a href="room-detail.html"><img src="{{url('hotel/imgs/room-img1.jpg')}}" alt=""></a>
								
								<div class="text-detail">
									<h4>Deluxe Room</h4>
									<p>Semper ac dolor vitae accumsan. interdum hendrerit lacinia. ac dolor vitae accumsan interdum. Semper ac dolor vitae accumsan. interdum hendrerit lacinia. </p>
									<ul>
										<li><i class="icon-long-arrow-right"></i> <span>Plasma TV with Cable</span></li>
										<li><i class="icon-long-arrow-right"></i> <span>Shower and Tub</span></li>
										<li><i class="icon-long-arrow-right"></i> <span>King Size Bed</span></li>
										<li><i class="icon-long-arrow-right"></i> <span>Air conditioning</span></li>
										<li><i class="icon-long-arrow-right"></i> <span>Breakfast Included</span></li>
									</ul>
								</div>
								
								<div class="price-detail">
									
									<div class="stars">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
									</div>
									
									<div class="room-price">
										<span class="current">$189</span>
										<span class="old">$99</span>
										<span class="per-night">*Pax/Per night</span>
									</div>
									
									<a href="room-detail.html">room detail</a>
									
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
						


@endsection