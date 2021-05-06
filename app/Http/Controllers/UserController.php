<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    public function fetch()
    {
        $response = Http::get('https://api.randomuser.me/');

        $user = $response->body();

        return $user;
    }
}
