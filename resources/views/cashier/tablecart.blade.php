@extends('cashier/MasterPage/MasterPage')
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
              url:"{{url('search2')}}",
              data:"_token=<?php echo csrf_token();?>&search2="+ document.getElementById('search'+id).value ,
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
	            Table Cart
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
				@foreach($dtable as $row)<button onclick="search2({{$row->TableId}})">
				<div class="kt-widget17__items">
					<div class="kt-widget17__item">
						<span class="fa fa-table"></span>
						<span class="kt-widget17__subtitle">
							<input type="hidden" name="search{{$row->TableId}}" id="search{{$row->TableId}}" value="{{$row->TableId}}">
						Table No:-	{{$row->TableId}}
						</span> 
						<span class="kt-widget17__desc">
						Table Name:-	{{$row->TName}}
						</span>  
					</div>

				</div>
			</button>
				@endforeach

<form> <div class="col-md-8 col-md-offset-2" align="center"> 
  <table class="table table-striped" >
 
<tbody id="search3"></tbody>

    
           <button type="button" class="btn btn-warning">  <a href="{{url('tablebill')}}" class="white-btn"> Bill</a></button>
 

 </div></form>
 
		</div>
		</div>
	</div>
</div>
<!--end:: Widgets/Activity-->	</div>	</div> 




    @endsection