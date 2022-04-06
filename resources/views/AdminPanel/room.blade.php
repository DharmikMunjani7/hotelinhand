@extends('AdminPanel/MasterPage/MasterPage')
@section('contant')
<script type="text/javascript">
function room(id,row){
    
        $.ajax({

               method:'POST',
               url:"{{url('/deleteroom2')}}",
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
                      Manage Room
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('reciveroom1')}}">
            	{{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                          <label>Enter Room Category name</label>
                           <!--  <input type="text" class="form-control" placeholder="enter room category id" name="cid">
                            <span class="form-text text-muted">Please Enter room Category id</span>
 -->
                            <select class="form-control" name="cid" >
                        @foreach($roomcategory as $roomcategorydata)
                            <option value="{{$roomcategorydata->RoomCategoryId}}">{{$roomcategorydata->RName}}</option>
                        @endforeach
                        </select>
                       
                             <label>Enter Room No</label>
                            <input type="text" class="form-control" placeholder="enter Room no" name="rno" required pattern="[a-zA-Z0-9 ]*" title="Please Enter Valid Room Number">
                            <span class="form-text text-muted">Please Enter Room No</span>

                             <label>Enter User Name</label>
                            <input type="text" class="form-control" placeholder="enter user name" name="uname" required pattern="[a-zA-Z0-9]*" title="Please Enter Valid User Name">
                            <span class="form-text text-muted">Please Enter User Name</span>

                             <label>Enter password</label>
                            <input type="text" class="form-control" placeholder="enter food Quantity" name="pass" required pattern="[a-zA-Z0-9!@#$%^&*]*" title="Please Enter Valid Password">
                            <span class="form-text text-muted">Please Enter Password</span>

                             <label>Check facility</label>
                             <br>
                         @foreach($facility as $f)
                          <input type="checkbox" name="check[]"  value="{{$f->F_Name}}"> {{$f->F_Name}}&nbsp;&nbsp;&nbsp;
                            @endforeach
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
              <div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="kt-portlet">
                        <div class="kt-portlet__body">
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="kt_table_1">
                                    <thead>
                                   
                                                   <th>
                                roomid
                            </th>
                            <th>roomcategoryid</th>
                            <th>room no</th>
                            <th>user name</th>
                            <th>pass</th>
                            <th>room facilities</th>
                            <th>delete</th>
                            <th>edit</th>
                                                   
                                       
                        </thead>
                    
                         @foreach($data as $row)
                        <tbody>
                              <tr id="{{$row->RoomId}}135">
                            <th>{{$row->RoomId}}</th>
                             <th>{{$row->RName}}</th>
                              <th>{{$row->RoomNo}}</th>
                               <th>{{$row->UserName}}</th>
                                <th>{{$row->Pass}}</th>
                                <th>{{$row->R_Facilities}}</th>

                               <th><!--  <a href="{{url('/deleteroom')}}/{{$row->RoomId}}">delete</a> -->
                                   
                                    <button onclick="room({{$row->RoomId}},'{{$row->RoomId}}135')" >    <div class="  container">    <span class="glyphicon glyphicon-remove"></span></div></div></button>
                               </th>
                            <th><a href="{{url('/editdisroom2')}}/{{$row->RoomId}}"><span class="glyphicon glyphicon-edit" ></span></a></th></tr>
                        </tbody>
                        @endforeach
                       
            </table>
</div></div></div></div>

        <!--end::Portlet-->

        
@endsection