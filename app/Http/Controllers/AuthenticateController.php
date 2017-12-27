<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use JWTAuth;
use Tymon\JWTAuthExceptions\JWTException;
use App\User;

class AuthenticateController extends Controller
{
	public function __construct(){
		// vai bloquear todas as actions por token, menos a authenticate
		$this->middleware('jwt.auth', ['except' => ['authenticate']]);
	}

    public function index(){
    	// retonarna todos os usuarios
    	$users = User::all();
    	return $users;
    }

    public function authenticate(Request $request){
    	$credentials = $request->only('email', 'password');

    	try {
    		// verifica as credenciais e cria um token para o usuario
    		if(!$token = JWTAuth::attempt($credentials)){
    			return response()->json(['error' => 'invalid_credentials'], 401);
    		}
    	} catch (JWTException $e) {
    		return response()->json(['error' => 'could_not_create_token'], 500);
    	}

    	// se nao encontrar nenhum erro entao deve retornar o token
    	return response()->json(compact('token'));
    }
}
