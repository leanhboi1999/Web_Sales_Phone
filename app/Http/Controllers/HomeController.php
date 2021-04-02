<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    public function gethome()
    {
        return view('backend.index');
    }
    public function getlogout()
    {
        Auth::logout();
        return redirect()->intended('login');
    }
}
