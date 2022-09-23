@extends('website.layouts.index')


@section('content')
<style>
    a:link{
        text-decoration: none; 
    }
</style>
<section>
    <div class="container py-5">
        <div class="row bg-light">
            <div class="col-md-12">
                <div class="p-5">
                    <h1>Home Utility Solution </h1>
                    <h5>Complete solution to your basic application related problem</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($service as $key => $item)
                <div class="col-md-4 @if($key == 0)bg-warning @elseif($key == 1) bg-danger @elseif($key == 2) bg-info @endif p-3">
                    <h2><a class="text-dark" href="{{ route('service_details', $item->id) }}">{{ $item->name }}</a></h2>
                    <h6>{{ $item->description }}</h6>
                    <h6>{{ $item->technician ? count(array($item->technician)) : 0 }} Tecnicians Available</h6>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
    