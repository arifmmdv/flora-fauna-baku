@extends('layouts.web')

@section('content')
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">{{$product->name}}</h3>
                        <ul>
                            <li><a href="/{{app()->getLocale()}}">Ana Səhifə</a></li>
                            <li><a href="/{{app()->getLocale()}}/mehsullar">Məhsullar</a></li>
                            <li>{{$product->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- Single Product Main Area Start -->
    <div class="single-product-main-area">
        <div class="container container-default custom-area">
            <div class="row">
                <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-custom">
                    <div class="product-details-img">
                        <img class="w-100" src="/uploads/{{$product->image}}" alt="{{$product->name}}">
                    </div>
                </div>
                <div class="col-lg-7 col-custom">
                    <div class="product-summery position-relative">
                        <div class="product-head mb-3">
                            <h2 class="product-title">{{$product->name}}</h2>
                        </div>
                        @if($product->price > 0)
                            <div class="price-box mb-2">
                                <span class="regular-price">{{$product->price}} ₼</span>
                            </div>
                        @endif
                        <div class="sku mb-3">
                            <span>SKU: {{$product->sku}}</span>
                        </div>
                        {!! $product->description !!}
{{--                        <div class="quantity-with_btn mb-5">--}}
{{--                            <div class="quantity">--}}
{{--                                <div class="cart-plus-minus">--}}
{{--                                    <input class="cart-plus-minus-box" value="0" type="text">--}}
{{--                                    <div class="dec qtybutton">-</div>--}}
{{--                                    <div class="inc qtybutton">+</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="add-to_cart">--}}
{{--                                <a class="btn product-cart button-icon flosun-button dark-btn" href="cart.html">Add to cart</a>--}}
{{--                                <a class="btn flosun-button secondary-btn secondary-border rounded-0" href="wishlist.html">Add to wishlist</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="social-share mb-4">--}}
{{--                            <span>Share :</span>--}}
{{--                            <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>--}}
{{--                            <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>--}}
{{--                        </div>--}}
{{--                        <div class="payment">--}}
{{--                            <a href="#"><img class="border" src="/assets/images/payment/payment-icon.png" alt="Payment"></a>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
            @if(!empty($product->ingredients) && !empty($product->ingredients))
            <div class="row mt-no-text">
                <div class="col-lg-12 col-custom">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @if(!empty($product->ingredients))
                            <li class="nav-item">
                                <a class="nav-link active text-uppercase" id="ingredients" data-bs-toggle="tab" href="#connectIngredients" role="tab" aria-selected="true">Tərkib</a>
                            </li>
                        @endif
                        @if(!empty($product->applications))
                            <li class="nav-item">
                                <a class="nav-link text-uppercase" id="applications" data-bs-toggle="tab" href="#connectApplications" role="tab" aria-selected="false">Tətbiq</a>
                            </li>
                        @endif
                    </ul>
                    <div class="tab-content mb-text" id="myTabContent">
                        @if(!empty($product->ingredients))
                            <div class="tab-pane fade show active" id="connectIngredients" role="tabpanel" aria-labelledby="ingredients">
                                <div class="desc-content">
                                    {!! $product->ingredients !!}
                                </div>
                            </div>
                        @endif
                        @if(!empty($product->applications))
                            <div class="tab-pane fade" id="connectApplications" role="tabpanel" aria-labelledby="applications">
                                <table class="table border">
                                    <tr>
                                        <th>Bitki</th>
                                        <th>Doza</th>
                                        <th>Tətbiq</th>
                                    </tr>
                                    @foreach (json_decode(json_encode($product->applications)) as $application)
                                        <tr>
                                            <td>{!! $application->plant !!}</td>
                                            <td>{!! $application->dose !!}</td>
                                            <td>{!! $application->application !!}</td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <br><br><br>
@endsection
