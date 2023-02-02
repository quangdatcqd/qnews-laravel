<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Http\Requests\requestLoaiTin;
use App\Http\Requests\TinRequest;
use App\Models\Tin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage; 
   
class TinAdmin extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tin = DB::table('tin')->limit(5)->orderby('idTin', 'desc')->paginate(20);

        return view('admin.tin.index', ['tin' => $tin]);
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
        return view('admin.tin.create', ['TL' =>  $TL]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TinRequest $request)
    {
        // $has_slug =DB::table('tin')->where('slug',Str::slug($request->TieuDe))->first();
        // echo ($has_slug != null);
        try {
            $storedPath = 'upload/images/';
            if ($request->hasFile('Anh')) {
                $image = $request->file('Anh');
                $storedPath .= $teaser_image = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/upload/images/');
                $image->move($destinationPath,  $teaser_image);
            } else {
                $storedPath = 'upload/default.jpg';
            }
            $slug = Str::slug($request->TieuDe);
            $has_slug =DB::table('tin')->where('slug',$slug)->first();
            $tin = new Tin;
            

            if($has_slug !=null )
            {
                $request->session()->flash('error', 'Lỗi, Tiêu Đề Bị Trùng!');
                return redirect("/quan-tri/them-bai-viet");
            } 
            $tin->slug =  $slug;             
            $tin->TieuDe = $request->TieuDe;
            $tin->TomTat = $request->TomTat;
            $tin->Content = $request->NoiDung;
            $tin->idTL = $request->idTL;
            $tin->idLT = $request->idLT;
            $tin->idUser = Auth()->user()->id;
            $tin->urlHinh =  $storedPath;
            $tin->NoiBat = ($request->NoiBat) ? '1' : '0';
            $tin->AnHien = ($request->AnHien) ? '0' : '1';
            $tin->tags = $request->tag;
            $tin->save();
            $request->session()->flash('success', 'Thêm thành công!');
            return redirect("/quan-tri/them-bai-viet");
        } catch (\Throwable $th) {
            $request->session()->flash('error', 'Lỗi!');
            return redirect("/quan-tri/them-bai-viet");
        }
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
        $data = DB::table('tin')->where('idTin', $id)->first();
        return view('admin.tin.edit', ['TL' => $TL, 'tin' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TinRequest $request, $id)
    {
        try {
            $storedPath = 'upload/images/';


            $tin = Tin::find($id);
            $tin->TieuDe = $request->TieuDe;
            $tin->TomTat = $request->TomTat;
            $tin->Content = $request->NoiDung;
            $tin->idTL = $request->idTL;
            $tin->idLT = $request->idLT;
            $tin->idUser = Auth()->user()->id;
            if ($request->hasFile('Anh')) {
                $image = $request->file('Anh');
                $storedPath .= $teaser_image = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('/upload/images/');
                $image->move($destinationPath,  $teaser_image);
                $tin->urlHinh =  $storedPath;
            } else {
                $storedPath = 'upload/default.jpg';
            }

            $slug = Str::slug($request->TieuDe);  
            $tin->slug =  $slug;   
            
            $tin->NoiBat = ($request->NoiBat) ? '1' : '0';
            $tin->AnHien = ($request->AnHien) ? '0' : '1';
            $tin->tags = $request->tag;
            $tin->save();
            $request->session()->flash('success', 'Đã Lưu!');
            return redirect("/quan-tri/bai-viet");
        } catch (\Throwable $th) {
            $request->session()->flash('error', 'Lỗi!');
            return redirect("/quan-tri/bai-viet");
        }
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
            Tin::destroy($id);
            session()->flash('success', 'Đã Xoá!');
            return redirect('/quan-tri/bai-viet');
        } catch (\Throwable $th) {
            session()->flash('error', 'Lỗi!');
            return redirect('/quan-tri/bai-viet');
        }
    }
}
