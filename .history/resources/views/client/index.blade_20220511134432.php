@extends('client.template.layout')
@section('content')

<style>
@import url("https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap");

 img {
	 max-width: 100%;
	 display: block;
	 height: auto;
}
 ul {
	 list-style: none;
}
 .card {
	 max-width: 1175px;
	 width: 100%;
	 height: 890px;
	 margin: 0 auto;
	 background-color: #fff;
	 border-radius: 40px;
	 padding-top: 52px;
	
}
 .wrapper {
	 max-width: 900px;
	 width: 100%;
	 padding: 0 1em;
	 margin: 0 auto;
}

 .header__btn {
	 display: inline-block;
	 text-align: center;
	 border: 0;
	 font-family: inherit;
	 outline: 0;
	 background: transparent;
	 background-color: var(--black);
	 color: white;
	 font-size: 1.8rem;
	 padding: 15px 59px;
	 border-radius: 5px;
	 box-shadow: 0 11px 14px -10px rgba(46, 51, 54, 0.9);
}
 .gal {
	 display: grid;
	 grid-template-columns: repeat(auto-fit, minmax(275px, 1fr));
	 gap: 1.5rem;
}
 .gal__item img {
	 object-fit: cover;
	 width: 100%;
	 height: 100%;
	 cursor: pointer;
}
 .gal__item {
	 position: relative;
}
 .gal__item:hover .desc {
	 opacity: 1;
	 transform: scale(1, 1);
	 transform-origin: bottom;
}
 .desc {
	 position: absolute;
	 bottom: 0;
	 left: 0;
	 right: 0;
	 padding: 10px 15px;
	 background-color: rgba(19, 35, 52, 0.5);
	 color: white;
	 display: flex;
	 justify-content: space-between;
	 align-items: center;
	 opacity: 0;
	 transform: scale(1, 0);
	 transition: transform 300ms cubic-bezier(0.54, 0.02, 0.43, 0.93);
}
 h6 {
	 font-size: 1.4rem;
}
 .numbers {
	 font-size: 1.2rem;
}
 @media (max-width: 650px) {
	 .card {
		 min-height: 100vh;
	}
	 .nav {
		 display: flex;
		 align-items: center;
		 justify-content: center;
		 flex-wrap: wrap;
	}
}
 @media (max-width: 560px) {
	 .card {
		 height: 100vh;
		 overflow-y: auto;
	}
	 .header {
		 margin: 84px 0;
		 display: flex;
		 align-items: center;
		 justify-content: center;
		 flex-wrap: wrap;
	}
	 .header__search {
		 display: flex;
		 align-items: center;
		 flex: 0 1 335px;
		 position: relative;
		 margin-bottom: 2em;
	}
	 .menu__item + .menu__item {
		 display: inline-block;
		 margin-left: 1.4em;
	}
	 .header__btn {
		 display: block;
		 width: 100%;
	}
	 .gal {
		 margin-bottom: 3em;
	}
}
 
</style>

<!-- Start Slider Area -->
<div class="slider__container slider--one bg__cat--3">
    <div class="slide__container slider__activation__wrap owl-carousel">
        <!-- Start Single Slide -->
        @foreach ($post as $item)
        <div class="single__slide animation__style01 slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>{{$item->bv_ngaytao}}</h2>
                                <h1>{{substr($item->bv_tieude,0,13)}}</h1>
                                <div class="cr__btn">
                                    <a href="{{route("post.list")}}">Xem Ngay →</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="{{asset("client/images/banner/big-img/Banner2.png")}}" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- End Single Slide -->
        <!-- Start Single Slide -->
        <div class="single__slide animation__style01 slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>collection 2022</h2>
                                <h1>NICE HIỆU</h1>
                                <div class="cr__btn">
                                    <a href="cart.html">AUCTION Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="{{asset("client/images/banner/big-img/Banner1.jpg")}}" alt="slider images">
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
                    <h2 class="title__line">SẢN PHẨM ĐANG ĐẤU GIÁ</h2>
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
                                <a href="{{ route('client.product.detail', ['id'=>$item->dg_id]) }}">
                                    <img src="{{asset($item->hasp_duongdan)}}" width="290" height="385" alt="product images">
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
                                @if($item->isAuction)
                                <ul class="fr__pro__prize">
                                    <li data-countdown="{{ $item->dg_thoigianketthuc}}"></li>
                                </ul>
                                @else
                                <p>Chưa đến thời gian đấu giá</p>
                                @endif
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
                    <h2 class="title__line">BÀI VIẾT</h2>
                    <p>Cập nhật kịp thời các thông tin nổi bật của sàn</p>
                    <img class="item-center" src={{asset("client/images/icons/section-border.png")}}>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="ht__blog__wrap clearfix">
                @foreach ($post as $item)
                <!-- Start Single Blog -->
                <div class="col-md-6 col-lg-4 col-sm-6 col-xs-12">
                    <div class="blog">
                        <div class="blog__thumb">
                            <a href="{{route("post.list")}}">
                                <img src={{asset($item->bv_hinhanh)}} alt="blog images">
                            </a>
                        </div>
                        <div class="blog__details">
                            <div class="bl__date">
                                <span>{{ $item->bv_ngaytao }}</span>
                            </div>
                            <h2><a href="{{route("post.list")}}">{{ $item->bv_tieude }}</a></h2>
                            <p>{!!
                                    substr($item->bv_noidung,0,300)
                                !!}</p>
                            <div class="blog__btn">
                                <a href={{route("post.list")}} style="color:black">Xem thêm →</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Blog -->
                @endforeach
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
    
    <div class="htc__brand__area bg__cat--4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ht__brand__inner">
                            <ul class="brand__list owl-carousel clearfix">
                                <li  class="company-logo"><a href="#"><img src="{{asset("client/images/logo/icon-adidas-logo.svg")}}" alt="brand images"></a></li>
                                <li class="company-logo"><a href="#"><img src="{{asset("client/images/logo/drewvector-seeklogo.com.svg")}}" alt="brand images"></a></li>
                                <li class="company-logo"><a href="#"><img src="{{asset("client/images/logo/jordan.svg")}}" alt="brand images"></a></li>
                                <li class="company-logo"><a href="#"><img src="{{asset("client/images/logo/logo.svg")}}" alt="brand images"></a></li>
                                <li class="company-logo"><a href="#"><img src="{{asset("client/images/logo/nike_PNG5.png")}}" alt="brand images"></a></li>
                                <li class="company-logo"><a href="#"><img src="{{asset("client/images/logo/converse.png")}}" alt="brand images"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<div class="about">
        <div class="about_image">
            <img src="{{asset("client/images/banner/big-img/banner3.jpg")}}">
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

    {{-- <div class="canhgiua">
        <div class="introduce-icon1 text-center">
            <i class="fa fa-gavel"></i>
        </div>
    </div> --}}
    <div class="card">
   <div class="wrapper inner">
      <main class="main">
         <header class="header">
            <div class="header__search">
               <input type="search" id="sr" name="sr" placeholder="Search">
               <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26">
                     <g transform="translate(-2 -2)" fill="none" fill-rule="evenodd">
                        <path d="M0 0h30v30H0z" />
                        <circle cx="12.5" cy="12.5" r="8.75" stroke="#9BAAB7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.875" />
                        <path stroke="#9BAAB7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.875" d="M26.25 26.25l-7.5-7.5" />
                     </g>
                  </svg>

               </span>
            </div>
            <button class="header__btn">Upload</button>
         </header>
         <ul class="gal">
            <li class="gal__item"><img src="https://assets.codepen.io/2709552/1-gallery.jpg" />
               <div class="desc">
                  <div class="desc__content">
                     <h6>Girl Haidresser</h6>
                     <div class="desc__likes">
                        <span class="numbers">500 Likes 100 shares</span>
                     </div>
                  </div>
                  <div class="desc__icon">
                     <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="20">
                           <g fill="none" fill-rule="evenodd">
                              <path d="M-5.615-2.615h25.128v25.128H-5.615z" />
                              <path stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.571" d="M3.808 1.573h6.282c1.157 0 2.094.938 2.094 2.094v14.658l-5.235-3.14-5.235 3.14V3.667c0-1.156.938-2.094 2.094-2.094" />
                           </g>
                        </svg>
                     </span>
                  </div>
               </div>
            </li>
         </ul>
      </main>
   </div>
</div>


@endsection
