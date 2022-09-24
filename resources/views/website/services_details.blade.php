@extends('website.layouts.index')


@section('content')

<h1 class="text-center py-4">{{ $service->name }}</h1>
    
    
<section>
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-12 ">
                <div class="card card-body">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>Attribute Name</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Name</td>
                                <td>{{ $service->name }}</td>
                            </tr>
                            <tr>
                                <td>Service Time</td>
                                <td>{{ $service->service_time }}</td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td>{{ $service->price }}</td>
                            </tr>
                            <tr>
                                <td>Technician</td>
                                <td>{{ $service->technician->name }}</td>
                            </tr>
                            <tr>
                                <td>Description</td>
                                <td>{{ $service->description }}</td>
                            </tr>
                            <tr>
                                <td>Rating</td>
                                <td>{{ $service->rating }}</td>
                            </tr>
                            <tr>
                                <td>Service Time</td>
                                <td>{{ $service->service_time }}</td>
                            </tr>
                            <tr>
                                <td>Book Now</td>
                                <form action="{{ route('order_store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="technician_id" value="{{$service->technician->id}}">
                                    <input type="hidden" name="service_id" value="{{$service->id}}">
                                    <td><button type="submit" class="btn btn-success">Book Now</button></td>
                                </form>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
    