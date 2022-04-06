@extends('AdminPanel/MasterPage/MasterPage')
@section('contant')
<script type="text/javascript">
function service(id,row){
    
        $.ajax({

               method:'POST',
               url:"{{url('/deleteservice')}}",
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
                        Manage Service
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('reciveservice')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Enter service name</label>
                            <input type="text" class="form-control" placeholder="enter service name" name="sname" required pattern="[a-zA-Z ]*" title="Please Enter Valid Service Name ">
                            <span class="form-text text-muted">Please Enter Service Name</span>

                              <label>Enter service price</label>
                            <input type="text" class="form-control" placeholder="enter service price" name="sprice" required pattern="[0-9]*" title="Please Enter Valid Price">
                            <span class="form-text text-muted">Please Enter Service price</span>

                              <label>Enter service description</label>
                            <input type="text" class="form-control" placeholder="enter service description" name="sdescription" required>
                            <span class="form-text text-muted">Please Enter Service description</span>

                             <label>Upload image</label>
                          <input type="file" name="photoservice" required/>

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
                                serviceid
                            </th>
                            <th>service name</th>
                            <th>service price</th>
                            <th>service description</th>
                            <th>service image</th>

                            <th>delete</th>
                            <th>edit</th>
                                                   
                                       
                        </thead>
                         @foreach($data as $row)
                        <tbody>
                              <tr id="{{$row->ServiceId}}135">
                            <th>{{$row->ServiceId}}</th>

                            <th>{{$row->SName}}</th>
                            <th>{{$row->S_Price}}</th>
                            <th>{{$row->S_Description}}</th>
                            <th>{{$row->Img}}</th>

                            
                            <th><!-- <a href="{{url('/deleteservice')}}/{{$row->ServiceId}}">delete</a> -->
                                 <button onclick="service({{$row->ServiceId}},'{{$row->ServiceId}}135')" >   <div class="  container">    <span class="glyphicon glyphicon-remove"></span></div></button>
                            </th>
                            <th><a href="{{url('/editdisservice')}}/{{$row->ServiceId}}"><span class="glyphicon glyphicon-edit" ></span></a></th></tr>
                        </tbody>
                        
                        @endforeach
            </table>

</div></div></div></div>
        

@endsection