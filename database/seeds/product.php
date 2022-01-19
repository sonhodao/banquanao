<?php

use Illuminate\Database\Seeder;

class product extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->delete();
        DB::table('product')->insert(
            [
                ['id'=>1, 'code'=>'SP01', 'name'=>'Áo nữ sơ mi chấm bi', 'price'=>50000,'slug'=>'ao-nu-so-mi-cham-bi', 'featured'=>1, 'state'=>1,'img'=>'ao-nu-so-mi-cham-bi.jpg','category_id'=>5],
                ['id'=>2, 'code'=>'SP02', 'name'=>'Áo nữ phối viền', 'price'=>60000, 'slug'=>'ao-nu-phoi-vien','featured'=>1, 'state'=>1,'img'=>'ao-nu-phoi-vien.jpg','category_id'=>5],
                ['id'=>3, 'code'=>'SP03', 'name'=>'Áo sơ mi có cổ đúc', 'price'=>70000, 'slug'=>'ao-so-mi-co-co-duc','featured'=>1, 'state'=>1,'img'=>'ao-so-mi-co-co-duc.jpg','category_id'=>5],
                ['id'=>4, 'code'=>'SP04', 'name'=>'Áo sơ mi caro xám xanh', 'price'=>80000, 'slug'=>'ao-so-mi-cảo-xanh xam','featured'=>1, 'state'=>1,'img'=>'ao-so-mi-caro-xanh xam.jpg','category_id'=>2],
                ['id'=>5, 'code'=>'SP05', 'name'=>'Áo sơ mi họa tiết đen', 'price'=>90000, 'slug'=>'ao-so-mi-hoa-tiet-den','featured'=>1, 'state'=>1,'img'=>'ao-so-mi-hoa-tiet-den.jpg','category_id'=>2],
                ['id'=>6, 'code'=>'SP06', 'name'=>'Áo sơ mi trắng kem', 'price'=>100000, 'slug'=>'ao-so-mi-trang-kem','featured'=>1, 'state'=>1,'img'=>'ao-so-mi-trang-kem.jpg','category_id'=>2],
                ['id'=>7, 'code'=>'SP07', 'name'=>'Quần kaki đỏ nam', 'price'=>110000, 'slug'=>'quan-kaki-do-nam','featured'=>1, 'state'=>1,'img'=>'quan-kaki-do-nam.jpg','category_id'=>3],
                ['id'=>8, 'code'=>'SP08', 'name'=>'quần kaki xám', 'price'=>120000, 'slug'=>'quan-kaki-xanh-xam','featured'=>1, 'state'=>1,'img'=>'quan-kaki-xanh-xam.jpg','category_id'=>3]
            ]
        );
    }
}
