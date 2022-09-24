<ul class="metismenu" id="menu">
    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Dashboard</div> 
        </a>
        <ul class="">
            <li>
                <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i> utility service</a>
            </li>
        </ul>
    </li>
    @if (Auth::check() && Auth::user()->role_id==1)
        <li>
            <a class="has-arrow" href="javascript:void();">
                <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                <div class="menu-title">Customer</div> 
            </a>
            <ul class="">
                <li>
                    <a href=""><i class="zmdi zmdi-dot-circle-alt"></i>customer Index</a>
                </li>
                <li>
                    <a href=""><i class="zmdi zmdi-dot-circle-alt"></i>add customer</a>
                </li>
            </ul>
        </li>
    @endif
    @auth()
        <li>
            <a class="has-arrow" href="javascript:void();">
                <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                <div class="menu-title">service</div> 
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('service.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>service Index</a>
                </li>
                @if (Auth::check() && Auth::user()->role_id==1)
                    <li>
                        <a href="{{ route('service.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i>add service</a>
                    </li>
                @endif
            </ul>
        </li>
    @endauth
    @if (Auth::check() && Auth::user()->role_id==1)
        <li>
            <a class="has-arrow" href="javascript:void();">
                <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                <div class="menu-title">Technician</div> 
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('technician.waitinglist') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Waiiting Technician</a>
                </li>
                <li>
                    <a href="{{ route('technician.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Technician Index</a>
                </li>
                <li>
                    <a href="{{ route('technician.blocklist') }}"><i class="zmdi zmdi-dot-circle-alt"></i>blocked Technician</a>
                </li>
                <li>
                    <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i>add Technician</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:void();">
                <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                <div class="menu-title">Promo code</div> 
            </a>
            <ul class="">
                <li>
                    <a href="{{route('coupon.index')}}"><i class="zmdi zmdi-dot-circle-alt"></i>Promo code index</a>
                </li>
                <li>
                    <a href="{{route('coupon.create')}}"><i class="zmdi zmdi-dot-circle-alt"></i>Add Promo code</a>
                </li>
            </ul>
        </li>
    @endif
    @if (Auth::check()) 
        <li>
            <a class="has-arrow" href="javascript:void();">
                <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                <div class="menu-title">@if(Auth::user()->role_id==2 || Auth::user()->id == 1) 
                        Service Request
                    @elseif(Auth::user()->role_id == 3)
                        Your Order
                    @endif
                </div> 
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('active_order_list') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Active request</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:void();">
                <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                <div class="menu-title">Review</div> 
            </a>
            <ul class="">
                <li>
                    <a href="{{url('/')}}"><i class="zmdi zmdi-dot-circle-alt"></i>view Your review</a>
                </li>
            </ul>
        </li>
    @endif

    @if (Auth::check() && Auth::user()->role_id==1) 
        <li>
            <a class="has-arrow" href="javascript:void();">
                <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                <div class="menu-title">User Management</div> 
            </a>      
            <ul class="">
                <li>
                    <a href="{{ route('admin_user_index') }}">
                        <i class="zmdi zmdi-dot-circle-alt"></i> index</a>
                </li> 
                <li>
                    <a href="{{ route('admin_user_index') }}">
                        <i class="zmdi zmdi-dot-circle-alt"></i> User Role</a>
                </li> 
            </ul>
        </li>
    @endif

    
    

<li class="menu-label">Extra</li>
        <li>
            <a href="/", target="_blank">
                <div class="parent-icon">
                    <i class="zmdi zmdi-globe"></i>
                </div>
                <div class="menu-title">Home</div>
            </a>
        </li>


        <li>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();  confirm('Sure! You want to Logout!!') && document.getElementById('logout-form').submit();">
                <div class="parent-icon">
                    <i class="fa fa-sign-out"></i>
                </div>
                <div class="menu-title">logout</div>
            </a>
        </li>

