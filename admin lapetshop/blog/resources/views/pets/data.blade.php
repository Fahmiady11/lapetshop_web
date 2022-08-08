@extends('main')

@section('title', 'Hewan')
    

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Hewan</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="">Hewan</a></li>
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
                    <strong>Data Hewan</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('pets/add')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"> add</i>
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Hewan</th>
                            <th>Id Hewan</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($pets as $key => $item)
                            <tr>
                                <td>{{$pets->firstItem()+$key}}</td>
                                <td>{{$item -> PetName}}</td>
                                <td>{{$item -> id}}</td>
                                <td class="">
                                    <a href="{{ url('pets/edit/'.$item -> id) }}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    /
                                    <form action="{{ url('pets/'.$item -> id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus?')">
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
                    {{ $pets->links() }}
                </div>  
            </div>
        </div>
        
    </div><!-- .animated -->

</div>
@endsection