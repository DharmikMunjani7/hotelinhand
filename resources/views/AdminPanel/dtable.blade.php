@extends('AdminPanel/MasterPage/MasterPage')
@section('contant')
<script type="text/javascript">
 
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('contant')
        
        }
    });
  function ddtable(id,row){
          $.ajax({
                 method:'POST',
                 url:"{{url('/deletedtable')}}",
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
                       Manage Dining Table 
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('recivedtable')}}">
                {{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <label>Enter table name</label>
                            <input type="text" class="form-control" placeholder="enter table name" name="tablename" required pattern="[a-zA-Z0-9 ]*" title="Please Enter Valid Table Name" >
                            <span class="form-text text-muted">Please Enter table Name</span>

                             <label>Enter no of seat</label>
                            <input type="text" class="form-control" placeholder="enter price per day" name="nos" required pattern="[0-9]{1,2}" title="Please Enter Valid No Of Seat">
                            <span class="form-text text-muted">Please Enter no of seat</span>

                            <label>Enter password</label>
                            <input type="text" class="form-control" placeholder="enter password" name="pass" required pattern="[a-zA-Z0-9!@#$%^&*]*" title="Please Enter Valid Password">
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
                                tableid
                            </th>
                            <th>table name</th>
                            <th>no of seat</th>
                            <th>Password</th>
                           
                            <th>delete</th>
                            <th>edit</th>
                                                   
                                       
                        </thead>

                         @foreach($data as $row)
                        <tbody>
                              <tr id="{{$row->TableId}}135">
                            <th>{{$row->TableId}}</th>

                            <th>{{$row->TName}}</th>

                            <th>{{$row->NoOfSeat}}</th>
                            <th>{{$row->Pass}}</th>

                          <!--   
                            <th><a href="{{url('/deleteroomcategory')}}/{{$row->RoomCategoryId}}">delete</a>
                                 <button onclick="dtable({{$row->RoomCategoryId}},'{{$row->TableId}}135')" >   <div class="container">    <span class="glyphicon glyphicon-remove"></span></div></button>
                            </th> -->
                        <th><button onclick="ddtable({{$row->TableId}},'{{$row->TableId}}135');">  <div class="  container">    <span class="glyphicon glyphicon-remove"></span></div></button></th>
                                                       <th><a href="{{url('/editdisdtable')}}/{{$row->TableId}}"><span class="glyphicon glyphicon-edit" ></span></a></th></tr>
                        </tbody>
                        
                        @endforeach
            </table>

</div></div></div></div>


@endsection