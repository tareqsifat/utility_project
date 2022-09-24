@extends('website.layouts.index')


@section('content')
    @if(session()->has("success"))
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

    <div class="container">
        <hr>
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <span class="my-3">You can apply coupon code  to get 20% off</span>
            </div>
        </div>
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
                                <td>{{ $order->service->name }}</td>
                            </tr>
                            <tr>
                                <td>Subtotal</td>
                                <td>{{ $order->service->price }}</td>
                            </tr>
                            <tr>
                                <td>Apply Coupon</td>
                                <td>
                                    @if(isset($coupon_price))
                                        <span class="text-success">Coupon Applied</span>
                                    @else
                                        <form action="{{ route('apply_coupon', $order->id) }}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <input class="coupon_class" name="name" type="text">
                                            <button type="submit" class="btn btn-success">apply</button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>total</td>
                                <td>
                                    @if(isset($coupon_price))
                                        {{ $coupon_price }}
                                    @else
                                        {{ $order->service->price }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Paynow</td>
                                <td>
                                    <form action="{{ route('pay_to_service_man', $order->id) }}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button class="btn btn-success" type="submit">PayNow</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection