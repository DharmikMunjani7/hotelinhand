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
                      Update Room 
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('\editroom2')}}">
            	{{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <input type="hidden"  value="{{$data[0]->RoomId}}" name="id7">
                            <label>Enter Room Category ID</label>
                            <input type="text" class="form-control" placeholder="enter room category id" name="cid"
                            value="{{$data[0]->RoomCategoryId}}"
                            >
                            <span class="form-text text-muted">Please Enter room Category id</span>

                             <label>Enter Room No</label>
                            <input type="text" class="form-control" placeholder="enter Room no" name="rno" value="{{$data[0]->RoomNo}}" pattern="[a-zA-Z0-9 ]*" title="Please Enter Valid Room Number">
                            <span class="form-text text-muted">Please Enter Room No</span>

                             <label>Enter User Name</label>
                            <input type="text" class="form-control" placeholder="enter user name" name="uname" value="{{$data[0]->UserName}}" pattern="[a-zA-Z0-9]*" title="Please Enter Valid User Name">
                            <span class="form-text text-muted">Please Enter User Name</span>

                             <label>Enter password</label>
                            <input type="text" class="form-control" placeholder="enter food Quantity" name="pass" value="{{$data[0]->Pass}}" pattern="[a-zA-Z0-9!@#$%^&*]*" title="Please Enter Valid Password">
                            <span class="form-text text-muted">Please Enter Password</span>
<label>Check facility</label>
                             <br>
                         @foreach($facility as $f)
                          <input type="checkbox" name="check[]"  value="{{$f->F_Name}}"> {{$f->F_Name}}&nbsp;&nbsp;&nbsp;
                            @endforeach
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