<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisataAlamController extends Controller
{
    public function index(){
        return view('user.wisata.alam.pantai1');
    }
}
