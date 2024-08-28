@extends('layouts.main')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Product Smartphone</h1>
                        <p>Berikut merupakan produk-produk unggulan dari PUSKOM</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        @foreach ($brand as $brands)
                            <li class="nav-item me-2">
                                <a class="btn btn-outline-primary border-2"href="">{{ $brands->brand_name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($product as $products)
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden card">
                                        <img class="card-img-top" src="img/empty.jpg" alt="">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        </div>
                                    </div>
                                    <div class="text-body p-4">
                                        <a class="d-block h5 mb-2"
                                            style="text-decoration-line: none">{{ $products->product_name }}</a>
                                        <span
                                            class="text-capitalize me-1">Rp{{ number_format($products->product_price, 0, ',', '.') }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
