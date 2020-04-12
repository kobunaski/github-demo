<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User, App\role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function getList(){
        $user = User::all();
        $role = role::all();
        return view('admin.user.list',['user'=> $user, 'role' => $role]);
    }
    public function getEdit($id){
        $user = User::find($id);
        $role = role::all();
        return view('admin.user.edit',['user'=> $user, 'role' => $role]);
    }
    public function postEdit(Request $request,$id){
        $user = User::find($id);

        $this -> validate($request, [
            'name' => 'required|min:5',
            'email' => 'required|min:5|email',
            'password' => 'required|min:8',
            'idRole' => 'required',
            'facebook' => 'required',
            'phone' => 'required|min:10',
            'dateOfBirth' => 'required',
            'address' => 'required|min:10',
            'gender' => 'required'
        ],[
            'name.required' =>'You have to enter user name',
            'name.min'=>'You must input more than 5 characters',
            'email.required' =>'You have to enter the Email',
            'email.min'=>'You must input more than 5 characters',
            'password.required' =>'You have to enter the password',
            'password.min'=>'You must input more than 8 characters',
            'idRole.required' =>'You have to select Role',
            'facebook.required' =>'You have to enter Facebook link',
            'phone.required' =>'You have to enter the phone number',
            'phone.min'=>'You must input more than 10 number',
            'dateOfBirth.required' =>'You have to enter date of birth',
            'address.required' =>'You have to enter the address',
            'address.min'=>'You must input more than 10 characters',
            'gender.required' =>'You have to select gender'
        ]);

        $user -> name = $request -> name;
        $user -> email = $request -> email;
        if ($request -> password != $user -> password){
            $user -> password = bcrypt($request -> password);
        }
        $user -> idRole = $request -> idRole;
        $user -> facebook = $request -> facebook;
        $user -> phone = $request -> phone;
        $user -> dateOfBirth = $request -> dateOfBirth;
        $user -> address = $request -> address;
        if($request -> hasFile('image'))
        {
            $file = $request -> file('image');
            $image = $file ->getClientOriginalName();
            $file -> move('admin_asset/upload/image/user', $image);
            $user -> image = $image;
        }
        $user -> gender = $request -> gender;
        $user -> status = $request -> status;
        if ($request -> status == 1){
            $user -> status = 1;
        } else {
            $user -> status = 0;
        }
        //echo $student -> status;
        $user -> save();
        return redirect('admin/user/list/')-> with('notificate','Update successfully');
    }

    public function getAdd(){
        $role = role::all();
        return view('admin.user.add', ['role' => $role]);
    }
    public function postAdd(Request $request){

        $this -> validate($request, [
            'name' => 'required|min:5',
            'email' => 'required|min:5|email|unique:users',
            'password' => 'required|min:8',
            'idRole' => 'required',
            'facebook' => 'required',
            'phone' => 'required|min:10',
            'dateOfBirth' => 'required',
            'address' => 'required|min:10',
            'gender' => 'required'
        ],[
            'name.required' =>'You have to enter user name',
            'name.min'=>'You must input more than 5 characters',
            'email.required' =>'You have to enter the Email',
            'email.min'=>'You must input more than 5 characters',
            'password.required' =>'You have to enter the password',
            'password.min'=>'You must input more than 8 characters',
            'idRole.required' =>'You have to select Role',
            'facebook.required' =>'You have to enter Facebook link',
            'phone.required' =>'You have to enter the phone number',
            'phone.min'=>'You must input more than 10 number',
            'dateOfBirth.required' =>'You have to enter date of birth',
            'address.required' =>'You have to enter the address',
            'address.min'=>'You must input more than 10 characters',
            'gender.required' =>'You have to select gender',
        ]);

        $User = User::all();
        $user = new User;

        $count = $User -> count();

        if ($count == 0)
        {
            $user -> id = 1;
        }else{
            $array = $User[$count - 1] -> id + 1;
            $user -> id = $array;
        }

        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $user -> idRole = $request -> idRole;
        $user -> facebook = $request -> facebook;
        $user -> phone = $request -> phone;
        $user -> dateOfBirth = $request -> dateOfBirth;
        $user -> address = $request -> address;
        if($request -> hasFile('image'))
        {
            $file = $request -> file('image');
            $image = $file ->getClientOriginalName();
            $file -> move('admin_asset/upload/image/user', $image);
            $user -> image = $image;
        }else{
            $user -> image = "";
        }
        $user -> gender = $request -> gender;
        $user -> status = $request -> status;
        if ($request -> status == 1){
            $user -> status = 1;
        } else {
            $user -> status = 0;
        }
        //echo $student -> status;
        //$user -> save();
        return redirect('admin/user/add') -> with('notificate','Add successfully');
    }

    public function getDelete($id){
        $user = User::find($id);
        $user -> delete();
        return redirect('admin/user/list') -> with('notificate','Delete successfully');
    }

    public function getLoginAdmin(){
        return view('admin.login');
    }

    public function postLoginAdmin(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' =>'You have to enter the Email',
            'password.required' =>'You have to enter the Email',
//            'password.min'=>'You must input more than 8 character'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)){
            return redirect('admin/user/list');
        } else {
            return redirect('admin/login') -> with('notificate', 'Login Fail');
        }
    }

    public function getLogoutAdmin(){
        Auth::logout();
        return redirect('admin/login');
    }

    public function getLoginClient(){
        return view('client.login');
    }

    public function postloginClient(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' =>'You have to enter the Email',
            'password.required' =>'You have to enter the Email',
//            'password.min'=>'You must input more than 8 character'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)){
            if (Auth::user() -> idRole == 4){
                return redirect('client/student/schedulelist');
            } else if (Auth::user() -> idRole == 2 || Auth::user() -> idRole == 5) {
                return redirect('client/tutor/infoclass');
            } else if (Auth::user() -> idRole == 3) {
                return redirect('client/staff/profile');
            }
        } else {
            return redirect('client/login') -> with('notificate', 'Login Fail');
        }
    }

    public function getLogoutClient(){
        Auth::logout();
        return redirect('client/login');
    }
}
