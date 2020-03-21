<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function authenticated()
    {
        $user = \Auth::user();
        if(\Auth::check()){
            if ($user->isguru())
            {
                return redirect('guru/dashguru');
            }
            else if ($user->issiswa())
            {
                return redirect('siswa/dashsiswa');
            }
        }
        else
            return redirect()-route('login');
    }


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
 
        $request->session()->flush();
 
        $request->session()->regenerate();
 
        return redirect('/login');
    }
}
