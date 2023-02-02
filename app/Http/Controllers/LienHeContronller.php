<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
class LienHeContronller extends Controller
{
    public function index()
    {
        return view('lienhe');
    }

    function sendEmailContact(Request $request){
        $input = $request->all();
          Mail::send('mauthulienhe', 
            array(  'name'=>$input["name"],
                    'email'=>$input["email"], 
                    'content'=>$input['message'],
                    'phone'=>$input['phone']
             ), 
            function($message){
                $message
                ->from('maichodoi47@gmail.com','Từ Q-News')
                ->to('quangdatcqd@gmail.com', 'Ban quan tri')
                //->attach('img/a.png') // gửi đính kèm file nếu muốn
                ->subject('Q-News Contact');
            }
          );
          Session::flash('thongbao', 'Đã gửi yều cầu thành công!'); 
        return redirect('/lien-he');
        //print_r($_POST);
      }  



}
