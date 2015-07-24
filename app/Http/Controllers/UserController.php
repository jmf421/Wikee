<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller {

	//Show dashboard for user

    public function showProfile($id = null )
    {
        return view('admin.dashboard');
    }

    public function login() {

        return view ('auth.login');
    }

    public function signup() {

        return view ('auth.register');
    }

    public function dashboard() {

        return view ('admin.dashboard');
    }

    public function create() {

        return view ('admin.create');
    }

}
