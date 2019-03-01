<?php

	namespace endgrain\Http\Controllers;

	class HomeController extends Controller{

		public function index(){
			return view('home');
		}
		public function catering(){
			return view('catering');
		}
		public function beer(){
			return view('beer');
		}
		public function pitmanAve(){
			return view('ten-pitman');
		}
		// public function wholesale(){
		// 	return view('wholesale');
		// }
	}
