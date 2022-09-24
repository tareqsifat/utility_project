@extends('admin.layout.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.brade_cumb',['title'=>'Edit'])
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-heder d-flex justify-content-between">
                                <div class="card-title">Edit Coupon</div>
                                <a href="{{ route('coupon.index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Back</a>
                            </div>
                            <hr />
                            <form method="POST" action="{{ route('coupon.update', $coupon->id) }}" enctype="multipart/form-data">
                                @method('put')
                                @csrf
                                
                                <div class="preloader"></div>
                                
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="input-21" placeholder="Name" value="{{old('name', $coupon->name)}}"/>
                                        @error('name')
                                            <span class="text-denger">{{ $message }}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Discount</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="discount" class="form-control" id="input-21" placeholder="discount" value="{{old('name', $coupon->discount)}}"/>
                                        @error('discount')
                                            <span class="text-denger">{{ $message }}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Start Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="start_date" class="form-control" id="input-21" placeholder="Start Date" value="{{old('name', $coupon->start_date)}}"/>
                                        @error('start_date')
                                            <span class="text-denger">{{ $message }}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">End Date</label>
                                    <div class="col-sm-10">
                                        <input type="date" name="end_date" class="form-control" id="input-21" placeholder="End Date" value="{{old('name', $coupon->end_date)}}"/>
                                        @error('end_date')
                                            <span class="text-denger">{{ $message }}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> ADD</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->

@endsection



