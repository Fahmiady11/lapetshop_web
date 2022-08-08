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
                    <strong>Data Pembeli</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('buyer/create')}}" class="btn btn-success btn-sm">
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
                            <th>Password</th>
                            <th>Email</th>
                            <th>Ikon</th>
                            <th>Gender</th>
                            <th>No.HP</th>
                            <th>Alamat</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($buyers as $key => $item)
                            <tr>
                                <td>{{$buyers->firstItem() + $key}}</td>
                                <td>{{$item -> UserName}}</td>
                                <td>{{$item -> UserPass}}</td>
                                <td>{{$item -> Email}}</td>
                                <td>{{$item -> Icon}}</td>
                                <td>{{$item -> Sex}}</td>
                                <td>{{$item -> Phone}}</td>
                                <td>{{$item -> Address}}</td>
                                <td class="">
                                    <a href="{{ url('buyer/'.$item -> IdUser) }}" class="pull-left bt btn-warning btn-sm">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ url('buyer/'.$item -> IdUser.'/edit') }}" class=" bt btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <form action="{{ url('buyer/'.$item -> IdUser) }}" method="POST" class="d-inline pull-right" onsubmit="return confirm('Yakin ingin menghapus?')">
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
                    {{ $buyers->links() }}
                </div>
            </div>
        </div>
        
    </div><!-- .animated -->

</div>
@endsection