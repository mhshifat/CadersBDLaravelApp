<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Illuminate\Support\Facades\Hash;

use Session;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Mail;

use App\Mail\MailActivation;

class RegisterController extends Controller
{
    public function index(Request $request) {

			$this->validate($request, [

				'username' => 'required|unique:users|max:10',

				'email' => 'required|unique:users|email',

				'password' => 'required|max:15'

			]);

			$user = new User;

			$user->username = $request->username;

			$user->email = $request->email;

			$hashPwd = Hash::make($request->password);

			$user->password = $hashPwd;

			$user->save();

			$findUser = User::where('email', $request->email)->first();

			$mailTokenNumber = strtolower(Str::random(20) . '@' . $findUser->id);

			$findUser->mailToken = $mailTokenNumber;

			$findUser->save();

			$user_2 = User::find($findUser->id);

			Mail::to($request->email)->send(new MailActivation($findUser->id, $findUser->username, $findUser->email, $user_2->mailToken));

			Session::flash('notice', 'Please activate your account.');

			return redirect('/activate');

		}

		public function activate(Request $request) {

			$this->validate($request, [

				'activation_code' => 'required'

			]);

			$code = explode('@', $request->activation_code);

			$id = $code[1];

			$user = User::find($id);

			if($user->mailToken === $request->activation_code) {

				$user->isActivated = 1;

				$user->save();

				Session::flash('success', 'Your account has been activated, you can log in now.');

				return redirect('/login');

			} else {

				Session::flash('error', 'Code does not match.');

				return redirect()->back();

			}

		}
}
