@extends('cashier/MasterPage/MasterPage')
@section('contant')	
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript">
   setTimeout(function(){
       location.reload();
   },20000);
</script>
<script type="text/javascript">
  function token(id,row){
      
          $.ajax({

                 method:'POST',
                 url:"{{url('deletetoken')}}",
                 data:"_token=<?php echo csrf_token(); ?>&id="+id,
                 success:function(data){
                      $("#"+row).remove();
                     
        Swal.fire({
      position: 'center',
      type: 'success',
      title: 'Token Deleted',
      showConfirmButton: false,
      timer: 2500
    })

                  },
                  error: function(xhr, status, error) {
                      var err = eval("(" + xhr.responseText + ")");
                      alert(xhr.responseText);
                  }
              });

      }
</script>


		<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                      MANAGE TOKEN 
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('recivetoken')}}">
            	{{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Enter Name</label>
                            <input type="label" class="form-control" placeholder="enter name" name="name" required pattern="[a-zA-Z ]*" title="Please Enter Valid Customer Name">
                            <span class="form-text text-muted">Please Enter Name</span>
                        </div>
                     <div class="form-group">
                            <label>Enter Person Number</label>
                            <input type="label" class="form-control" placeholder="enter person number" name="number" required pattern="[0-9]*" title="Please Enter Valid Room Facility">
                            <span class="form-text text-muted">Please Enter Person Number</span>
                        </div>
                         <div class="form-group">
                            <label>Enter Contact Number</label>
                            <input type="label" class="form-control" placeholder="enter person number" name="cnumber" required pattern="[7|8|9][0-9]{9}" title="Please Enter Valid Room Facility">
                            <span class="form-text text-muted">Please Enter Contact Number</span>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
                      </form>
            <!--end::Form-->
        </div>
        <div></div></div></div></div>
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

        <div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="kt-portlet">


    <div class="kt-portlet__body">
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="kt_table_1">
            <thead>
                <tr>
                    		<th>Token Number </th>
                            <th>Name</th>
                            <th>Person Number</th>
               				<th>delete</th>
                    

                </tr>                     
                                       
                        </thead>
                                @foreach($data as $row)

                        <tbody>
                            <tr id="{{$row->TokenNo}}135">
                                <th>{{$row->TokenNo}}</th>
                                <th>{{$row->Name}}</th>
                                <th>{{$row->PersonNo}}</th>
                                <th>
                               <button onclick="token({{$row->TokenNo}},'{{$row->TokenNo}}135')" >   <div class="  container">    <span class="glyphicon glyphicon-remove"></span></div></button></th>
<!-- <th>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script>
// $(document).ready(function(){

//   $("#{{$row->TokenNo}}135").click(function(){
//     $("#{{$row->TokenNo}}135").text("alocated");
//     $("#{{$row->TokenNo}}135").css("background", "red");
//   });
// });
function as(v)
{

//   $(document).ready(function(){

// $("#").click(function(){
// $("#v").innerhtml("ocated");
//     $("#v").css("background", "red");
//      });
//  });

    $("#v").attr("class", "btn-primary");
    document.getElementById(v).style.color="green";
    
}

</script>



<button id="{{$row->TokenNo}}" value="allocated" class="btn-secondary" onclick="as(this.id)" >anand</button>
 -->
</body>
</html>
</th>
                            </tr>
                        </tbody>
                                @endforeach

            </table>

</div>
</div>
</div>
    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

  <div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="kt-portlet">


    <div class="kt-portlet__body" >
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="kt_table_1">
          <center><h2>TABLE STATUS</h2></center>
            <thead>
                <tr>
                        <th>Table Number</th>
                            <th>Number Of Seat</th>
                            <th>Status</th>
                     
                </tr>                     
                                       
                        </thead>
                                @foreach($data2 as $row2)

                        <tbody>
                            <tr >
                                <th>{{$row2->TableId}}</th>
                                <th>{{$row2->NoOfSeat}}</th>
                                
                                  @if($row2->status =='0')
                                  
                                    <th>  <span class="label label-success">Not Alocated</span></th>
                                  
                                  @else
                                  
                                  <th> <span class="label label-danger">Alocated</span></th>

                                  @endif
                               
                                

                            </tr>
                        </tbody>
                                @endforeach

            </table>

</div>
</div>
</div>

 <!--end::Portlet-->
@endsection