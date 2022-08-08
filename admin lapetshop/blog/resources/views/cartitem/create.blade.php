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
                        <li><a href="{{ url('cartitem')}}">Keranjang Item</a></li>
                        <li class="active">Add</li>
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
                    <strong>Tambah Keranjang Item</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('cartitem')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"> back</i>
                    </a>
                </div>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <form action="{{ url('cartitem')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Tanggal Beli</label>
                                <select type="text" name="beli" class="form-control @error('beli') is-invalid @enderror" >
                                    <option value="">-- Pilih --</option>
                                    @foreach ($cart as $item)                                    
                                        <option value="{{$item -> IdPurchase}}" {{ old('beli') == $item-> IdPurchase ? 'selected' : null}}>{{$item -> DatePurchase}}</option>
                                    @endforeach
                                </select>
                                @error('beli')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <select type="text" name="produk" class="form-control @error('produk') is-invalid @enderror" >
                                    <option value="">-- Pilih --</option>
                                    @foreach ($product as $item)                                    
                                        <option value="{{$item -> IdProduct}}" {{ old('produk') == $item-> IdProduct ? 'selected' : null}}>{{$item -> ProductName}}</option>
                                    @endforeach
                                </select>
                                @error('produk')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah</label>
                                <input type="number"  name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah')}}" autofocus >
                                @error('jumlah')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="number"  name="harga" class="form-control @error('harga') is-invalid @enderror" value="{{ old('harga')}}" autofocus >
                                @error('harga')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Tambah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div><!-- .animated -->

</div>
@endsection