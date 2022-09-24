@extends('website.layouts.index')


@section('content')

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-light">
                <h1 class="py-5 fw-bold display-2">User Pannel</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 py-3">                   
                    <h2>Your orders</h2>
                    
                    <a href="{{ route('active_order_list') }}" class="btn btn-outline-dark">View Your order>></a>                 
            </div>
            <div class="col-md-4 py-3">                   
                    <h2>Electical Appliacnes</h2>
                   
                    <a href="" class="btn btn-outline-dark">View Tecnicians>></a>                 
            </div>
            <div class="col-md-4 py-3">                   
                    <h2>Water Appliacnes</h2>
                    
                    <a href="" class="btn btn-outline-dark">View Tecnicians>></a>                 
            </div>
    </div>
</section>

@endsection
    