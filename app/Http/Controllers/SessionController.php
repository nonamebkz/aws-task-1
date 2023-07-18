<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view('sesi/index');
    }

    function login(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infoLogin)) {
            return redirect('/order')->with('success', 'ok login');
        } else {
            return redirect('login')->withErrors('username and password not valid');

        }

    }

    function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'ok logout');
    }

    function register()
    {
        return view('sesi/register');
    }

    function create(Request $request)
    {
        Session::flash('email', $request->email);
        Session::flash('name', $request->name);
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required',
            'password' => 'required|min:6',
        ]);
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ];

        User::create($data);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infoLogin)) {
            return redirect('/order')->with('success', Auth::user()->name . ' Berhasil Login');
        } else {
            return redirect('login')->withErrors('username and password not valid');
        }
    }
}
