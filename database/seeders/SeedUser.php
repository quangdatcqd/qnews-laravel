<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SeedUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $db = DB::table('tin')->groupBy('idUser')->get();
        foreach ($db as $us) {
            if($us->idUser ==1|| $us->idUser ==3 || $us->idUser ==4) continue;
            $names = array(
                'Hoàng',
                'Minh',
                'Tuấn',
                'Anh',
                'Thảo','Thu'
                // and so on
        
            );
          $name =   $names[rand ( 0 , count($names) -1)] .' '. $names[rand ( 0 , count($names) -1)];
            DB::table('users')->insert([
                'id'=>$us->idUser,
                'name'=>  $name,
                'email' => 'eamil'. $name."@gmail.com",
                'password'=>'ad',
                'username'=>''
            ]);
        }
    }
}


 