<?php

class LoginController extends BaseController{

    public function loginAuth(){
       // $errors = new Illuminate\Support\MessageBag; // initiate MessageBag

        $credentials = [
            'username'     => Input::get('username'),
            'password'  => Input::get('password')
        ];
        if (Auth::attempt($credentials)) // use the inbuilt Auth::attempt method to log in the user ( if the credentials are wrong, this will fail )
            return Redirect::to('addcandidate')->with('alert-success', 'You are now logged in.'); // if the credentials were correct, Auth::attempt will log in the user automatically and you can redirect the user to the intended page. Moreover, using the ->with() method, you can store a message in a session, which can be accessed on the next page. (se explanation under)

        $errors = new Illuminate\Support\MessageBag(['password' => ['username and/or password invalid.']]); // if Auth::attempt fails (wrong credentials) create a new message bag instance.

        return Redirect::back()->withErrors($errors)->withInput(Input::except('password')); // redirect back to the login page, using ->withErrors($errors) you send the error created above

    }


}

?>