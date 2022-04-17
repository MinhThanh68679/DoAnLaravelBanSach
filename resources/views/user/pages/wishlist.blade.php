@extends('user.layout')
@section('content')
 <!--/tabs-->				
 <div class="responsive_tabs">
							
                              
									<div id="horizontalTab">
										<ul class="resp-tabs-list">
											
											<li>SÁCH YÊU THÍCH</li>
							
										</ul>
										<div class="resp-tabs-container">
											<!--/tab_one-->
											<div class="tab1">
					
					<div class="single_page">
                    <table class="table table-bordered" id="favorite-book" style="width:1100px">
                    <thead>
                    <tr style="text-align:center">
                        <th>Tên sách</th>
                        <th>Ảnh bìa</th>
                        <th>Tác giả</th>
                        <th>Phiên bản</th>
                        <th>Giá tiền</th>
                        <th>Trạng thái</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sach_yeu_thich as $favoritebook)
                    <tr>
                        <td>{{$favoritebook->Sach->TenSach}}</td>
                        <td><img src="{{asset('image/'.$favoritebook->Sach->AnhSach)}}" style="width:80px; height:80px; border-radius:0%"></td>
                        <td>{{$favoritebook->Sach->DichGia}}</td>
                        <td>
                        @if($favoritebook->Sach->LoaiBia == 0) {{"Bìa Cứng"}}
                        @elseif($favoritebook->Sach->LoaiBia == 1) {{"Massmarket Paperback"}}
                        @else {{"Bìa Mềm"}}
                        @endif
</td>
                        <td>
                        
                                                                  
															
                                                                <span class="money ">{{number_format($favoritebook->Sach->GiaTien,0,",",".")}} ₫</span>
                                                             
                        </td>
                       
                       
                        <td>
                            <a class="btn btn-primary" href="{{ route('user.single', $favoritebook->id)}}">Xem chi tiết</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>						
					</div>
				</div>
                <!--//tab_one-->
                
    
            </div>
        </div>
        @stop