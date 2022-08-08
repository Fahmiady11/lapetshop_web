@extends('main')

@section('title', 'Dashboard')
    

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"><i class="fa fa-dashboard"></i></li>
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
        <div class="col-sm-12 mb-4">
            <div class="row card-group">
                <div class="col col-lg-3 col-md-6 ">
                    <div class="card-body bg-flat-color-1">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="fa fa-user text-light"></i>
                        </div>

                        <div class="h4 mb-0 text-light">
                            <span class="count">{{$Admins}}</span>
                        </div>
                        <a href="{{ url('admin') }}" class="text-uppercase font-weight-bold text-light">Admin</a>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 ">
                    <div class="card-body bg-flat-color-2">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="fa fa-users text-light"></i>
                        </div>
                        <div class="h4 mb-0 text-light">
                            <span class="count">{{$buyers}}</span>
                        </div>
                        <a href="{{ url('buyer') }}" class="text-uppercase font-weight-bold text-light">Pembeli</a>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 ">
                    <div class="card-body bg-flat-color-3">
                        <div class="h1 text-right mb-4">
                            <i class="fa fa-paw text-light"></i>
                        </div>
                        <div class="h4 mb-0 text-light">
                            <span class="count">{{$pets}}</span>
                        </div>
                        <a href="{{ url('pets') }}" class="text-light text-uppercase font-weight-bold">Hewan</a>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6  ">
                    <div class="card-body bg-flat-color-4">
                        <div class="h1 text-right text-light mb-4">
                            <i class="fa fa-tags"></i>
                        </div>
                        <div class="h4 mb-0 text-light">
                            <span class="count">{{$typepro}}</span>
                        </div>
                        <a href="{{ url('typepro') }}" class="text-uppercase font-weight-bold text-light">Tipe Produk</a>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"> </div>
                    </div>
                </div>
            </div>            
        </div>
        <div class="col-sm-12 mb-4">
            <div class="row card-group">
                <div class="col col-lg-3 col-md-6 ">
                    <div class="card-body bg-flat-color-5">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="fa fa-shopping-cart text-light"></i>
                        </div>

                        <div class="h4 mb-0 text-light">
                            <span class="count">{{$carts}}</span>
                        </div>
                        <a href="{{ url('cart') }}" class="text-uppercase font-weight-bold text-light">Keranjang</a>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 ">
                    <div class="card-body bg-flat-color-4">
                        <div class="h1 text-muted text-right mb-4">
                            <i class="fa fa-folder text-light"></i>
                        </div>
                        <div class="h4 mb-0 text-light">
                            <span class="count">{{$Products}}</span>
                        </div>
                        <a href="{{ url('product') }}" class="text-uppercase font-weight-bold text-light">Produk</a>
                        <div  class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>
                <div class="col col-lg-3 col-md-6 ">
                    <div class="card-body bg-flat-color-1">
                        <div class="h1 text-right mb-4">
                            <i class="fa fa-credit-card text-light"></i>
                        </div>
                        <div class="h4 mb-0 text-light">
                            <span class="count">{{$cartitems}}</span>
                        </div>
                        <a href="{{ url('cartitem') }}" class="text-light text-uppercase font-weight-bold">Keranjang Item</a>
                        <div class="progress progress-xs mt-3 mb-0 bg-light" style="width: 40%; height: 5px;"></div>
                    </div>
                </div>                
            </div>            
        </div>
    </div><!-- .animated -->

</div>
@endsection