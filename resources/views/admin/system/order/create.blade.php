@extends('admin.layout.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.brade_cumb',['title'=>'Create'])
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-heder d-flex justify-content-between">
                                <div class="card-title">Create Service</div>
                                <a href="{{ route('service.index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Back</a>
                            </div>
                            <hr />
                            <form method="POST" action="{{ route('service.store') }}" enctype="multipart/form-data">
                                <div class="preloader"></div>
                                @csrf
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Photo</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="photo" class="form-control" id="input-21"/>
                                        @error('photo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Select Technician</label>
                                    <div class="col-sm-10">
                                        {{-- <input type="text" name="name" class="form-control" id="input-21" placeholder="Name" /> --}}
                                        <select name="technician_id" class="form-control" id="">
                                            <option value="">Select</option>
                                            @foreach ($technician as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('technician_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="input-21" value="{{ old('name') }}" placeholder="Name" />
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="price" class="form-control" id="input-21" value="{{ old('price') }}" placeholder="Price" />
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Featured</label>
                                    <div class="col-sm-10">
                                        {{-- <input type="text" name="name" class="form-control" id="input-21" placeholder="Name" /> --}}
                                        <select name="featured" class="form-control" id="">
                                            <option value="1">yes</option>
                                            <option value="0">no</option>
                                        </select>
                                        @error('technician_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Service Time</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="service_time" class="form-control" id="input-21" value="{{ old('service_time') }}" placeholder="Service Time" />
                                        @error('service_time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="description" class="form-control" id="input-21" value="{{ old('description') }}" placeholder="Description" />
                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
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



