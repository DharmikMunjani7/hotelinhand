@extends('RoomUser/MasterPage/roommasterpage')
@section('contant')
		<script type="text/javascript" src="{{url('https://cdn.jsdelivr.net/npm/sweetalert2')}}"></script>
<script type="text/javascript">

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('contant')
        
        }
    });

function addcart(fid,price){
	// alert(fid);
//	 alert(price);
//	 alert("quantity : "+ document.getElementById("quantity"+fid).value);
 //     alert("{{url('/scartinsert')}}");
        $.ajax({

               method:'POST',
               url:"{{url('/scartinsert')}}",
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

function    addscart(sid,price){
//		 alert(sid);
//	 alert(price);
	// alert("quantity : "+ document.getElementById("quantityy"+sid).value);
 //     alert("{{url('/scartinsert')}}");
        $.ajax({

               method:'POST',
               url:"{{url('/rscartinsert')}}",
		      data:"_token=<?php echo csrf_token();?>&quantity="+ document.getElementById('quantityy'+sid).value +"&amount="+ document.getElementById('amountt'+sid).value +"&sid="+sid,
              success:function(data){
                  //  $("#"+row).remove();
                 
       	Swal.fire({
  		position: 'center',
  		type: 'success',
  		title: 'Service Added',
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
</script>	<!--Main Banner-->
   
   <div class="tp-banner-container">
   
   
	
		<div class="tp-banner" >
			<ul>
    	<!-- SLIDE  -->	
	
    
		<li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">
		
		<img src="{{url('hotel/imgs/slides/banenr-img1.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">


		
		<div class="tp-caption arrowicon customin  rs-parallaxlevel-10"
			data-x="center"
			data-y="340" 
			data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			data-speed="850"
			data-start="1500"
			data-easing="Power3.easeInOut"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			data-endspeed="1000"
			style=""><img src="{{url('hotel/imgs/slides/flower.png')}}" alt="" >
		</div>
		
		
		<div class="tp-caption grey_heavy_72 customin tp-resizeme rs-parallaxlevel-10"
			data-x="center"
			data-y="416" 
			data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			data-speed="850"
			data-start="2500"
			data-easing="Power3.easeInOut"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"	
			data-endspeed="1000"
			style="font-size:72px; z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Hotel In Hand
		</div>

		
		<div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
			data-x="center"
			data-y="498" 
			data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			data-speed="500"
			data-start="3500"
			data-easing="Power3.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.05"
			data-endelementdelay="0.1"
			style="font-size:28px; z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><div style="text-align:left;">Enjoy Your Favorite Food</div>
		</div>
		
	</li>
	
	
	<li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">
		
		<img src="{{url('hotel/imgs/slides/banenr-img2.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">


		
		<div class="tp-caption grey_heavy_72 customin tp-resizeme rs-parallaxlevel-10"
			data-x="0"
			data-y="396" 
			data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			data-speed="850"
			data-start="2500"
			data-easing="Power3.easeInOut"
			data-splitin="chars"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			style="font-size:72px; z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">Luxury life style
		</div>

		
		<div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
			data-x="0"
			data-y="488" 
			data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			data-speed="500"
			data-start="3500"
			data-easing="Power3.easeInOut"
			data-splitin="chars"
			data-splitout="none"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			style="font-size:28px; z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><div style="text-align:left;">fine food</div>
		</div>
		
		
	</li>
	
	
	<li data-transition="fade" data-slotamount="7" data-masterspeed="500"  data-saveperformance="on"  data-title="Intro Slide">
		
		<img src="{{url('hotel/imgs/slides/banenr-img3.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">


		
		<div class="tp-caption arrowicon customin  rs-parallaxlevel-10"
			data-x="center"
			data-y="330" 
			data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			data-speed="850"
			data-start="1500"
			data-easing="Power3.easeInOut"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"
			data-endspeed="1000"
			style=""><img src="{{url('imgs/slides/flower.png')}}" alt="" >
		</div>
		
		
		<div class="tp-caption grey_heavy_72 customin tp-resizeme rs-parallaxlevel-10"
			data-x="center"
			data-y="406" 
			data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			data-speed="850"
			data-start="2500"
			data-easing="Power3.easeInOut"
			data-elementdelay="0.1"
			data-endelementdelay="0.1"	
			data-endspeed="1000"
			style="font-size:72px; z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;">true love
		</div>

		
		<div class="tp-caption grey_regular_18 customin tp-resizeme rs-parallaxlevel-0"
			data-x="center"
			data-y="498" 
			data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
			data-speed="500"
			data-start="3500"
			data-easing="Power3.easeInOut"
			data-splitin="none"
			data-splitout="none"
			data-elementdelay="0.05"
			data-endelementdelay="0.1"
			style="font-size:28px; z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><div style="text-align:left;">a place where memories are made</div>
		</div>
		
		
		
		
	</li>
	
	
	
    
</ul>
<div class="tp-bannertimer"></div>	</div>
	
   
   <!--End Banner-->
      
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
														<span>{{$row1->FName}}</span>
							<h1>Enjoy  Dish</h1>
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
									  
									<div class="row">
										<div class="col-md-3 col-sm-12">
											<img src="foodimage/{{$row->Img}}" height="200px" width="200px" alt="">
										</div>
										<div class="col-md-9 col-sm-12" >
											<div class="row" style="padding: 10px;border-bottom: 1px solid #333;">
												<div class="col-md-6">
												<span class="title" style="font-size: 30px;padding: 10px;"> {{$row->FName}} 
												</span>
			
											</div>					
											<div class="col-md-6" style="text-align: right;">
												<span class="price">RS-{{$row->Price}}/qty-{{$row->Quantity}}gram	
									</span>
	       							<button onclick="addcart({{$row->FoodId}},{{$row->Price}})" class="btn-warning btn-info btn-lg" value="add to cart">  ADD TO CART </button>
											</div>			
											</div>
											<div class="row" style="padding: 10px;">


												<div class="tags" style="padding: 10px;font-size: 20px;" >{{$row->Description}}
												</div>		
<!-- button incriment decriment -->
<div class="container">
	<div class="row">
	<div class="col-lg-2"> 
		<div class="input-group">


<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}
</script>
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="" onclick="quantityminus('quantity{{$row->FoodId}}','amount{{$row->FoodId}}','{{$row->Price}}')">
                                          <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                    </span>
                                    <input type="number" id="quantity{{$row->FoodId}}" name="quantity" class="form-control input-number" value="1" min="1" max="100" readonly="" >


                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="" onclick="quantityplus('quantity{{$row->FoodId}}','amount{{$row->FoodId}}','{{$row->Price}}')">
                           
                                            <span class="glyphicon glyphicon-plus"></span>

                                        </button>
                                    </span>
                                    <br>

                                    

                                </div>
                        </div>

	</div>

                                    <input type="hidden" name="amount" id="amount{{$row->FoodId}}" value="{{$row->Price}}" readonly="">	

</div>


											</div>
										</div>
									</div>


	
								</div>


<!-- close -->
														
						</div>	
						
					</div>
					
				</div>
				&nbsp;
&nbsp;
				@endif
				@endforeach 
				
			
		
				
			</div>
		</div>
		
	</div>	
</div>

@endforeach

<!-- dhating -->

<div class="content">

		<div class="our-menu">
			<div class="container">
			
				<div class="menu-sec">
					@foreach($service as $row)
					<div class="row">
						<div class="col-md-12">
							<div class="main-title">
														<span>{{$row->SName}}</span>
							<h1>SERVEICES</h1>
							</div>
						</div>
					</div>
					

					<div class="menu-detail">
						
						<div class="row">
							
							
							<div class="col-md-12">
								
								
								<div class="food-detail">
									   
									
								<!--session()->put('fid',{{$row->FoodId}}); -->
									  
									<div class="row">
										<div class="col-md-3 col-sm-12">
											<img src="foodimage/{{$row->Img}}" height="200px" width="200px" alt="">
										</div>
										<div class="col-md-9 col-sm-12" >
											<div class="row" style="padding: 10px;border-bottom: 1px solid #333;">
												<div class="col-md-6">
												<span class="title" style="font-size: 30px;padding: 10px;"> {{$row->FName}} 
												</span>
			
											</div>					
											<div class="col-md-6" style="text-align: right;">
												<span class="price">RS-{{$row->S_Price}}
									</span>
	       							<button onclick="addscart({{$row->ServiceId}},{{$row->S_Price}})" class="btn-warning btn-info btn-lg" value="add to cart">  ADD TO CART </button>
											</div>			
											</div>
											<div class="row" style="padding: 10px;">


												<div class="tags" style="padding: 10px;font-size: 20px;" >{{$row->S_Description}}
												</div>	</div></div>	
<!-- button incriment decriment -->
<div class="container">
	<div class="row">
	<div class="col-lg-2"> 
		<div class="input-group">


<script>
function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}
</script>
                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="" onclick=onclick="quantityminus('quantityy{{$row->ServiceId}}','amountt{{$row->ServiceId}}','{{$row->S_Price}}')">
                                          <span class="glyphicon glyphicon-minus"></span>
                                        </button>
                                    </span>
                                    <input type="number" id="quantityy{{$row->ServiceId}}" name="quantity" class="form-control input-number" value="1" min="1" max="100" readonly="" >


                                    <span class="input-group-btn">
                                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="" onclick="quantityplus('quantityy{{$row->ServiceId}}','amountt{{$row->ServiceId}}','{{$row->S_Price}}')">
                           
                                            <span class="glyphicon glyphicon-plus"></span>

                                        </button>
                                    </span>
                                    <br>

                                    

                                </div>
                        </div>

	</div>

                                       <input type="hidden" name="amount" id="amountt{{$row->ServiceId}}" value="{{$row->S_Price}}" readonly="">	


</div>


											</div>
										</div>
									</div>


	
								</div>


<!-- close -->
														
						</div>	
						
					</div>
					
				</div>
				
				@endforeach 
				
			
		
				
			</div>
		</div>
		
	</div>	
</div>

		
		

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