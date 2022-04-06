@extends('AdminPanel/MasterPage/MasterPage')
@section('contant')

		<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
    <div class="row">
    <div class="col-lg-6">
        <!--begin::Portlet-->
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Update Room Facility
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('\editfacility')}}" enctype="multipart/form-data">
            	{{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <input type="hidden"  value="{{$data[0]->F_Id}}" name="id">
                            <label>Enter Facility Name</label>
                            <input type="text" class="form-control" placeholder="enter Facility Name" name="fname"  value="{{$data[0]->F_Name}}" pattern="[a-zA-Z ]*" title="Please Enter Valid Room Facility" >
                            <span class="form-text text-muted">Please Enter Facility Name</span>

                             <label>Enter Facility Description</label>
                            <input type="text" class="form-control" placeholder="enter Facility Description" name="description"  value="{{$data[0]->F_Description}}" >
                            <span class="form-text text-muted">Please Enter Facility Description</span>

                            <label>Upload image</label>
                           
                          <input type="file" name="photooo"  value="{{$data[0]->Img}}"  required/>
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
            <!--end::Form-->
        </div>
        <!--end::Portlet-->

        
            </form>
            <!--end::Form-->
        </div>
        <!--end::Portlet-->
    </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Portlet-->
    </div>
</div></div>

@endsection