<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;


class LoginController extends Controller
{
    public function index()
    {
        // Alert::toast('You need to login first!', 'info')->width('350px')->hideCloseButton()->timerProgressBar()->focusCancel(true);
        return view('login-page');
    }

    // public function actionLogin(Request $request)
    // {
    //     $data = [
    //         'username' => $request->input('username'),
    //         'password' => $request->input('password'),
    //     ];
    //     if (Auth::Attempt($data)) {
    //         return redirect('/smart-switch');
    //     } else {
    //         Session::flash('error', 'Email atau Password Salah');
    //         return redirect('/');
    //     }
    // }


    // public function actionLogout()
    // {
    //     Auth::logout();
    //     return redirect('/');
    // }

    public function authenticate(Request $request, User $user)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            Alert::toast('Hi ' .  strtok(auth()->user()->name, ' ') . ', welcome to dashboard', 'success')->width('400px')->hideCloseButton()->timerProgressBar()->focusCancel(true);
            return redirect()->intended('/');
        } else {
            Alert::toast('Login Failed!', 'error')->width('350px')->hideCloseButton()->timerProgressBar()->focusCancel(true);
            return Redirect::back()->withInput($request->all());
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        Alert::toast('Logout Successfuly', 'success')->width('350px')->hideCloseButton()->timerProgressBar()->focusCancel(true);
        return redirect('/login');
    }
}
