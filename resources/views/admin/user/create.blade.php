@extends('admin.layout.admin')


@section('content')
    
    <div class="clearfix"></div>

            <div class="content-wrapper">
                <div class="container-fluid">
                  @include('admin.includes.brade_cumb',['title' => 'User Management'])
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="padding: 10px"  class="card">
                                <div class="card-title">Create User</div>
                                <hr />
                                                
                                <form method="POST" action="{{ route('admin_user_store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="input-21" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" class="form-control" id="input-21" placeholder="Name" />
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input-21" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="username" class="form-control" id="input-21" placeholder="UserName" />
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

                                    <div class="form-group row">
                                        <label for="input-21" class="col-sm-2 col-form-label">email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control" id="input-21" placeholder="Enter Your Email" />
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="input-21" class="col-sm-2 col-form-label">Mobile </label>
                                        <div class="col-sm-10">
                                            <input type="text" name="phone" class="form-control" id="input-21" placeholder="phone" />
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
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
                                            <input type="file" name="photo" class="form-control" id="input-21" />
                                            @error('photo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror 
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> Register</button>
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
            



          