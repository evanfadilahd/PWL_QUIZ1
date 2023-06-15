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
    return view('auth/login');
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
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === User::ROLE_ADMIN) {
                return redirect()->route('admin.dashboard');
            }

            if ($user->role === User::ROLE_SELLER) {
                return redirect()->route('seller.dashboard');
            }

            if ($user->role === User::ROLE_BUYER) {
                return redirect()->route('buyer.dashboard');
            }

            return redirect()->route('dashboard');
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // public function login(Request $request)
    // {   
    //     $input = $request->all();
      
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);
      
    //     if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
    //     {
    //         if (auth()->user()->type == 'admin') {
    //             return redirect()->route('admin.dashboard.index');
    //         }else if (auth()->user()->type == 'seller') {
    //             return redirect()->route('transaction');
    //         }else{
    //             return redirect()->route('home');
    //         }
    //     }else{
    //         return redirect()->route('login')
    //             ->with('error','Email-Address And Password Are Wrong.');
    //     }
           
    // }

    function register()
    {
    return view('auth/register');
    }

    protected function create(Request $r, array $data)
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

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
        ]);
    }

}