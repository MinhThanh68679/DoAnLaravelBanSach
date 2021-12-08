<label class="top-log mx-auto"></label>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header mb-2">
				<!-- Nút show menu mobile -->
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						
					</span>
				</button>
				<!-- Menu trang web -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-bottom: -10px">
					<ul class="navbar-nav nav-mega mx-auto">
						<!-- Trang chủ -->
						<li class="nav-item active">
							<a class="nav-link ml-lg-0" href="{{ route('user.index')}}">Trang Chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<!-- Ưu đãi lớn -->
						<li class="nav-item">
							<a class="nav-link" href="{{ route('user.shop')}}">Khuyến Mãi</a>
						</li>
						<!-- Cửa hàng -->
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="{{ route('user.shop')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Sản Phẩm
							</a>
							<ul class="dropdown-menu mega-menu">
								<li>
									<div class="row">
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Học Tập </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="{{ route('user.shop')}}">Sách Giáo Khoa</a>
												</li>
												<li class="">
													<a href="{{ route('user.shop')}}">Sách Tham Khảo</a>
												</li>
												<li>
													<a href="{{ route('user.shop')}}">Sách Học Ngoại Ngữ/Từ Điển</a>
												</li>
												<li>
													<a href="{{ route('user.shop')}}">Văn Học</a>
												</li>
												
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Giải Trí</h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="{{ route('user.shop')}}">Truyện Tranh</a>
												</li>
												<li class="">
													<a href="{{ route('user.shop')}}"> Sách Thiếu Nhi</a>
												</li>
												<li>
													<a href="{{ route('user.shop')}}"> Văn Hóa/Du Lịch </a>
												</li>
												<li>
													<a href="{{ route('user.shop')}}"> Thưởng Thức/Đời Sống </a>
												</li>
												<li>
													<a href="{{ route('user.shop')}}"> Tạp Chí</a>
												</li>
											</ul>
										</div>
										<div class="col-md-4 media-list span4 text-left">
											<h5 class="tittle-w3layouts-sub"> Kỹ Năng </h5>
											<ul>
												<li class="media-mini mt-3">
													<a href="{{ route('user.shop')}}">Kỹ Năng Sống</a>
												</li>
												<li class="">
													<a href="{{ route('user.shop')}}"> Kinh Tế</a>
												</li>
												<li>
													<a href="{{ route('user.shop')}}">Sách Ẩm Thực</a>
												</li>
												<li>
													<a href="{{ route('user.shop')}}">Tâm Lý/Giáo Dục</a>
												</li>
											</ul>
										</div>
									</div>
									<hr>
									<a href="{{ route('user.shop')}}" style="text-align:center;color:black"><h5 class="tittle-w3layouts-sub"> Xem Tất Cả </h5></a>
								</li>
							</ul>
						</li>
						<!-- Tin tức -->
						<li class="nav-item">
							<a class="nav-link" href="{{ route('user.new')}}">Tin Tức</a>
						</li>
						<!-- Thông tin & liên hệ -->
						<li class="nav-item">
							<a class="nav-link" href="{{ route('user.about')}}">Liên Hệ</a>
						</li>
						<!-- Thanh tìm kiếm -->
						<li style="padding: 5px 0 0 15px;">
							<input type="text" class="input-search">
							<button style="border-radius: 0.25rem; padding: 0.25rem 0.5rem; background-color: rgb(104, 101, 92); color: cornsilk;" type="button">
								<i class="fas fa-search"></i>
							</button>	
						</li>
					</ul>

				</div>
			</nav>
		</header>