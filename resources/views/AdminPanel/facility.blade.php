@extends('AdminPanel/MasterPage/MasterPage')
@section('contant')
<script type="text/javascript">


    function facility(id,row){
        $.ajax({
               method:'POST',
               url:"{{url('/deletefacility')}}",
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
                        Manage Room Facility 
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('recivefacility')}}" enctype="multipart/form-data">
            	{{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Enter Facility Name</label>
                            <input type="label" class="form-control" placeholder="enter facility name" name="fname" required pattern="[a-zA-Z ]*" title="Please Enter Valid Room Facility">
                            <span class="form-text text-muted">Please Enter Facility Name</span>

                            <label>Enter Facility Description</label>
                            <input type="label" class="form-control" placeholder="enter facility Description" name="description" required>
                            <span class="form-text text-muted">Please Enter Facility Description</span>

                            <label>Upload image</label>
                          <input type="file" name="photoo" required/>
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
                                   <tr>
                                                   <th>
                                facility id
                            </th>
                            <th>facility Name</th>
                            <th>description</th>
                            <th>Image</th>
                            <th>delete</th>
                            <th>edit</th>
                                                   
                              </tr>         
                        </thead>
                         @foreach($data as $row)
                        <tbody>
                            <tr id="{{$row->F_Id}}135">
                            <th>{{$row->F_Id}}</th>

                            <th>{{$row->F_Name}}</th>

                            <th>{{$row->F_Description}}</th>
                            <th>{{$row->Img}}</th>

                            
                            <th><!--<a href="{{url('/deletecategory')}}/{{$row->FoodCategoryId}}">delete</a>
                                -->
                                <button onclick="facility({{$row->F_Id}},'{{$row->F_Id}}135');">  <div class="  container">    <span class="glyphicon glyphicon-remove"></span></div></button></th>
                            <th><a href="{{url('/editdisfacility')}}/{{$row->F_Id}}"><span class="glyphicon glyphicon-edit" ></span></a></th>
                       </tr>
                        </tbody>
                        
                        @endforeach
            </table>

</div></div></div></div>
    
        <!--end::Portlet-->

        

@endsection