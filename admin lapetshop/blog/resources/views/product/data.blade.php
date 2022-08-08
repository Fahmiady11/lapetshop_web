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
                    <strong>Data Produk</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('product/create')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"> add</i>
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Tipe</th>
                            <th>Ikon</th>
                            <th>Pet</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($Products as $key => $item)
                            <tr>
                                <td>{{$Products->firstItem() + $key}}</td>
                                <td>{{$item -> ProductName}}</td>
                                <td>{{$item -> typeproduct->TypeName}}</td>
                                <td>{{$item -> Icon}}</td>
                                <td>{{$item -> pet->PetName}}</td>
                                <td>{{$item -> Price}}</td>
                                <td>{{$item -> Description}}</td>
                                <td class="">
                                    <a href="{{ url('product/'.$item -> IdProduct) }}" class="pull-left bt btn-warning btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ url('product/'.$item -> IdProduct.'/edit') }}" class="pull-left bt btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <form action="{{ url('product/'.$item -> IdProduct) }}" method="POST" class="d-inline pull-right" onsubmit="return confirm('Yakin ingin menghapus?')">
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
                    {{ $Products->links() }}
                </div>                    
            </div>
        </div>
        
    </div><!-- .animated -->

</div>
@endsection