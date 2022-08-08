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
                    <strong>Tambah Produk</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('product')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i>
                    </a>
                </div>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <form action="{{ url('product')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Produk</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name')}}" autofocus >
                                @error('name')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tipe Produk</label>
                                <select type="text" name="type" class="form-control @error('type') is-invalid @enderror" >
                                    <option value="">-- Pilih --</option>
                                    @foreach ($typepro as $item)                                    
                                        <option value="{{$item -> IdType}}">{{$item -> TypeName}}</option>
                                    @endforeach
                                </select>
                                @error('type')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label for="">Ikon Produk</label>
                                <input type="file" name="icon" class="form-control @error('icon') is-invalid @enderror" value="{{ old('icon')}}" autofocus >
                                @error('icon')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Hewan</label>
                                <select type="text" name="pet" class="form-control @error('pet') is-invalid @enderror" >
                                    <option value="">-- Pilih --</option>
                                    @foreach ($pet as $item)                                    
                                        <option value="{{$item -> id}}" {{ old('pet') == $item-> id ? 'selected' : null}} > {{$item -> PetName}}</option>
                                    @endforeach
                                </select>
                                @error('pet')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Harga Produk</label>
                                <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price')}}" autofocus >
                                @error('price')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Produk</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description')}}" autofocus></textarea>
                                @error('description')                                    
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