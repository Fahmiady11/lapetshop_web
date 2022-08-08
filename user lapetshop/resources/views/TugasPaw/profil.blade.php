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
                            <li class="breadcrumb-item active">
                                Profile
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col pl-lg-0">
                    <div class="card card-details">
                        <div class="container">
                            <div class="col">

                                <form method="post" action="/profil" enctype="multipart/form-data">
                                    @csrf
                                    @if(session('updatemessage'))
                                        <div class="alert alert-success">{{session('updatemessage')}}</div>
                                    @endisset
                                    <input type="hidden" name="id" value="{{$user->IdUser}}">
                                    <input type="hidden" name="gambarLama" value="">
                                    <div class="brand " style="text-align: center;">
                                        <img src="/img/{{$user->Icon}}" style="width: 250px;" alt="logo">
                                    </div>

                                    <div class="mb-3 row align-self-center">
                                        <label for="formFileMultiple" class="form-label">Edit Foto</label>
                                        <input class="form-control" type="file" id="inputGroupFile04" name="gambar">
                                    </div>
                                    <div class="form-group row align-self-center mb-3">
                                        <label for="nama">Username</label>
                                        <input value="{{old('nama', $user->UserName)}}" id="nama" type="text" class="form-control" name="nama" placeholder="Masukkan username baru" required autofocus>
                                    </div>
                                    @error('nama')
                                        <div class="text-danger mt-2">{{$message}}</div>
                                    @enderror
                                    <div class="form-group row align-self-center mb-3">
                                        <label for="email">email</label>
                                        <input value="{{old('email', $user->Email)}}" id="email" type="text" class="form-control" name="email" placeholder="Masukkan email baru" required autofocus>
                                    </div>
                                    @error('email')
                                        <div class="text-danger mt-2">{{$message}}</div>
                                    @enderror
                                    <div class="form-group row align-self-center mb-3">
                                        <label for="password">Password</label>
                                        <input id="password" value="{{old('password')}}" type="password" class="form-control" name="password" placeholder="Masukkan password baru" required autofocus>
                                    </div>
                                    @error('password')
                                        <div class="text-danger mt-2">{{$message}}</div>
                                    @enderror
                                    <div class="form-group row align-self-center mb-3">
                                        <label for="password2">Konfirmasi Password</label>
                                        <input id="password2" value="{{old('password2')}}" type="password" class="form-control" name="password2" placeholder="Masukkan konfirmasi password baru" required autofocus>
                                    </div>
                                    @error('password2')
                                        <div class="text-danger mt-2">{{$message}}</div>
                                    @enderror
                                    <div class="form-group align-self-center pt-4">
                                        <button type="submit" name="submit" class="btn btn-block btn-join-now mt-4 px-4 rounded">Edit Profile</submit>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

    </section>
</x-layout>