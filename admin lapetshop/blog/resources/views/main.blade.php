<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | LAPETSHOP </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('style/assets/js/main.js') }}"></script>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">LAPETSHOP</a>
                <a class="navbar-brand hidden" href="./"><b>LP</b></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ url('/') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('product') }}"> <i class="menu-icon fa fa-folder"></i>Produk</a>
                    </li>
                    <li>
                        <a href="{{ url('cartitem') }}"> <i class="menu-icon fa fa-credit-card"></i>Keranjang Item</a>
                    </li>
                    <li>
                        <a href="{{ url('cart') }}"> <i class="menu-icon fa fa-shopping-cart"></i>Keranjang</a>
                    </li>
                    <li>
                        <a href="{{ url('pets') }}"> <i class="menu-icon fa fa-paw"></i>Hewan</a>
                    </li>
                    <li>
                        <a href="{{ url('typepro') }}"> <i class="menu-icon fa fa-tags"></i>Tipe Produk</a>
                    </li>
                    <li>
                        <a href="{{ url('buyer') }}"> <i class="menu-icon fa fa-users"></i>Pembeli</a>
                    </li>
                    <li>
                        <a href="{{ url('admin') }}"> <i class="menu-icon fa fa-user"></i>Admin</a>
                    </li>
                    {{-- <h3 class="menu-title">UI elements</h3><!-- /.menu-title --> --}}                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <h3 class="text-muted"><b class="text-info"> Lapet</b>Shop</h3>
                    </div>
                </div>

                <div class="col-sm-5">
                    
                    <div class="user-area dropdown float-right">
                        <a href="{{ url('/') }}" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('style/images/admin.jpg')}}" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <form action="{{ route('logout')}}" method="post" >
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->
        @yield('breadcrumbs')
        @yield('content')

        

        <!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    

</body>
</html>
