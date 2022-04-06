@extends('AdminPanel/MasterPage/MasterPage')
@section('contant')

<div class="row">
	<div class="col-xl-4">
		<!--begin:: Widgets/Activity-->
<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
	<div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
		<div class="kt-portlet__head-label">
		   <h3 class="kt-portlet__head-title">
	           Dashboard
	       </h3>
		</div>
		</div>
	<div class="kt-portlet__body kt-portlet__body--fit">
		<div class="kt-widget17">
			<div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides" style="background-color: #fd397a">
				<div class="kt-widget17__chart" style="height:320px;">
					<canvas id="kt_chart_activities"></canvas>
				</div>
			</div>
			<div class="kt-widget17__stats">
				<div class="kt-widget17__items">
					<div class="kt-widget17__item">
					
						<span class="kt-widget17__subtitle">
						Food Category
						</span> 
						<span class="kt-widget17__desc">
							Total Food Category:-{{$q}}
						</span>  
					</div>

					<div class="kt-widget17__item">
						  
						<span class="kt-widget17__subtitle">
							Food
						</span> 
						<span class="kt-widget17__desc">
							Total Food :-{{$w}}
							
						</span>  
					</div>					
				</div>
				<div class="kt-widget17__items">
					<div class="kt-widget17__item">
						<span class="kt-widget17__subtitle">
							User Type
						</span> 
						<span class="kt-widget17__desc">
							Total User Type:-{{$e}}
							
						</span>  
					</div>	

					<div class="kt-widget17__item">
						<span class="kt-widget17__subtitle">
							User
						</span> 
						<span class="kt-widget17__desc">
							Total User:-{{$r}}
						
						</span>  
					</div>				
				</div>

				<div class="kt-widget17__items">
					<div class="kt-widget17__item">
						<span class="kt-widget17__subtitle">
							Dinig Table
						</span> 
						<span class="kt-widget17__desc">
							Total Dinig Table:-{{$t}}
						
						</span>  
					</div>	

					<div class="kt-widget17__item">
						<span class="kt-widget17__subtitle">
							Room Facility
						</span> 
						<span class="kt-widget17__desc">
							Total Facility:-{{$y}}
						
						</span>  
					</div>				
				</div>
				<div class="kt-widget17__items">
					<div class="kt-widget17__item">
						<span class="kt-widget17__subtitle">
							Room Category
						</span> 
						<span class="kt-widget17__desc">
							Total Room Category:-{{$u}}
					
						</span>  
					</div>	

					<div class="kt-widget17__item">
						<span class="kt-widget17__subtitle">
							Room
						</span> 
						<span class="kt-widget17__desc">
							Total Room :-{{$i}}
							
						</span>  
					</div>				
				</div>
				<div class="kt-widget17__items">
					<div class="kt-widget17__item">
						<span class="kt-widget17__subtitle">
							
							Room Service 
						</span> 
						<span class="kt-widget17__desc">
							Total Room Service:-{{$o}}
						
						</span>  
					</div>	

					
				</div>
			</div>
		</div>
	</div>
</div>

@endsection