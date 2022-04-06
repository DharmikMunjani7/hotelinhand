@extends('CookUser/MasterPage/cookMasterPage')
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


  // alert(fid);
  //  alert(price);
  //  alert("quantity : "+ document.getElementById("quantity"+fid).value);
  // alert('dfs');
   //alert("amount : "+ document.getElementById('search').value);
   



  // alert("{{url('cookk')}}");
        $.ajax({
               method:'POST',
               url:"{{url('cookk')}}",
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
               url:"{{url('updatepripare')}}",
               data:"_token=<?php echo csrf_token();?>&id="+CartItemID,
               success:function(data){
                  // //  $("#"+row).remove();
                   // alert("food added : "+data);
                          Swal.fire({
      position: 'center',
      type: 'success',
      title: 'Pripare Food',
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
 function ready(CartItemID){
     // alert(CartItemID);
       $.ajax({
               method:'POST',
               url:"{{url('updateready')}}",
               data:"_token=<?php echo csrf_token();?>&id="+CartItemID,
               success:function(data){
                  // //  $("#"+row).remove();
                   // alert("food added : "+data);
                                  Swal.fire({
      position: 'center',
      type: 'success',
      title: 'Ready Food',
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
            });   

    }
    function ok2(RoomCartItemID){
      // alert(RoomCartItemID);
       $.ajax({
               method:'POST',
               url:"{{url('updatepripare2')}}",
               data:"_token=<?php echo csrf_token();?>&id="+RoomCartItemID,
               success:function(data){
                  // //  $("#"+row).remove();
                                       Swal.fire({
      position: 'center',
      type: 'success',
      title: 'Pripare Food',
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
 function ready2(RoomCartItemID){
     // alert(CartItemID);
       $.ajax({
               method:'POST',
               url:"{{url('updateready2')}}",
               data:"_token=<?php echo csrf_token();?>&id="+RoomCartItemID,
               success:function(data){
                  // //  $("#"+row).remove();
                   // alert("food added : "+data);
                                  Swal.fire({
      position: 'center',
      type: 'success',
      title: 'Ready Food',
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
            }); 
         
  
    }

      function okk3(RoomCartItemID){
      // alert(RoomCartItemID);
       $.ajax({
               method:'POST',
               url:"{{url('updatepripare3')}}",
               data:"_token=<?php echo csrf_token();?>&id="+RoomCartItemID,
               success:function(data){
                  // //  $("#"+row).remove();
                                       Swal.fire({
      position: 'center',
      type: 'success',
      title: 'Pripare Food',
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
 function readyy3(RoomCartItemID){
     // alert(CartItemID);
       $.ajax({
               method:'POST',
               url:"{{url('updateready3')}}",
               data:"_token=<?php echo csrf_token();?>&id="+RoomCartItemID,
               success:function(data){
                  // //  $("#"+row).remove();
                   // alert("food added : "+data);
                                         Swal.fire({
      position: 'center',
      type: 'success',
      title: 'Ready Food',
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
            }); 
         
  
    }


</script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<div class="sub-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="detail">
						<h1 align="center">Cook Panel </h1>
						
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
    <h3 align="left">TABLE</h3>
    <tr>
      <th scope="col">CartID</th>
      <th scope="col">CartItemID</th>
       <th scope="col">FoodCategoryName</th>
      <th scope="col">FoodName</th>
      <th scope="col">Quantity</th>
     <th scope="col">Status</th>
     <th scope="col">prepare</th>
     <th scope="col">Ready</th>
    
    </tr>

  </thead>
   <tbody id="dis">
     
    
   </tbody>

  
</table>

 </div>





@endsection