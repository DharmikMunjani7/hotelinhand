@extends('reception/MasterPage/masterpage')

@section('contant')
<div class="content">
	
		<div class="contact-page" >
		
		<!--Start Get in Touch-->
				<div class="get-in-touch">
					<div class="container">
					<div class="row">
						
						
						<div class="col-xl-4">
							<div class="get-touch-form">
                            <p class="success_msg" id="success_msg" style="display:none">Thank You! We will contact you shortly.</p>
                            
								<form action="{{url('addcustomer')}}" method="post"  enctype="multipart/form-data">
										{{csrf_field()}}
                         <!--    <div class="col-lg-6 offset-lg-3"> -->
                         	<h3 align="center">Customer Details</h3>
                                <input name="cname" id="cname" type="text" onKeyPress="remove_contact_errors();" onblur="if(this.value == '') { this.value='Customer Name'}" onfocus="if (this.value == 'Customer Name') {this.value=''}" value="Customer Name" required>
                           	
								<input class="last" name="email" id="email_address" onKeyPress="remove_contact_errors();" type="text" onblur="if(this.value == '') { this.value='E-mail'}" onfocus="if (this.value == 'E-mail') {this.value=''}" value="E-mail" required>
								<br>
								   <input name="adults" id="adults" type="text" onKeyPress="remove_contact_errors();" onblur="if(this.value == '') { this.value='Adults'}" onfocus="if (this.value == 'Adults') {this.value=''}" value="Adults" required>
                           	
								<input class="last" name="children" id="email_address" onKeyPress="remove_contact_errors();" type="text" onblur="if(this.value == '') { this.value='Children'}" onfocus="if (this.value == 'Children') {this.value=''}" value="Children">
<br>
								 <input name="contact" id="contact" type="text" onKeyPress="remove_contact_errors();" onblur="if(this.value == '') { this.value='Contact Number'}" onfocus="if (this.value == 'Contact Number') {this.value=''}" value="Contact Number" max="10" 	 required>
                           	
								<input class="last" name="gst" id="email_address" onKeyPress="remove_contact_errors();" type="text" onblur="if(this.value == '') { this.value='GST Number'}" onfocus="if (this.value == 'GST Number') {this.value=''}" value="GST Number" required>
<br>
				

				   	<div class="col-md-6">
					
						<select class="basic-example" id="proof" name="proof">
							<option value="Proof Type">Proof Type</option>
							<option value="Adhhar Card">Adhhar Card</option>
							<option value="Pan Card">Pan Card</option>
							<option value="Licence">Licence</option>
							<option value="Voting Card">Voting Card</option>
							<option value="Other">Other</option>
						</select>
					</div>

                           &nbsp;	
                           &nbsp;	
                           &nbsp;	
                           &nbsp;	
                           &nbsp;	
								<label>Upload Proof</label>
                          <input type="file" name="photocus"/>
								
								<textarea name="address" id="address" cols="1" onKeyPress="remove_contact_errors();" rows="1" onblur="if(this.value == '') { this.value='Address'}" onfocus="if (this.value == 'Address') {this.value=''}" value="Address">Address</textarea>
								<input type="submit" name="submit" value="ADD CUSTOMER">
 </form>
                               
							</div>
						</div>
						
					</div>
					</div>
					
					
				</div>
		<!--End Get in Touch-->
		 <div class="row">
    <div class="col-lg-12">
        <!--begin::Portlet-->
        <div class="kt-portlet">
                        <div class="kt-portlet__body">
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable responsive no-wrap" id="kt_table_1">
                                    <thead>
                                   
                                                   <th>
                                Customer Id
                            </th>
                            <th>Customer name</th>
                            <th>Adults No</th>
                            <th>Child No</th>
                            <th>Email</th>
                           
                            <th>Contact No</th>
                            <th>Address</th>
                            <th>GST No</th>
                           
                                                   
                            <th>ProofType</th>
                            <th>Proof</th>
                                       
                        </thead>

                         @foreach($customer as $row)
                        <tbody>
                              <tr id="{{$row->TableId}}135">
                            <th>{{$row->CustomerId}}</th>

                            <th>{{$row->CName}}</th>

                            <th>{{$row->Adults}}</th>
                            <th>{{$row->Children}}</th>
                            <th>{{$row->EmailId}}</th>
                            <th>{{$row->Contact}}</th>
                            <th>{{$row->Address}}</th>
                            <th>{{$row->GstNo}}</th>
                            <th>{{$row->ProofType}}</th>
                            <th>{{$row->Proof}}</th>

                          <!--   
                            <th><a href="{{url('/deleteroomcategory')}}/{{$row->RoomCategoryId}}">delete</a>
                                 <button onclick="dtable({{$row->RoomCategoryId}},'{{$row->TableId}}135')" >   <div class="container">    <span class="glyphicon glyphicon-remove"></span></div></button>
                            </th> -->
                       </tr>
                        </tbody>
                        
                        @endforeach
            </table>

</div></div></div></div>

		
		
		<!--Start Map-->
			<div id='map'>
				<div id='find-us'></div>
			</div>
		<!--End Map-->
					
		
		</div>
		
	</div>
@endsection