@extends('layouts.web')

@section('content')
    @include('blocks.blocks')

    <div class="product-area mt-text-2">
        <div class="container">
            <div class="row shop_wrapper grid_4">
                @foreach(\App\Models\Product::all() as $key => $product)
                    <div class="col-lg-3 col-md-6 col-sm-6  col-custom product-area">
                        <div class="product-item">
                            <div class="single-product position-relative mr-0 ml-0">
                                <div class="product-image">
                                    <a class="d-block" href="/{{app()->getLocale()}}/mehsullar/{{$product->slug}}">
                                        <img src="/uploads/{{$product->image}}" alt="" class="product-image-1 w-100">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <div class="product-title">
                                        <h4 class="title-2"> <a href="/{{app()->getLocale()}}/mehsullar/{{$product->slug}}">{{$product->name}}</a></h4>
                                    </div>
                                    <div class="price-box">
                                        <span class="regular-price ">{{$product->price}} ₼</span>
                                    </div>
                                    <a href="/{{app()->getLocale()}}/mehsullar/{{$product->slug}}" class="btn product-cart">Ətraflı</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
