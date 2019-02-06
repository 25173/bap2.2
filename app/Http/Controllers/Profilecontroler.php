<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Profilecontroler extends Controller
{


	//
	public function editPassword(){
		return view('profile.edit_password_form');
	}

	public function updatePassword(Request $request){

		$data =  $request->validate([
			'newPassword' => 'required|confirmed|min:6',
			'newPassword_confirmation' => 'required|min:6',
		]);

		//dd($data);

		$user = Auth::user();
		$user->password = Hash::make($data['newPassword']);
		$user->save();

		Auth::logout();


		return redirect()->route('login');
	}

}
