<x-layout>
    <!---main--->
    <section class="section-details-header"></section>
    <section class="section-details-content">

        <div class="container">
            <div class="row">
                <div class="col p-0">
                </div>
            </div>
            <div class="row">
                <div class="col pl-lg-0">
                    <div class="card card-details">
                        <div class="container">
                            <div class="text-left">
                                <h2>Status Pembelian</h2>
                            </div>
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>No Id</td>
                                        <td>Jumlah barang</td>
                                        <td>Harga Barang</td>
                                        <td>Total Harga</td>
                                        <td>Tanggal Pembayaran</td>
                                        <td>Tanggal Sampai</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($carts as $cart)
                                        @foreach ($cart->cartitems as $item)
                                        <tr>
                                            <td class="align-middle">{{ $cart->IdPurchase }}</td>
                                            <td class="align-middle">{{ $item->Amount }}</td>
                                            <td class="align-middle">Rp. {{ $item->Price }}</td>
                                            <td class="align-middle">Rp. {{ $item->Price*$item->Amount }}</td>
                                            <td class="align-middle">{{ $cart->DatePurchase }}</td>
                                            <td class="align-middle">
                                                @if ($cart->DeliveryStatus=='terkirim')
                                                    {{ $cart->EstimateDelivery }}
                                                @else
                                                    -
                                                @endif
                                            </td>
                                            @if ($cart->DeliveryStatus=='terkirim')
                                                <td class="align-middle">
                                                    <a class="btn btn-success">Terkirim</a>
                                                </td>
                                            @elseif($cart->DeliveryStatus=='kemas')
                                                <td class="align-middle">
                                                    <a class="btn btn-warning">Kemas</a>
                                                </td>
                                            @elseif($cart->DeliveryStatus=='proses')
                                                <td class="align-middle">
                                                    <a class="btn btn-danger">Proses</a>
                                                </td>
                                            @endif
                                            
                                        </tr>
                                        @endforeach
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

    </section>
</x-layout>