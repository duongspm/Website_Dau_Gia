@extends('store.template.layout')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Danh sách Người dùng</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Danh sách Người dùng</h3>
                </div>
                @include('store.template.alert')
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="brand" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Người dùng</th>
                      <th>Trạng thái</th>
                      <th>Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->nd_hoten}}</td>
                            <td>
                              @if ($item->nd_trangthai==0)
                              Đang chờ duyệt
                              🏪
                              @elseif($item->nd_trangthai==1)
                              Đã duyệt
                              @elseif($item->nd_trangthai==2)
                              Tạm khoá
                              @endif</td>
                            <td>
                              <button class="btn btn-warning" data-toggle="modal"
                              data-target="#exampleModalCenter{{$item->nd_id}}">Chỉnh sửa</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                  @foreach ($data as $item)
                  <div class="modal fade" id="exampleModalCenter{{$item->nd_id}}" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Trạng thái</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('updateUser', $item) }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <select name="nd_trangthai" id="" class="form-control">
                                      @if ($item->nd_trangthai==0)
                                      <option value="2">Khoá</option>
                                        <option value="1">Duyệt</option>
                                      @elseif($item->nd_trangthai==1)
                                      <option value="2">Khoá</option>
                                      @elseif($item->nd_trangthai==2)
                                        <option value="1">Mở khoá</option>
                                      @endif
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Thoát</button>
                                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                        @endforeach
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
