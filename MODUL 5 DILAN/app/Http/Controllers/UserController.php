<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{   

    public function register()
    {
        return view('register');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'NoHp' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'KonfirmasiPassword' => 'required|same:password',
        ]);

        $user = new User([
            'nama' => $request->name,
            'no_hp' => $request->NoHp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }


    public function login()
    {
        $data['title'] = 'Login';
        return view('login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'Wrong email or password',
        ]);
    }

    public function profile()
    {
        return view('after.profile');
    }

    public function profile_action(Request $request)
    {   
         
        $request->validate([
            'name' => 'required',
            'no_hp' => 'required',
            'new_password' => 'required|confirmed',

        ]);
        $user = User::find(Auth::id());
        $user->nama = $request->name;
        $user->no_hp = $request->no_hp;
        $user->password = Hash::make($request->new_password);
        $user->save();
        $request->session()->regenerate();
        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function listcar()
    {
        return view('after.listcar');
    }

    public function add()
    {
        return view('after.add');
    }
}
