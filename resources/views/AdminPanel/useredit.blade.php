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
            user type
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('\edituser')}}">
                {{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <input type="hidden"  value="{{$data[0]->UserId}}" name="id5">
                              <label>Enter User type id</label>
                            <input type="text" class="form-control" placeholder="enter user type id" name="utid" value="{{$data[0]->UserTypeId}}">
                            <span class="form-text text-muted">Please Enter user type id</span>
                            <label>Enter User Name</label>
                            <input type="text" class="form-control" placeholder="enter table name" name="uname" value="{{$data[0]->UserName}}" pattern="[a-zA-Z0-9 ]*" title="Please Enter Valid User Name">
                            <span class="form-text text-muted">Please Enter user name</span>

 <label>Enter password</label>
                            <input type="text" class="form-control" placeholder="enter password" name="pass" value="{{$data[0]->Pass}}" pattern="[a-zA-Z0-9!@#$%^&*]*" title="Please Enter Valid User Password">
                            <span class="form-text text-muted">Please Enter password</span>
                        </div>
                            
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