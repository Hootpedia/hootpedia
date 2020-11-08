<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function create(){
        redirect()->to('view/home');
    }

    public function store()
    {
        /* dump(\request()->all());
         }*/
        $user = new User();
        $user->username = request('username');
        $user->password = request('password');
        $user->email = request('email');


        $this->validate(request(), [
                'username' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]);

        $user->save();
        //auth()->login($user);

        Auth::login($user,true);
        return redirect('/home');
    }


}
