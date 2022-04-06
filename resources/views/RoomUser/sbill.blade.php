@extends('RoomUser/MasterPage/roommasterpage')
@section('contant')


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
 <br>
 <form action="" method="POST">
 <center>	
<table width="30%" >
<tr>
	<th colspan="4">
		<h1><center>
			HOTEL IN HAND
		</center></h1>
	</th>
</tr>
<tr>
	<th colspan="4">
		<h4><center>
		GF-Golden Square,near D-mart,Mota Varachha,surat-6.
		</center></h4>
	</th>
</tr>
<tr>
	<th colspan="4"><center>
		Ph:-8460098275
	</center></th>
</tr>
<tr>
	<th colspan="4"><center>
	--------------------------------------------------------------
	</center ></th>
</tr>
<tr>
	<th colspan="4"><center>
		GST NO:ASDFS8965WSD78
	</center></th>
</tr>
<tr>
	<th colspan="4"><center>
	--------------------------------------------------------------
	</center></th>
</tr>
<tr>
	<td>Room Id:</td>
	<td>{{$id}}</td>
	<td>Date:</td>
	<td>{{$mytime}}</td>
</tr>
<tr>
	<td>Server:</td>
	<td>Room User</td>
	<td>Guests:</td>
	<td>{{$id}}</td>
</tr>
<tr>
	<th colspan="4"><center>
	--------------------------------------------------------------
	</center></th>
</tr>
<tr>
	<th>ITEM</th>
	<th>QTY</th>
	<th>PRICE</th>
	<th>SUBTOTAL</th>
</tr>
<tr>
	<th colspan="4"><center>
	--------------------------------------------------------------
	</center></th>
</tr>
@php
	$i=0
@endphp
@foreach($order as $row)
<tr>        
      <td scope="row">{{$row->FName}}</td>      
      <td>{{$row->Quantity}}</td>    
      <td>{{$row->Price}}</td>
      <td>{{$row->Amount}}</td>


</tr>
  @endforeach
  @foreach($service as $row)
<tr>        
      <td scope="row">{{$row->SName}}</td>      
      <td>{{$row->Quantity}}</td>    
      <td>{{$row->S_Price}}</td>
      <td>{{$row->Amount}}</td>


</tr>
  @endforeach


	<th colspan="4"><center>
	--------------------------------------------------------------
	</center></th>
</tr>
<tr>

	<td></td>
	<th>Sub Total:</th>

	<td></td>

	<th>@foreach($purchase as $pur)
	{{$pur->Subtotal}} 
@endforeach
	</th>
</tr>
<tr>
	<td></td>
	<th>Tax:</th>
	<td></td>
	<td>{{$j}}</td>


</tr>
<tr>
	<td></td>
	<th>Total:</th>
	<td></td>
	<th>{{$k}}</th>
</tr>
<tr>
	<td colspan="4">     </td>
</tr>

<tr>
	<td></td>
	<th>Payment:</th>
	<td></td>
	<td>{{$k}}</td>
</tr>
<tr>
	<th colspan="4"><center>Thank You</center> </th>
</tr>
<tr>
	<th colspan="4"><center>PLEASE COME AGAIN</center></th>
</tr>
</table>
<!-- <div class="detail" >
		
						<a href="{{url('start')}}" class="white-btn">	pay bill</a>

						
		
						
					</div> -->
</center>
</form>
<br>



@endsection