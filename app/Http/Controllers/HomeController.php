<?php

	namespace endgrain\Http\Controllers;

	class HomeController extends Controller{

		public function index(){
			return view('home');
		}
	}