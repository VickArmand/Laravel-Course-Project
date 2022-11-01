<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function redirect(){
        if(Auth::id())
        {
            if(Auth::user()->utype=='ADM'){
                return view('pages.admin.dashboard');
            }
            else{
                return view('pages.users.dashboard');
            }
        }
        else{
            return redirect()->back();
        }
    }
}
