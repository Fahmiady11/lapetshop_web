<x-layout>
    <!---main--->
    <section class="section-details-header"></section>
    <section class="section-details-content">

        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Home
                            </li>
                            <li class="breadcrumb-item active ">
                                Keranjang
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col pl-lg-0">
                    <div class="card card-details">
                        <div class="container">
                            <div class="text-left">
                                <a href="/category" style="background-color:#EF5B00; color:white" class="btn px-4 box-shadow ">Tambah Barang</a>
                            </div>

                            <form action="/keranjang" method="post">
                                @csrf
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td></td>
                                            <td>Gambar</td>
                                            <td>Nama barang</td>
                                            <td>Harga Barang</td>
                                            <td>Jumlah</td>
                                            <td>Total</td>
                                            <td>Hapus</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($items as $item)
                                            <tr>
                                                <td> <input class="form-check-input mt-3 ms-4" type="checkbox" value="{{$item->IdProduct}}" id="flexCheckDefault" name="daftar[]"></td>
                                                <input type="hidden" name="idproduct[]" value="{{$item->IdProduct}}">
                                                <td>
                                                    <img src="/img/{{ $item->products->Icon }}" height="60">
                                                </td>
                                                <td class="align-middle">{{$item->products->ProductName}}</td>
                                                <td class="align-middle">Rp.{{ $item->products->Price }}/pcs</td>
                                                <td class="align-middle">
                                                    <input class="form-control text-center" type="number" value="1" min="1" name="jumlah[]">
                                                </td>
                                                <td class="align-middle">Rp.{{ $item->products->Price }}</td>
                                                <td class="align-middle">
                                                    <a href="/keranjang/{{$item->IdProduct}}/destroy">
                                                        <img style="width:32px;" src="/img/delete.png" alt="">
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                <hr class="mt-4">
                                <div class="d-flex justify-content-end ">
                                    <p class="text-dark">Total (<span>4</span> Produk): <span class="text-danger">Rp.696.000</span></p>
                                </div>
                                <div class="d-flex justify-content-end ">
                                    <div class="">
                                        <button type="submit" style="background-color:#EF5B00; color:white" class="btn px-4 box-shadow ">Checkot</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </section>
</x-layout>