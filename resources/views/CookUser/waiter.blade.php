@extends('CookUser/MasterPage/waiterMasterPage')
@section('contant')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript">
   setTimeout(function(){
       location.reload();
   },30000);
</script>
 <script type="text/javascript">

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('contant')
        
        }
    });
$.ajax({
               method:'POST',
               url:"{{url('waiter2')}}",
               data:"_token=<?php echo csrf_token();?>",
               success:function(data){
                  // //  $("#"+row).remove();
                   // alert("food added : "+data);
                    $("#dis").html(data);
                  //   data=JSON.parse(data);
                  //   var searchdata=;
                    
                },
                error: function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    alert(xhr.responseText);
                }
            });

             function ok(CartItemID){
     // alert(CartItemID);
       $.ajax({
               method:'POST',
               url:"{{url('updatepickup')}}",
               data:"_token=<?php echo csrf_token();?>&id="+CartItemID,
               success:function(data){
                  // //  $("#"+row).remove();
                   // alert("food added : "+data);
                                          Swal.fire({
      position: 'center',
      type: 'success',
      title: 'PickUp Food',
      showConfirmButton: false,
      timer: 2500
    })
                      setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 2000);
                  //  $("#dis").html(data);
                  //   data=JSON.parse(data);
                  //   var searchdata=;
                    
                },
                error: function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    alert(xhr.responseText);
                }
            }); } 

            function ok2(CartItemID){
     // alert(CartItemID);
       $.ajax({
               method:'POST',
               url:"{{url('updatepickup2')}}",
               data:"_token=<?php echo csrf_token();?>&id="+CartItemID,
               success:function(data){
                  // //  $("#"+row).remove();
                   // alert("food added : "+data);
                                      Swal.fire({
      position: 'center',
      type: 'success',
      title: 'PickUp Food',
      showConfirmButton: false,
      timer: 2500
    })
                      setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 2000);
                  //  $("#dis").html(data);
                  //   data=JSON.parse(data);
                  //   var searchdata=;
                    
                },
                error: function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    alert(xhr.responseText);
                }
            }); }
             function okk4(ParsalID){
     // alert(CartItemID);
       $.ajax({
               method:'POST',
               url:"{{url('updatepickup4')}}",
               data:"_token=<?php echo csrf_token();?>&id="+ParsalID,
               success:function(data){
                  // //  $("#"+row).remove();
                   // alert("food added : "+data);
                                          Swal.fire({
      position: 'center',
      type: 'success',
      title: 'PickUp Parsal Food',
      showConfirmButton: false,
      timer: 2500
    })
                      setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 2000);
                  //  $("#dis").html(data);
                  //   data=JSON.parse(data);
                  //   var searchdata=;
                    
                },
                error: function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    alert(xhr.responseText);
                }
            }); }  
     function ok3(CartItemID){
     // alert(CartItemID);
       $.ajax({
               method:'POST',
               url:"{{url('updateservice2')}}",
               data:"_token=<?php echo csrf_token();?>&id="+CartItemID,
               success:function(data){
                  // //  $("#"+row).remove();
                   // alert("food added : "+data);
                                 Swal.fire({
      position: 'center',
      type: 'success',
      title: 'PickUp Room Service',
      showConfirmButton: false,
      timer: 2500
    })
                      setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 2000);
                  //  $("#dis").html(data);
                  //   data=JSON.parse(data);
                  //   var searchdata=;
                    
                },
                error: function(xhr, status, error) {
                    var err = eval("(" + xhr.responseText + ")");
                    alert(xhr.responseText);
                }
            }); }  
    
</script>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <div class="sub-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="detail">
            <h1 align="center">Waiter Panel </h1>
            
          </div>
        </div>
      </div>
    </div>
    <div class="banner-img"></div>
   </div>
 <!--   <div class="wave"></div>
  --> 
  <div class="col-md-8 col-md-offset-2" align="center"> 
  <table class="table table-striped" >
  <thead>
    <h3 align="left">TABLE_FOOD</h3>
    <tr>
      <th scope="col">CartID</th>
      <th scope="col">CartItemID</th>
       <th scope="col">FoodCategoryName</th>
      <th scope="col">FoodName</th>
      <th scope="col">Quantity</th>
     <th scope="col">Status</th>
     <th scope="col">pickup</th>
   
    
    </tr>

  </thead>
   <tbody id="dis">
     
    
   </tbody>

  
</table>

 </div>





@endsection