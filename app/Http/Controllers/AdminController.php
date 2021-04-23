<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Paginator;


class AdminController extends Controller
{
    public function __construct() {
        @session_start();        
    }    
    
    public function login(){
       
        return view('admin.login');
    }

    public function dashboard(Request $request){
         $username = $request->username;
         $password = $request->password;
        // dd($username);
        //dd($password);
        //$userRecord = User::where([['name','=',$username],['password','=', $password],['roles','=', 'admin']])->first();
        $users = DB::table('users')
                ->where('name', '=', $username)
                ->where('password', '=', $password)
                ->where('roles', '=', 'admin')
                ->get();
        $admin = json_decode($users, true);

        // dd($admin[0]['roles']);

         if (count($admin) > 0)
         {
            if ($admin[0]['roles'] =='admin')
            {
                
                $value = session('users');
                // Specifying a default value...
                $value = session('users', 'admin');

                $request->session()->put('users', 'admin');
                // Store a piece of data in the session...
                session(['users' => 'admin']);


                return redirect()->route('dashboard', ['username' => $admin[0]['name']]);
            }
         }
         else
         {
            return view('admin.login');
         }
    }
    public function index(Request $request){
        $username = $request->username;
        
        if($username)
        {
            //$username = 'admin';

            return view('admin.dashboard')->with(['username' => $username]);
        }
        else 
        {
            return redirect()->route('dashboard.login');
        }
       
    }
    
}
