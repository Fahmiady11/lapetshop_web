<x-layout>
    <main class="container mt-10">
        <h1 class="text-center text-shadow">Selamat Datang {{$user->UserName}}</h1>
        <h1 class="text-center text-shadow">Di TOKO <span class="text-shadow" style="color:#1BAECE;">LA</span>PETSHOP</h1>
        <p class="text-center text-shadow">Toko ini Menyediakan beberapa perlengkapan <br> hewan seperti makanan,alat,mainan,accesoris dan perawatan hewan</p>
        <div class="form-group mt-4 text-center">
            <button type="submit" style="background-color:#1BAECE;" class="btn btn-block box-shadow">
                
                <a class="text-white text-shadow" style="text-decoration: none;" href="/category">Mulai Berbelanja</a>
            </button>
        </div>
    </main>
</x-layout>