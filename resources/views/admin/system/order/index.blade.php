@extends('admin.layout.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.brade_cumb',['title'=>'All Active Orders'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Orders</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Service Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">User</th>
                                            <th scope="col">Technician</th>
                                            <th class="text-center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order as $key=>$item)
                                            <tr>
                                                <td scope="row">{{ $key+1 }}</td>
                                                <td scope="row">{{ $item->service->name }}</td>
                                                <td scope="row">{{ $item->service->price }}</td>
                                                <td scope="row">{{ $item->user->name }}</td>
                                                <td scope="row">{{ $item->technician->name }}</td>
                                                <td scope="row">
                                                    <div class="text-center">
                                                        @if(Auth::check() && Auth::user()->role_id == 2)
                                                            @if($item->serve_status == 1)
                                                                <form action="{{ route('accept_request', $item->id)}}" method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <button type="submit"
                                                                        class="btn btn-light waves-effect waves-light m-1">
                                                                        Accept
                                                                    </button>
                                                                </form>
                                                            @elseif($item->serve_status == 2)
                                                            <form action="{{ route('service_done', $item->id)}}" method="post">
                                                                @csrf
                                                                @method('put')
                                                                <button type="submit"
                                                                    class="btn btn-light waves-effect waves-light m-1">
                                                                    Mark as Done
                                                                </button>
                                                            </form>
                                                            @endif
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



