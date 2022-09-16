@extends('admin.layout.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.brade_cumb',['title'=>'All Brands'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Brands</h5>
                            <a href="{{ route('sub_Category.create') }}" class="btn btn-warning"><i class="fa fa-plus"></i> ADD</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Logo</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Main Category</th>
                                            <th scope="col">Category</th>
                                            <th class="text-center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sub_Category as $key=>$item)
                                            <tr>
                                                <td scope="row">{{ $key+1 }}</td>
                                                <td scope="row"><img src="/{{ $item->logo }}" alt="" height="50px"></td>
                                                <td scope="row">{{ $item->name }}</td>
                                                <td scope="row">{{ $item->main_category_info ? $item->main_category_info->name : '' }}</td>
                                                <td scope="row">{{ $item->category_info ? $item->category_info->name : '' }}</td>
                                                <td scope="row">
                                                    <div class="text-right">
                                                        <a type="button" href="{{ route('sub_Category.show', $item->id)}}" 
                                                            class="btn btn-light waves-effect waves-light m-1">
                                                            <i class="fa fa-eye"></i> 
                                                            <span>view</span>
                                                        </a>
                                                        <a type="button" href="{{ route('sub_Category.edit',$item->id) }}" 
                                                            class="btn btn-warning waves-effect waves-light m-1">
                                                            <i class="fa fa-pencil"></i> 
                                                            <span>edit</span>
                                                        </a>
                                                        <a type="button" href="{{ route('sub_Category.destroy',$item->id) }}"
                                                            class="delete_btn btn btn-danger waves-effect waves-light m-1">
                                                            <i class="fa fa-trash-o"></i> 
                                                            <span>delete</span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
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



