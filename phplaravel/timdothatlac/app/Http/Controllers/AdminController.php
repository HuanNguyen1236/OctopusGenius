<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiDang;
use App\Models\LoaiBaiDang;
use App\Models\LoaiDoVat;
use App\Models\NguoiDung;
use App\Models\Admin;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $admin= NguoiDung::paginate(5);
        // return view('index', compact('nguoidung'))->with('i',(repuest()->input('page',1)-1)*5);
        
    }

    ////////////////////////////////////////////  Lấy danh sách   /////////////////////////////////////////////////////////////

    // lấy danh sách tài khoản
    public function dstaikhoan()
    {
        $id=Auth::id();
        $nd=NguoiDung::where('id',$id)->first();
        $nguoiDung=NguoiDung::all()->where('trang_thai',1);
        return view('admin.index',['nguoiDung'=>$nguoiDung,'nd'=>$nd]);
    }
    // lấy danh sách bài đăng
    public function dsbaidang()
    {
        $id=Auth::id();
        $nd=NguoiDung::where('id',$id)->first();
        $baiDang=BaiDang::all()->where('trang_thai',1);
        return view('admin.dsbaidang',['baiDang'=>$baiDang,'nd'=>$nd]);
    }
    // lấy danh sách bài đăng cần duyệt
    public function dsbaidangduyet()
    {
        $id=Auth::id();
        $nd=NguoiDung::where('id',$id)->first();
        $baiDang=BaiDang::all()->where('trang_thai',2);
        return view('admin.duyetbaidang',['baiDang'=>$baiDang,'nd'=>$nd]);
    }
    // lấy danh sách tài khoản quản lý
    public function dstaikhoanadmin()
    {
        $id=Auth::id();
        $nd=NguoiDung::where('id',$id)->first();
        $nguoiDung=NguoiDung::all()->where('trang_thai',1)->where('quyen','adm');
        return view('admin.dstaikhoanadmin',['nguoiDung'=>$nguoiDung,'nd'=>$nd]);
    }
      ////////////////////////////////////////////  Thêm  /////////////////////////////////////////////////////////////

    // Thêm bài đăng
    public function thembaidang()
    {
        $listDM= LoaiBaiDang::all();
        $listDV= LoaiDoVat::all();
        $id=Auth::id();
        $nd=NguoiDung::where('id',$id)->first();
       return view ('admin.thembaidang',['listDM'=>$listDM],['listDV'=>$listDV],['nd'=>$nd]);
    }
     // Thêm admin
    public function themadmin($id)
    {
        $nguoiDung=NguoiDung::find($id);
        $nguoiDung['quyen']='adm';
        $nguoiDung->save();
        return redirect()->route('dstaikhoan')->with('Thông báo', ' Thêm tài khoản admin thành công');
        
    }
    ////////////////////////////////////////////  Xóa   /////////////////////////////////////////////////////////////

    // Xóa tài khoản
    public function destroy($id)
    {
        $nguoiDung=NguoiDung::find($id);
        $nguoiDung['trang_thai']=0;
        $nguoiDung->save();
        return redirect()->route('dstaikhoan')->with('Thông báo', 'Xóa tài khoản thành công');
    }
    // Xóa quyền người quản lý
    public function xoaadmin($id)
    {
        $nguoiDung=NguoiDung::find($id);
        $nguoiDung['quyen']='user';
        $nguoiDung->save();
        return redirect()->route('dstaikhoanadmin')->with('Thông báo', ' Xóa quyền tài khoản admin thành công');
        
    }
    // Xóa bài đăng
    public function xoabaidang($id)
    {
        $baiDang=BaiDang::find($id);
        $baiDang['trang_thai']=0;
        $baiDang->save();
        return redirect()->route('dsbaidang')->with('Thông báo', 'Xóa bài đăng thành công');
    }
      ////////////////////////////////////////////  Duyệt  /////////////////////////////////////////////////////////////

    // Duyệt bài đăng
    public function duyetbaidang($id)
    {
        $baiDang=BaiDang::find($id);
        $baiDang['trang_thai']=1;
        $baiDang->save();
        return redirect()->route('dsbaidangduyet')->with('Thông báo', 'duyệt bài đăng thành công');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    //    return view ('admin.themadmin');
    }
    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data=Admin::create($request->all());
        // dd($data);
        // $data->save();
        // return redirect()->route('dataikhoan')->with('Thông báo','Thêm admin thành công');


        // $data=new NguoiDung;
        // if($request->file('anh_dai_dien')){
        //     $file= $request->file('anh_dai_dien');
        //     $filename= date('YmdHi').$file->getClientOriginalName();
        //     $file-> move(public_path('public/Image'), $filename);
        //     $data['anh_dai_dien']= $filename;
        // }
        //     $data['email']= $request->email;
        //     $data['sdt']= $request->sdt;
        //     $data['ten_dang_nhap']= $request->username;
        //     $data['mat_khau']= Hash::make($request->password);
        //     $data['dia_chi']= $request->address;
        //     $data['ngay_sinh']= $request->birthday;
        // $data->save();
        // return redirect()->route("dstaikhoan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $idnd=Auth::id();
        // $nguoiDung=NguoiDung::where('id',$id)->first();
        // $listPost=BaiDang::where('tai_khoan_id',$idnd)->get();
        // return view('nguoi-dung.profile',['nguoiDung'=>$nguoiDung],['listPost'=>$listPost]);
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
    
}
