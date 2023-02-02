<?php

namespace App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Requests\requestLoaiTin;
use App\Http\Requests\TinRequest;
use App\Models\LoaiTin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoaiTinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lt = DB::table('loaitin')->select('idLT','loaitin.idTL','loaitin.updated_at','loaitin.created_at','Ten','loaitin.lang','loaitin.AnHien','loaitin.ThuTu','theloai.TenTL')->join('theloai','loaitin.idTL','theloai.idTL')->orderby('idLT', 'desc')->paginate(20);
        
        return view('admin.loaitin.index', ['lt' => $lt  ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $TL = DB::table('theloai')
            ->select("idTL", 'TenTL')
            ->get();
        return view('admin.loaitin.create', ['TL' =>  $TL]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(requestLoaiTin $request)
    {
       try {
        
        $lt = new LoaiTin();
        $lt->Ten = $request->Ten;
        $lt->lang = $request->lang;
        $lt->idTL = $request->idTL; 
        $lt->ThuTu = $request->ThuTu;  
        $lt->AnHien = ($request->AnHien) ? '0' : '1'; 
        $lt->save();
        $request->session()->flash('success', 'Thêm thành công!'); 
       } catch (\Throwable $th) {
            $request->session()->flash('error', 'Lỗi!');
           
       }
       return redirect("/quan-tri/them-loai-tin");
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
        $TL = DB::table('theloai')
            ->select("idTL", 'TenTL')
            ->get();
        $data = DB::table('loaitin')->where('idLT', $id)->first();
        return view('admin.loaitin.edit', ['TL' => $TL, 'lt' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(requestLoaiTin $request, $id)
    {
        try {
        
            $lt = LoaiTin::find($id);
            $lt->Ten = $request->Ten;
            $lt->lang = $request->lang;
            $lt->idTL = $request->idTL; 
            $lt->ThuTu = $request->ThuTu;  
            $lt->AnHien = ($request->AnHien) ? '0' : '1'; 
            $lt->save();
            $request->session()->flash('success', 'Sửa thành công!'); 
           } catch (\Throwable $th) {
                $request->session()->flash('error', 'Lỗi!');
               
           }
           return redirect("/quan-tri/loai-tin");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $tin = DB::table('tin')->where('idLT',$id)->first();
            if(!isset($tin)){
                LoaiTin::destroy($id);
                session()->flash('success', 'Đã Xoá!');
               
            }else {
                session()->flash('error', 'Không Thể Xoá Loại Tin Có Chứa Tin!');
            }
            return redirect('/quan-tri/loai-tin');
        } catch (\Throwable $th) {
            session()->flash('error', 'Lỗi!');
            return redirect('/quan-tri/loai-tin');
        }
    }
}