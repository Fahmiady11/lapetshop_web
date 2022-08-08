@extends('main')

@section('title', 'Keranjang')
    

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Keranjang</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="{{ url('cart')}}">Keranjang</a></li>
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
                    <strong>Data Keranjang</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('cart/create')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"> add</i>
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Pembeli</th>
                            <th>Tanggal Beli</th>
                            <th>Status Bayar</th>
                            <th>Status Barang</th>
                            <th>Estimasi Tiba</th>
                            <th>Bukti</th>
                            <th>Admin</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($carts as $key => $item)
                            <tr>
                                <td>{{$carts->firstItem() + $key}}</td>
                                <td>{{$item -> buyer->UserName}}</td>
                                <td>{{$item -> DatePurchase}}</td>
                                <td>{{$item -> PaymentStatus}}</td>
                                <td>{{$item -> DeliveryStatus}}</td>
                                <td>{{$item -> EstimateDelivery}}</td>
                                <td>{{$item -> ProofImage}}</td>
                                <td>{{$item -> admin->AdminName}}</td>
                                <td class="">
                                    <a href="{{ url('cart/'.$item -> IdPurchase) }}" class="pull-left bt btn-warning btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ url('cart/'.$item -> IdPurchase.'/edit') }}" class=" bt btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <form action="{{ url('cart/'.$item -> IdPurchase) }}" method="POST" class="d-inline pull-right" onsubmit="return confirm('Yakin ingin menghapus?')">
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
                    {{ $carts->links() }}
                </div>
            </div>
        </div>
        
    </div><!-- .animated -->

</div>
@endsection