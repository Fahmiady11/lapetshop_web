@extends('main')

@section('title', 'Tipe Produk')
    

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Tipe Produk</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="">Tipe Produk</a></li>
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
        
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Edit Tipe Produk</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('typepro')}}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> back
                    </a>
                </div>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <form action="{{ url('typepro/'.$typepro->IdType)}}" method="POST">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label for="">Nama Tipe Produk</label>
                                <input type="text" name="name" value="{{ old('name',$typepro ->TypeName) }}" class="form-control @error('name') is-invalid @enderror" autofocus required>
                                @error('name')                                    
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