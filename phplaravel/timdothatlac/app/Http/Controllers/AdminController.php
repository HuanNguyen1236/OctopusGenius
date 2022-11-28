<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BaiDang;
use App\Models\LoaiBaiDang;
use App\Models\NguoiDung;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin= NguoiDung::paginate(5);
        return view('index', compact('nguoidung'))->with('i',(repuest()->input('page',1)-1)*5);
        
    }
    public function dstaikhoan()
    {
        $nguoiDung=NguoiDung::all()->where('trang_thai',1);
        return view('admin.index',['nguoiDung'=>$nguoiDung]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $nguoiDung=NguoiDung::find($id);
        $nguoiDung['trang_thai']=2;
        $nguoiDung->save();
        return redirect()->route('admin')->with('Thông báo', 'Xóa sinh viên thành công');
    }
}
