@extends('AdminPanel/MasterPage/MasterPage')
@section('contant')
<script type="text/javascript">
function user(id,row){
    
        $.ajax({

               method:'POST',
               url:"{{url('/deleteuser')}}",
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
Manage User                 </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('reciveuser')}}">
            	{{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                             <label>Enter User type id</label>
                           <select class="form-control" name="utid" >
                        @foreach($usertype as $usertypedata)
                            <option value="{{$usertypedata->UserTypeId}}">{{$usertypedata->UName}}</option>
                        @endforeach
                        </select>
                            <label>Enter User Name</label>
                            <input type="text" class="form-control" placeholder="enter table name" name="uname" required pattern="[a-zA-Z0-9 ]*" title="Please Enter Valid User Name">
                            <span class="form-text text-muted">Please Enter user name</span>

 <label>Enter password</label>
                            <input type="text" class="form-control" placeholder="enter password" name="pass" required pattern="[a-zA-Z0-9!@#$%^&*]*" title="Please Enter Valid User Password">
                            <span class="form-text text-muted">Please Enter password</span>
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
        <table class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="kt_table_1">
                                    <thead>
                                       <th>
                                userid
                            </th>
                                                   <th>
                                usertypeid
                            </th>
                            <th>User name</th>
                            
    <th>
                                password
                            </th>
                            <th>delete</th>
                            <th>edit</th>
                                                   
                                       
                        </thead>
                         @foreach($data as $row)

                        <tbody>
                            <tr id="{{$row->UserId}}135">
                            <th>{{$row->UserId}}</th>
                       
                            
                            <th>{{$row->UName}}</th>
                      
                            <th>{{$row->UserName}}</th>
                            <th>{{$row->Pass}}</th>
                            
                            <th><!-- <a href="{{url('/deleteuser')}}/{{$row->UserId}}">delete</a> -->
                                <button onclick="user({{$row->UserId}},'{{$row->UserId}}135')" >     <div class="  container">    <span class="glyphicon glyphicon-remove"></span></div></button>
                            </th>
                            <th><a href="{{url('/editdisuser')}}/{{$row->UserId}}"><span class="glyphicon glyphicon-edit" ></span></</a></th>
                            </tr>
                        </tbody>
                        @endforeach
            </table>


    </div></div></div></div>

@endsection