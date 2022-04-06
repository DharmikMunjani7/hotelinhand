@extends('RoomUser/MasterPage/roommasterpage')
@section('contant')


<!--Start Sub Banner-->
   		<div class="sub-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="detail">
						<h1>Your Services</h1>
						<span></span>
						<ul>
							<li><a href="index-hotel.html">Home</a></li>
							<li><a class="select">Contact Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="banner-img"></div>
   </div>
   
   <!--End Sub Banner-->
     <div class="col-md-8 col-md-offset-2" align="center"> 
  <table class="table table-striped" >
  <thead>
    <tr>
      <th scope="col">Food Name</th>
       <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Amount</th>
     
      <th scope="col">Status</th>
    
    </tr>
  </thead>
   @foreach($order as $row)
  <tbody>
    <tr>
        
      <th scope="row">{{$row->FName}}</th>
      
      <th>{{$row->Price}}</th>
    
      <th>{{$row->Quantity}}</th>
      <th>{{$row->Amount}}</th>
     
      <th>{{$row->Status}}</th>
    </tr>
  
  </tbody>
  @endforeach
  <tr>
  <th colspan="2">
    <div class="detail col-md-offset-2">
    
            <a href="{{url('room')}}" class="white-btn"> RE-ORDER</a>
          </div>
  </th>
  <th colspan="2">
    <div class="detail col-md-offset-2">
    
            <a href="{{url('rbill')}}" class="white-btn"> Bill</a>
          </div>  
  </th>
  </tr>
</table>

 </div>


@endsection