@extends('reception/MasterPage/masterpage')

@section('contant')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript">
   setTimeout(function(){
       location.reload();
   },30000);
</script>

    <div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content" style="margin-top: 10%">

  <div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="kt-portlet">


    <div class="kt-portlet__body" >
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="kt_table_1">
          <center><h2>ROOM STATUS</h2></center>
            <thead>
                <tr>
                        <th>Room ID</th>
                            <th>Room Name</th>
                            <th>Status</th>
                     
                </tr>                     
                                       
                        </thead>
                                @foreach($data as $row)

                        <tbody>
                            <tr >
                                <th>{{$row->RoomId}}</th>
                                <th>{{$row->RoomNo}}</th>
                                
                                  @if($row->Status =='0')
                                  
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


@endsection