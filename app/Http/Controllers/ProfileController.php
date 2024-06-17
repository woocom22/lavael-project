<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(Request $request){
        $id = $request->id;
        return $id;

    }
}
