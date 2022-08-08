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
                        <li><a href="{{ url('buyer')}}">Pembeli</a></li>
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
                    <strong>Tambah Pembeli</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('buyer')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"> back</i>
                    </a>
                </div>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <form action="{{ url('buyer')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Pembeli</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name')}}" autofocus >
                                @error('name')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email')}}" autofocus >
                                @error('type')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Ikon Pembeli</label>
                                <input type="file" name="icon" class="form-control @error('icon') is-invalid @enderror" value="{{ old('icon')}}" autofocus >
                                @error('icon')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" name="pw" class="form-control @error('pw') is-invalid @enderror" value="{{ old('pw')}}" autofocus >
                                @error('pet')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select name="sex" class="form-control @error('sex') is-invalid @enderror" >
                                    <option value="">-- Pilih --</option>
                                    <option value="L">laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                @error('sex')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label for="">Nomor Telepon</label>
                                <input type="tel"  name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone')}}" autofocus >
                                @error('price')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address')}}" autofocus></textarea>
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