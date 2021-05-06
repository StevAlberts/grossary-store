<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
           'id'=>100,
           'name'=>'Carrots'
           'price'=>200,
           'img'=>'https://images.unsplash.com/photo-1522184216316-3c25379f9760?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fHZlZ2V0YWJsZXN8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60'],
        ]);

        DB::table('products')->insert([
           'id'=>101,
           'name'=>'Plates',
           'price'=>1200,
           'img'=>'https://images.unsplash.com/photo-1606226459865-be58c137453e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OTl8fHBsYXRlc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60'
        ]);

        DB::table('products')->insert([
           'id'=>102,
           'name'=>'Bananas',
           'price'=>150,
           'img'=>'https://images.unsplash.com/reserve/RNm0KceQ4Gbpb0xldOe7_DSC_0679_2.JPG?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8YmFuYW5hc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60'
        ]);

        DB::table('products')->insert([
           'id'=>103,
           'name'=>'Apples',
           'price'=>800,
           'img'=>'https://images.unsplash.com/photo-1591585229242-2262ac0022ec?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGFwcGxlc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60'
        ]);

        DB::table('products')->insert([
           'id'=>104,
           'name'=>'Grapes',
           'price'=>1500,
           'img'=>'https://images.unsplash.com/photo-1537640538966-79f369143f8f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Z3JhcGVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60'
        ]);

        DB::table('products')->insert([
            'id'=>105,
            'name'=>'Coffee',
            'price'=>400,
            'img'=>'https://images.unsplash.com/photo-1459755486867-b55449bb39ff?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjJ8fGNvZmZlZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60'
        ]);
    }
}
