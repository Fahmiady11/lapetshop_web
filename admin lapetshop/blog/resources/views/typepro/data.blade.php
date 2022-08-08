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
                    <strong>Data Tipe Produk</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('typepro/add')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"> add</i>
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Tipe Produk</th>
                            <th>Id Tipe Produk</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($typepro as $key=> $item)
                            <tr>
                                <td>{{$typepro->firstItem()+$key}}</td>
                                <td>{{$item -> TypeName}}</td>
                                <td>{{$item -> IdType}}</td>
                                <td class="">
                                    <a href="{{ url('typepro/edit/'.$item -> IdType) }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    /
                                    <form action="{{ url('typepro/'.$item -> IdType) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
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
                </table><div class="pull-right">
                    {{ $typepro->links() }}
                </div>  
            </div>
        </div>
        
    </div><!-- .animated -->

</div>
@endsection