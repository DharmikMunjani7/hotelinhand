@extends('reception/MasterPage/masterpage')
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
<div id="printbill" class="col-lg-12"  >

 <form action="" method="POST" >

 <center>	
<table width="30%" >
<tr>
	<th colspan="14">
		<h1><center>
			HOTEL IN HAND
		</center></h1>
	</th>
</tr>
<tr>
	<th colspan="14">
		<h4><center>
			GF-Golden Square,near D-mart,Mota Varachha,surat-6.
		</center></h4>
	</th>
</tr>
<tr>
	<th colspan="14"><center>
		Ph:-8460098275
	</center></th>
</tr>
<tr>
	<th colspan="14"><center>
	----------------------------------------------
	</center ></th>
</tr>
<tr>
	<th colspan="14"><center>
		GST NO:ASDFS8965WSD78
	</center></th>
</tr>
<tr>
	<th colspan="14"><center>
	----------------------------------------------
	</center></th>
</tr>
<tr>
	<td>Room no:</td>
	<td>{{$search}}</td>
	<td>Date:</td>
	<td>{{$mytime}}</td>
</tr>
<tr>
	<td>Server:</td>
	<td>Room User</td>
	<td>Guests:</td>
	<td>{{$search}}</td>
</tr>
<tr>
	<th colspan="14"><center>
	------------------------------------------------
	</center></th>
</tr>
<tr>
	






	<th>RoomNo</th>&nbsp;&nbsp;
	<th>CustomerName</th>&nbsp;&nbsp;
	<th>StartDate</th>&nbsp;&nbsp;
	<th>EndDate</th>&nbsp;&nbsp;
	<th>Amount</th>&nbsp;&nbsp;
</tr>
<tr>
	<th colspan="14"><center>
	------------------------------------------------
	</center></th>
</tr>
@php
	$i=0
@endphp
@foreach($data3 as $row)
<tr>        
      <td scope="row">{{$row->RoomNo}}</td> &nbsp;     
      <td>{{$row->CName}}</td> &nbsp;   
      <td>{{$row->StartDate}} &nbsp; </td>&nbsp;
      <td>{{$row->EndDate}}</td>&nbsp;
      <td>   {{$row->Amount}}</td>&nbsp;



</tr>
  @endforeach
  
<tr>
	<th colspan="14"><center>
	------------------------------------------------
	</center></th>
</tr>
<tr>
	<th>ITEM</th>
	<th>QTY</th>
	<th>PRICE</th>
	<th>SUBTOTAL</th>
</tr>
<tr>
	<th colspan="14"><center>
	----------------------------------------------
	</center></th>
</tr>
@php
	$i=0
@endphp
@foreach($data1 as $row)
<tr>        
      <td scope="row">{{$row->FName}}</td>      
      <td>{{$row->Quantity}}</td>    
      <td>{{$row->Price}}</td>
      <td>{{$row->Amount}}</td>


</tr>
  @endforeach
  @foreach($data2 as $row)
<tr>        
      <td scope="row">{{$row->SName}}</td>      
      <td>{{$row->Quantity}}</td>    
      <td>{{$row->S_Price}}</td>
      <td>{{$row->Amount}}</td>


</tr>
  @endforeach


	<th colspan="14"><center>
	-----------------------------------------------
	</center></th>
</tr>
<tr>

	<td></td>
	<th>Sub Total:</th>

	<td></td>

	<th><!-- @foreach($purchase as $pur)
	{{$pur->Subtotal}} 
@endforeach
 -->
 {{$p}}
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
	<td colspan="14">     </td>
</tr>

<tr>
	<td></td>
	<th>Payment:</th>
	<td></td>
	<td>{{$k}}</td>
</tr>
<tr>
	<th colspan="14"><center>Thank You</center> </th>
</tr>
<tr>
	<th colspan="14"><center>PLEASE COME AGAIN</center></th>
</tr>
</table>
</center>
</div>

</form>
<br>



<div class="container" align="center">
<button class="btn btn-label-brand btn-sm btn-bold"><a href="{{url('deleteroomcart')}}">PAYED</a></button>
</div>


@endsection