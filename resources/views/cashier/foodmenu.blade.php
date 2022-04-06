@extends('cashier/MasterPage/MasterPage')
@section('contant')
<script type="text/javascript">

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('contant')
        
        }
    });

function parsal(fid,price){

        $.ajax({
               method:'POST',
               url:"{{url('/parsalitem')}}",
               data:"_token=<?php echo csrf_token();?>&quantity="+ document.getElementById('quantity'+fid).value +"&amount="+ document.getElementById('amount'+fid).value +"&fid="+fid,
               success:function(data){
                  //  $("#"+row).remove();
                    
        Swal.fire({
      position: 'center',
      type: 'success',
      title: 'Food Added',
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

      <form action="{{url('order')}}"><button onclick="{{url('order')}}" class="btn-warning btn-info btn-lg" value="add to cart" align="right">ORDER</button>
    </form>
         

  <div class="sub-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="detail">
           
<div class="w3-container w3-myfont">
 
  <p class="w3-jumbo" align="center">MENU</p>
</div>

          </div>
        </div>
      </div>
    </div>
    <div class="banner-img"></div>
   </div>
 <!--   <div class="wave"></div>
  -->  
   <!--End Sub Banner-->
    <div class="kt-portlet__body">
        <!--begin: Datatable -->
 
   <!--Start Content-->
    @foreach($foodcategory as $row1)
    <div class="content">

    <div class="our-menu">
      <div class="container">
      
        <div class="menu-sec">
          
          <div class="row">
            <div class="col-md-12">
              <div class="main-title">
                      

<div class="w3-container w3-myfont">
 
  <p class="w3-jumbo" align="center">{{$row1->FName}}</p>
</div>

              </div>
            </div>
          </div>
          @foreach($food as $row)
                            @if($row1->FoodCategoryId == $row->FoodCategoryId)

          <div class="menu-detail">
            
            <div class="row">
              
              
              <div class="col-md-12">
                
                
                <div class="food-detail">
                     
                  
                <!--session()->put('fid',{{$row->FoodId}}); -->
                    
                  
                  <span class="title"> 
                  
<div class="w3-container w3-myfont">
 
  <p class="w3-xxlarge" >{{$row->FName}}</p>
</div>

                    <h3 align="right"><span class="price">RS-{{$row->Price}}/qty-{{$row->Quantity}}gram
                  <!--  <a href="{{url('cartinsert')}}" class="btn-warning btn-info btn-lg" >


                          <span class="glyphicon glyphicon-plus"></span> add to cart 
                         </a> -->
                         <!-- <input type="submit" name="submit" class="btn-warning btn-info btn-lg"  value="add to cart "> -->
                      <button onclick="parsal({{$row->FoodId}},{{$row->Price}})" class="btn-warning btn-info btn-lg" value="add to cart" align="right">  ADD TO CART </button>


                        </span></h3>
                         
                    <span><div class="col-md-2"><img src="foodimage/{{$row->Img}}" alt="" height="130" width="130"></div>
                    </span>
                  </span>
                 <h4> <span class="tags">{{$row->Description}}
                    
                  </span></h4>



                </div>

<!-- button incriment decriment -->
<div class="container">
  <div class="row">
  <div class="col-lg-4"> <div class="input-group">


<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}
</script><div>
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="" onclick="quantityminus('quantity{{$row->FoodId}}','amount{{$row->FoodId}}','{{$row->Price}}')">
                                          <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                    </span>
                                    </div>
                                    <div>
                                      <input type="number" id="quantity{{$row->FoodId}}" name="quantity" class="form-control input-number" value="1" min="1" max="100" readonly="" >

                                    </div>
                                    <div>

                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="" onclick="quantityplus('quantity{{$row->FoodId}}','amount{{$row->FoodId}}','{{$row->Price}}')">
                           
                                            <span class="glyphicon glyphicon-plus"></span>

                                        </button>
                                    </span>
                                  </div>
                                    <br>

                                    

                                </div>
                        </div>

  </div>

                                    <input type="hidden" name="amount" id="amount{{$row->FoodId}}" value="{{$row->Price}}" readonly=""> 

</div>

<!-- close -->
                            
            </div>  
            
          </div>
          
        </div>
        &nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        @endif
        @endforeach
        
      
    
        
      </div>
    </div>
    
  </div>  
</div>
@endforeach
 
   <!--End Content-->
  <script>
    function quantityminus(id,id1,am){
      //alert(id);
      var q_value=document.getElementById(id);
      var a_value=document.getElementById(id1);
      var a=q_value.value*am;
      //alert(a);
      if(q_value.value>1){
      q_value.value=parseInt(q_value.value)-1;
      a_value.value=parseInt(q_value.value*am);
      }
    } 
    function quantityplus(id,id1,am){
      
      var q_value=document.getElementById(id);
      var a_value=document.getElementById(id1);
      var a = q_value.value * am;
      
      q_value.value=parseInt(q_value.value)+1;
      a_value.value=parseInt(q_value.value*am);
    }
  </script>

@endsection