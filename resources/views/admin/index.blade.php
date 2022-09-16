@extends('admin.layout.admin')


@section('content')
    
    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.brade_cumb',['title' => 'DASHBOARD'])
            <div class="row">
                <div class="col-lg-12"> 
                        <div class="col-lg-12">
                <div class="col-lg-12"> 
                    <p>welcome to your dashboard</p>
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
            



          