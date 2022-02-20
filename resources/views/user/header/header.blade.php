<style>
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 85%;
  bottom: 70px;
  font-size: 17px;
}

.count {
    border-radius: 100%;
    border: 2px solid red;
	background-color: red;
	color: white;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

#addcart {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #26d326;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 85%;
  bottom: 70px;
  font-size: 17px;
}

#addcart.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 70px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 70px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 70px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 70px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

.setting-sidebar {
    position: fixed;
    top: 239px;
    transform: translateY(-50%);
    background-color: #fff;
    width: 40px;
    height: 40px;
    right: 0px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    box-shadow: 0px 0px 5px 0px rgb(154 154 154 / 54%);
    transition: all 0.5s ease;
    z-index: 9;
}

.d-lg-block {
    display: block!important;
	background: #cdc9d8;
}

.fa-eye{
    padding: 12px 10px;
	color: black;
	cursor: pointer;
}

.fa-eye:hover{
	color: #ff4e00;
}

.miniview-inner .miniview-inner-content {
    position: fixed;
    top: 369px;
    transform: translateY(-50%);
    background-color: #fff;
    width: 250px;
    height: 300px;
    right: 0px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    box-shadow: 0px 0px 5px 0px rgb(154 154 154 / 54%);
    transition: all 0.5s ease;
    z-index: 9;
	opacity: 0;
	visibility: hidden;
}

.miniview-inner-content.show {
    opacity: 1;
    visibility: visible;
}

.miniview-content-box {
    overflow: auto;
    height: 97%;
}

.fa-times{
	font-size:20px;	
	display: block;
	padding-top:10px;
	color: black;
	cursor: pointer;
}
.fa-times:hover{
	color: #ff4e00;
}

.miniview-inner .miniview-close {
    width: 40px;
    height: 40px;
    text-align: center;
    background-color: #cdc9d8;
    color: #fff;
    font-size: 40px;
    cursor: pointer;
    top: 0;
    right: 250px;
    position: absolute;
	border-radius: 10%;
}
</style>
<!-- End Modal -->
<div class="banner-top container-fluid" id="home">
		<!-- header -->
		<header>
			<div class="row">
				<!-- LOGO của trang web -->
				<div class="col-md-3 top-info text-left mt-lg-4">
					<img width="40%" height="30%" src="{!! asset('user\images\logo_min.png')!!}" class="img-fluid" alt="" >
				</div>
				<!-- BANNER của trang web -->
				<div class="col-md-6 logo-w3layouts top-info text-center">
					<h1 class="logo-w3layouts">
						<a class="navbar-brand" href="{{ url('/') }}">
							N&T Books </a>
					</h1>
				</div>
				<!--Cá nhân -->
				<div class="col-md-3 text-right mt-lg-4">
					<ul class="cart-inner-info">
						<!-- Đăng nhập -->
						@if (session()->has('infoUser') == null)
						<li>
								<span class="fa fa-user" aria-hidden="true" style="color: rgb(35, 175, 156);"></span><a href="/DangNhap" class="hover-nut"> Đăng Nhập </a>
						</li>
						@else
						<li>
					
								<span class="fa fa-user" aria-hidden="true" style="color: rgb(35, 175, 156);"></span><a href="{{route('getLogout')}}" class="hover-nut"> Đăng Xuất </a>
						</li>
						@endif
						<!-- Giỏ hàng -->
						<li>
								<span class="fas fa-cart-plus" aria-hidden="true" style="color: rgb(35, 175, 156)"></span><a href="#" class="hover-nut"> Giỏ Hàng </a>
								<span class="count"></span>
							<!-- <form action="#" method="post" class="last">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="display" value="1">
								<button class="" type="submit" name="submit" value="">
									My Cart
									<i class="fas fa-cart-arrow-down"></i>
								</button>
							</form> -->
						</li>
					</ul>
				</div>
			</div>
