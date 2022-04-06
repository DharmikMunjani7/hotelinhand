@extends('reception/MasterPage/masterpage')

@section('contant')
         <script type="text/javascript">

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('contant')
        
        }
    });

function search2(id){

        $.ajax({
               method:'POST',
              url:"{{url('search3')}}",
              data:"_token=<?php echo csrf_token();?>&search3="+ document.getElementById('search'+id).value ,
               success:function(data){
            
                    
        Swal.fire({
      position: 'center',
      type: 'success',
      title: 'SEACHING',
      showConfirmButton: false,
      timer: 2500
    })


                   $("#search3").html(data);
             
                    
                },
                error: function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    alert(xhr.responseText);
                }
            });   

    }
</script>

  
    <div class="row">
	<div class="col-xl-4">
		<!--begin:: Widgets/Activity-->
<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
	<div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
		<div class="kt-portlet__head-label">
		   <h3 class="kt-portlet__head-title">
	           Room Cart
	       </h3>
		</div>
	
	</div>
	<div class="kt-portlet__body kt-portlet__body--fit">
		<div class="kt-widget17">
			<div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides" style="background-color: #fd397a">
				<div class="kt-widget17__chart" style="height:320px;">
					<canvas id="kt_chart_activities"></canvas>
				</div>
			</div>

			<div class="kt-widget17__stats">
				@foreach($room as $row)<button onclick="search2({{$row->RoomId}})">
				<div class="kt-widget17__items">
					<div class="kt-widget17__item">
						<span class="fa fa-table"></span>
						<span class="kt-widget17__subtitle">
							<input type="hidden" name="search{{$row->RoomId}}" id="search{{$row->RoomId}}" value="{{$row->RoomId}}">
						RoomId:-	{{$row->RoomId}}
						</span> 
						<span class="kt-widget17__desc">
						RoomNo:-	{{$row->RoomNo}}
						</span> 
						@foreach($bookroom as $row1)
						@if(($row1->RoomId)==($row->RoomId))
						<span class="kt-widget17__desc">
						Customer ID:-	{{$row1->CustomerId}}
						</span>
							<span class="kt-widget17__desc">
						Start Date:-	{{$row1->StartDate}}
						</span>	<span class="kt-widget17__desc">
						End Date:-	{{$row1->EndDate}}
						</span>
						@endif 
						@endforeach
					</div>

				</div>
			</button>
				@endforeach

<form> <div class="col-md-8 col-md-offset-2" align="center"> 
  <table class="table table-striped" >
 
<tbody id="search3"></tbody>

    
           <button type="button" class="btn btn-warning">  <a href="{{url('roombill')}}" class="white-btn"> Bill</a></button>
 

 </div></form>
 
		</div>
		</div>
	</div>
</div>
<!--end:: Widgets/Activity-->	</div>	</div> 




@endsection