<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\factory;
class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }

    Public function register(){
        $validator = Validator::make(request()->all(),[
           
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required'

        ]);
        if($validator->fails()){
            return response()->json(['message' => 'gagal register !']);
        }
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' =>Hash::make (request('password')),
        ]);
        
        if($user){
            $user->session()->flash('success','Registrasi successfull ! Please login');
            return redirect('/login');
           
            // return response()->json(["message"=>'pendaftaran berhasil !']);
        }else{
            $user->session()->flash('success','Registrasi unsuccessful ! Please repeat');
            return redirect('/registrasi');
           
            // return response()->json(["message"=>'pendaftaran gagal !']);
        }
    }
    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            // return response()->json(['error' => 'Unauthorized'], 401);
            return redirect() ->  intended('/login');
        }

        // return $this->respondWithToken($token);
        return back() -> with('LoginError', 'Login failed!');
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
        return redirect('/index') -> with('Successfully logged out');
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
