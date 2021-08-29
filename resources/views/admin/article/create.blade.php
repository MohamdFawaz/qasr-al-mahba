@extends('admin.layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('vendors/quill/quill.bubble.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/quill/quill.snow.css')}}">
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
                        <h3>Create Article</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Article</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <section id="basic-vertical-layouts">
                <div class="col-md-12">
                    <form class="form form-vertical" id="article-form" method="post"
                          action="{{route('article.store')}}"
                          enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Article</h5>
                            </div>
                            <div class="card-body">
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
                                                                       placeholder="{{ucwords($locale)}} Article Title"
                                                                       required>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="description-{{$locale}}">Content</label>
                                                                <section class="section">
                                                                    <div class="card">
                                                                        <div class="card-body">
                                                                            <div id="full-editor-{{$locale}}">
                                                                                <p>Hello World!</p>
                                                                                <p>Some initial <strong>bold</strong> text</p>
                                                                                <p><br></p>
                                                                            </div>
                                                                            <textarea name="content[{{$locale}}]" style="display:none" id="content-{{$locale}}"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </section>
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

    <script src="{{asset('vendors/quill/quill.min.js')}}"></script>
    <script>
        let locales = `{!! json_encode(getLocales()) !!}`
        locales = JSON.parse(locales);
        for(let i = 0; i < locales.length; i++) {
            new Quill("#full-editor-" + locales[i], {
                bounds: "#full-container .editor",
                modules: {
                    toolbar: [
                        [{ font: [] }, { size: [] }],
                        ["bold", "italic", "underline", "strike"],
                        [
                            { color: [] },
                            { background: [] }
                        ],
                        [
                            { script: "super" },
                            { script: "sub" }
                        ],
                        [
                            { list: "ordered" },
                            { list: "bullet" },
                            { indent: "-1" },
                            { indent: "+1" }
                        ],
                        ["direction", { align: [] }],
                        ["link", "image", "video"],
                        ["clean"]]
                },
                theme: "snow"
            })
        }

        $("#article-form").on("submit",function(){
            for(let i = 0; i < locales.length; i++) {
                console.log($("#content-" + locales[i]));
                $("#content-" + locales[i]).val($("#full-editor-" + locales[i] + " .ql-editor").html());
            }
        })
    </script>
@endsection
