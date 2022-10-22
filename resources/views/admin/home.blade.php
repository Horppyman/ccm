
@extends('components.adminLayout')
    @section('contents')

    <!-- Main Content -->

    <section class="content">
        <div class="">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard')}}"><i class="zmdi zmdi-home"></i>Dashboard</a></li>

                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon zmdi-dns">
                            <div class="body">
                                <h6>Categories</h6>
                                <h2>{{$categories}}</h2>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon zmdi-library">
                            <div class="body">
                                <h6>Sermons</h6>
                                <h2>{{$sermons}}</h2>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="card widget_2 big_icon zmdi-layers">
                            <div class="body">
                                <h6>Books</h6>
                                <h2>{{$books}} </h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
