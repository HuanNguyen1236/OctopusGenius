<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiDang;
use App\Models\LoaiBaiDang;
use App\Models\NguoiDung;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
class BaiDangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->search){
            $search=request()->search;
            $listPost=BaiDang::all()->where('tieu_de ','like ','%'.$search.'%');
            return view('nguoi-dung.welcome',['listPost'=>$listPost]);
        }
        else{
        $id=Auth::id();
        $user=NguoiDung::where('id',$id)->first();
        $listDM=LoaiBaiDang::all();
        $listPost=BaiDang::all();
        return view('nguoi-dung.welcome',['listPost'=>$listPost], ['listDM'=>$listDM],['user'=>$user]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listPost=Post::all();
        return view('nguoi-dung.welcome',['listPost'=>$listPost]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new BaiDang();
        if($request->file('dang_anh')){
            $file= $request->file('dang_anh');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['hinh_anh']= $filename;
            $data['tieu_de']= $request->name;
            $data['id_loai_bai_dang']= $request->loai_bai_post;
            $data['id_tai_khoan']= Auth::id();
            $data['dia_chi']= $request->address;
            $data['mo_ta']= $request->mo_ta;
        }
        $data->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = BaiDang::find($id);
        if(empty($post)){
            return "Không tìm thấy bài đăng";
        }
        return view('nguoi-dung.post_details',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
