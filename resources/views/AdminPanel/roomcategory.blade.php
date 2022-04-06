@extends('AdminPanel/MasterPage/MasterPage')
@section('contant')
<script type="text/javascript">
function roomcategory(id,row){
    
        $.ajax({

               method:'POST',
               url:"{{url('/deleteroomcategory')}}",
               data:"_token=<?php echo csrf_token(); ?>&id="+id,
               success:function(data){
                    $("#"+row).remove();
                        Swal.fire({
      position: 'center',
      type: 'success',
      title: 'DELETED',
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
                        Manage Room Category 
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('reciveroomcategory')}}" enctype="multipart/form-data">
            	{{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Enter Room Name</label>
                            <input type="text" class="form-control" placeholder="enter rood name" name="rname" required pattern="[a-zA-Z0-9 ]*" title="Please Enter Valid Room Name">
                            <span class="form-text text-muted">Please Enter Room Name</span>

                             <label>Enter price per day</label>
                            <input type="text" class="form-control" placeholder="enter price per day" name="ppd" required pattern="[0-9]*" title="Please Enter Valid Price Per Day">
                            <span class="form-text text-muted">Please Enter price per day</span>

                             <label>Upload image</label>
                          <input type="file" name="photoroom" required/>
                        </div>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div></form></div></div></div></div>
              <div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="kt-portlet">
                        <div class="kt-portlet__body">
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="kt_table_1" >
                                    <thead>
                                   
                                                   <th>
                                roomcategoryid
                            </th>
                            <th>room name</th>

                            <th>price per day</th>
                            <th>room Image</th>
                           
                            <th>delete</th>
                            <th>edit</th>
                                                   
                                       
                        </thead>
                         @foreach($data as $row)
                        <tbody>
                              <tr id="{{$row->RoomCategoryId}}135">
                            <th>{{$row->RoomCategoryId}}</th>

                            <th>{{$row->RName}}</th>

                            <th>{{$row->PricePerDay}}</th>

                            <th>{{$row->Img}}</th>
                            
                            <th><!-- <a href="{{url('/deleteroomcategory')}}/{{$row->RoomCategoryId}}">delete</a> -->
                                 <button onclick="roomcategory({{$row->RoomCategoryId}},'{{$row->RoomCategoryId}}135')" >   <div class="  container">    <span class="glyphicon glyphicon-remove"></span></div></button>
                            </th>
                            <th><a href="{{url('/editdisroomcategory')}}/{{$row->RoomCategoryId}}"><span class="glyphicon glyphicon-edit" ></span></a></th></tr>
                        </tbody>
                        
                        @endforeach
            </table>

</div></div></div></div>


@endsection