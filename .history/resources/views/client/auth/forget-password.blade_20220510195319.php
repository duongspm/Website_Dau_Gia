@extends('client.template.layout')
@section('content')

<div class="body__overlay"></div>
<!-- Start Slider Area -->
<!-- Start Category Area -->
<section class="htc__category__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Quên mật khẩu</h2>
                </div>
            </div>
        </div>
        <div class="htc__product__container">
            <div class="row bilinfo">
                <div class="row">
                    <form action="{{ route('handle.forget.password') }}" method="POST">
                        @csrf
                        <p>Vui lòng nhập email đã đăng ký tài khoản</p>
                        <div class="col-md-12">
                            <div class="single-input">
                                <label for="">Email</label>
                                <input type="email" name="nd_email" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="single-input text-center">
                                    <button type="submit" class="fv-btn">Xác thực</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Category Area -->
@endsection
