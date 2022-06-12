@extends('admin.layout')
@section('content')
 <!-- partial -->
 <div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">QUẢN LÝ SÁCH</h3>
                </div>
                @if(Session::has('message'))
                <div class="alert alert-success alert-dismissible fade show notify" role="alert">
                      <strong>Thông báo! </strong>{{Session::get('message')}}.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                        @endif
                        <div class="col-lg-12" style="padding-top:20px; display: flex; margin-bottom: 10px">
                  <div class="col-lg-6">
                  </div>
                  <div class="col-lg-6">
                 
                  </div>
                </div>
                  <!-- /.card-header -->
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <div class="card-body">
                    <table id="book" class="table" broder="1"  >
                  <thead>
                   <tr>
                   <th>Tên Khách Hàng</th>
                    <th>Ngày Lập</th>
                    <th>DiaChiGH</th>
                    <th>SDT</th>
                    <th>Tổng Tiền</th>
                    <th>Khuyến Mãi</th>
                    <th>Phương Thức Thanh Toán</th>
                    <th>Trạng Thái</th>
                    <th>Tùy Chỉnh</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($hoadon ?? '' as $hoadons)
                  <tr>
                    <td>{{$hoadons->TaiKhoan->HoTen}}</td>
                    <td>{{$hoadons->NgayLap}}</td>
                    <td>{{$hoadons->DiaChiGH}}</td>
                    <td>{{$hoadons->SDT}}</td>
                    <td>{{$hoadons->TongTien}}</td>
                    <td>
                    @if(($hoadons->id_makm)!=null)
                      {{$hoadons->id_makm}}
                    
                    @else
                      Không Mã
                    @endif
                    </td>
                  
                    <td>{{$hoadons->PhuongTTT}}</td>
                    <td id="trangthai{{$hoadons->id}}">@if($hoadons->TrangThai == 1) {{"Đơn Mới"}}
                    @elseif (($hoadons->TrangThai == 3)) {{"Đã Duyệt"}}
                    @elseif (($hoadons->TrangThai == 4)) {{"Đang Giao Hàng"}}
                    @elseif (($hoadons->TrangThai == 0)) {{"Đã Hủy"}}
                    @else {{"Giao Hàng Thành Công"}}
                    @endif</td>
                    <td>
                    
                  
                          
                          <button type="button" data-toggle="modal" class="chitiet" data-target="#exampleModalLong" data-id="{{$hoadons->id}}" id="xemchitiet"><i class="fa fa-eye text-success"></i></button>
                  
                          
                        
                            
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              </div>
              <!-- /.card-body -->
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:850px;hight:80px" >
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Chi tiết đơn hàng</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="order-modal" class="modal-body">
   
                        
        
       <!--  <div id="in"></div> -->
      
      
      </div>
    </div>
  </div>
</div>

<script>
  function ComfirmDelete() {
  var txt;
  if (confirm("Bạn có muốn xóa sách đã chọn?")) {
    return true;
  }
  return false;
  }
  
</script>

@stop

<style> 
tr:hover{
            background-color:#ddd;
            cursor:pointer;
        }
.table{
border: 1px solid #CED4DA;  
border-collapse: collapse; }
    
    
      </style>