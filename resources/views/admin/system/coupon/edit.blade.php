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
                                <div class="card-title">Edit Category</div>
                                <a href="{{ route('category.index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Back</a>
                            </div>
                            <hr />
                            <form method="POST" class="update_form" action="{{ route('category.update',$category->id) }}" enctype="multipart/form-data">
                                <div class="preloader"></div>
                                @method('PUT')
                                @csrf
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Select Main Category</label>
                                    <div class="col-sm-10">
                                        {{-- <input type="text" name="name" class="form-control" id="input-21" placeholder="Name" /> --}}
                                        <select name="main_category_id" class="form-control" id="">
                                            <option value="">Select</option>
                                            @foreach ($main_category as $item)
                                                <option {{ $category->main_category_id == $item->id ? 'selected' :''}} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger category_id"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="input-21" value="{{ $category->name }}"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Icon</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="icon" class="form-control" id="input-21"/>
                                        <img src="/{{ $category->logo }}" style="height: 40px" alt="">
                                        <span class="text-danger icon"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> Update</button>
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



