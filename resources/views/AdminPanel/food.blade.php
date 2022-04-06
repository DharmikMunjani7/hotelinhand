@extends('AdminPanel/MasterPage/MasterPage')
@section('contant')
<script type="text/javascript">
  function food(id,row){
      
          $.ajax({

                 method:'POST',
                 url:"{{url('/deletefood')}}",
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
                        Manage Food
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('recivefood')}}" enctype="multipart/form-data">
            	{{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                          <label>Enter Food Category ID</label>
                           <!--  <input type="text" class="form-control" placeholder="enter food category id" name="cid">
                            

                             <span class="form-text text-muted">Please Enter Food Category id</span>
-->
                        <select class="form-control" name="cid1" >
                        @foreach($foodcategory as $foodcategorydata)
                            <option value="{{$foodcategorydata->FoodCategoryId}}" name="cid1">{{$foodcategorydata->FName}}</option>
                        @endforeach
                        </select>
                             <label>Enter Food Name</label>
                            <input type="text" class="form-control" placeholder="enter food name" name="fname" required pattern="[a-zA-Z ]+" title="Please Enter Valid Name">
                            <span class="form-text text-muted">Please Enter Food Name</span>

                             <label>Enter Food price</label>
                            <input type="text" class="form-control" placeholder="enter food price" pattern="[0-9]+"title="Enter Valid Price" name="price"  required>
                            <span class="form-text text-muted">Please Enter Food Price</span>

                             <label>Enter Food Quantity(gram)</label>
                            <input type="text" class="form-control" placeholder="enter food Quantity" name="quantity" required  pattern="[0-9]{0,3}"title="Enter Valid Quantity">
                            <span class="form-text text-muted">Please Enter Food Quantity</span>

                             <label>Upload image</label>
                          <input type="file" name="photo" required/>

                             <label>Enter Description</label>
                            
                             <input type="text" class="form-control" placeholder="enter Description" name="description" required>
                             <span class="form-text text-muted">Please Enter description</span>
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
              </div>
        <div>
    </div>
</div></div></div>
<div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="kt-portlet">


    <div class="kt-portlet__body">
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable dataTable no-footer dtr-inline" id="kt_table_1">
            <thead>
                <tr>
                    <th>foodid
                            </th>
                            <th>foodcategoryname</th>
                            <th>foodname</th>
                            <th>price</th>
                            <th>quantity</th>
                            <th>description</th>
                            <th>delete</th>
                            <th>edit</th>
                </tr>                     
                                       
                        </thead>

                         @foreach($data as $row)
                         
                        <tbody>
                            <tr id="{{$row->FoodId}}135">
                            <th>{{$row->FoodId}}</th>
                              <th>{{$row->FName}}</th>
                              
                             <th>{{$row->fname}}</th>
                                   
                               <th>{{$row->Price}}</th>
                                <th>{{$row->Quantity}}</th>
                                 <th>{{$row->Description}}</th>

                                <th><!--<a href="{{url('/deletefood')}}/{{$row->FoodId}}">delete</a>-->
                               <button onclick="food({{$row->FoodId}},'{{$row->FoodId}}135')" >   <div class="  container">    <span class="glyphicon glyphicon-remove"></span></div></button></th>
                            <th><a href="{{url('/editdis')}}/{{$row->FoodId}}" align="center"> <span class="glyphicon glyphicon-edit" ></span></a>

                            </th>
                        </tr>
                        </tbody>
                  
                        
                        @endforeach
            </table>

</div>
</div>
</div>

    


@endsection