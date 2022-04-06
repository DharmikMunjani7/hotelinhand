
@extends('reception/MasterPage/masterpage')
@section('contant')
<script type="text/javascript">
	function date(i)
{
	
 	var date11 = new Date(document.getElementById(i).value);

	
var date22 = new Date();
date22.setDate(date22.getDate() - 1);

// alert(date);
if (date22>=date11) {
	Swal.fire({
  		position: 'center',
  		type: 'error',
  		title: 'Enter Valid Date',
  		showConfirmButton: false,
  		timer: 2500
		})
}


}
	function date2(i)
{
	
 	var date111 = new Date(document.getElementById(i).value);

	
var date222 = new Date();
date222.setDate(date222.getDate() - 1);

// alert(date);
if (date222>=date111) {
	Swal.fire({
  		position: 'center',
  		type: 'error',
  		title: 'Enter Valid Date',
  		showConfirmButton: false,
  		timer: 2500
		})
}


}
 
 function q(i,j)
 {
 
 	var date1 = new Date(document.getElementById('a'+i).value);
 	
 	var date1 = new Date(document.getElementById('d'+i).value);
	var date2 = new Date(document.getElementById('d2'+i).value);
	var diffDays = date2.getDate() - date1.getDate(); 
	

	var q = document.getElementById('amount'+j).value;

	var amount=(parseInt(q))*(parseInt(diffDays));
	document.getElementById('a'+i).value=amount;

 }
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('contant')
        
        }
    });

function addcart(roomno,price){

	alert(roomno);
	
	alert(price);
	//alert("quantity : "+ document.getElementById("quantity"+fid).value);
 //   alert("{{url('/cartinsert')}}");
      	  $.ajax({
               method:'POST',
               url:"{{url('book')}}",
               data:"_token=<?php echo csrf_token();?>&roomno="+roomno+"&price"+price,
               success:function(data){
                  //  $("#"+row).remove();
                    alert("room booked : "+data);
                      // window.location.href = "{{url('books?$data=')}}"+data;
                },
                error: function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    alert(xhr.responseText);
                }
            });		


    }
</script>

<!-- Mirrored from wahabali.com/work/pearl-demo/accommodation.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Apr 2019 12:01:51 GMT -->
   
   <!--Start Content-->

				
    @foreach($data as $row1)
			<form action="{{url('book')}}" method="post">
            	{{csrf_field()}}		
<div class="hotel-rooms">
				
<div class="container">
<div class="row">
<div class="col-md-12">
				
							
							<div class="room-sec">
								<a><img src="roomimage/{{$row1->Img}}" alt="" ></a>
								
								<div class="text-detail">
									<h2 align="center" >{{$row1->RName}}</h2>
    <h5>Room Id -> {{$row1->RoomId}}</h5>   
    <h5>Room No -> {{$row1->RoomNo}}</h5>
    
    <input type="hidden" name="roomid" value="{{$row1->RoomId}}">
								
										
										<div>									<ul>
										@foreach($bookroom as $row)
										@if($row1->RoomId == $row->RoomId)
										<input type="hidden" name="date{{$row1->RoomNo}}" id="date{{$row1->RoomNo}}" value="{{$row->EndDate}}" >
										<h5 align="left">This Room is Booked Till {{$row->EndDate}}</h5>
										@endif
										@endforeach
									</ul>
									</div>
									
									<ul>
										<h5>ROOM FACILITIES</h5>
										<li><i class="icon-long-arrow-right"></i> <span>{{$row1->R_Facilities}}

										</span></li>
										
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
										<span class="current">{{$row1->PricePerDay}}</span>
									
										<span class="per-night">*Pax/Per night</span>
									</div>
									
							<!-- 	<button  class="btn btn-primary">BOOK ROOM</button> -->
							
								</div>

								<div class="row">





							
							
							
							
							
</div></div></div>
<div class="container">
   <div class="booking-accor">
		<ul id="booking-accordion" class="booking-accordion" style="position: static;">
			<li class="open">
				
				<ul class="form-accordion" style="display:block;">
					<li>
					<div class="field">
						<h7 style="color: white;">Starting Date</h7>
					<input type="date" id="d{{$row1->RoomNo}}" onchange="date('d{{$row1->RoomNo}}')" name="sdate" placeholder="Starting Date"  />		
					</div>
					<input type="hidden" name="price" id="amount{{$row1->PricePerDay}}" value="{{$row1->PricePerDay}}">
					<div class="field">
						<h7 style="color: white;">Ending Date</h7>
					<input type="date" id="d2{{$row1->RoomNo}}"  placeholder="Ending Date" name="ldate"  onblur="q('{{$row1->RoomNo}}','{{$row1->PricePerDay}}')" onchange="date2('d2{{$row1->RoomNo}}')" />		
					</div>
					
					
					<div class="field">
						<h7 style="color: white;">
							Total Amount
						</h7>
					<input type="text" id="a{{$row1->RoomNo}}"  placeholder="Amount" name="amount"  />		 </div>
					<div class="field">
					

					
					<h7 style="color: white;">Customer Id</h7>
					<input type="text" placeholder="Customer Id" name="cid"  />		
				
						</div>

					<button  class="availability">BOOK ROOM</button>
					<li>
				</ul>
				
		</li>
		</ul>
	</div>
	</div>	
	

								</div>
							</div>

			</form>			
						
			@endforeach	

@endsection