@extends('components.adminLayout')

    @section('cssStyles')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    @endsection



    @section('contents')

    <!-- Main Content -->
    <section class="content">
        <div class="">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2 >Dashboard</h2>
                        <ul class="breadcrumb mt-2">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i>Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('sermon')}}">Book</a></li>
                            <li class="breadcrumb-item">edit</li>
                        </ul>
                        <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
            @if (count($errors) > 0)
                <div class = "alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{route('updatebook', $book[0]->id)}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="body">
                                    <div class="form-group mb-4">
                                        <label for="category_name">Sermon Title</label>
                                        <input type="text" class="form-control"
                                        name="title"
                                        placeholder="Enter Sermon Name"
                                        value="{{$book[0]->title}}" />
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="category_name">Sermon Category</label>

                                        <select name="category_id" class="form-control selectpicker show-tick" data-live-search="true">
                                    <option>Select Category --</option>
@foreach ($categories as $category)
                                    <option
                @if ($book[0]->category[0]->id == $category->id)
                    selected
                @else
                @endif

                                    value="{{ $category->id}}">
                                        {{$category->category_name}}
                                    </option>
@endforeach

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="category_desc">Category Description</label>
                                        <textarea class="form-control"
                                         name="category_desc" id="description">{{$book[0]->description}}</textarea>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label for="category_name">Preacher</label>
                                        <input type="text" class="form-control"
                                        name="author" placeholder="Enter Sermon Name"
                                        value="{{$book[0]->author}}" />
                                    </div>


                                    <div class="row">

                                        <a class="btn btn-primary view-pdf" href="{{asset('Books/'.$book[0]->file)}}">View PDF</a>
                                    </div>



                                    <div class="form-group mb-4">
                                        <label for="category_name">File</label>
                                        <input type="file" class="form-control"
                                        name="book_file"  />
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    @endsection


