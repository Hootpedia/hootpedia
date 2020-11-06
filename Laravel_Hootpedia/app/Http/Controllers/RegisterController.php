<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store()
    {
        /* dump(\request()->all());
         }*/
        /*$user = new User();
        $user->name = \request('uname');
        $user->password = \request('psw');
        $user->email = \request('email');
        $user->save();*/
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect('/home');
    }


}
