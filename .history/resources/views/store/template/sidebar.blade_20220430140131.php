<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('store.detail') }}" class="brand-link">
        <img src={{asset("admin/img/AdminLTELogo.png")}} alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Audit Management</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src={{asset("admin/img/user2-160x160.jpg")}} class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::guard('nguoidung')->user()->nd_hoten ?? 'Admin'}}</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @if (\Auth::guard('nguoidung')->check() || (\Auth::guard('quantrivien')->check() && \Session::has('ch_id')))
                <li class="nav-item">
                    <a href="{{ route('product.index') }}" class="nav-link
                        @if (Request::segment(1) == 'san-pham')
                            active
                        @endif
                    ">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('type.index') }}" class="nav-link
                        @if (Request::segment(1) == 'loai-san-pham')
                            active
                        @endif
                        ">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Loại sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('category.index') }}" class="nav-link
                        @if (Request::segment(1) == 'danh-muc')
                            active
                        @endif
                        ">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Danh mục
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('order.getList') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Đơn hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('store.info') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Thông tin cửa hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('brand.index') }}" class="nav-link
                        @if (Request::segment(1) == 'thuong-hieu')
                            active
                        @endif
                    ">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Thương hiệu
                        </p>
                    </a>
                </li>

               @endif
                @if (\Auth::guard('quantrivien')->check())
                <li class="nav-item">
                    <a href="{{ route('post.index') }}" class="nav-link
                        @if (Request::segment(1) == 'bai-viet')
                            active
                        @endif
                    ">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Bài viết
                        </p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Thống kê
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    
                    <ul class="nav nav-treeview">
                        @if (\Auth::guard('nguoidung')->check() || (\Auth::guard('quantrivien')->check() && \Session::has('ch_id')))
                        <li class="nav-item">
                            <a href="{{route('stat.revenue')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Doanh thu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('stat.product')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sản phẩm bán được</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('stat.order')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Đơn hàng</p>
                            </a>
                        </li>
                        @endif
                        @if (\Auth::guard('quantrivien')->check())
                        <li class="nav-item">
                            <a href="{{route('stat.user')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Người dùng đăng ký</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('stat.store')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Top cửa hàng</p>
                            </a>
                        </li>
                        @endif

                    </ul>
                </li>
                @if (\Auth::guard('quantrivien')->check())
                <li class="nav-item">
                    <a href="{{ route('listStore') }}" class="nav-link
                    ">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Danh sách cửa hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('listUser') }}" class="nav-link
                    ">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Danh sách người dùng
                        </p>
                    </a>
                </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link
                    ">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Đăng xuất
                        </p>
                    </a>
                </li>
                
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
