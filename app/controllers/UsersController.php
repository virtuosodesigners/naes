<?php

class UsersController extends BaseController{

    public function editUser($id){
        $user=User::find($id);
        return View::make('user-edit',array('user'=>$user));

    }

   public function updateUserData($id){
       $user   = Auth::user()->id;
       User::where('id', $user)->update(array(
           'username'    =>  Input::get('username'),
           'password' =>  Hash::make(Input::get('password')),
           'email'  => Input::get('email'),
           'user_type' => Input::get('user_type'),
           'codverify' => Input::get('codverify'),

       ));

       $theUsername=Input::get('username');

       return Redirect::to('updatesuccess')->with('theUsername', $theUsername);

    }

    public function getAllUsers(){
        $users=User::all();
        return View::make('users')->with('users',$users);
    }
}

?>