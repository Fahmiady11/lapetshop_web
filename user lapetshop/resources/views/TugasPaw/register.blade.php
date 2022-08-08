<x-layout layout="login">
    <main>
        <section class="section-details-header bg-white"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details mt-4 border-0">
                            <div class="m-2">
                                <h1 class="color-dark fw-bold fs-1 text-shadow ">LAPETSHOP</h1>
                                <p class="fw-normal fs-1 lh-sm text-dark text-shadow opacity-75" style="font-size: 44px;"> Toko Perlengkapan Hewan<br>Lamongan</p>
                            </div>
                            <div class="row">
                                <div class="container ">
                                    <div class="center">
                                        <img class="drop-shadow" src="{{asset('img/Delievery.png')}}" style="max-width: 700px;" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="card card-details border-0 card-right mt-4 mb-4">
                            <div class="container">
                                <div class="row justify-content-md-center h-100">
                                    <div class="card-wrapper bg-trasparant" style="width: 450px;">
                                        <div class="card-header bg-transparent mb-0">
                                        <h5 class="text-center text-shadow">LAPETSHOP <span class="font-weight-bold text-danger text-shadow">REGISTER</span></h5>
                                        </div>
                                        <form action="/register" method="post" class="my-login-validation" novalidate="">
                                            @csrf
                                            <div class="form-group">
                                                <label for="nama">Nama</label>
                                                <input id="nama" type="text" class="form-control" name="nama" placeholder="Full name" required autofocus>
                                                @error('nama')
                                                    <div class="text-danger mt-2">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="email">E-Mail</label>
                                                <input id="email" type="email" class="form-control" name="email" placeholder="email@example.com" required>
                                                @error('email')
                                                    <div class="text-danger mt-2">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input id="password" type="password" class="form-control" name="password" placeholder="Your Password" required data-eye>
                                                @error('password')
                                                    <div class="text-danger mt-2">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="">Confirm Password
                                                </label>
                                                <input id="password" type="password" class="form-control" name="passwordConfirm" placeholder="Confirm Password" required data-eye>
                                                @error('passwordConfirm')
                                                    <div class="text-danger mt-2">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group m-0 text-center">
                                                <br><button type="submit" name="register" class="btn btn-primary btn-block box-shadow">Register</button>
                                            </div>
                                            <div class="mt-4 text-center">
                                                Already have an account? <a href="/login" class="text-danger">LOGIN</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
        </section>
    </main>
</x-layout>