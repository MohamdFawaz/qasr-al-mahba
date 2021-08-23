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
                        <h3>Edit Product</h3>
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
                          action="{{route('product.update', $product->id)}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('put')
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
                                                            <option value="{{$category->id}}"
                                                                    @if($category->id == $product->animal_skin_category_id) selected @endif>{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="number" id="price"
                                                       class="form-control"
                                                       name="price" placeholder="Product Price" required
                                                       value="{{$product->price}}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="delivery_fees">Price</label>
                                                <input type="number" id="delivery_fees"
                                                       class="form-control"
                                                       name="delivery_fees" placeholder="Delivery Fees"
                                                       value="{{$product->delivery_fees}}" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="brand_name">Brand Name</label>
                                                <input type="text" id="brand_name"
                                                       class="form-control"
                                                       name="brand_name" placeholder="Brand Name"
                                                       value="{{$product->brand_name}}" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="brand_link">Brand Link</label>
                                                <input type="text" id="brand_link"
                                                       class="form-control"
                                                       name="brand_link" placeholder="Brand Link"
                                                       value="{{$product->brand_link}}" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>
                                                <input class="form-control" type="file" id="image" name="image">
                                                <img src="{{$product->image}}" alt="{{$product->id}}-product-image"
                                                     class="mt-2" style="width: 200px">
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
                                                                       placeholder="{{ucwords($locale)}} Product Title"
                                                                       required
                                                                       value="{{$product->translate($locale)->title}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="title-{{$locale}}">Name</label>
                                                                <input type="text" id="name-{{$locale}}"
                                                                       class="form-control"
                                                                       name="name[{{$locale}}]"
                                                                       placeholder="{{ucwords($locale)}} Product Name"
                                                                       required
                                                                       value="{{$product->translate($locale)->name}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="description-{{$locale}}">Description</label>
                                                                <textarea class="form-control"
                                                                          id="description-{{$locale}}"
                                                                          name="description[{{$locale}}]"
                                                                          placeholder="{{ucwords($locale)}} Product Description"
                                                                          rows="3">{{$product->translate($locale)->description}}</textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="divider">
                                <div class="divider-text">Product Images</div>
                            </div>
                            <div class="col-12 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Multiple Files</h5>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <!-- File uploader with multiple files upload -->
                                            <input type="file" name="product_images[]" class="multiple-files-filepond"
                                                   multiple>

                                            <div class="mt-3">
                                                @foreach($product->images as $image)
                                                    <img src="{{$image->image}}" style="width: 200px; cursor: pointer"
                                                         id="product-image-{{$image->id}}"
                                                         onclick="deleteImage({{$image->id}})">
                                                @endforeach
                                            </div>
                                        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <script>
        deleteImage = (id) => {
            if (confirm("are you sure you want to delete this image?")) {
                axios.delete('/admin/product/delete/image/' + id).then(response => {
                    console.log(response);
                    $('#product-image-' + id).remove();
                }, error => {
                    console.log(error);
                })
            }
        }
    </script>
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
