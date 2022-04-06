@extends('RoomUser/MasterPage/roommasterpage')
@section('contant')

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript">
   setTimeout(function(){
       location.reload();
   },30000);
</script>
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
  	  <thead><tr>
  	<th colspan="5"><center><h3>Food</h3></center></th>
  </tr></thead>
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
     
      
 @if($row->Status == '0')
  <th><span class="label label-danger">Pending</span></th>
@elseif($row->Status == '1')

  <th> <span class="label label-warning">Prepared</span></th>

@elseif($row->Status == '2')
  <th>  <span class="label label-success">Ready</span></th>
   
@elseif($row->Status == '3')
  <th><span class="label label-info">Pickup</span></th>

@endif
      
    




      </th>
    </tr>
  
  </tbody>
  @endforeach
  <thead><tr>
  	<th colspan="5"><center><h3>Services</h3></center></th>
  </tr></thead>
  <thead>
    <tr>
      <th scope="col">Service Name</th>
       <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Amount</th>
     
      <th scope="col">Status</th>
    
    </tr>
  </thead>
   @foreach($service as $row)
  <tbody>
    <tr>
        
      <th scope="row">{{$row->SName}}</th>
      
      <th>{{$row->S_Price}}</th>
    
      <th>{{$row->Quantity}}</th>
      <th>{{$row->Amount}}</th>
     
      @if($row->Status == '0')
  <th><span class="label label-danger">Pending</span></th>
@elseif($row->Status == '4')

  <th>  <span class="label label-success">Ready</span></th>


@endif
      
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
    
            <a href="{{url('sbill')}}" class="white-btn"> Bill</a>
          </div>  
  </th>
  </tr>
</table>

 </div>



@endsection