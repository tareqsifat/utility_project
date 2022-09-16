@extends('admin.layout.admin')

@section('content')
    <style>
        .card .table td, .card .table th {
            white-space: break-spaces;
        }
    </style>
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.brade_cumb',['title'=>'Main Category'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Main Category Details</div>
                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <td style="width: 40%">Id</td>
                                    <td>:</td>
                                    <td>{{ $mainCategory->id }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Name</td>
                                    <td>:</td>
                                    <td>{{ $mainCategory->name }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Creator</td>
                                    <td>:</td>
                                    <td>{{ $mainCategory->creator }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Created at</td>
                                    <td>:</td>
                                    <td>
                                        {{ $mainCategory->created_at }}
                                        
                                    </td>
                                    <tr>
                                        <td style="width: 40%">Status</td>
                                        <td>:</td>
                                        <td>{{ $mainCategory->status }}</td>
                                    </tr>
                                </tr>
                                <tr>
                                    
                                </tr>
                            </table>
                            <div class="card-footer  d-flex justify-content-between">
                                <div>
                                </div>
                                <div>
                                    <a href="{{ route('main_category.index') }}" 
                                    class="btn btn-warning">
                                    <i class="fa fa-check"></i>
                                    <span>Ok</span>
                                    </a>
                                </div>
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



