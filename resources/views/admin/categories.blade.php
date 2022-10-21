
@extends('components.adminLayout')


@section('contents')
    <section class="content">
        <div class="">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Dashboard</h2>
                        <ul class="breadcrumb mt-2">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i>Dashboard</a></li>
                            <li class="breadcrumb-item">Categories</li>

                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>

                </div>
            </div>
            <!-- Hover Rows -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header ml-1">
                            <h2 class=""> <strong>List of all Categories</strong> </h2>

                        </div>
                        <div class="body">

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1
                                        @endphp
                                        @foreach ($categories as $category)
                                        <tr>
                                            <th scope="row">{{$i++}}</th>
                                            <td>{{$category->category_name}}</td>
                                            <td>{{$category->category_desc}}</td>
                                            <td>
                                                <a onclick="return confirm('Are you sure you want to delete this Category?');"
                                                href="{{ route('deletecategory', $category->id ) }}">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Hover Rows -->
        </div>
    </section>
@endsection
