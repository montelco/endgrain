<?php

	namespace endgrain\Http\Controllers;
	
	use Mail;
	use App\Post;
	use App\Http\Requests;
	use Illuminate\Http\Request;

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

		public function menu(){
			return view('menu');
		}

		public function locations(){
			return view('locations');
		}

		public function pitmanAve(){
			return view('ten-pitman');
		}

		public function postContact(Request $request)
	    {
	    	$this->validate($request, [
	    		'email' => 'required|email|max:255',
	    		'name' => 'required|max:128',
	    		'message' =>  'required|max:1000',
	    	]);

	    	$data = array(
	    		"email" => $request->email,
	    		"name" => $request->name,
	    		"bodyMessage" => $request->message,
	    	);

	        Mail::send('emails.contact', $data, function ($m) use ($data) {
	            $m->from($data['email'], $data['name']);
	            $m->to("cmonteleoneh@gmail.com")->subject('You got a new message from the contact form');
	        });
	    }
	}
