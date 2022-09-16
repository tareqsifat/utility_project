@extends('admin.layout.admin')


@section('content')
    
    <div class="clearfix"></div>

            <div class="content-wrapper">
                <div class="container-fluid">
                  @include('admin.includes.brade_cumb',['title' => 'User Management'])
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="padding: 10px"  class="card">
                                <div class="card-title">Update User</div>
                                <hr />
                                                
                                <form method="POST" action="{{ route('admin_user_update') }}" enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $user ->id }}">
                                    <div class="form-group row">
                                        <label for="input-21" class="col-sm-2 col-form-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="first_name" value="{{ $user->first_name }}" class="form-control" id="input-21" placeholder="First Name" />
                                            @error('first_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input-21" class="col-sm-2 col-form-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control" id="input-21" placeholder="Last Name" />
                                            @error('last_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row" autocomplete="off">
                                        <label for="input-21" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="username" value="{{ $user->username }}" class="form-control" id="input-21" placeholder="User Name" />
                                            @error('username')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input-21" class="col-sm-2 col-form-label">User role</label>
                                        <div class="col-sm-10">
                                            {{-- <input type="text" name="username" class="form-control" id="" /> --}}
                                            <select name="role_id" class="form-control" id="">
                                                {{-- @foreach (App\Models\UserRole::get() as $item) --}}
                                                @foreach ($user_roles as $item)
                                                    <option value="{{ $item->serial}}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('role_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row" autocomplete="off">
                                        <label for="input-21" class="col-sm-2 col-form-label">email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="input-21" placeholder="Enter Your Email" />
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input-21" class="col-sm-2 col-form-label">Mobile </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" id="input-21" placeholder="phone" />
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input-21" class="col-sm-2 col-form-label">Old Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="old_password" class="form-control" id="input-21" placeholder="Enter Old Password"/>
                                            {{-- @error('old_password') 
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror --}}
                                            @if(Session::has('old_password'))
                                                <span class="text-danger">{{ Session::get('old_password') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input-21" class="col-sm-2 col-form-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password" class="form-control" id="input-21" placeholder="Enter Password"/>
                                            @error('password') 
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input-21" class="col-sm-2 col-form-label">Confirm Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password_confirmation" class="form-control" id="input-21" placeholder="Confirm Password" />
                                            @error('password_confirmation')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input-21" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <img src="/{{ $user -> photo }}" style="height: 45px; margin-top: 10px" alt="user photo"><br>
                                            <input type="file" name="image"  class="form-control" id="input-21" />
                                            @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            
                               @section('inner_content')
                                   
                               @endsection
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
            



          