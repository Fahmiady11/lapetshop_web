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
                    <strong>Edit Pembeli</strong>
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
                        <form action="{{ url('buyer/'.$buyer -> IdUser)}}" method="POST">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Pembeli</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $buyer ->UserName)}}"  >
                                @error('name')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $buyer ->Email)}}"  >
                                @error('type')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Ikon Pembeli</label>
                                <input type="file" name="icon" class="form-control @error('icon') is-invalid @enderror" value="{{ old('icon', $buyer ->Icon)}}"  >
                                @error('icon')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" name="pw" class="form-control @error('pw') is-invalid @enderror" value="{{ old('pw', $buyer ->UserPass)}}"  >
                                @error('pet')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select name="sex" class="form-control @error('sex') is-invalid @enderror" >
                                    <option value="{{ old('sex', $buyer ->Sex)}}" >{{ old('sex', $buyer ->Sex) == 'L' ? "Laki-Laki" : "Perempuan"}}</option>
                                    <option value="L">laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                @error('sex')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div> 
                            <div class="form-group">
                                <label for="">Nomor Telepon</label>
                                <input type="tel"  name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone', $buyer ->Phone)}}"  >
                                @error('price')                                    
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="address" class="form-control @error('address') is-invalid @enderror" >{{ old('address', $buyer ->Address)}}</textarea>
                                @error('description')                                    
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