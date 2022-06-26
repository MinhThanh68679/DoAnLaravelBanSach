<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HoaDonBan;
use App\Models\ChiTietHoaDonBan;
use App\Models\User;
use App\Models\MaGiamGia;
use App\Classes\Helper;
use Illuminate\Support\Facades\Auth;
use Session;
use Carbon\Carbon;
use DB;
use Mail;
use App\Mail\Mailmagiamgia;
class HoaDonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
      
        $hoadon = HoaDonBan::orderBy('created_at', 'desc')->get();
        $chitiethoadonban=ChiTietHoaDonBan::all();
        if(isset($_GET['sort_by'])){
          $sort_by=$_GET['sort_by'];
          
          if($sort_by=='all'){
            $hoadon=HoaDonBan::orderby('created_at','DESC')->get();
          
          }
          elseif($sort_by=='cancel'){
            $hoadon=HoaDonBan::where('TrangThai',0)->orderby('created_at','DESC')->get();
             
          }
          elseif($sort_by=='new'){
            $hoadon=HoaDonBan::where('TrangThai',1)->orderby('created_at','DESC')->get();
             
          }
          elseif($sort_by=='done'){
            $hoadon=HoaDonBan::where('TrangThai',3)->orderby('created_at','DESC')->get();
             
          }
          elseif($sort_by=='move'){
            
              $hoadon=HoaDonBan::where('TrangThai',4)->orderby('created_at','DESC')->get();
          }
          elseif($sort_by=='complete'){
            
            $hoadon=HoaDonBan::where('TrangThai',2)->orderby('created_at','DESC')->get();
        }
         
      }
  
        return View('admin.pages.HoaDon.index', compact('hoadon','chitiethoadonban'));
    }
    public function getDetail($id){
        $chitiethoadonban = ChiTietHoaDonBan::where('IdHoaDB', $id)->get();
        
        $hoadon = HoaDonBan::find($id);
        $html = '
        <div class="baobang">
        <div class="table-agile-info left-table">

              <div class="panel panel-default">
                <div class="panel-heading">
                Thông tin đăng nhập
                </div>
                
                <div class="table-responsive">
                                
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>
                      
                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        
                        <th style="width:30px;"></th>
                      </tr>
                    </thead>
                    <tbody>
               
                    <tr>
                        <td>'.$hoadon->TaiKhoan->HoTen.'</td>
                        <td>'.$hoadon->TaiKhoan->SDT.'</td>
                        <td>'.$hoadon->TaiKhoan->Email.'</td>
                      </tr>
                
                    </tbody>
                  </table>

                </div>
              
              </div>
      </div>



      <div class="table-agile-info">
        
        <div class="panel panel-default">
          <div class="panel-heading">
            Liệt kê chi tiết đơn hàng
          </div>
                                    
        <div class="baochitiet">
          <div class="table-responsive chitietdh">
                           
            <table class="table table-striped ">
              <thead style="background: #f5f5f5;">
                <tr>
                  <th style="width:20px;">
                    STT
                  </th>
                  <th>Tên sản phẩm</th>
                  <th>Hình ảnh</th>
                  <th>Số lượng</th>
                  <th>Phí ship hàng</th>
                  <th>Giá sản phẩm</th>
                  <th>Tổng tiền</th>
                  
                  <th style="width:30px;"></th>
                </tr>
              </thead>
              <tbody>';
                
           
                $i=0;
                foreach($chitiethoadonban as $chitiet){


                
                        $i++;
                        $html .= '
                        <tr>
                        
                        <td><i>'.$i.'</i></td>
                        <td style="max-width: 180px; text-overflow: ellipsis; overflow: hidden">'.$chitiet->Sach->TenSach.'</td>
                        <td><img src="../image/'.$chitiet->Sach->AnhSach.'" style="width:50px; height:50px; border-radius:0%"></td>
                        <td>'.$chitiet->SoLuong.'</td>
                        <td>'.number_format(15000 ,0,",",",").' VND</td>
                        <td>'.number_format($chitiet->GiaBan ,0,",",",").' VND</td>
                        <td>'.number_format($chitiet->HoaDon->TongTien ,0,",",",").' VND</td>
                        
                        
                        </tr>';
            }
              
     $html .=' </div> </div> 
     <div class="modal-footer">
     <div id="detail">
    
    
     <select id="trangthaidonhang" data-id='.$hoadon->id.' class="form-control order_details">';
     if($hoadon->TrangThai==1){
     $html .=' <option selected value="1">Chưa xử lý</option>
      <option  value="3">Duyệt Đơn</option>
      <option  value="0">Hủy Đơn</option>';
    }else if($hoadon->TrangThai==3){
      $html .='<option selected hidden value="3">Đã Duyệt</option>
      <option value="4">Đang giao hàng</option>';
      
     }
    elseif($hoadon->TrangThai==4){
      $html .='<option selected hidden value="3">Đang giao hàng</option>
      <option  value="2">Giao hàng thành công</option>';
      
    }
    elseif($hoadon->TrangThai==2){
      $html .='<option selected hidden value="2">Giao hàng thành công</option>
      <option  value="2">Giao hàng thành công</option>';
    }
    else{
      $html .='<option selected hidden value="0">Đã Hủy</option>
      <option  value="0">Đã Hủy</option>';
    }
    $html .='</select></div>';
 

        return $html;

    }
    public function move($idHoaDB){
		$order=HoaDonBan::where('IdHoaDB',$idHoaDB)->update(['TrangThai'=>4]);
		return redirect()->back()->with('message','đơn hàng đang được vận chuyển');
        dd($order);
	}

	public function complete($idHoaDB){
		$order=HoaDonBan::where('IdHoaDB',$idHoaDB)->update(['TrangThai'=>5]);
		return redirect()->back()->with('message','đơn hàng đã giao thành công');
	}
	public function huy_don_hang(Request $req){
		$data=$req->all();
		$order=HoaDonBan::where('IdHoaDB',$data['idHoaDB'])->update(['TrangThai'=>3]);
	}
	public function order_code(Request $request ,$idHoaDB){
		$order = HoaDonBan::where('IdHoaDB',$idHoaDB)->first();
		$order->delete();
		Session::flash('message','Xóa đơn hàng thành công');
		return redirect()->back();

	}
  public function changeStatusOrder(Request $request){
  
    $order = HoaDonBan::find($request->id);
    $order->TrangThai = $request->TrangThai;

    if($order->save()){
      if($order->TrangThai == 1){
        return 'Đơn Mới';

      }else if($order->TrangThai == 2){
        $time = Carbon::now()->timestamp;
        $magiamgia = new MaGiamGia();
        $magiamgia->Code = 'MG'.$order->id.$time;
        $magiamgia->SoLuong=1;
        $magiamgia->ChietKhau=10;
        $magiamgia->LoaiKM=1;
        $magiamgia->NgayBĐ= Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y'); //hom nay
        $magiamgia->NgayKT=Carbon::now('Asia/Ho_Chi_Minh')->addMonth()->format('d-m-Y');; //1 thang
        $magiamgia->TrangThai=1;
        $magiamgia->Xoa=0;
        if($magiamgia->save())
        {
          $data = [
            'name' => $request->session()->get('infoUser')['HoTen'],
            'MaDH' => $order->id,
            'magiamgia' => $magiamgia->Code,
            'ngaybatdau' =>  $magiamgia->NgayBĐ,
            'ngayketthuc' => $magiamgia->NgayKT,
            'Email'=>$request->session()->get('infoUser')['Email'],
        ];
        Mail::to($request->session()->get('infoUser')['Email'])->send(new Mailmagiamgia($data));
        
      }
        //mail 
        return 'Giao hàng thành công';
      } else if($order->TrangThai == 3){
        return 'Duyệt đơn thành công';
       
      }
    elseif($order->TrangThai == 4){
      return 'Đang giao hàng';

    }else{
      return 'Đơn hàng đã hủy';
    }
      //else if
    }
    return null;

  }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Lọc
   
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}
