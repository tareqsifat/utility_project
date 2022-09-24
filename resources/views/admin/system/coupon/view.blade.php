@extends('admin.layout.admin')

@section('content')
    <style>
        .card .table td, .card .table th {
            white-space: break-spaces;
        }
    </style>
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.brade_cumb',['title'=>'Coupon Detail'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Coupon Details</div>
                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <td style="width: 40%">Id</td>
                                    <td>:</td>
                                    <td>{{ $coupon->id }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Name</td>
                                    <td>:</td>
                                    <td>{{ $coupon->name }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Discount</td>
                                    <td>:</td>
                                    <td>{{ $coupon->discount }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Start Date</td>
                                    <td>:</td>
                                    <td>{{ $coupon->start_date }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">End Date</td>
                                    <td>:</td>
                                    <td>{{ $coupon->end_date }}</td>
                                </tr>
                            </table>
                            <div class="card-footer  d-flex justify-content-between">
                                <div>
                                </div>
                                <div>
                                    <a href="{{ route('coupon.index') }}" 
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



