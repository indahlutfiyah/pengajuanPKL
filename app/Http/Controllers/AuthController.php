<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\factory;


class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function register(Request $request)
    {

        if ($request->isMethod('post')) {
            $validator = Validator::make(request()->all(), [

                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'intern' => 'required',
                'kelompok' => 'required'


            ]);
            if ($validator->fails()) {
                return response()->json(['message' => 'gagal register !']);
            }
            $user = User::create([
                'name' => request('name'),
                'email' => request('email'),
                'intern' => request('intern'),
                'kelompok' => request('kelompok'),
                'password' => Hash::make(request('password')),

            ]);

            if ($user) {
                Session::flash('registrasisuccess', 'Akun telah berhasil dibuat');
                return redirect('/login');

                // return response()->json(["message"=>'pendaftaran berhasil !']);
            } else {


                return redirect('/registrasi');

                // return response()->json(["message"=>'pendaftaran gagal !']);
            }
        }
        if ($request->isMethod('get')) {
            return view('registrasi');
        }
    }


    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = request(['email', 'password', 'intern', 'kelompok']);

            if (!$token = auth()->attempt($credentials)) {
                // return response()->json(['error' => 'Unauthorized'], 401);
                return redirect()->intended('/');
            }

            // return $this->respondWithToken($token);
            return back()->with('LoginError', 'Login failed!');
        }
        if ($request->isMethod('get')) {
            return view('login');
        }
    }
    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        //return response()->json(['message' => 'Successfully logged out']);
        return redirect('/index')->with('Successfully logged out');
    }

    public function home()
    {
        return response()->json(auth()->user());
    }
    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */


    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    // protected function respondWithToken($token)
    // {
    //     return response()->json([
    //         'access_token' => $token,
    //         'token_type' => 'bearer',
    //         'expires_in' => auth()->factory()->getTTL() * 60
    //     ]);
    // }
}
