<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;


class AuthController extends Controller
{
    use ValidatesRequests;

    public function showLoginForm()
    {
        
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {

        $this->validate($request, [
            'email'         => 'required|email',
            'password'      => 'required|min:6'
        ]);


        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('admin.dashboard'));
        } else {

            return $this->sendFailedLoginResponse($request);
        }
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {

        if (Auth::guard('admin')->check()) 
        {
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login');
        }
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->route('admin.login')
        ->withErrors(['email' => trans('auth.failed')])
        ->withInput($request->only('email', 'remember'));
    }
}
