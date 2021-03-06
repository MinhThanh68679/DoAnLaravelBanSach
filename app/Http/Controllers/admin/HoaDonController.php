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
                Th??ng tin ????ng nh???p
                </div>
                
                <div class="table-responsive">
                                
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>
                      
                        <th>T??n kh??ch h??ng</th>
                        <th>S??? ??i???n tho???i</th>
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
            Li???t k?? chi ti???t ????n h??ng
          </div>
                                    
        <div class="baochitiet">
          <div class="table-responsive chitietdh">
                           
            <table class="table table-striped ">
              <thead style="background: #f5f5f5;">
                <tr>
                  <th style="width:20px;">
                    STT
                  </th>
                  <th>T??n s???n ph???m</th>
                  <th>H??nh ???nh</th>
                  <th>S??? l?????ng</th>
                  <th>Ph?? ship h??ng</th>
                  <th>Gi?? s???n ph???m</th>
                  <th>T???ng ti???n</th>
                  
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
     $html .=' <option selected value="1">Ch??a x??? l??</option>
      <option  value="3">Duy???t ????n</option>
      <option  value="0">H???y ????n</option>';
    }else if($hoadon->TrangThai==3){
      $html .='<option selected hidden value="3">???? Duy???t</option>
      <option value="4">??ang giao h??ng</option>';
      
     }
    elseif($hoadon->TrangThai==4){
      $html .='<option selected hidden value="3">??ang giao h??ng</option>
      <option  value="2">Giao h??ng th??nh c??ng</option>';
      
    }
    elseif($hoadon->TrangThai==2){
      $html .='<option selected hidden value="2">Giao h??ng th??nh c??ng</option>
      <option  value="2">Giao h??ng th??nh c??ng</option>';
    }
    else{
      $html .='<option selected hidden value="0">???? H???y</option>
      <option  value="0">???? H???y</option>';
    }
    $html .='</select></div>';
 

        return $html;

    }
    public function move($idHoaDB){
		$order=HoaDonBan::where('IdHoaDB',$idHoaDB)->update(['TrangThai'=>4]);
		return redirect()->back()->with('message','????n h??ng ??ang ???????c v???n chuy???n');
        dd($order);
	}

	public function complete($idHoaDB){
		$order=HoaDonBan::where('IdHoaDB',$idHoaDB)->update(['TrangThai'=>5]);
		return redirect()->back()->with('message','????n h??ng ???? giao th??nh c??ng');
	}
	public function huy_don_hang(Request $req){
		$data=$req->all();
		$order=HoaDonBan::where('IdHoaDB',$data['idHoaDB'])->update(['TrangThai'=>3]);
	}
	public function order_code(Request $request ,$idHoaDB){
		$order = HoaDonBan::where('IdHoaDB',$idHoaDB)->first();
		$order->delete();
		Session::flash('message','X??a ????n h??ng th??nh c??ng');
		return redirect()->back();

	}
  public function changeStatusOrder(Request $request){
  
    $order = HoaDonBan::find($request->id);
    $order->TrangThai = $request->TrangThai;

    if($order->save()){
      if($order->TrangThai == 1){
        return '????n M???i';

      }else if($order->TrangThai == 2){
        $time = Carbon::now()->timestamp;
        $magiamgia = new MaGiamGia();
        $magiamgia->Code = 'MG'.$order->id.$time;
        $magiamgia->SoLuong=1;
        $magiamgia->ChietKhau=10;
        $magiamgia->LoaiKM=1;
        $magiamgia->NgayB??= Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y'); //hom nay
        $magiamgia->NgayKT=Carbon::now('Asia/Ho_Chi_Minh')->addMonth()->format('d-m-Y');; //1 thang
        $magiamgia->TrangThai=1;
        $magiamgia->Xoa=0;
        if($magiamgia->save())
        {
          $data = [
            'name' => $request->session()->get('infoUser')['HoTen'],
            'MaDH' => $order->id,
            'magiamgia' => $magiamgia->Code,
            'ngaybatdau' =>  $magiamgia->NgayB??,
            'ngayketthuc' => $magiamgia->NgayKT,
            'Email'=>$request->session()->get('infoUser')['Email'],
        ];
        Mail::to($request->session()->get('infoUser')['Email'])->send(new Mailmagiamgia($data));
        
      }
        //mail 
        return 'Giao h??ng th??nh c??ng';
      } else if($order->TrangThai == 3){
        return 'Duy???t ????n th??nh c??ng';
       
      }
    elseif($order->TrangThai == 4){
      return '??ang giao h??ng';

    }else{
      return '????n h??ng ???? h???y';
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
    //L???c
   
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
