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
                      Update Service 
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('\editservice')}}" enctype="multipart/form-data">
            	{{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <input type="hidden"  value="{{$data[0]->ServiceId}}" name="id8">
                            <label>Enter service name</label>
                            <input type="text" class="form-control" placeholder="enter service name" name="sname"  value="{{$data[0]->SName}}" pattern="[a-zA-Z ]*" title="Please Enter Valid Service Name">
                            <span class="form-text text-muted">Please Enter Service Name</span>

                             <label>Enter service price</label>
                            <input type="text" class="form-control" placeholder="enter service price" name="sprice" value="{{$data[0]->S_Price}}" required pattern="[0-9]*" title="Please Enter Valid Price">
                            <span class="form-text text-muted">Please Enter Service price</span>

                              <label>Enter service description</label>
                            <input type="text" class="form-control" placeholder="enter service description" name="sdescription" value="{{$data[0]->S_Description}}" required>
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