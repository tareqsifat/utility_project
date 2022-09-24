@extends('website.layouts.index')


@section('content')
@if(session()->has('success'))
  <div class="container">
    <div class="row">
        <div class="col-12 text-center text-bg-success py-2">
            {{ session('success') }}
        </div>
    </div>
  </div>
@endif

@if (session()->has('danger'))
    <div class="text-theme-6 mt-2">
        {{ session()->get('alert-danger') }}
    </div>
@endif
<h1 class="text-center py-4">Your Orders</h1>
    
    
<section>
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-12 ">
                <div class="card card-body">
                    <table class="table table-border">
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Service Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Technician</th>
                            <th class="text-center" scope="col">Action</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($order as $key => $item)
                            <tr>
                                <td scope="row">{{ $key+1 }}</td>
                                <td scope="row">{{ $item->service->name }}</td>
                                <td scope="row">{{ $item->service->price }}</td>
                                <td scope="row">{{ $item->technician->name }}</td>
                                <td>
                                    <a href="{{ route('service_details', $item->id) }}" type="button" class="btn btn-warning">details</a>
                                </td>
                                @if($item->serve_status == 3)
                                <td>
                                    <a href="{{ route('payment_page', $item->id) }}" type="button" class="btn btn-success">pay now</a>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
    