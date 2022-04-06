@extends('cashier/MasterPage/MasterPage')
@section('contant')

<script>
	function PrintElem(elem)
{
    var mywindow = window.open('', 'PRINT', 'height=600,width=1000');
    mywindow.document.write(document.getElementById(elem).innerHTML);
   

    mywindow.document.close(); // necessary for IE >= 10
    mywindow.focus(); // necessary for IE >= 10*/

    mywindow.print();
    mywindow.close();

    return true;
}

	</script>
<button onclick="PrintElem('printbill')">
	print
</button>



 <br>
<div id="printbill" class="col-sm-12"  >

 <form action="" method="POST" >

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
	-------------------------------------------
	</center ></th>
</tr>
<tr>
	<th colspan="4"><center>
		GST NO:ASDFS8965WSD78
	</center></th>
</tr>
<tr>
	<th colspan="4"><center>
	-----------------------------------------
	</center></th>
</tr>
<tr>
	<td>Table no:</td>
	<td>{{$search}}</td>
	<td>Date:</td>
	<td>{{$mytime}}</td>
</tr>
<tr>
	<td>Server:</td>
	<td>Table User</td>
	<td>Guests:</td>
	<td>{{$search}}</td>
</tr>
<tr>
	<th colspan="4"><center>
	--------------------------------------
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
	--------------------------------------
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


	<th colspan="4"><center>
	----------------------------------------
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
</center>
</div>

</form>
<br>



<div class="container" align="center">
<button class="btn btn-label-brand btn-sm btn-bold"><a href="{{url('deletecart')}}">PAYED</a></button>
</div>


@endsection