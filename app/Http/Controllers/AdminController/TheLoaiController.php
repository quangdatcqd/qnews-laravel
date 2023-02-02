<?php

namespace App\Http\Controllers\AdminController;
use App\Models\TheLoaiModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\requestTheLoai;
use Illuminate\Http\Request;

class TheLoaiController extends Controller
{
    public function index()
    {
        $TL = DB::table('theloai')->orderby('idTL', 'desc')->paginate(20);
        
        return view('admin.theloai.index', ['TL' => $TL  ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.theloai.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(requestTheLoai $request)
    {
       try {
        
        $lt = new TheLoaiModel();
        $lt->TenTL = $request->TenTL;
        $lt->lang = $request->lang;
        $lt->HienMenu = ($request->HienMenu) ? '0' : '1'; 
        $lt->ThuTu = $request->ThuTu;  
        $lt->AnHien = ($request->AnHien) ? '0' : '1'; 
        $lt->save();
        $request->session()->flash('success', 'Thêm thành công!'); 
       } catch (\Throwable $th) {
            $request->session()->flash('error', 'Lỗi!');
           
       }
       return redirect("/quan-tri/them-the-loai");
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
        
        $data = DB::table('theloai')->where('idTL', $id)->first();
        return view('admin.theloai.edit', ['TL'=> $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(requestTheLoai $request, $id)
    {

        try {
        
            $lt = TheLoaiModel::find($id);
            $lt->TenTL = $request->TenTL;
            $lt->lang = $request->lang;
            $lt->HienMenu = ($request->HienMenu) ? '0' : '1'; 
            $lt->ThuTu = $request->ThuTu;  
            $lt->AnHien = ($request->AnHien) ? '0' : '1'; 
            $lt->save();
            $request->session()->flash('success', 'Sửa thành công!'); 
           } catch (\Throwable $th) {
                $request->session()->flash('error', 'Lỗi!');
               
           }
           return redirect("/quan-tri/the-loai");
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

            $tin = DB::table('tin')->where('idTL',$id)->first();
            if(!isset($tin)){
                TheLoaiModel::destroy($id);
                session()->flash('success', 'Đã Xoá!');
               
            }else {
                session()->flash('error', 'Không Thể Xoá Thể Loại Có Chứa Tin!');
            }
            return redirect('/quan-tri/the-loai');
        } catch (\Throwable $th) {
            session()->flash('error', 'Lỗi!');
            return redirect('/quan-tri/the-loai');
        }
    }
}
