<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Upload;

use Cookie;

class HomeController extends Controller
{
    public function index() {

			$images = Upload::all()->take(6);

			return view('home.index', compact('images'));

		}

		public function images() {

			$images = Upload::all();

			return view('images.index', compact('images'));

		}

		public function blogs() {

			return view('blogs.index');

		}

		public function blog() {

			return view('blogs.blog');

		}

		public function gallery() {

			$images = Upload::all();

			return view('gallery.index', compact('images'));

		}

		public function about() {

			return view('about.index');

		}

		public function contact() {

			return view('contact.index');

		}

		public function register() {

			return view('register.index');

		}

		public function login() {

			return view('login.index');

		}

		public function forgot() {

			return view('login.forgot');

		}

		public function activate() {

			return view('register.activate');

		}

		public function user($username) {

			$user = User::where('username', $username)->get();

			$username = $user[0]->username;

			$email = $user[0]->email;

			$id = $user[0]->id;

			if($user[0]->isAdmin === 0) {

				$position = 'User';

			} else {

				$position = 'Admin';

			}

			return view('profile.index', compact('username', 'email', 'position', 'id'));

		}
}
