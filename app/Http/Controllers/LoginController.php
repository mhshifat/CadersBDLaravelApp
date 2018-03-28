<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Hash;

use Session;

use App\Mail\MailForgot;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Mail;

use Cookie;

class LoginController extends Controller
{
    public function index(Request $request) {

			$this->validate($request, [

				'email' => 'required',

				'password' => 'required'

			]);

			$user = User::where('email', $request->email)->get();

			if(count($user) > 0) {

				if ($user[0]->email === $request->email) {

					$hashPwd = Hash::check($request->password, $user[0]->password);

					if ($hashPwd === true) {

						if($request->checkbox === 'on') {

							$cookieToken = Str::random(20) . '@' . $user[0]->id;

							$user[0]->rememberToken = $cookieToken;

							$user[0]->update();

							Cookie::queue('codersbd', $user[0]->username, 84600);

							Session::flash('success', 'Welcome ' . $user[0]->username . ', glad to have you onboard.');

							return redirect('/');

						} else {

							session_start();

							$username = $_SESSION['username'] = $user[0]->username;

							$rememberToken = $_SESSION['token'] = $user[0]->rememberToken;

							Session::flash('success', 'Welcome '. $user[0]->username .', glad to have you onboard.');

							return redirect('/');

						}

					} else {

						Session::flash('error', 'Password does not match.');

						return redirect()->back();

					}

				}

			} else {

				Session::flash('error', 'Account does not exist.');

				return redirect('/register');

			}

		}

		public function logout() {

			if(Cookie::get('codersbd') !== null) {

				Cookie::queue(Cookie::forget('codersbd'));

				Session::flash('success', 'Goodbye, Hope you will visit us soon.');

				return redirect('/');

			} else {

				session_start();

				session_unset();

				session_destroy();

				Session::flash('success', 'Goodbye, Hope you will visit us soon.');

				return redirect('/');

			}

		}

		public function forgot(Request $request) {

			$this->validate($request, [

				'email' => 'required|email'

			]);

			$user = User::where('email', $request->email)->get();

			if(count($user) > 0) {

				if($user[0]->isActivated === 1) {

					$server = $_SERVER['HTTP_HOST'];

					Mail::to($request->email)->send(new MailForgot($user[0]->username, $user[0]->email, $server));

					Session::flash('notice', 'Please confirm your email.');

					return redirect()->back();

				} else {

					Session::flash('notice', 'Please activate your account.');

					return redirect()->back();

				}

			} else {

				Session::flash('notice', 'Account does not exist.');

				return redirect('/register');

			}

		}

		public function forgot_2($username) {

			$user = User::where('username', $username)->get();

			if($user) {

				session_start();

				$_SESSION['username'] = $user[0]->username;

				Session::flash('success', 'Please reset your password!');

				return redirect('/');

			} else {

				Session::flash('error', 'Something went wrong.');

				return redirect('/');

			}

		}
}
