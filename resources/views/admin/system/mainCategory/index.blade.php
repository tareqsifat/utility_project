@extends('admin.layout.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.brade_cumb',['title'=>'Main Categories'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Main Categories</h5>
                            <a href="{{ route('main_category.create') }}" class="btn btn-warning"><i class="fa fa-plus"></i> ADD</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Logo</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Products</th>
                                            <th class="text-right" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($mainCategory as $key=>$item)
                                            <tr>
                                                <td scope="row">{{ $key+1 }}</td>
                                                <td scope="row"><img src="/{{ $item->icon }}" alt="" height="50px"></td>
                                                <td scope="row">{{ $item->name }}</td>
                                                <td scope="row"></td>
                                                <td scope="row">
                                                    <div class="text-right">
                                                        <a type="button" href="{{ route('main_category.show', $item->id)}}" 
                                                            class="btn btn-light waves-effect waves-light m-1">
                                                            <i class="fa fa-eye"></i> 
                                                            <span>view</span>
                                                        </a>
                                                        <a type="button" href="{{ route('main_category.edit',$item->id) }}" 
                                                            class="btn btn-warning waves-effect waves-light m-1">
                                                            <i class="fa fa-pencil"></i> 
                                                            <span>edit</span>
                                                        </a>
                                                        <a type="button" href="{{ route('main_category.destroy',$item->id) }}"
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



