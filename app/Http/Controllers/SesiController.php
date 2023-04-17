<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class SesiController extends Controller
{
    function index()
    {
    return view('User/sesi/index');
    }
    function login(Request $request)
    {
        Session::flash('email', $request->input('email'));

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('home')->with('success', 'Berhasil login');
        } else {
            return redirect('success')->withErrors('Username dan password yang dimasukkan tidak sesuai');
        }
    }

    function register()
    {
    return view('User/sesi/register');
    }

    function create(Request $request)
    {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8'
    ], [
        'nama.required' => 'Nama wajib diisi',
        'email.required' => 'Email wajib diisi',
        'email.email' => 'Email yang dimasukkan tidak valid',
        'email.unique' => 'Email sudah digunakan, silakan masukkan email yang lain',
        'password.required' => 'Password wajib diisi',
        'password.min' => 'Minumum password 8 karakter'
    ]);
    User::create($data->all());
    return redirect('sesi');
    }

}