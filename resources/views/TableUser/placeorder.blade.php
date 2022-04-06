@extends('TableUser/MasterPage/MasterPage')
@section('contant')	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript">
   setTimeout(function(){
       location.reload();
   },30000);
</script>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<div class="sub-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="detail">
						<h1>YOUR ORDER</h1>
						<span>Enjoy Your Favorite Food</span>
						
					</div>
				</div>
			</div>
		</div>
		<div class="banner-img"></div>
   </div>
 <!--   <div class="wave"></div>
  --> 
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
     @if($row->Status == '0')
  <th><span class="label label-danger">Pending</span></th>
@elseif($row->Status == '1')

  <th> <span class="label label-warning">Prepared</span></th>

@elseif($row->Status == '2')
  <th>  <span class="label label-success">Ready</span></th>
   
@elseif($row->Status == '3')
  <th><span class="label label-info">Pickup</span></th>

@endif
      
    </tr>
  
  </tbody>
  @endforeach
  <tr>
  <th colspan="2">
    <div class="detail col-md-offset-2">
    
            <a href="{{url('menu')}}" class="white-btn"> RE-ORDER</a>
          </div>
  </th>
  <th colspan="2">
    <div class="detail col-md-offset-2">
    
            <a href="{{url('bill')}}" class="white-btn"> Bill</a>
          </div>  
  </th>
  </tr>
</table>

 </div>


      

@endsection