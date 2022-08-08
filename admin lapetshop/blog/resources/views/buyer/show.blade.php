@extends('main')

@section('title', 'Pembeli')
    

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Pembeli</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="">Pembeli</a></li>
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
                    <strong>Detail Data Pembeli</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('buyer')}}" class="btn btn-default btn-sm">
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
                                    <td>{{$buyer -> UserName}}</td>
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <td>{{$buyer -> UserPass}}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{$buyer -> Email}}</td>
                                </tr>
                                <tr>
                                    <th>Ikon</th>
                                    <td>{{$buyer -> Icon}}</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>{{$buyer -> Sex}}</td>
                                </tr>
                                <tr>
                                    <th>No.HP</th>
                                    <td>{{$buyer -> Phone}}</td>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <td>{{$buyer -> Address}}</td>
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