@extends('admin.layout.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.brade_cumb',['title'=>'All Technician'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Technician</h5>
                            <a href="{{ route('technician.index') }}" class="btn btn-warning"><i class="fa fa-plus"></i> ADD</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Photo</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">email</th>
                                            <th scope="col">Rating</th>
                                            <th class="text-right" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($collection as $key=>$item)
                                            <tr>
                                                <td scope="row">{{ $key+1 }}</td>
                                                <td scope="row">
                                                    <img src="/{{ $item->name }}" alt="" style ="height: 50px"></td>
                                                <td scope="row">{{ $item->photo }}</td>
                                                <td scope="row">{{ $item->email }}</td>
                                                <td scope="row">{{ $item->rating }}</td>
                                                <td scope="row"></td>
                                                <td scope="row">
                                                    <div class="text-right">
                                                        <a type="button" href="{{ route('technician.show', $item->id)}}" 
                                                            class="btn btn-light waves-effect waves-light m-1">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a type="button" href="{{ route('technician.edit', $item->id) }}" 
                                                            class="btn btn-warning waves-effect waves-light m-1">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        @if(Route::current()->getName() == "technician.index")
                                                            <div data-attr="{{ route('technician.destroy', $item->id) }}"
                                                                data-method="DELETE"
                                                                class="delete_btn btn btn-danger waves-effect waves-light m-1"
                                                                data-toggle="modal" data-target="#exampleModalCenter">
                                                                <i class="fa fa-trash-o"></i>
                                                            </div>
                                                            <a type="button" data-attr="{{ route('technician.block', $item->id) }}"
                                                                data-method="PUT"
                                                                class="delete_btn btn btn-danger waves-effect waves-light m-1"
                                                                data-toggle="modal" data-target="#exampleModalCenter">
                                                                <i class="fa fa-ban"></i>
                                                            </a>
                                                        @endif
                                                        @if(Route::current()->getName() == "technician.waitinglist")
                                                            <a type="button" data-attr="{{ route('technician.activate', $item->id) }}"
                                                                data-method="PUT"
                                                                class="delete_btn btn btn-primary waves-effect waves-light m-1"
                                                                data-toggle="modal" data-target="#exampleModalCenter">
                                                                <i class="fa fa-check-circle"></i>
                                                            </a>
                                                        @endif
                                                        @if(Route::current()->getName() == "technician.blocklist")
                                                            <a type="button" data-attr="{{ route('technician.unblock', $item->id) }}"
                                                                data-method="PUT"
                                                                class="delete_btn btn btn-success waves-effect waves-light m-1"
                                                                data-toggle="modal" data-target="#exampleModalCenter">
                                                                <i class="fa fa-pencil"></i>
                                                            </a>
                                                        @endif
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



