@extends('components.adminLayout')

    @section('cssStyles')
        <!--<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap-select/css/bootstrap-select.css')}}" /> -->
    @endsection



    @section('contents')
    <!-- Main Content -->
    <section class="content">
        <div class="">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>Dashboard</h2>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i>Dashboard</a></li>
                            <li class="breadcrumb-item">Add Category</li>

                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                
                <form action="{{route('storecategory')}}" method="POST" >
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="body">
                                    <div class="form-group mb-4">
                                        <label for="category_name">Category Name</label>
                                        <input type="text" class="form-control"
                                        name="category_name" placeholder="Enter Category Name" />
                                    </div>

                                    <div class="form-group">
                                        <label for="category_desc">Category Description</label>
                                        <textarea class="form-control" name="category_desc" id="category_desc"></textarea>
                                    </div>

                                    <button type="submit" onclick="handleFormSubmit(event)" class="btn btn-info waves-effect m-t-20">Add</button>

                                </div>

                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @endsection


    @section('scripts')
    @endsection


