<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class Usercontroler extends Controller
{
	public function showUsers(){

		$users = User::paginate(15);


		return view('user.users',compact('users'));
	}
}
