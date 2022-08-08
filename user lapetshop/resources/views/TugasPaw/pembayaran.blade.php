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
                            <li class="breadcrumb-item">
                                Keranjang
                            </li>
                            <li class="breadcrumb-item active ">
                                Pembayaran
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col pl-lg-0">
                    <div class="card card-details">
                        <div class="container">
                            @error('buktimessage')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <div class="d-flex justify-content-evenly align-items-center">
                                <div class="card box-shadow border" style="width: 18rem;">
                                    <img src="{{ asset('img/bni.png') }}" class="card-img-center" alt="">
                                    <div class="card-body">
                                        <p class="text-dark text-center" style="font-size:14px">PT BANK NEGARA INDONESIA</p>
                                        <h5 class="card-title" style="font-size: 16px; text-align: center;">823487872472347</h5>
                                        <p style="font-size: 12px; text-align: center;" class="text-danger">A.N Harum Namanya</p>
                                    </div>
                                </div>
                                <div class="card box-shadow border" style="width: 18rem;">
                                    <img src="{{ asset('img/bri.png') }}" class="card-img-center" alt="">
                                    <div class="card-body">
                                        <p class="text-dark text-center" style="font-size:14px">PT BANK NEGARA INDONESIA</p>
                                        <h5 class="card-title" style="font-size: 16px; text-align: center;">823487872472347</h5>
                                        <p style="font-size: 12px; text-align: center;" class="text-danger">A.N Harum Namanya</p>
                                    </div>
                                </div>
                                <div class="card box-shadow border" style="width: 18rem;">
                                    <img src="{{ asset('img/ovo.png') }}" class="card-img-center" alt="">
                                    <div class="card-body">
                                        <p class="text-dark text-center" style="font-size:14px">PT BANK NEGARA INDONESIA</p>
                                        <h5 class="card-title" style="font-size: 16px; text-align: center;">823487872472347</h5>
                                        <p style="font-size: 12px; text-align: center;" class="text-danger">A.N Harum Namanya</p>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-column mt-4">
                                <div>
                                    <h2>
                                        No Id: {{session('pembayaran')}}
                                    </h2>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex align-items-center flex-column mt-2">
                                <form action="/pembayaran" method="post"  enctype="multipart/form-data">
                                    @csrf
                                    <h2>Uploud Bukti</h2>
                                    <input type="hidden" name="pembayaran" value="{{session('pembayaran')}}">
                                    <div class="mb-3">
                                        {{-- <input type="image" src="" alt=""> --}}
                                        <input class="form-control" type="file" id="formFile" name="bukti">
                                    </div>
                                    @error('bukti')
                                        <div class="text-danger mt-2">{{$message}}</div>
                                    @enderror
                                    <div class="">
                                        <button type="submit" style="background-color:#EF5B00; color:white" class="btn px-4 box-shadow ">Konfirmasi Pembayaran</button>
                                    </div>
                                </form>
                            </div>


                        </div>

                    </div>
                </div>
            </div>

    </section>
</x-layout>