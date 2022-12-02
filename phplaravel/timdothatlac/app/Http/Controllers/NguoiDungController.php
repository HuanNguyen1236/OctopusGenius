<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use App\Models\LoaiDoVat;
use App\Models\NguoiDung;
use App\Models\BaiDang;
use App\Models\LoaiBaiDang;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class NguoiDungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(request()->search){
        //     $search=request()->search;
        //     $listPost=Post::all()->where('NguoiDungname ','like','%'.$search.'%');
        //     return view('nguoi-dung.welcome',['listPost'=>$listPost]);
        // }
        // else{
        // $id=Auth::id();
        // $NguoiDung=NguoiDung::where('id',$id)->first();
        // $listPost=Post::all();
        // return view('nguoi-dung.welcome',['listPost'=>$listPost,'NguoiDung'=>$NguoiDung]);
        // }
        $id=Auth::id();
        $nguoiDung=NguoiDung::where('id',$id)->first();
        $listPost=BaiDang::orderBy('updated_at','DESC')->where('trang_thai',1)->get();
        $listDM=LoaiBaiDang::all();
        $listDV=LoaiDoVat::all();
        return view('nguoi-dung.welcome',['listPost'=>$listPost,'nguoiDung'=>$nguoiDung,'listDM'=>$listDM, 'listDV'=>$listDV]);
    }
    public function trangchu(){
        $nguoiDung=NguoiDung::where('id',$id)->first();
        $listPost=BaiDang::orderBy('updated_at','DESC')->where('trang_thai',1)->get();
        $listDM=LoaiBaiDang::all();
        $listDV=LoaiDoVat::all();
        return view('nguoi-dung.welcome',['listPost'=>$listPost,'nguoiDung'=>$nguoiDung,'listDM'=>$listDM, 'listDV'=>$listDV]);
    }
    public function admin()
    {
        $id=Auth::id();
        $nguoiDung=NguoiDung::where('id',$id)->first();
        $listPost=BaiDang::orderBy('updated_at','DESC')->where('trang_thai',1)->get();
        $listDM=LoaiBaiDang::all();
        $listDV=LoaiDoVat::all();
        return view('nguoi-dung.welcome',['listPost'=>$listPost,'nguoiDung'=>$nguoiDung,'listDM'=>$listDM, 'listDV'=>$listDV]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nguoi-dung.sign_up');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new NguoiDung;
        if($request->file('anh_dai_dien')){
            $file= $request->file('anh_dai_dien');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['anh_dai_dien']= $filename;
            
        }
        
            $data['email']= $request->email;
            $data['sdt']= $request->sdt;
            $data['ten_dang_nhap']= $request->username;
            $data['mat_khau']= Hash::make($request->password);
            $data['dia_chi']= $request->address;
            $data['ngay_sinh']= $request->birthday;
        $data->save();
        return redirect()->route("dang-nhap");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $idnd=Auth::id();
        $nguoiDung=NguoiDung::where('id',$id)->first();
        $listPost=BaiDang::where('tai_khoan_id',$idnd)->get();
        return view('nguoi-dung.profile',['nguoiDung'=>$nguoiDung],['listPost'=>$listPost]);
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
        $data=NguoiDung::find($id);
            $data['ten_dang_nhap']= $request->name;
            $data['email']= $request->email;
            $data['sdt']= $request->sdt;
            $data['dia_chi']= $request->address;
            $data['ngay_sinh']= $request->birthday;
        $data->save();
        return redirect()->route('thong-tin-nguoi-dung',['id' => Auth::id()]);
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

    public function login()
    {
        return view('nguoi-dung.home');
    }
    public function xuLylogin(Request $request)
    { 
        $admin=[
            'ten_dang_nhap'=>$request->ten_dang_nhap,
            'password'=>$request->password,
            'quyen'=>"adm",
        ];
        $nd=[
            'ten_dang_nhap'=>$request->ten_dang_nhap,
            'password'=>$request->password,
            'quyen'=>"user",
        ];
        if(Auth::attempt($nd)){
            return redirect()->route('trang-chu');
        } 
        else
            
            if(Auth::attempt($admin)){
                
                return redirect()->route('dstaikhoan');
            }
        return redirect()->back()->with("error","Đăng nhập không thành công");
        // $xuly=$request->only('ten_dang_nhap','password');
        // if(Auth::attempt($xuly)){
        //     $id=Auth::id();
        //     $user = NguoiDung::find($id);
        //     if( $user->quyen=='adm'){
        //     return redirect()->route('trang-chu-admin');
        //     }
        //     else return redirect()->route('trang-chu');
        // }
        // return redirect()->back()->with("error","Đăng nhập không thành công");
    } 
    public function logOut()
    {
        Auth::logOut();
        return redirect()->route('dang-nhap');
    }
}
