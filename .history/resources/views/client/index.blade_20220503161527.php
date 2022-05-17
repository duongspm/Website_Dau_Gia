@extends('client.template.layout')
@section('content')


<!-- Start Slider Area -->
<div class="slider__container slider--one bg__cat--3">
    <div class="slide__container slider__activation__wrap owl-carousel">
        <!-- Start Single Slide -->
        <div class="single__slide animation__style01 slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>collection 2018</h2>
                                <h1>NICE CHAIR</h1>
                                <div class="cr__btn">
                                    <a href="cart.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="images/slider/fornt-img/1.png" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
        <!-- Start Single Slide -->
        <div class="single__slide animation__style01 slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>collection 2018</h2>
                                <h1>NICE HIỆU</h1>
                                <div class="cr__btn">
                                    <a href="cart.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="images/slider/fornt-img/2.png" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
    </div>
</div>
<!-- Start Slider Area -->
<!-- Start Category Area -->
<section class="htc__category__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Sản phẩm đang đấu giá</h2>
                    <img class="item-center" src={{asset("client/images/icons/section-border.png")}}>
                </div>
            </div>
        </div>
        <div class="htc__product__container">
            <div class="row">
                <div class="product__list clearfix mt--30">
                    @foreach ($product as $item)
                    <!-- Start Single Category -->
                    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="{{route('client.product.detail', ['id'=>$item->dg_id]) }}">
                                    <img style="width:290px, height:385px" src="{{asset($item->hasp_duongdan)}}" alt="product images">
                                </a>
                            </div>
                            <div class="fr__hover__info">
                                <ul class="product__action">
                                    <li><a href="{{route('client.product.detail', ['id'=>$item->dg_id]) }}" data-tooltip="Bid Now"><i class="icon-heart icons"></i></a></li>

                                    <li><a href="{{route('client.product.detail', ['id'=>$item->dg_id]) }}"><i class="fa fa-gavel"></i></a></li>

                                    <li><a href="{{route('client.product.detail', ['id'=>$item->dg_id]) }}"><i class="fa fa-search"></i></a></li>
                                </ul></div>
                            <div class="fr__product__inner">
                                <h4><a href="{{ route('client.product.detail', ['id'=>$item->dg_id]) }}">{{ $item->sp_ten }}</a></h4>
                                <ul class="fr__pro__prize">
                                    <li data-countdown="{{ $item->dg_thoigianketthuc}}"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Category -->
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Category Area -->
<!-- Start Blog Area -->
<section class="htc__blog__area bg__white ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Our Blog</h2>
                    <img class="item-center" src={{asset("client/images/icons/section-border.png")}}>
                    {{-- <img class="item-center" style="width:20px;height:20px" src={{asset("client/images/icons/caybua.svg")}}> --}}
                    <p>But I must explain to you how all this mistaken idea</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="ht__blog__wrap clearfix">
                <!-- Start Single Blog -->
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                    <div class="blog">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src={{asset("client/images/blog/blog-img/1.jpg")}} alt="blog images">
                            </a>
                        </div>
                        <div class="blog__details">
                            <div class="bl__date">
                                <span>March 22, 2016</span>
                            </div>
                            <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, consec tetur adipisicing elit</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="blog__btn">
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                <!-- Start Single Blog -->
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                    <div class="blog">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src={{asset("client/images/blog/blog-img/2.jpg")}} alt="blog images">
                            </a>
                        </div>
                        <div class="blog__details">
                            <div class="bl__date">
                                <span>May 22, 2017</span>
                            </div>
                            <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, consec tetur adipisicing elit</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="blog__btn">
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                <!-- Start Single Blog -->
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                    <div class="blog">
                        <div class="blog__thumb">
                            <a href="blog-details.html">
                                <img src={{asset("client/images/blog/blog-img/3.jpg")}} alt="blog images">
                            </a>
                        </div>
                        <div class="blog__details">
                            <div class="bl__date">
                                <span>March 22, 2018</span>
                            </div>
                            <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, consec tetur adipisicing elit</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="blog__btn">
                                <a href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
            </div>
        </div>
    </div>
</section>
<!-- End Blog Area -->
<!-- End Banner Area -->
<section class="company">
    <div class="row">
        <div class="col-xs-12">
            <div class="section__title--2 text-center">
                <h2 class="title__line">THƯƠNG HIỆU</h2>
                
                <img class="item-center" src={{asset("client/images/icons/section-border.png")}}>
                {{-- <img class="item-center" style="width:20px;height:20px" src={{asset("client/images/icons/caybua.svg")}}> --}}
                <p class="company-heading">Trusted by 5,000+ Companies Worldwide</p>
            </div>
        </div>
    </div>
    
    <div class="company-logos">
        <div class="company-logo">
            <img src="{{asset("client/images/logo/icon-adidas-logo.svg")}}" alt="Nike">
        </div>
        <div class="company-logo">
            <img src="{{asset("client/images/logo/drewvector-seeklogo.com.svg")}}" alt="google nek">
        </div>
        <div class="company-logo">
            <img src="{{asset("client/images/logo/jordan.svg")}}" alt="google nek">
        </div>
        <div class="company-logo">
            <img src="{{asset("client/images/logo/logo.svg")}}" alt="google nek">
        </div>
        <div class="company-logo">
            <img src="{{asset("client/images/logo/nike_PNG5.png")}}" alt="google nek">
        </div>
        <div class="company-logo">
            <img src="{{asset("client/images/logo/converse.png")}}" alt="google nek">
        </div>
    </div>
</section>

<div class="about">
        <div class="about_image">
            <img src="{{asset("client/images/logo/logo-auc.png")}}">
        </div>
        <div class="about-wrapper">
            <div class="about-item">
                <div class="about_icon">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                </div>
                <div class="about_content">
                    <span class="about_count">123</span>
                    <p class="about_title">AUCTIONS</p>
                </div>
            </div>

            <div class="about-item">
                <div class="about_icon">
                    
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <div class="about_content">
                    <span class="about_count">123</span>
                    <p class="about_title">KHÁCH HÀNG</p>
                </div>
            </div>

            <div class="about-item">
                <div class="about_icon">
                    <i class="fa fa-gavel"></i>
                </div>
                <div class="about_content">
                    <span class="about_count">123</span>
                    <p class="about_title">SÀN ĐẤU GIÁ</p>
                </div>
            </div>

            <div class="about-item">
                <div class="about_icon">
                    <i class="fa fa-handshake-o"></i>
                </div>
                <div class="about_content">
                    <span class="about_count">123</span>
                    <p class="about_title">THƯƠNG HIỆU</p>
                </div>
            </div>

            <div class="about-item">
                <div class="about_icon">
                    <i class="fa fa-tags" aria-hidden="true"></i>
                </div>
                <div class="about_content">
                    <span class="about_count">123</span>
                    <p class="about_title">SẢN PHẨM</p>
                </div>
            </div>

            <div class="about-item">
                <div class="about_icon">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                </div>
                <div class="about_content">
                    <span class="about_count">123</span>
                    <p class="about_title">BÀI VIẾT</p>
                </div>
            </div>

        </div>
    </div>

    <div class="canhgiua">
        <div class="introduce-icon1 text-center">
            <i class="fa fa-gavel"></i>
        </div>
    </div>
    
@endsection