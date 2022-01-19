<?php

use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert(
            [
                ['id'=>1,'email'=>'admin@gmail.com','password'=>bcrypt('123456'),'full'=>'vietnam','address'=>'Đồng Mai','phone'=>'0123654789','level'=>2],
                ['id'=>2,'email'=>'daoson@gmail.com','password'=>bcrypt('123456'),'full'=>'vietpro','address'=>'Hà Đông','phone'=>'0123654789','level'=>1],
                ['id'=>3,'email'=>'admin3s@gmail.com','password'=>bcrypt('123456'),'full'=>'vietnam','address'=>'Hà Nội','phone'=>'0123654789','level'=>2],
                ['id'=>4,'email'=>'adminvina3s@gmail.com','password'=>bcrypt('123456'),'full'=>'vietnam','address'=>'Tổ 5','phone'=>'0123654789','level'=>1]
            ]
        );
    }
}
