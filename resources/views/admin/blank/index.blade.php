@extends('admin.layout.admin')


@section('content')
    
    <div class="clearfix"></div>

            <div class="content-wrapper">
                <div class="container-fluid">
                  @include('admin.includes.brade_cumb',['title' => 'All'])
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="height: 600px;">
                                <!--Please remove the height before using this page-->
                               @section('inner_content')
                                   
                               @endsection

                                <h1>Blank</h1>
                                <p>This is an example of a blank page that you can use as a starting point for creating new ones.</p>
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
            



          