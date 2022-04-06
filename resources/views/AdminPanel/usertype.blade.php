@extends('AdminPanel/MasterPage/MasterPage')
@section('contant')
<script type="text/javascript">
function usertype(id,row){
    
        $.ajax({

               method:'POST',
               url:"{{url('/deleteusertype')}}",
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
     Manage User Type
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('reciveusertype')}}">
            	{{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Enter User Name</label>
                            <input type="text" class="form-control" placeholder="enter table name" name="uname" required pattern="[a-zA-Z ]+" title="Please Enter Valid User Type">
                            <span class="form-text text-muted">Please Enter user name</span>

                        </div>
                    </div>
                </div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </form></div></div></div></div>
              <div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="kt-portlet">
                        <div class="kt-portlet__body">
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="kt_table_1">
                                    <thead>
                                   
                                                   <th>
                                usertypeid
                            </th>
                            <th>User name</th>
                            

                            <th>delete</th>
                            <th>edit</th>
                                                   
                                       
                        </thead>
                         @foreach($data as $row)
                        <tbody>
                              <tr id="{{$row->UserTypeId}}135">
                            <th>{{$row->UserTypeId}}</th>

                            <th>{{$row->UName}}</th>
                            <th><!-- <a href="{{url('/deleteusertype')}}/{{$row->UserTypeId}}">delete</a> -->
                                 <button onclick="usertype({{$row->UserTypeId}},'{{$row->UserTypeId}}135')" >     <div class="  container">    <span class="glyphicon glyphicon-remove"></span></div></button>
                            </th>
                            <th><a href="{{url('/editdisusertype')}}/{{$row->UserTypeId}}"><span class="glyphicon glyphicon-edit" ></span></a></th></tr>
                        </tbody>
                        
                        @endforeach
            </table>


       </div></div></div></div>


@endsection