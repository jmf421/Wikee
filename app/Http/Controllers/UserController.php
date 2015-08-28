<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

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

    public function getIndex() {

        return view ('admin.create');
    }

    public function postIndex(Request $request) {
        $article = new Article();

        $this->validate($request, [
            'title' => 'required',
            'body'  => 'required'
        ]);

        $article->fill($request->all());
        $article->save();

        return redirect('admin/create');
    }

}
