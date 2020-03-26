<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User, App\role;
class ClientController extends Controller
{

//    function __construct()
//    {
//        $user =  User::all();
//        $role = role::all();
//        view() ->share('User', $user);
//        view() ->share('role', $role);
//    }

    public function getProfile(){
        //$user = User::all();
        $role = role::all();
        return view('client.student.profile', ['role' => $role]);
    }

    public function postEditProfile(Request $request,$id){
        $user = User::find($id);

        $this -> validate($request, [
            'name' => 'required|min:5'
        ],[
            'name.required' =>'You have to enter the student title',
            'name.min'=>'You must input more than 5 characters',
        ]);

        $user -> name = $request -> name;
        //$user -> email = $request -> email;
        //$user -> password = bcrypt($request -> password);
        //$user -> idRole = $request -> idRole;
        $user -> facebook = $request -> facebook;
        $user -> phone = $request -> phone;
        //$user -> dateOfBirth = $request -> dateOfBirth;
        $user -> address = $request -> address;
//        if($request -> hasFile('image'))
//        {
//            $file = $request -> file('image');
//            $image = $file ->getClientOriginalName();
//            $file -> move('admin_asset/upload/image/student', $image);
//            $user -> image = $image;
//        }
        //$user -> gender = $request -> gender;
        //$user -> status = $request -> status;
//        if ($request -> status == 1){
//            $user -> status = 1;
//        } else {
//            $user -> status = 0;
//        }
        //echo $student -> status;
        $user -> save();
        return redirect('client/student/profile/') -> with('notificate','Update successfully');
    }
}
