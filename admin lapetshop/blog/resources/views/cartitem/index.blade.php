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
                        <li><a href="{{ url('buyer')}}">Keranjang Item</a></li>
                        <li class="active">Data</li>
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
                    <strong>Data Keranjang Item</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('cartitem/create')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"> add</i>
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Tanggal Beli</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($cartitems as $key => $item)
                            <tr>
                                <td>{{$cartitems->firstItem() + $key}}</td>
                                <td>{{$item -> cart->DatePurchase}}</td>
                                <td>{{$item -> product->ProductName }}</td>
                                <td>{{$item -> Amount}}</td>
                                <td>{{$item -> Price}}</td>
                                <td class="">
                                    <a href="{{ url('cartitem/'.$item -> IdPurchase) }}" class="pull-left bt btn-warning btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>/
                                    <a href="{{ url('cartitem/'.$item -> IdPurchase.'/edit') }}" class=" bt btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>/
                                    <form action="{{ url('cartitem/'.$item -> IdPurchase) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
                <div class="pull-right">
                    {{ $cartitems->links() }}
                </div>
            </div>
        </div>
        
    </div><!-- .animated -->

</div>
@endsection