<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;


class ChangePasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('changePassword');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function store(Request $request)
    {
        $user = User::findOrFail(auth()->user()->id);

        $validator = Validator::make($request->all(), [
            'oldPassword' => 'required',
            'newPassword' => 'required|min:6|alpha_dash|different:oldPassword|different:$user->username',
            'confirmNewPassword' => 'required|same:newPassword',
        ]);

        if (Hash::check($request->oldPassword, $user->password)) {
            if ($validator->fails()) {
                alert()->html('Try Again!', "Your password must be at least <b>6</b> characters and cannot contain <b>spaces</b> or match your <b>old password</b>", 'error');
                return redirect()->back();
            } else {
                User::find(auth()->user()->id)->update(['password' => Hash::make($request->newPassword)]);
                alert()->success('Success', 'Your password has been changed!');
                return back();
            }
        } else {
            Alert::error('Failed', 'Your old password is wrong! Please try again');
            return redirect()->back();
        }
    }
}
