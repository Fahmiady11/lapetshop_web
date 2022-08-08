@extends('main')

@section('title', 'Admin')
    

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Admin</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="">Admin</a></li>
                        <li class="active">Data</li>
                        <li class="active">Detail</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="content mt-3">

    <div class="animated fadeIn">
        
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Detail Data Admin</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('admin')}}" class="btn btn-default btn-sm">
                        <i class="fa fa-arrow-left"> back</i>
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
               <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <td>{{$admin -> AdminName}}</td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td>{{$admin -> AdminPass}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
               </div>
            </div>
        </div>
        
    </div><!-- .animated -->

</div>
@endsection