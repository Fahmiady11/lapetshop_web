@extends('main')

@section('title', 'Keranjang Item')
    

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Keranjang Item</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="">Keranjang Item</a></li>
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
                    <strong>Detail Data Keranjang Item</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('cartitem')}}" class="btn btn-default btn-sm">
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
                                    <th>Tanggal beli</th>
                                    <td>{{$cartitem -> cart->DatePurchase}}</td>
                                </tr>
                                <tr>
                                    <th>Nama Produk</th>
                                    <td>{{$cartitem -> product->ProductName}}</td>
                                </tr>
                                <tr>
                                    <th>Jumlah</th>
                                    <td>{{$cartitem -> Amount}}</td>
                                </tr>
                                <tr>
                                    <th>Harga</th>
                                    <td>{{$cartitem -> Price}}</td>
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