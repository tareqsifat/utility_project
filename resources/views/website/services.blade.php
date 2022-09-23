@extends('website.layouts.index')


@section('content')

@if (session()->has('success'))
    <script>
        $(document).ready(function(){
        alert('ewoifjoiwjfwefrinf iwfl');
        });
  </script>
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
<h1 class="text-center py-4">Our Services</h1>
    
    
<section>
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-md-12 ">
                <div class="card card-body">
                    <table class="table table-border">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Service Time</th>
                                <th>Price</th>
                                <th>view details</th>
                                <th>Book now</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($service as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->service_time }} minutes</td>
                                <td>{{ $item->price }}</td>
                                <td>
                                    <a href="{{ route('service_details', $item->id) }}" type="button" class="btn btn-warning">details</a></td>
                                    <td><form action="{{ route('order_store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="technician_id" value="{{$item->technician->id}}">
                                        <input type="hidden" name="service_id" value="{{$item->id}}">
                                        <button type="submit" class="btn btn-success ml-2">Book Now</button></td>
                                    </form>
                                </td>
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
    