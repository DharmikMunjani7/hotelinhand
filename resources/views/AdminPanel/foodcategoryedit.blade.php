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
                       Update Food Category 
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('\editcategory')}}">
            	{{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <input type="hidden"  value="{{$data[0]->FoodCategoryId}}" name="id">
                            <label>Enter Food Category</label>
                            <input type="text" class="form-control" placeholder="enter food category" name="cname" pattern="[A-Za-z& ]*" title="IN VALID FOOD Category" value="{{$data[0]->FName}}">
                            <span class="form-text text-muted">Please Enter Food Category</span>
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