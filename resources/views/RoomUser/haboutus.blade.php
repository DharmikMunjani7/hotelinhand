@extends('RoomUser/MasterPage/roommasterpage')
@section('contant')
	
<!--Start Sub Banner-->
   <div class="sub-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="detail">
						<h1>About Us</h1>
						<span>Hospitality is simply an opportunity to show love and care</span>
						<ul>
							<li><a href="{{url('room')}}">Home</a></li>
							<li><a class="select">About Us</a></li>
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

	
		
		
		<!--Start Pearl Tour-->
		<div class="about-hotel">
			<div class="container">
				
				<div class="quality"><img src="{{url('hotel/imgs/quality.jpg')}}" alt=""></div>
				
				<div class="row">
				<div class="col-md-12">
					<div class="main-title">
					<h1>ENJOY YOUR HOLIDAYS</h1>
					<p>We are an Independent Chain of Beutifully Crafted Hotel,Inns And Resorts.We have inducted Unique Personalities to Each Of Our Properties,Espacilly with their locations,Gorgeous Decor and Furnishing.</p>
					</div>
				</div>
				</div>
				
				
				<div id="hotel-view" class="owl-carousel owl-theme">
 
				  <div class="item"><img src="{{url('hotel/imgs/Hotel.jpg')}}" alt=""></div>
				  <div class="item"><img src="{{url('hotel/imgs/hotel1.jpg')}}" alt=""></div>
				  <div class="item"><img src="{{url('hotel/imgs/hotel2.jpg')}}" alt=""></div>
				 
				</div>
				
				<div class="row">
				
				<div class="col-md-6">
					<div class="what-we-do">
						<h5>Our Mission</h5>
						<p>The mission of our hotel is to provide outstanding lodging facilities and services to our guests. Our hotel focuses on individual business and leisure travel, as well as travel associated with groups meetings .we emphasise high quality standards in our rooms and food and beverage divisions. We provide a fair return on investment for our owners and recognise that this cannot be done without well trained , motivated and enthusiastic employees.</p>
					</div>
				</div>
							
				<div class="col-md-6">
					<div class="what-we-do">
						<h5>Our Goal</h5>
						<p>Provide warm, sincere, and engaging service that ensures Guests feel valued
Treat each and every Guest as a unique individual
Anticipate our Guests’ needs with thoughtful and personal touches 
Resolve Guest problems and never saying no without offering an alternative 
Be ambassadors for our Brand, our Hotel, our Community and our Colleagues
Our biggest goal is to find ways to make your life easier.</p>
					</div>
				</div>
				
				</div>
				
				
				<div class="what-include">
@foreach($facilitie as $row)

					<div class="include-sec" style="width: 18%; height: 20%;">
						<img src="hotel/imgs/{{$row->Img}}" alt="" style="width: 20%; height: 30%;">
						<span>{{$row->F_Name}}</span>
					</div>
@endforeach					

					
				</div>
				
				
				
			</div>
		</div>
		<!--End Pearl Tour-->
		
		
		
		<!--Start Master Chef-->
		<div class="team-members dark-bg">
			<div class="container">
				
				<div class="row">
				<div class="col-md-12">
					<div class="main-title">
					<h1>MEET OUR TEAM</h1>
					<p>At Hotel we truly value all our staff. We realize that they make the difference when it comes to providing excellent customer service.
</p><p>We are currently a family and small part of them are presented here – a team of devoted, passionate people whom all hold the key to our success.</p><p>
Whilst the hotel itself is the reason that guests come to visit us, it is “the team” that ensures their return.</p><p>
The Team would like to take this opportunity to thank all our guests from the previous seasons, and we will be pleased to welcome you and meet you at our hotel also!

</p>
					</div>
				</div>
				</div>
				
				
        <div class="container">
          <div class="row">
            <div class="span12">

              <div id="owl-demo" class="owl-carousel">

            <!-- @foreach($team as $row)
                <div class="chef-sec item">
                    	<img class="lazyOwl" src="hotel/imgs/{{$row->Profile_Img}}" alt="" style="margin-top: 20px">
                        <div class="detail">
                        	<h6>{{$row->MName}}</h6>
                            <p>{{$row->M_Description}}</p>
                            <ul>
								<li><a href="#." class="fb">facebook</a> <span>-</span></li>
								<li><a href="#." class="tw">twitter</a> <span>-</span></li>
								<li><a href="#." class="gp">google+</a></li>
							</ul>
                        </div>
                    </div>
            @endforeach
             -->    
				<div class="chef-sec item">
                    	<img class="lazyOwl" src="{{url('hotel/imgs/team-img2.jpg')}}" alt="">
                        <div class="detail">
                        	<h6>NENSSON</h6>
                            <p>Master In House Keeping And Provide Services In Hotel Room.</p>
                            <ul>
								<li><a href="#." class="fb">facebook</a> <span>-</span></li>
								<li><a href="#." class="tw">twitter</a></li>
							</ul>
                        </div>
                    </div>
                
                <div class="chef-sec item">
                    	<img class="lazyOwl" src="{{url('hotel/imgs/team-img3.jpg')}}" alt="">
                        <div class="detail">
                        	<h6>ANOTONY</h6>
                            <p>Give Best Room Service.</p>
                            <ul>
								<li><a href="#." class="fb">facebook</a> <span>-</span></li>
								<li><a href="#." class="tw">twitter</a> <span>-</span></li>
								<li><a href="#." class="gp">google+</a></li>
							</ul>
                        </div>
                    </div>
                
                <div class="chef-sec item">
                    	<img class="lazyOwl" src="{{url('hotel/imgs/team-img4.jpg')}}" alt="">
                        <div class="detail">
                        	<h6>Milla Rose</h6>
                            <p>Receptionist.</p>
                            <ul>
								<li><a href="#." class="fb">facebook</a> <span>-</span></li>
								<li><a href="#." class="gp">google+</a></li>
							</ul>
                        </div>
                    </div>
                
                <div class="chef-sec item">
                    	<img class="lazyOwl" src="{{url('hotel/imgs/team-img1.jpg')}}" alt="">
                        <div class="detail">
                        	<h6>PEARL</h6>
                            <p>House Keeping Service Provider In Hotel.</p>
                            <ul>
								<li><a href="#." class="fb">facebook</a> <span>-</span></li>
								<li><a href="#." class="tw">twitter</a> <span>-</span></li>
								<li><a href="#." class="gp">google+</a></li>
							</ul>
                        </div>
                    </div>   

              </div>

            </div>
          </div>
        </div>

    
				
				
			</div>
		</div>
		<!--End Master Chef-->
		
		
	</div>	
   <!--End Content-->



@endsection