<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(){
        $pageTitle = 'Profile';
        return view('profile', ['pageTitle' => $pageTitle]);
    }
}
