@extends('admin.layouts.app')
@section('css')
    <link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css"
          rel="stylesheet">
@endsection
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
                        <h3>Create Product</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Product</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <section id="basic-vertical-layouts">
                <div class="col-md-12">
                    <form class="form form-vertical" method="post"
                          action="{{route('product.store')}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Product</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-body">

                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="animal_skin_category_id">Animal Skin Category</label>
                                                <div class="form-group">
                                                    <select class="form-select"
                                                            name="animal_skin_category_id" id="animal_skin_category_id"
                                                            required>
                                                        <option>-- Select Category --</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="link">Link</label>
                                                <input type="text" id="link"
                                                       class="form-control"
                                                       name="link" placeholder="Link" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input class="form-control" type="file" id="image" name="image">
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
                                                                <label for="title-{{$locale}}">Name</label>
                                                                <input type="text" id="name-{{$locale}}"
                                                                       class="form-control"
                                                                       name="name[{{$locale}}]"
                                                                       placeholder="{{ucwords($locale)}} Product Name"
                                                                       required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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


    <!-- filepond validation -->
    <script
        src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script
        src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>

    <!-- filepond -->
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

    <script>
        // register desired plugins...
        FilePond.registerPlugin(
            // validates the size of the file...
            FilePondPluginFileValidateSize,
            // validates the file type...
            FilePondPluginFileValidateType,
            // preview the image file type...
            FilePondPluginImagePreview,
        );

        // Filepond: Multiple Files
        FilePond.create(document.querySelector('.multiple-files-filepond'), {
            allowImagePreview: true,
            allowMultiple: true,
            allowFileEncode: false,
            required: false,
            storeAsFile: true,
            acceptedFileTypes: ['image/*'],

        });

    </script>
@endsection
