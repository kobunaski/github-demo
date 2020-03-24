<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\staff;
use App\role;

class StaffController extends Controller
{
    //
    public function getList(){
        $staff = staff::all();
        $role = role::all();
        return view('admin.staff.list', ['staff' => $staff, 'role' => $role]);
    }

    public function getAdd(){
        $staff = staff::all();
        $role = role::all();
        return view('admin.staff.add', ['staff' => $staff, 'role' => $role]);
    }

    public function postAdd(Request $request){
        $this -> validate($request, [
            'fullName' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'required',
            'dob' => 'required',
            'salary' => 'required',
            'idRole' => 'required',
            'gender' => 'required',
            'userName' => 'required',
            'password' => 'required',
            'email' => 'required',
        ],[
            'fullName.required' => 'You haven\'t input full name',
            'phone.required' => 'You haven\'t input phone number',
            'address.required' => 'You haven\'t input address',
            'image.required' => 'You haven\'t input image',
            'dob.required' => 'You haven\'t input date of birth',
            'salary.required' => 'You haven\'t input salary',
            'idRole.required' => 'You haven\'t choose role',
            'gender.required' => 'You haven\'t choose gender',
            'userName.required' => 'You haven\'t input username',
            'password.required' => 'You haven\'t input password',
            'email.required' => 'You haven\'t input email',
        ]);
        $Staff = staff::all() -> count();
        $staff = new staff();
        $array = $Staff + 1;
        $staff -> id = $array;

        echo $staff -> fullName = $request -> fullName;
        echo $staff -> phone = $request -> phone;
        echo $staff -> address = $request -> address;
        //echo $staff -> image = $request -> image;
        echo $staff -> dateOfBirth = $request -> dob;
        echo $staff -> salary = $request -> salary;
        echo $staff -> idRole = $request -> idRole;
        echo $staff -> gender = $request -> gender;
        if ($request -> status == 1){
            echo $staff -> status = 1;
        } else {
            echo $staff -> status = 0;
        }

        echo $staff -> userName = $request -> userName;
        echo $staff -> password = $request -> password;
        echo $staff -> email = $request -> email;

        if ($request -> hasFile('image')){
            $imageFile = $request -> image;

            $imageFile->move('admin_asset/upload/image/staff/', $imageFile->getClientOriginalName());

            $image = $imageFile->getClientOriginalName();

            $staff -> image = 'admin_asset/upload/image/staff/'. $image;
        }

        $staff -> save();

        return redirect('admin/staff/add') -> with('notificate', 'Add successfully');
    }

    public function getEdit($id){
        $staff = staff::find($id);
        $role = role::all();
        return view('admin.staff.edit', ['staff' => $staff, 'role' => $role]);
    }

    public function postEdit(Request $request, $id){
        $staff = staff::find($id);

        $this -> validate($request, [
            'fullName' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'required',
            'dateOfBirth' => 'required',
            'salary' => 'required',
            'idRole' => 'required',
            'gender' => 'required',
            'userName' => 'required',
            'password' => 'required',
            'email' => 'required',
        ],[
            'fullName.required' => 'You haven\'t input full name',
            'phone.required' => 'You haven\'t input phone number',
            'address.required' => 'You haven\'t input address',
            'image.required' => 'You haven\'t input image',
            'dateOfBirth.required' => 'You haven\'t input date of birth',
            'salary.required' => 'You haven\'t input salary',
            'idRole.required' => 'You haven\'t choose role',
            'gender.required' => 'You haven\'t choose gender',
            'userName.required' => 'You haven\'t input username',
            'password.required' => 'You haven\'t input password',
            'email.required' => 'You haven\'t input email',
        ]);

        echo $staff -> fullName = $request -> fullName;
        echo $staff -> phone = $request -> phone;
        echo $staff -> address = $request -> address;
        echo $staff -> dateOfBirth = $request -> dateOfBirth;
        echo $staff -> salary = $request -> salary;
        echo $staff -> idRole = $request -> idRole;
        echo $staff -> idSchedule = $request -> idSchedule;
        echo $staff -> gender = $request -> gender;
        if ($request -> status == 1){
            echo $staff -> status = 1;
        } else {
            echo $staff -> status = 0;
        }

        echo $staff -> userName = $request -> userName;
        echo $staff -> password = $request -> password;
        echo $staff -> email = $request -> email;

        if ($request -> hasFile('image')){

            $imageFile = $request -> file('image');

            $imageFile->move('admin_asset/upload/image/staff/', $imageFile->getClientOriginalName());

            $image = 'admin_asset/upload/image/staff/'. $imageFile->getClientOriginalName();

            echo $staff -> image = $image;
        }

        $staff -> save();

        return redirect('admin/staff/list/')->with('notificate', 'update successfully');
    }

    public function getDelete($id){
        $staff = staff::find($id);
        $staff->delete();

        return redirect('admin/staff/list') -> with('notificate', 'Successfully deleted');
    }
}
