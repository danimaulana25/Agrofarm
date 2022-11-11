@extends('layouts.main')
@section('title'){{'Agrofarm Globalindo - Product'}} @endsection
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Product</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Product</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->



<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Our Product</div>
            <h1 class="display-6 mb-5">All Product In PT Agrofarm Globalindo Investama</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

            @foreach($produk as $item)
            <div class="testimonial-item text-center">
                <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="@if (!$item -> image)
                                            {{ asset('/assets/img/produk/'.$item -> nama.'.jpg') }}
                                            @else
                                            {{asset('storage/'.$item -> image)}}
                                          @endif" style="width: 100px; height: 100px;">
                <div class="testimonial-text rounded text-center p-4">
                    <p>{{$item -> deskripsi}}</p>
                    <h5 class="mb-1">{{$item -> nama}}</h5>
                    <span class="fst-italic">See Details</span>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Product End -->



<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
@endsection