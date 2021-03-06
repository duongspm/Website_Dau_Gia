@extends('client.template.layout')
@section('content')

<div class="body__overlay"></div>
<!-- Start Product Details Area -->
<section class="htc__product__details bg__white ptb--100">
    <!-- Start Product Details Top -->
    <div class="htc__product__details__top">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="htc__product__details__tab__content">
                        <!-- Start Product Big Images -->
                        <div class="product__big__images">
                            <div class="portfolio-full-image tab-content">
                                @foreach ($imageProduct as $item)
                                    <div role="tabpanel" class="tab-pane fade in {{ $item->hasp_anhdaidien == 1 ? 'active' : '' }}" id="img-tab-{{ $item->hasp_id }}">
                                        <img src="{{ asset($item->hasp_duongdan) }}" alt="full-image">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- End Product Big Images -->
                        <!-- Start Small images -->
                        <ul class="product__small__images" role="tablist">
                            @foreach ($imageProduct as $item)
                            <li role="presentation" class="pot-small-img {{ $item->hasp_anhdaidien == 1 ? 'active' : '' }}">
                                <a href="#img-tab-{{ $item->hasp_id }}" role="tab" data-toggle="tab">
                                    <img src="{{ asset($item->hasp_duongdan) }}" alt="small-image">
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        <!-- End Small images -->
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
                    <div class="ht__product__dtl">
                        <h2>{{ $detail->sp_ten }}</h2>
                        <ul  class="pro__prize">
                            <li class="old__prize">C???a h??ng</li>
                            <li><a href="{{ route('client.product.by.store', ['id'=>$detail->ch_id]) }}" title="Xem c???a h??ng">{{ $detail->ch_ten}}</a></li>
                        </ul>
                        @php
                            property_exists($detail,'dg_thoigianketthuc');
                        @endphp
                        @if (property_exists($detail,'dg_thoigianketthuc') == true)
                        <ul  class="pro__prize">
                            <li class="old__prize">Th???i gian c??n l???i: </li>
                            <li data-countdown="{{ $detail->dg_thoigianketthuc}}"></li>
                        </ul>
                        <ul  class="pro__prize">
                            <li class="old__prize">Gi?? kh???i ??i???m: </li>
                            <li>{{ number_format($detail->dg_giakhoidiem) }} VN??</li>
                        </ul>
                        <ul  class="pro__prize">
                            <li class="old__prize">B?????c nh???y: </li>
                            <li>{{ number_format($detail->dg_buocnhay) }} VN??</li>
                        </ul>
                        <ul  class="pro__prize">
                            <li class="old__prize">Gi?? cao nh???t: </li>
                            <li id="maxPrice">{{ $maxPrice != null ? number_format($maxPrice->ctdg_giatien) : 0 }} VN??</li>
                        </ul>

                        <div class="ht__pro__desc">
                        @elseif (Auth::guard('nguoidung')->check())
                            <div class="sin__desc align--left">
                                @if ($detail->dg_thoigianketthuc > Carbon\Carbon::now())
                                <form action="{{ route('client.product.audit') }}" method="GET">
                                    <div class="single-input">
                                        <input type="number" name="auditPrice">
                                        <button>?????u gi??</button>
                                    </div>
                                    <input type="text" name="auditId" value="{{ $detail->dg_id }}" hidden>
                                    <input type="text" name="userId" value="{{ Auth::guard('nguoidung')->id() }}" hidden>
                                </form>
                                @endif
                            </div>
                            @else
                            <div class="sin__desc">
                                <p>Vui l??ng ????ng nh???p ????? tham gia ?????u gi??. <a href="{{ route('login.view') }}">T???i ????y</a></p>
                            </div>
                            @endif
                        </div>
                        {{-- @else --}}
                        <p style="color: red;">S???n ph???m ch??a ????ng k?? ?????u gi??</p>
                        <ul  class="pro__prize">
                            <li class="old__prize">Th???i gian c??n l???i: </li>
                            <li>00:00:00</li>
                        </ul>
                        <ul  class="pro__prize">
                            <li class="old__prize">Gi?? kh???i ??i???m: </li>
                            <li>0</li>
                        </ul>
                        <ul  class="pro__prize">
                            <li class="old__prize">B?????c nh???y: </li>
                            <li>0</li>
                        </ul>
                        <ul  class="pro__prize">
                            <li class="old__prize">Gi?? cao nh???t: </li>
                            <li>0</li>
                        </ul>
                        
                        <div class="ht__pro__desc">

                            @if ( Auth::guard('nguoidung')->check())
                                <div class="sin__desc align--left">
                                    <form action="{{ route('client.product.audit') }}" method="GET">
                                        <div class="single-input">
                                            <input type="number" name="auditPrice">
                                            <button>?????u gi??</button>
                                        </div>
                                        <input type="text" name="auditId" value="{{ $detail->dg_id }}" hidden>
                                        <input type="text" name="userId" value="{{ Auth::guard('nguoidung')->id() }}" hidden>
                                    </form>
                                </div>
                            @else
                            <div class="sin__desc">
                                <p>Vui l??ng ????ng nh???p ????? tham gia ?????u gi??. <a href="{{ route('login.view') }}">T???i ????y</a></p>
                            </div>
                            @endif
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Product Details Top -->
</section>
<!-- End Product Details Area -->
<!-- Start Product Description -->
<section class="htc__produc__decription bg__white">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!-- Start List And Grid View -->
                <ul class="pro__details__tab" role="tablist">
                    <li role="presentation" class="description active"><a href="#description" role="tab" data-toggle="tab">Th??ng tin ?????u gi??</a></li>
                    <li role="presentation" class="review"><a href="#review" role="tab" data-toggle="tab">Th??ng tin s???n ph???m</a></li>
                    {{-- <li role="presentation" class="shipping"><a href="#shipping" role="tab" data-toggle="tab">shipping</a></li> --}}
                </ul>
                <!-- End List And Grid View -->
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="ht__pro__details__content">
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">
                        <div class="pro__tab__content__inner">
                            <table class="table table-light" id="auditDetail">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Th???i gian</th>
                                        <th>Gi??</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($audit as $item)
                                    <tr class="item-audit">
                                        <td>{{ $item->ctdg_thoigian }}</td>
                                        <td>{{ number_format($item->ctdg_giatien) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="review" class="pro__single__content tab-pane fade">
                        <div class="pro__tab__content__inner">
                            <p>{{ $detail->sp_mota }}</p>
                        </div>
                    </div>
                    <!-- End Single Content -->
                    <!-- Start Single Content -->
                    <div role="tabpanel" id="shipping" class="pro__single__content tab-pane fade">
                        <div class="pro__tab__content__inner">
                            <p>Formfitting clothing is all about a sweet spot. That elusive place where an item is tight but not clingy, sexy but not cloying, cool but not over the top. Alexandra Alvarez???s label, Alix, hits that mark with its range of comfortable, minimal, and neutral-hued bodysuits.</p>
                            <h4 class="ht__pro__title">Description</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                            <h4 class="ht__pro__title">Standard Featured</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem</p>
                        </div>
                    </div>
                    <!-- End Single Content -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Product Description -->
<!-- End Blog Area -->
<!-- End Banner Area -->
@push('audit-pusher')
{{-- <script src="https://js.pusher.com/3.1/pusher.min.js"></script> --}}
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    var mainTable = $('#auditDetail');
    var detailTable = mainTable.find('tbody');
    var maxPrice = $('#maxPrice');
    //Thay gi?? tr??? PUSHER_APP_KEY v??o ch??? xxx n??y nh??
    var pusher = new Pusher('93855d1d3bab4b932281', {
        encrypted: true,
        cluster: "ap1"
    });
    // Subscribe to the channel we specified in our Laravel Event
    var channel = pusher.subscribe('audit');
    console.log(channel);
        // Bind a function to a Event (the full Laravel class)
    // var channel = window.Echo.channel('my-channel');
    channel.bind('audit-action', function(data) {
        console.log(data);
        var newRecord = `
            <tr class="item-audit">
                <td>`+ data.auditTime +`</td>
                <td>`+ data.auditPrice +`</td>
            </tr>
        `;
        detailTable.prepend(newRecord);
        maxPrice.html(data.maxPrice);
    });
</script>
@endpush
@endsection
