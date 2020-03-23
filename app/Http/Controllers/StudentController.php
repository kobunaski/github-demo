<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
class StudentController extends Controller
{
    //
    public function getList(){
        $student = student::all();
        return view('admin.student.list',['student'=> $student]);
    }
    public function getEdit($id){
        $student = student::find($id);
        return view('admin.student.edit',['student'=> $student]);
    }
    public function postEdit(Request $request,$id){
        $student = student::find($id);
        $this -> validate($request, [
            'fullName' => 'required|min:5'
        ],[
            'fullName.required' =>'You have to enter the student title',
            'fullName.min'=>'You must input more than 5 characters',
        ]);
        $student -> fullName = $request -> fullName;
        $student -> userName = $request -> userName;
        $student -> password = $request -> password;
        $student -> email = $request -> email;
        $student -> phone = $request -> phone;
        $student -> dateOfBirth = $request -> dateOfBirth;
        $student -> address = $request -> address;
        if($request -> hasFile('image'))
        {
            $file = $request -> file('image');
            $image = $file ->getClientOriginalName();
            $file -> move('admin_asset/upload/image/student', $image);
            $student -> image = $image;
        }
        $student -> idSchedule = $request -> idSchedule;
        $student -> gender = $request -> gender;
        $student -> status = $request -> status;
        if ($request -> status == 1){
            $student -> status = 1;
        } else {
            $student -> status = 0;
        }
        //echo $student -> status;
        $student -> save();
        return redirect('admin/student/list/')-> with('notificate','Update successfully');
    }

    public function getAdd(){
        return view('admin.student.add');
    }
    public function postAdd(Request $request){
        $this -> validate($request,[
            'fullName' => 'required|min:5'
        ],[
            'fullName.required' =>'You have to enter the student title',
            'fullName.min'=>'You must input more than 5 characters',
        ]);

        $student = new student;
        $student -> fullName = $request -> fullName;
        $student -> userName = $request -> userName;
        $student -> password = $request -> password;
        $student -> email = $request -> email;
        $student -> phone = $request -> phone;
        $student -> dateOfBirth = $request -> dateOfBirth;
        $student -> address = $request -> address;
        if($request -> hasFile('image'))
        {
            $file = $request -> file('image');
            $image = $file ->getClientOriginalName();
            $file -> move('admin_asset/img', $image);
            $student -> image = $image;
        }else{
            $student -> image = "";
        }
        $student -> idSchedule = $request -> idSchedule;
        $student -> gender = $request -> gender;
        $student -> status = $request -> status;
        if ($request -> status == 1){
            $student -> status = 1;
        } else {
            $student -> status = 0;
        }
        //echo $student -> status;
        $student -> save();
        return redirect('admin/student/add') -> with('notificate','Add successfully');
    }

    public function getDelete($id){
        $student = student::find($id);
        $student -> delete();
        return redirect('admin/student/list') -> with('notificate','Delete successfully');
    }
}
