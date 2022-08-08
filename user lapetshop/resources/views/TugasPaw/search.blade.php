<x-layout>
    <!---main--->
    <section class="section-details-header"></section>
    <section class="section-details-content">

        <div class="container">
            {{-- <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Home
                            </li>
                            @if (isset($type))
                                <li class="breadcrumb-item">
                                    Category
                                </li>
                                <li class="breadcrumb-item active ">
                                    {{ $type }}
                                </li>
                            @else
                                <li class="breadcrumb-item active ">
                                    Category
                                </li>
                            @endif
                        </ol>
                    </nav>
                </div>
            </div> --}}

            <div class="container mt-1 mb-4">
                <div class="container mb-4">
                    <h4>Hasil pencarian "{{$filter}}"</h4>
                </div>
                @if(session('producteror'))
                    <div class="alert alert-danger">{{session('producteror')}}</div>
                @endif
                <div class="d-flex justify-content-start align-content-center flex-wrap">
                    
                    @if ($products->count()==0)
                        <div>
                            <h2>No search results found</h2>
                        </div>
                    @else
                        @error('producteror')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                        @foreach ($products as $product)
                            <div class="col-auto mb-3 me-4">
                                <div class="card box-shadow border" style="width: 14rem;">
                                    <img src="/img/{{$product->Icon}}" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-size: 16px; text-align: center;">{{$product->ProductName}}</h5>
                                        <p style="font-size: 10px; text-align: center;">Rp.{{ $product->Price }}/pcs</p>
                                        <div class="text-center">
                                            <a href="/category/{{ $product->IdProduct }}/add" class="btn btn-primary px-4 box-shadow ">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            {{-- <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav> --}}
    </section>
</x-layout>