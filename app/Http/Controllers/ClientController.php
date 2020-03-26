<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User, App\role;
class ClientController extends Controller
{
    //
    function __construct()
    {
        $user =  User::all();
        $role = role::all();
        view() ->share('User', $user);
        view() ->share('role', $role);
    }

    public function getProfile(){
        $user = User::all();
        return view('client.student.profile', ['User' => $user]);
    }

}
