<?php

	namespace endgrain\Http\Controllers;

	class HomeController extends Controller{

		public function index(){
			return view('home');
		}
		public function catering(){
			return view('catering');
		}
		// public function wholesale(){
		// 	return view('wholesale');
		// }
	}