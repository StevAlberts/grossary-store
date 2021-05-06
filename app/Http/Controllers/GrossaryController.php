<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GrossaryController extends Controller
{
    public function index(){
        $grossaries = [
            ['id'=>100,'name'=>'Carrots', 'price'=>200, 'img'=>'https://images.unsplash.com/photo-1522184216316-3c25379f9760?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fHZlZ2V0YWJsZXN8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60'],
            ['id'=>101,'name'=>'Plates', 'price'=>1200, 'img'=>'https://images.unsplash.com/photo-1606226459865-be58c137453e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OTl8fHBsYXRlc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60'],
            ['id'=>102,'name'=>'Bananas', 'price'=>150, 'img'=>'https://images.unsplash.com/reserve/RNm0KceQ4Gbpb0xldOe7_DSC_0679_2.JPG?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8YmFuYW5hc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60'],
            ['id'=>103,'name'=>'Apples', 'price'=>800, 'img'=>'https://images.unsplash.com/photo-1591585229242-2262ac0022ec?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGFwcGxlc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60'],
            ['id'=>104,'name'=>'Grapes', 'price'=>1500, 'img'=>'https://images.unsplash.com/photo-1537640538966-79f369143f8f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8Z3JhcGVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60'],
            ['id'=>105,'name'=>'Coffee', 'price'=>400, 'img'=>'https://images.unsplash.com/photo-1459755486867-b55449bb39ff?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjJ8fGNvZmZlZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60']
        ];
        return view('home', ['grossaries'=>$grossaries]);
    }

    public function show($id){
        return view('details', ['id'=>$id]);
    }

    public function addToCart($grossary)
    {



    }

    public function cart(){
        $response = Http::get('https://api.randomuser.me/');

        $body = $response->body();

        $user = json_decode($body, true);

        $grossaries = [
            ['id'=>102,'name'=>'Bananas', 'price'=>150, 'img'=>'https://images.unsplash.com/reserve/RNm0KceQ4Gbpb0xldOe7_DSC_0679_2.JPG?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8YmFuYW5hc3xlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60'],
            ['id'=>105,'name'=>'Coffee', 'price'=>400, 'img'=>'https://images.unsplash.com/photo-1459755486867-b55449bb39ff?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjJ8fGNvZmZlZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60']
        ];

        return view('cart', ['user'=>$user,'grossaries'=>$grossaries]);
    }
}
