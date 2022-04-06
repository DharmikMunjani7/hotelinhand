@extends('AdminPanel/MasterPage/MasterPage')
@section('contant')
<script type="text/javascript">


    function foodcategory(id,row){
        $.ajax({
               method:'POST',
               url:"{{url('/deletecategory')}}",
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
              Manage Food Category 
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('recivefoodcategory')}}">
            	{{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Enter Food Category</label>
                            <input type="label" class="form-control" placeholder="enter food category" name="cname" required pattern="[A-Za-z& ]*" title="IN VALID FOOD Category">
                            <span class="form-text text-muted">Please Enter Food Category</span>
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
                                foodcategoryid
                            </th>
                            <th>food name</th>
                            <th>delete</th>
                            <th>edit</th>
                                                   
                              </tr>         
                        </thead>
                         @foreach($data as $row)
                        <tbody>
                            <tr id="{{$row->FoodCategoryId}}135">
                            <th>{{$row->FoodCategoryId}}</th>

                            <th>{{$row->FName}}</th>

                            
                            <th><!--<a href="{{url('/deletecategory')}}/{{$row->FoodCategoryId}}">delete</a>
                                -->
                                <button onclick="foodcategory({{$row->FoodCategoryId}},'{{$row->FoodCategoryId}}135');">  <div class="  container">    <span class="glyphicon glyphicon-remove"></span></div></button></th>
                            <th><a href="{{url('/editcategorydis')}}/{{$row->FoodCategoryId}}"><span class="glyphicon glyphicon-edit" ></span></a></th>
                       </tr>
                        </tbody>
                        
                        @endforeach
            </table>

</div></div></div></div>
    
        <!--end::Portlet-->

        

@endsection