<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function login(Request $request) {
    // $input = $request->all();
      
    //     $this->validate($request, [
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);
      
    //     if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
    //     {
    //         if (auth()->user()->role == 2) {
    //             return redirect()->route('admin.dashboard.index');
    //         }else if (auth()->user()->role == 0) {
    //             return redirect()->route('transaction.index');
    //         }else if (auth()->user()->role == 1){
    //             return redirect()->route('home');
    //             {}
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
    //         if (auth()->user()->role == 'admin') {
    //             return redirect()->route('admin.dashboard.index');
    //         }else if (auth()->user()->role == 'seller') {
    //             return redirect()->route('transaction');
    //         }else{
    //             return redirect()->route('home');
    //         }
    //     }else{
    //         return redirect()->route('login')
    //             ->with('error','Email-Address And Password Are Wrong.');
    //     }
           
    // }
    
}
