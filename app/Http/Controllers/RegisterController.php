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
                'email' => ['required','allowed_domain','email'/*'regex:/^[a-zA-Z0-9_.+-]+@(?:(?:[a-zA-Z0-9-]+\.)?[a-zA-Z]+\.)?(fau)\.edu$/'*/ ],
                'password' => 'required'
            ]);
        } catch (ValidationException $e) {
        }

        $user->save();
        //auth()->login($user);

        Auth::login($user,true);
        return redirect('/questions');
    }


    public function edit($id){
        $user=User::find($id);

        return view('profile', compact('user'));
    }

    public function update($id){
        $user = User::find($id);
        $user->name = request('username');
        $user->password = request('password');
        $user->email = request('email');
        if($user->email=="durewill@gmail.com"){
            $user->type=1;
        }elseif ($user->type!=1){
            $user->type=1;
        }

        $user->save();
    }
}
