<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class SesiController extends Controller   
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    function index()
    {
    return view('User/sesi/index');
    }
    // function login(Request $request)
    // {
    //     Session::flash('email', $request->input('email'));

    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required'
    //     ], [
    //         'email.required' => 'Email wajib diisi',
    //         'password.required' => 'Password wajib diisi'
    //     ]);

    //     $infologin = [
    //         'email' => $request->email,
    //         'password' => $request->password,
    //     ];

    //     if (Auth::attempt($infologin)) {
    //         if ($request->role === '3') {
    //             return redirect()->route('supplier.dashboard.index');
    //         } elseif ($request->role === '2') {
    //             return redirect()->route('buyer.dashboard.index');
    //         } elseif ($request->role === '1') {
    //             return redirect()->route('admin.dashboard.index');
    //         }
    //     } else {
    //         return redirect()->back()->withErrors(['email' => 'Email dan password yang dimasukkan tidak sesuai']);
    //     }
    // }

    public function login(Request $request)
    {   
        $input = $request->all();
      
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
      
        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->type == '2') {
                return redirect()->route('admin.dashboard.index');
            }else if (auth()->user()->type == '1') {
                return redirect()->route('transaction.index');
            }else if (auth()->user()->type == '0'){
                return redirect()->route('suppliers.index');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
           
    }

    function register()
    {
    return view('User/sesi/register');
    }

    function create(Request $r)
    {
    $r->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8'
    ], [
        'name.required' => 'Nama wajib diisi',
        'email.required' => 'Email wajib diisi',
        'email.email' => 'Email yang dimasukkan tidak valid',
        'email.unique' => 'Email sudah digunakan, silakan masukkan email yang lain',
        'password.required' => 'Password wajib diisi',
        'password.min' => 'Minumum password 8 karakter'
    ]);

    User::create([
        'name' => $r->name,
        'email' => $r->email,
        'password' => encrypt($r->password),
        'role' => $r->role,
        
    ]);
    return view('home');
    }

}