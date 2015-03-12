<?php

class RegisterController extends BaseController{
    protected $user;
    public function __construct(User $user){

        $this->user= $user;

    }

    public function showRegisterForm(){
        return View::make('adduser');
    }

    public function processUser(){

        if(!  $this->user->isValid(Input::all())) {
            return Redirect::back()->withInput()->withErrors( $this->user->messages);
        }


        $user= $this->user;
        $user->username=Input::get('username');
        $user->password=Hash::make(Input::get('password'));
        $user->email=Input::get('email');
        $user->user_type=Input::get('user_type');
        $user->save();

        $theUsername=Input::get('username');
        return View::make('addusersuccess')->with('theUsername',$theUsername);
    }
}

?>