<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $us = DB::table('users')->orderby('id', 'desc')->paginate(20);
        
        return view('admin.user.index', ['US' => $us  ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.user.create' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       try {
        
        $lt = new User();
        $lt->name = $request->name;
        $lt->email = $request->email;
        $lt->active = ($request->active)?1:0; 
        $lt->idgroup = $request->idgroup;  
        $lt->diachi = $request->diachi ; 
        $lt->username = $request->username;
        $lt->password = bcrypt($request->password);
        $lt->save();
        $request->session()->flash('success', 'Thêm thành công!'); 
       } catch (\Throwable $th) {
            $request->session()->flash('error', 'Lỗi!');
           
       }
       return redirect("/quan-tri/them-user");
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
        
        $data = DB::table('users')->where('id', $id)->first();
        return view('admin.user.edit', ['US'=> $data]);
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

        try {
        
            $lt = User::find($id);
            $lt->name = $request->name;
            $lt->email = $request->email;
            $lt->active = ($request->active)?1:0; 
            $lt->idgroup = $request->idgroup;  
            $lt->diachi = $request->diachi ; 
            $lt->username = $request->username;
            $lt->password = bcrypt($request->password);
            $lt->save();
            $request->session()->flash('success', 'Sửa thành công!'); 
           } catch (\Throwable $th) {
                $request->session()->flash('error', 'Lỗi!');
               
           }
           return redirect("/quan-tri/user");
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
                USer::destroy($id);
                session()->flash('success', 'Đã Xoá!');  
            return redirect('/quan-tri/user');
        } catch (\Throwable $th) {
            session()->flash('error', 'Lỗi!');
            return redirect('/quan-tri/user');
        }
    }
}
