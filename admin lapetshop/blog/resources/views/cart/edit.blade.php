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
                        <li class="active">Edit</li>
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
                {{session('status')}}
            </div>
        @endif
        
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Edit Keranjang</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('cart')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"> back</i>
                    </a>
                </div>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <form action="{{ url('cart/'.$cart ->IdPurchase)}}" method="POST">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Pembeli</label>
                                <select type="text" name="nama" class="form-control " >
                                    <option value="">-- Pilih --</option>
                                    @foreach ($buyer as $item)                                    
                                        <option value="{{$item -> IdUser}}" {{ old('buyer', $cart-> Buyer) == $item->IdUser ? 'selected' : null}} > {{$item -> UserName}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Beli</label>
                                <input type="date" name="tglbeli" class="form-control @error('tglbeli') is-invalid @enderror" value="{{ old('tglbeli')}}" autofocus >
                                @error('tglbeli')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Status Bayar</label>
                                <select name="bayar" class="form-control @error('bayar') is-invalid @enderror" >
                                    <option value="{{ old('bayar', $cart ->PaymentStatus)}}" >{{ old('bayar', $cart ->PaymentStatus) == '0' ? "Belum Terbayar" : "Terbayar"}}</option>
                                    <option value="1">Terbayar</option>
                                    <option value="0">Belum Terbayar</option>
                                </select>
                                @error('bayar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Status Barang</label>
                                <select name="barang" class="form-control @error('barang') is-invalid @enderror" >
                                    <option value="{{ old('barang', $cart ->DeliveryStatus)}}" >{{ old('barang', $cart ->DeliveryStatus) == 'Terkirim' ? "Terkirim" : "Proses"}}</option>
                                    <option value="Terkirim">Terkirim</option>
                                    <option value="Kirim">Kirim</option>
                                    <option value="Kemas">Kemas</option>
                                    <option value="Proses">Proses</option>
                                </select>
                                @error('barang')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Estimasi Tiba</label>
                                <input type="date" name="tiba" class="form-control @error('tiba') is-invalid @enderror" value="{{ old('tiba')}}" autofocus >
                                @error('tiba')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Bukti</label>
                                <input type="file" name="bukti" class="form-control @error('bukti') is-invalid @enderror" value="{{ old('bukti')}}" autofocus >
                                @error('bukti')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label for="">Nama Admin</label>
                                <select type="text" name="admin" class="form-control @error('admin') is-invalid @enderror" >
                                    <option value="">-- Pilih --</option>
                                    @foreach ($admin as $item)                                    
                                    <option value="{{$item -> IdAdmin}}" {{ old('buyer', $cart-> IdAdmin) == $item->IdAdmin ? 'selected' : null}} > {{$item -> AdminName}}</option>
                                    @endforeach
                                </select>
                                @error('admin')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Edit Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div><!-- .animated -->

</div>
@endsection