@extends('admin.layouts.app')
@section('content')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Website Statistics</h3>
            </div>
            <div class="page-content">
            </div>


        </div>
@endsection

@section('js')
    <script src="{{asset('js/pages/dashboard.js')}}"></script>
@endsection
