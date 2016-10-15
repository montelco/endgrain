<?php

	namespace endgrain\Http\Controllers;
	use Illuminate\Http\Request;

	class AuthController extends Controller{

		public function getSignUp(){
			return view('auth.signup');
		}

		public function postSignUp(Request $request){
			$this->validate($request, [
				'email' => 'required|unique:users|email|max:255',
				'username' => 'required|unique:users|alpha_dash|max:64',
				'password' => 'required|min:8',
			]);

			dd('all ok');
		}
	}