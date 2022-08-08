<nav class="navbar navbar-expand-lg navbar-light bg-light nav-box-shadow sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand text-shadow" style="color:#1BAECE;" href="/">LAPETSHOP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/profil">Profile</a></li>
                        <li><a class="dropdown-item" href="/keranjang">Keranjang</a></li>
                        <li><a class="dropdown-item" href="/status">Pembelian</a></li>
                        <li><a class="dropdown-item bg-light border-top" href="/logout">Logout</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/category/makanan">Makanan</a></li>
                        <li><a class="dropdown-item" href="/category/obat">Obat</a></li>
                        <li><a class="dropdown-item" href="/category/mainan">Mainan</a></li>
                        <li><a class="dropdown-item" href="/category/aksesoris">Accesoris</a></li>
                        <li><a class="dropdown-item" href="/category/perawatan">Perawatan</a></li>
                    </ul>
                </li>

            </ul>
            <form class="d-flex" action="/search">
                <?php echo csrf_field(); ?>
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav><?php /**PATH D:\KULIAH\TUGAS\paw\lapetshop\resources\views/components/navbar.blade.php ENDPATH**/ ?>