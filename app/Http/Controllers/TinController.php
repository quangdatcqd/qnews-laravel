<?php

namespace App\Http\Controllers;

use App\Models\Tin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
class TinController extends Controller
{
    //
    public function index()
    {
           return view('index');
       
        }
    public function timKiem(Request $request)
    {
        $word = $request->TieuDe;
        strip_tags($word);
        $result = DB::table('tin')
        ->where("AnHien","=","1")
        ->where("TieuDe",'like','%'.$word.'%') 
        ->orderby('Ngay','desc')
        ->offset(0)
        ->paginate(5);
        
       
       

             $data =[]; 
            $data = ['tinTL'=>$result,'word'=>$word] ;
            return view('timkiem',$data);
        
    }

    public function tinTrongLoai($slug,$pageNum=1)
    {
        settype($slug,"string");
        $loaitin = DB::table('loaitin')
        ->where("slugLT","=",$slug)
        ->first();


       
        if(!isset($loaitin->idLT)){
            return view("errors.404");
        }else{
        $theloai = DB::table('theloai')
        ->where("idTL",$loaitin->idTL)
        ->get();
       
        $tintrongloai = DB::table('tin')
        ->where("AnHien","=","1")
        ->where("idLT",$loaitin->idLT) 
        ->orderby('Ngay','desc')
        ->offset(0)
        ->paginate(5);
        
        

        $data =[]; 
            
            $data = ['tinTL'=>$tintrongloai,'LT'=>$loaitin,'TL'=>$theloai] ;
            return view('tintrongloai',$data);
        }
        
    }

    public function chiTietTin($slug)
    {
        settype($slug,'string');
        $result = DB::table('tin')
        ->join("theloai","tin.idTL" ,"=" , "theloai.idTL") 
        ->join("loaitin","tin.idLT" ,"=" , "loaitin.idLT") 
        ->where("slug","=",$slug)
        ->where("tin.AnHien",1)
        ->first();

        
        $data = [];
        if($result == null ) {
            return view('errors.404');
        }
        else{
            $idLT =  $result->idLT;
            $lienquan = DB::table('tin')
                       
                        ->where("idLT","=",$idLT)
                        ->where("tin.AnHien",1)
                        ->orderby('Ngay','desc')
                        ->offset(1)
                        ->limit(3)
                        ->get();


            // tăng view 
        $sessionKey = 'post_' . $result->idTin; 
        $sessionView = Session::get($sessionKey);
        $post =  Tin::find($result->idTin);
        if (!isset($sessionView)) { //nếu chưa có session
            Session::put($sessionKey, 1); //set giá trị cho session
            $post->increment('SoLanXem');
             
        }
        

        $ykien = DB::table('ykien')
        ->where("idTin","=",$result->idTin)
        ->where("AnHien","=",'1')
        ->get();
            

            if($ykien ==null) $ykien=0;
            $data = ['tin'=>$result,'ykien'=>$ykien,'tags'=>explode(',',$result->tags),'tinLQ'=>$lienquan]; 
            return view("chitiettin",$data);
        }
       
    }

 
}
