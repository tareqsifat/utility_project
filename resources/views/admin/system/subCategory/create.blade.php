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
                                <div class="card-title">Create subCategory</div>
                                <a href="{{ route('sub_Category.index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Back</a>
                            </div>
                            <hr />
                            <form method="POST" class="insert_form" action="{{ route('sub_Category.store') }}" enctype="multipart/form-data">
                                <div class="preloader"></div>
                                @csrf
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="input-21" placeholder="Name" />
                                        <span class="text-danger name"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Select Main Category</label>
                                    <div class="col-sm-10">
                                        <select name="main_category_id" class="form-control" id="main_category">
                                            @foreach ($main_category as $key=>$item)
                                                <option {{ $key == 0 ? 'selected': '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger name"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Select Category</label>
                                    <div class="col-sm-10">
                                        <select name="category_id" class="form-control" id="category">
                                            @foreach ($category as $key=>$item)
                                                <option  {{ $key == 0 ? 'selected': '' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <span class="text-danger name"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Icon</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="icon" class="form-control" id="input-21"/>
                                        <span class="text-danger icon"></span>
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
    @push('cjss')
        <script>
            $('#main_category').on('change',function(){
                let value = $(this).val();
                console.log(value);
                $.get("/admin/product/get-all-category-selected-by-main-category/"+value,(res)=>{
                     $('#category').html(res);
                })
            })
        </script>
    @endpush

@endsection



