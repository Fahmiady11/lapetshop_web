@extends('main')

@section('title', 'Produk')
    

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Produk</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="">Produk</a></li>
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
                    <strong>Detail Data Produk</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('product')}}" class="btn btn-default btn-sm">
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
                                    <th>Nama Produk</th>
                                    <td>{{$product -> ProductName}}</td>
                                </tr>
                                <tr>
                                    <th>Tipe Produk</th>
                                    <td>{{$product -> typeproduct->TypeName}}</td>
                                </tr>
                                <tr>
                                    <th>Ikon</th>
                                    <td>{{$product -> Icon}}</td>
                                </tr>
                                <tr>
                                    <th>Hewan</th>
                                    <td>{{$product -> pet->PetName}}</td>
                                </tr>
                                <tr>
                                    <th>Harga</th>
                                    <td>{{$product -> Price}}</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td>{{$product -> Description}}</td>
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