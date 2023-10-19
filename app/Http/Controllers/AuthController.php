<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.login.login');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'birthdate' => 'required',
        ], [
            'name.required' => 'Ad daxil edin.',
            'surname.required' => 'Soyad daxil edin.',
            'email.required' => 'Email daxil edin.',
            'password.required' => 'Şifrə daxil edin.',
            'birthdate.required' => 'Vaxt daxil edin.',
        ]);

        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'birthdate' => Carbon::parse($request->birthdate)->format('Y-m-d')
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Uğurlu'
        ]);
    }

    public function loginPost(Request $request)
    {
        $email = $request->login_email;
        $password = $request->login_password;
        $remember = $request->remember;

        !is_null($remember) ? $remember = true : $remember = false;

        $user = User::where('email', $email)->first();

//        $request->flash();

        if ($user && Hash::check($password, $user->password)) {
            Auth::login($user);
            return redirect()->route('home')->with('success', 'Uğurlu');
        } else{
            return redirect()->back()->with('error','Email və ya Şifrə yanlışdır')->onlyInput('login_email','remember');
        }


////        ['email' => $request->login_email, 'password' => $request->login_password]
//        $request->flash();
////        $credentials = $request->only('email','password');
////        dd($request->login_email,$request->login_password);
//        if(Auth::attempt(['email' => $request->login_email, 'password' => $request->login_password])) {
////            dd($request->login_email,$request->login_password);
//            return redirect()->route('home')->with('success', 'Uğurlu');
//        } else {
////            dd($request->login_email,$request->login_password);
////            dd($request->login_email,$request->login_password);
//            return redirect()->back()->with('error', 'Email və ya Şifrə yanlışdır');
//        }


    }
    public function logout(Request $request)
    {

    }
}
