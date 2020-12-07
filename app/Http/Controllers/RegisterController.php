<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    //simply redirects to register view (which is home because of our modals)
    public function create(){
        redirect()->to('/home');
    }

    //makes new user from request, validates, saves user to the database, then automatically logs user in
    public function store()
    {



        $user = new User();
        $user->name = request('username');
        $user->password = request('password');
        $user->email = request('email');
      /*  $rules = [
            'email' => 'required|ends_with:fau.edu',
        ];
        $messages=[
            'required'=>'The email field is required'
        ];*/
        $rules = [
            'email' => 'required|ends_with:fau.edu',
        ];

        try {
            $this->validate(request(), [
                'username' => 'required',
                'email' => ['required','ends_with:fau.edu'/*'regex:/^[a-zA-Z0-9_.+-]+@(?:(?:[a-zA-Z0-9-]+\.)?[a-zA-Z]+\.)?(fau)\.edu$/'*/ ],
                'password' => 'required'
            ]);
        } catch (ValidationException $e) {
        }

        $user->save();
        //auth()->login($user);

        Auth::login($user,true);
        return redirect('/questions');
    }


}
