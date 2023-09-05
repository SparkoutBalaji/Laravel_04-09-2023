<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Admin(){
    if(false)
    {
        return '<b>Un-Authorized Admin</b>';
    }
    else
    {
        return '<b>Authorized Admin</b>';
    }
}
}
