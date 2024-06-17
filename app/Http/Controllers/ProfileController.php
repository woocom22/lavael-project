<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function index($id){
        $name = "Donal Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        return print_r($data, true);

    }

    public function setCookie(){
        $name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain =  $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;
        $cookie = cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);

        return response('Say hello')->cookie( $cookie, 200);
    }
}
