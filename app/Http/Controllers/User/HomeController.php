<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        //echo 'Xin chào User, '. $user->name;
        $username = $user->name;
       // dd($username);

       // return redirect()->route('news.list')->with('username', $username);

        return view('homepage', ['username' => $username]);
    }

    /**
     * action admincp/logout
     * @return RedirectResponse
     */
    public function logout()
    {
        Auth::logout();
        return view('homepage');
    }


   
}
