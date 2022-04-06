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
                        Update Food
                    </h3>
                </div>
            </div>
            <!--begin::Form-->
            <form method="post" class="kt-form" action="{{url('\editfood')}}">
            	{{csrf_field()}}
                <div class="kt-portlet__body">
                    <div class="kt-section kt-section--first">
                        <div class="form-group">
                            <input type="hidden"  value="{{$data[0]->FoodId}}" name="id2">
                          <select class="form-control" name="cid" >
                        @foreach($foodcategory as $foodcategorydata)
                            <option value="{{$foodcategorydata->FoodCategoryId}}">{{$foodcategorydata->FName}}</option>
                        @endforeach
                        </select>

                             <label>Enter Food Name</label>
                            <input type="text" class="form-control" placeholder="enter food name" name="fname" value="{{$data[0]->FName}}" pattern="[a-zA-Z ]+" title="Please Enter Valid Name">
                            <span class="form-text text-muted">Please Enter Food Name</span>

                             <label>Enter Food price</label>
                            <input type="text" class="form-control" placeholder="enter food price" name="price" value="{{$data[0]->Price}}" pattern="[0-9]+"title="Enter Valid Price">
                            <span class="form-text text-muted">Please Enter Food Price</span>

                             <label>Enter Food Quantity(gram)</label>
                            <input type="text" class="form-control" placeholder="enter food Quantity" name="quantity" value="{{$data[0]->Quantity}}" pattern="[0-9]{0,3}"title="Enter Valid Quantity">
                            <span class="form-text text-muted">Please Enter Food Quantity</span>

                             <label>Enter Description</label>
                         
                            <input type="text" class="form-control"  placeholder="enter Description" name="description"value="{{$data[0]->Description}}">
                            <span class="form-text text-muted">Please Enter description</span>
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