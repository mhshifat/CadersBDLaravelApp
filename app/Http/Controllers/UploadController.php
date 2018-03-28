<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Upload;

use Session;

class UploadController extends Controller
{
    public function gallery(Request $request) {
			$this->validate($request, [
				"image" => "required|image|unique:uploads"
			]);

			session_start();

			if(isset($_SESSION['username'])) {
				$username = $_SESSION['username'];
			} elseif (Cookie::get('codersbd') !== null) {
				$username = Cookie::get('codersbd');
			}

			$user = User::where('username', $username)->get();

			$user_id = $user[0]->id;

			$image = $request->image;

			$image->move('images', $image->getClientOriginalName());

			$uploadImage = new Upload;

			$uploadImage->image = $image->getClientOriginalName();

			$uploadImage->user_id = $user_id;

			$uploadImage->save();

			Session::flash('success', 'Your image has been uploaded');

			return redirect()->back();

		}

		public function galleryDelete($id) {
			$image = Upload::find($id);

			$image->delete();

			Session::flash('success', 'Your image has been Deleted');

			return redirect()->back();
		}
}
