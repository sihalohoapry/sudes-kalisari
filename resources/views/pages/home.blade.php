@extends('layouts.app')

@section('title')
Home| Kalisari
@endsection

@section('content')

<div class="page-content page-home">
    <section class="store-carousel" data-aos="zoom-in">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="storeCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#storeCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#storeCarousel" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/bannersatu.jpg" class="d-block w-100 rounded" />
                            </div>
                            <div class="carousel-item">
                                <img src="images/bannerdua.jpg" class="d-block w-100 rounded" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="store-new-product" id="berita">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5">
                    <h5>Berita Kelurahan Kalisari</h5>
                </div>
            </div>
            <div class="row">
                @php
                $incrementProduct =0
                @endphp

                @forelse ($items as $item )
                <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $incrementProduct+=100 }}">
                    <a href="{{ route('detail-berita', $item->slug) }}" class="component-product d-block">
                        <div class="product-thumnail">
                            <div class="product-img" style="
                @if ($item->photo)
                    background-image: url('{{ Storage::url($item->photo) }}')
                @else
                    background-color: #eee;
                @endif
            ">
                            </div>
                        </div>
                        <div class="products-text">{{ $item->title }}</div>
                        <div class="text-black-50">Penulis {{ $item->user->name }}</div>
                    </a>
                </div>
                @empty
                <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                    Tidak ada produk
                </div>
                @endforelse
            </div>
        </div>
    </section>
</div>

@endsection