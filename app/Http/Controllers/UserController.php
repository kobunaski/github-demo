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

//        $this -> validate($request, [
//            'fullName' => 'required|min:5'
//        ],[
//            'fullName.required' =>'You have to enter the student title',
//            'fullName.min'=>'You must input more than 5 characters',
//        ]);

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
            $file -> move('admin_asset/upload/image/student', $image);
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

//        $this -> validate($request,[
//            'fullName' => 'required|min:5'
//        ],[
//            'fullName.required' =>'You have to enter the student title',
//            'fullName.min'=>'You must input more than 5 characters',
//        ]);

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
            $file -> move('admin_asset/upload/image/student', $image);
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
        $user -> save();
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
//        $this->validate($request, [
//            'email' => 'required',
//        ], []);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)){
            return redirect('admin/user/list');
        } else {
            return redirect('admin/login') -> with('notificate', 'Login unsuccessfully');
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
//        $this->validate($request, [
//            'email' => 'required',
//        ], []);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)){
            return redirect('client/student/profile');
            //echo Auth::user() -> name;
        } else {
            return redirect('client/login') -> with('notificate', 'Login unsuccessfully');
        }
    }

    public function getLogoutClient(){
        Auth::logout();
        return redirect('client/login');
    }
}
