@extends('user.layout')
	@section('content')
    		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.html">Trang chủ</a>
							<i>|</i>
						</li>
						<li>Quản lý tài khoản</li>
					</ul>
				</div>
			</div>

		</div>
		
	</div>
		<!--//banner -->
    <div class="container">
        <div class="row">
        <!--/tabs-->				
        <div class="responsive_tabs">
								<h4 style="text-align:center;color: #828284;">QUẢN LÝ TÀI KHOẢN</h4>
                                <hr width="100%">
								<br>
                                <div style="padding-bottom:10px; text-align:center">
                                <img src="{{asset('image/'.$user->AnhDaiDien)}}" alt="" style="width:150px; height:150px; border-radius:50%">
                                </div>
                                <br>
                                <h6 style="font-weight:700; width:1100px; padding-bottom:10px">THÔNG TIN CÁ NHÂN</h6>
                                <table class="thong-tin" style="border-style:double">
								<tbody>
									<tr>
										<td>Họ và tên:</td>
										<td>{{$user->HoTen}}</td>
									</tr>
									<tr>
										<td>Email:</td>
										<td>{{$user->Email}}</td>
									</tr>
									<tr>
										<td>Số điện thoại:</td>
										<td>{{$user->SDT}}</td>
									</tr>
									<tr>
										<td>Địa chỉ:</td>
										<td>{{$user->DiaChi}}</td>
									</tr>
                  <tr>
                                        <td><button class="btn btn-success" style="font-size:90%" data-toggle="modal" data-target="#exampleEditModalCenter">CẬP NHẬT</button><td>
                                    </tr>
								</tbody>
								</table>
								<br>
									
					<div class="single_page">
									
					</div>
				</div>
                <!--//tab_one-->
                
    
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleEditModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#ffa500a8;">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color:white; font-size:120%; padding-left:130px">THÔNG TIN CÁ NHÂN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @if (session()->has('infoUser') != null)
                <?php
                            $myaccount = session()->get('infoUser');
                 ?>
      <form action="{{ route('user.updateinfomation', $myaccount) }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="modal-body" style="margin-top:10px; padding-left:10px; padding-right:10px">
          <div class="row">
              <div class="col-lg-12">
                <label for="exampleInputTopic">Ảnh đại diện</label>
                <div class="custom-file">
                    <input accept="image/*" title="" type="file" class="form-control" name="AnhDaiDien" id="AnhDaiDien" placeholder="Chọn ảnh" />
               </div>
              </div>
              <div class="col-lg-12" style="margin-top:20px">
                <label for="exampleInputTopic">Họ tên</label>
                <input type="text" class="form-control" value="HoTen" name="HoTen" placeholder="Họ tên" >
              </div>
              <div class="col-lg-12" style="margin-top:20px">
                <label for="exampleInputTopic">Số điện thoại</label>
                <input type="text" class="form-control" value="SDT" name="SDT" placeholder="Số điện thoại" >
              </div>
              <div class="col-lg-12" style="margin-top:20px; margin-bottom:10px">
                <label for="exampleInputTopic">Địa chỉ</label>
                <input type="text" class="form-control" value="DiaChi" name="DiaChi" placeholder="Địa chỉ">
              </div>
          </div>
      </div>
      <div class="modal-footer" style="background-color:#ffa50099">
        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i></button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-window-close"></i></button>
      </div>
      </form>
    </div>
  </div>
</div>
@endif
    <!--//tabs-->
        </div>
    </div>
    @stop