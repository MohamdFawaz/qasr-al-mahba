@extends('admin.layouts.app')

@section('css')
    <link rel="stylesheet" href="{{asset('vendors/simple-datatables/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/dripicons/webfont.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/dripicons.css')}}">
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
                        <h3>Mining License Code</h3>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Mining License Code</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('mining-license.create')}}" class="btn btn-primary ">Create</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                            <tr>
                                <th>Code</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($codes as $code)
                                <tr>
                                    <td>{{$code->code}}</td>
                                    <td>
                                        <form method="post"
                                              action="{{ route('mining-license.delete', $code->id) }}">
                                            @csrf
                                            @method('delete')
                                            <a class="float-start m-2"
                                               onclick="if(confirm('Are you sure you want to delete ' + `{{$code->link}}` + '?')) { $(this).closest('form').submit()}">
                                                <div class="icon dripicons-trash"></div>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{asset('vendors/simple-datatables/simple-datatables.js')}}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>
@endsection
