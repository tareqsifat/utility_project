@extends('admin.layout.admin')


@section('content')
<style>
    .card .card-body .table td, .card .card-body .table th{
        white-space: break-spaces;
    }
</style>
    
    <div class="clearfix"></div>

            <div class="content-wrapper">
                <div class="container-fluid">
                  @include('admin.includes.brade_cumb',['title' => 'View'])
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table table-bordered table hover table-striped">
                                        <tr>
                                            <td style="width: 40%">title</td>
                                            <td>:</td>
                                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus minus perferendis unde aliquam debitis magni aspernatur beatae, recusandae, sed enim autem architecto dignissimos eligendi voluptate non aliquid assumenda eaque ad!
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40%">title</td>
                                            <td>:</td>
                                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus minus perferendis unde aliquam debitis magni aspernatur beatae, recusandae, sed enim autem architecto dignissimos eligendi voluptate non aliquid assumenda eaque ad!
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 40%">title</td>
                                            <td>:</td>
                                            <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus minus perferendis unde aliquam debitis magni aspernatur beatae, recusandae, sed enim autem architecto dignissimos eligendi voluptate non aliquid assumenda eaque ad!
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
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
            



          