<?php

use Illuminate\Database\Seeder;

class order extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('order')->delete();
        DB::table('order')->insert(
            [
                ['id'=>1, 'full' => 'Nguyễn Văn Đạt', 'address'=>'Tổ 5', 'email'=>'to5@gmail.com', 'phone'=>'0321456987', 'total'=>'11000', 'state'=>1],
                ['id'=>2, 'full' => 'Đào Thanh Sơn', 'address'=>'Hà Đông', 'email'=>'dongmai@gmail.com', 'phone'=>'0321456987', 'total'=>'12000', 'state'=>1],
                ['id'=>3, 'full' => 'Nguyễn Bàn Phím', 'address'=>'Hà Nội', 'email'=>'hadong@gmail.com', 'phone'=>'0321456987', 'total'=>'13000', 'state'=>2],
                ['id'=>4, 'full' => 'Nguyễn Văn Chuột', 'address'=>'Số 89', 'email'=>'hanoi@gmail.com', 'phone'=>'0321456987', 'total'=>'14000', 'state'=>2],
                ['id'=>5, 'full' => 'Nguyễn Màn Hình', 'address'=>'Việt Nam', 'email'=>'vietnam@gmail.com', 'phone'=>'0321456987', 'total'=>'115000', 'state'=>2]
            ]
        );
    }
}
