<?php

use Illuminate\Database\Seeder;

class product_order extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_order')->delete();
        DB::table('product_order')->insert(
            [
                ['code'=>'SP01', 'name'=>'Áo nữ sơ mi chấm bi','price'=>50000,'quantity'=>1,'total'=>110000,'img'=>'ao-nu-so-mi-cham-bi.jpg','order_id'=>1],
                ['code'=>'SP02', 'name'=>'Áo nữ phối viền','price'=>60000,'quantity'=>1,'total'=>110000,'img'=>'ao-nu-phoi-vien.jpg','order_id'=>1],
                ['code'=>'SP01', 'name'=>'Áo nữ sơ mi chấm bi','price'=>50000,'quantity'=>1,'total'=>110000,'img'=>'ao-nu-so-mi-cham-bi.jpg','order_id'=>2],
                ['code'=>'SP02', 'name'=>'Áo nữ phối viền','price'=>60000,'quantity'=>1,'total'=>110000,'img'=>'ao-nu-phoi-vien.jpg','order_id'=>2],
                ['code'=>'SP01', 'name'=>'Áo nữ sơ mi chấm bi','price'=>50000,'quantity'=>1,'total'=>110000,'img'=>'ao-nu-so-mi-cham-bi.jpg','order_id'=>3],
                ['code'=>'SP02', 'name'=>'Áo nữ phối viền','price'=>60000,'quantity'=>1,'total'=>110000,'img'=>'ao-nu-phoi-vien.jpg','order_id'=>3],
                ['code'=>'SP01', 'name'=>'Áo nữ sơ mi chấm bi','price'=>50000,'quantity'=>1,'total'=>110000,'img'=>'ao-nu-so-mi-cham-bi.jpg','order_id'=>4],
                ['code'=>'SP02', 'name'=>'Áo nữ phối viền','price'=>60000,'quantity'=>1,'total'=>110000,'img'=>'ao-nu-phoi-vien.jpg','order_id'=>4],
                ['code'=>'SP01', 'name'=>'Áo nữ sơ mi chấm bi','price'=>50000,'quantity'=>1,'total'=>110000,'img'=>'ao-nu-so-mi-cham-bi.jpg','order_id'=>5],
                ['code'=>'SP02', 'name'=>'Áo nữ phối viền','price'=>60000,'quantity'=>1,'total'=>110000,'img'=>'ao-nu-phoi-vien.jpg','order_id'=>5],
            ]);
    }
}
