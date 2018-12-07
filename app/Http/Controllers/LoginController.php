<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showForm(){
    	return view('cadastro');
    }

    /*public function login(Request $request)
    {
        $credenciais = $request->only('email','password');
        if (Auth::attempt ($credenciais)) {
            $user = User::get()
                ->where('email',$credenciais['email'])
                ->first();
            if (isset($user)) {
                if ($user->type == "professor") {
                    return redirect()->to(
                        route('professor.inicio', 
                            ['id' => $user->id]));
                }else if($user->type == "aluno"){
                    return redirect()->to(
                        route('aluno.inicio', 
                            ['id' => $user->id]));
                }
            }
        } else {
            return redirect()->to('login');
        }
    }*/


    public function login(Request $request){
    	$credenciais = $request->only('email','password');
    	if (Auth::attempt($credenciais)){
    		return redirect()->to(route('home'));
    	}else{
    		return redirect()->to(route('login'));
    	}
    }

    public function logout(Request $request){
    	Auth::logout();
        $request->session()->flush();
        return redirect()->to(route('login')); 
    }
}
