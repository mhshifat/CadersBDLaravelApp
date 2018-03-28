<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Session;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function user(Request $request, $id) {

			$this->validate($request, [

				'password' => 'required',

				'confirm_password' => 'required'

			]);

			if($request->password === $request->confirm_password) {

				$user = User::find($id);

				$pwdHash = Hash::make($request->password);

				$user->password = $pwdHash;

				$user->save();

				Session::flash('success', 'Password has been saved.');

				return redirect()->back();

			} else {

				Session::flash('error', 'Password does not match.');

				return redirect()->back();

			}

		}
}
