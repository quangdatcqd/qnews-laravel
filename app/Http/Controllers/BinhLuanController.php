<?php

namespace App\Http\Controllers;

use App\Models\binhluan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BinhLuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bl = DB::table('ykien')->orderby('idYkien', 'desc')->paginate(20);

        return view('admin.binhluan.index', ['bl' => $bl]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tin = DB::table('tin')->get();
        return view('admin.binhluan.create', ['tin' => $tin]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $bl = new binhluan();
        $bl->idTin = $request->idTin;
        $bl->NoiDung = $request->NoiDung;

        $bl->HoTen = $request->HoTen;
        $bl->Email = $request->Email;
        $bl->save();
        return  redirect()->back();
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
        $tin = DB::table('tin')->get();
        $data = DB::table('ykien')->where('idYKien', $id)->first();
        return view('admin.binhluan.edit', ['BL' => $data, 'tin' => $tin]);
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
        $bl =  binhluan::find($id);
        $bl->idTin = $request->idTin;
        $bl->NoiDung = $request->NoiDung;
        $bl->HoTen = $request->HoTen;
        $bl->Email = $request->Email;
        $bl->AnHien = ($request->AnHien) ? 0 : 1;
        $bl->save();
        return redirect("/quan-tri/binh-luan");
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
            binhluan::destroy($id);
            session()->flash('success', 'Đã Xoá!');

            return redirect('/quan-tri/binh-luan');
        } catch (\Throwable $th) {
            session()->flash('error', 'Lỗi!');
            return redirect('/quan-tri/binh-luan');
        }
    }
}
