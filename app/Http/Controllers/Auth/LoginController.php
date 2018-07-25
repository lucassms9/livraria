<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use Session;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function authenticate(Request $request)
    {
        
    }


    public function credenciais(Request $request)
    {


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect('livros/');

        }


     
        // $usuario = Usuario::where([
        //     'email' => $request['email'] ,
        //     'senha' => md5($request['senha'])
        // ])->first();
        
        // if($usuario){
        //     // Session::set('Usuario', $usuario);

        //     $request->session()->put('Usuario', $usuario);

           
        // }else{
        //     return redirect('login/');
        // }

        
    }

    public function login()
    {
        return view('Usuario.login', compact(''));
    }


}
