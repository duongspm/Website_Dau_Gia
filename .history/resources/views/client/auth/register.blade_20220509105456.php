@extends('client.template.layout')
@section('content')

<div class="body__overlay"></div>
<!-- Start Slider Area -->
<!-- Start Category Area -->
<section class="htc__category__area ptb--100">
    <div class="container" style="background-image:url({{asset('client/images/logo/logo-auction.png')}});
">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Đăng ký</h2>
                </div>
            </div>
        </div>
        <div class="htc__product__container" style="box-shadow: 0 0 1em 0 rgba(51,51,51,0.25);
">
            <div class="row bilinfo">
                <div class="row">
                    <form action="{{ route('register.handle') }}" method="POST">
                        @csrf
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="single-input">
                                    <label for="">Họ và tên</label>
                                    <input type="text" name="nd_hoten" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <label for="">Email</label>
                                    <input type="email" name="nd_email" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <label for="">Số điện thoại</label>
                                    <input type="text" name="nd_sdt" minlength="9" maxlength="10" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <label for="">Ngày sinh</label>
                                    <br>
                                    <input type="date" class="col-md-12" name="nd_namsinh" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <label for="">Địa chỉ</label>
                                    <input type="text" name="nd_diachi" required>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="single-input">
                                    <label for="">Tên đăng nhập</label>
                                    <input type="text" name="username" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <label for="">Mật khẩu</label>
                                    <input type="password" name="password" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="single-input">
                                    <label for="">Nhập lại mật khẩu</label>
                                    <input type="password" name="re_password" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="single-input text-center">
                                    <button type="submit" class="fv-btn">Đăng ký</button>
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
