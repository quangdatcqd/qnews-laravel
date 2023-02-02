<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class SeedSlug extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $loaitin = DB::table('loaitin')->select('idLT','Ten')->get();
        foreach ($loaitin as $lt) {
            DB::table('loaitin')->where('idLT',$lt->idLT)->update(['slugLT' => Str::slug($lt->Ten)]);
        }

        $theloai = DB::table('theloai')->select('idTL','TenTL')->get();
        foreach ($theloai as $tl) {
            DB::table('theloai')->where('idTL',$tl->idTL)->update(['slugTL' => Str::slug($tl->TenTL)]);
        }

        $tin = DB::table('tin')->select('idTin','TieuDe')->get();
        foreach ($tin as $tin) {
            DB::table('tin')->where('idTin',$tin->idTin)->update(['slug' => Str::slug($tin->TieuDe)]);
        }

        


       
    }
}
