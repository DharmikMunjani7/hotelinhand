@extends('RoomUser/MasterPage/roommasterpage')
@section('contant')


<!--Start Sub Banner-->
   		<div class="sub-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="detail">
						<h1>contact us</h1>
						<span>Hospitality is simply an opportunity to show love and care</span>
						<ul>
							<li><a href="{{url('room')}}">Home</a></li>
							<li><a class="select">Contact Us</a></li>
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
	
		<div class="contact-page">
		
		<!--Start Get in Touch-->
				<div class="get-in-touch">
					<div class="container">
					<div class="row">
						
						
						
						<div class="col-md-6">
							<div class="get-touch-form">
                            <p class="success_msg" id="success_msg" style="display:none">Thank You! We will contact you shortly.</p>
								<form name="contact_form" id="contact_form" method="post" action="{{url('contact_form')}}" >
									                {{csrf_field()}}
                                <input name="name" id="name" type="text" pattern="^[a-zA-Z ]+$" title="Enter Valid Name" onKeyPress="remove_contact_errors();" onblur="if(this.value == '') { this.value='Your Name'}" onfocus="if (this.value == 'Your Name') {this.value=''}" value="Your Name">
								<input class="last" name="email_address" id="email_address" onKeyPress="remove_contact_errors();" type="text" pattern="[a-zA-Z0-9.]@gmail.com)" title="Enter Valid Email" onblur="if(this.value == '') { this.value='E-mail Address'}" onfocus="if (this.value == 'E-mail Address') {this.value=''}" value="E-mail Address" title="Enter Valid Email Address">
								<textarea name="msg" id="msg" cols="1" onKeyPress="remove_contact_errors();" rows="1" onblur="if(this.value == '') { this.value='Message'}" onfocus="if (this.value == 'Message') {this.value=''}" value="Message">Message</textarea>
								<input type="submit" name=" " value="send message">
                                </form>
							</div>
						</div>
						
					</div>
					</div>
					
					
				</div>
		<!--End Get in Touch-->
		
		
		<!--Start Map-->
			<div id='map'>
				<div id='find-us'></div>
			</div>
		<!--End Map-->
					
		
		</div>
		
	</div>	
   <!--End Content-->






@endsection