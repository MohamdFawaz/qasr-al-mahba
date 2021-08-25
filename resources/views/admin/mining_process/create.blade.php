@extends('admin.layouts.app')

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Create Mining Process</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mining Process</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <section id="basic-vertical-layouts">
                <div class="col-md-12">
                    <form class="form form-vertical" method="post"
                          action="{{route('mining-process.store')}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Mining Process</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input class="form-control" type="file" id="image" name="image">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="cover-image" class="form-label">Cover Image</label>
                                                <input class="form-control" type="file" id="cover-image"
                                                       name="cover_image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    @foreach(getLocales() as $locale)
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link @if($loop->first) active @endif" id="{{$locale}}-tab"
                                               data-bs-toggle="tab" href="#{{$locale}}" role="tab"
                                               aria-controls="{{$locale}}"
                                               aria-selected="true">{{ucwords($locale)}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="tab-content" id="myTabContent">

                                    @foreach(getLocales() as $locale)
                                        <div class="tab-pane fade @if($loop->first) active show @endif" id="{{$locale}}"
                                             role="tabpanel"
                                             aria-labelledby="{{$locale}}-tab">
                                            <div class="card-body">
                                                <div class="form-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="title-{{$locale}}">Title</label>
                                                                <input type="text" id="title-{{$locale}}"
                                                                       class="form-control"
                                                                       name="title[{{$locale}}]"
                                                                       placeholder="{{ucwords($locale)}} Mining Process Title"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="name-{{$locale}}">Name</label>
                                                                <input type="text" id="name-{{$locale}}"
                                                                       class="form-control"
                                                                       name="name[{{$locale}}]"
                                                                       placeholder="{{ucwords($locale)}} Mining Process Name"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="description-{{$locale}}">Description</label>
                                                                <textarea class="form-control"
                                                                          id="description-{{$locale}}"
                                                                          name="description[{{$locale}}]"
                                                                          placeholder="{{ucwords($locale)}} Mining Process Description"
                                                                          rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="divider">
                                    <div class="divider-text">Images</div>
                                </div>
                                <div class="container1 text-center">
                                    <button class="add_form_field btn btn-primary mb-5">Add New Image &nbsp;
                                        <span style="font-size:16px; font-weight:bold;">+ </span>
                                    </button>
                                    <div class="row">
                                        <input type="text" class="col-6 form-control mb-2"
                                               placeholder="Enter image name" name="names[]">
                                        <input type="file" class="col-6 form-control mb-2" name="images[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">
                                Submit
                            </button>
                            <button type="reset"
                                    class="btn btn-light-secondary me-1 mb-1">Reset
                            </button>
                        </div>
                    </form>

                </div>
            </section>

        </div>

    </div>

@endsection

@section('js')
    <script src="{{asset('vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendors/choices.js/choices.min.js')}}"></script>
    <script src="{{asset('js/pages/form-element-select.js')}}"></script>
    <script>
        $(document).ready(function () {
            var max_fields = 10;
            var wrapper = $(".container1");
            var add_button = $(".add_form_field");

            var x = 1;
            $(add_button).click(function (e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    $(wrapper).append('<div class="row"> ' +
                        '<input type="text" class="col-6 form-control mb-2" placeholder="Enter image name" name="names[]"> ' +
                        '<input type="file" class="col-6 form-control mb-2" name="images[]"> ' +
                        '</div>'); //add input box
                } else {
                    alert('You Reached the limits')
                }
            });

            $(wrapper).on("click", ".delete", function (e) {
                e.preventDefault();
                $(this).parent('div').remove();
                x--;
            })
        });
    </script>
@endsection
