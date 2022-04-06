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
                        Update Dining Table
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('\editdtable')}}">
                {{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <input type="hidden"  value="{{$data[0]->TableId}}" name="id3">
                            <label>Enter Table Name</label>
                            <input type="text" class="form-control" placeholder="enter table name" name="tablename" value="{{$data[0]->TName}}" pattern="[a-zA-Z0-9 ]*" title="Please Enter Valid Table Name">
                            <span class="form-text text-muted">Please Enter Table name</span>
                            <label>Enter No Of Seat</label>
                             <input type="text" class="form-control" placeholder="enter no of seat" name="nos" value="{{$data[0]->NoOfSeat}}" pattern="[0-9]{1,2}" title="Please Enter Valid No Of Seat">
                            <span class="form-text text-muted">Please Enter no of seat</span>
                              <label>Enter password of table</label>
                             <input type="text" class="form-control" placeholder="enter password" name="pass" value="{{$data[0]->Pass}}" pattern="[a-zA-Z0-9!@#$%^&*]*" title="Please Enter Valid Password">
                            <span class="form-text text-muted">Please Enter Password</span>
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