@extends('client.template.layout')
@section('content')
        <!-- Start Blog Area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/4.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="index.html">Home</a>
                                    <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                    <span class="breadcrumb-item active">Blog</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="htc__blog__area bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="ht__blog__wrap blog--page clearfix">
                        @foreach ($data as $item)
                        <div class="col-md-6 col-lg-4 col-sm-12 col-xs-12">
                            <div class="blog">
                                <div class="blog__thumb">
                                    <a href="{{route("post.detail",$item->bv_id)}}">
                                        <img src="{{asset($item->bv_hinhanh)}}" alt="blog images">
                                    </a>
                                </div>
                                <div class="blog__details">
                                    <div class="bl__date">
                                        <span>{{$item->bv_ngaytao}}</span>
                                    </div>
                                    <h2><a href="{{route("post.detail",$item->bv_id)}}">{{$item->bv_tieude}}</a></h2>
                                <p>{!!$item->bv_noidung!!}</p>
                                    <div class="blog__btn">
                                        <a href="{{route("post.detail",$item->bv_id)}}">Xem th??m</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- Start PAgenation -->
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="htc__pagenation">
                            {{$data->links()}}
                        </ul>
                    </div>
                </div>
                <!-- End PAgenation -->
            </div>
        </section>
        <!-- End Blog Area -->

@endsection
