@extends('cashier/MasterPage/MasterPage')
@section('contant')	

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<div class="sub-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="detail">
						<h1 align="center">Parsal Order </h1>
						
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
     
      <th>{{$row->Status}}</th>
    </tr>
  
  </tbody>
  @endforeach
  <tr>
  <th colspan="2">
    <div class="detail col-md-offset-2">
    
            <a href="{{url('foodmenu')}}" class="white-btn"> RE-ORDER</a>
          </div>
  </th>
  <th colspan="2">
    <div class="detail col-md-offset-2">
    
            <a href="{{url('parsalbill')}}" class="white-btn"> Bill</a>
          </div>  
  </th>
  </tr>
</table>

 </div>



@endsection
