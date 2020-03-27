<?php

namespace App\Http\Controllers;


use App\course;
use App\coursedetail;
use Illuminate\Http\Request;
use App\User, App\role, App\news, App\subject;
class ClientController extends Controller
{

//    function __construct()
//    {
//        $user =  User::all();
//        $role = role::all();
//        view() ->share('User', $user);
//        view() ->share('role', $role);
//    }


    public function getStudentProfile(){
        //$user = User::all();
        $role = role::all();
        return view('client.student.profile', ['role' => $role]);
    }

    public function getTutorProfile(){
        //$user = User::all();
        $role = role::all();
        return view('client.tutor.profile', ['role' => $role]);
    }

    public function getStaffProfile(){
        //$user = User::all();
        $role = role::all();
        return view('client.staff.profile', ['role' => $role]);
    }

    public function postEditStudentProfile(Request $request,$id){
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
        if ($request -> checkpassword == "1"){
            $user -> password = bcrypt($request -> password);
        }
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
        return redirect('client/student/profile') -> with('notificate','Update successfully');
    }

    public function postEditTutorProfile(Request $request,$id){
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
        if ($request -> checkpassword == "1"){
            $user -> password = bcrypt($request -> password);
        }
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
        return redirect('client/tutor/profile') -> with('notificate','Update successfully');
    }

    public function postEditStaffProfile(Request $request,$id){
        $user = User::find($id);

        $this -> validate($request, [
            'name' => 'required|min:5'
        ],[
            'name.required' =>'You have to enter the student title',
            'name.min'=>'You must input more than 5 characters',
        ]);

        $user -> name = $request -> name;
        $user -> facebook = $request -> facebook;
        $user -> phone = $request -> phone;
        $user -> address = $request -> address;
        if ($request -> checkpassword == "1"){
            $user -> password = bcrypt($request -> password);
            echo "success";
        }
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
        //$user -> email = $request -> email;
        //$user -> password = bcrypt($request -> password);
        //$user -> idRole = $request -> idRole;
        //$user -> dateOfBirth = $request -> dateOfBirth;
        $user -> save();
        return redirect('client/staff/profile') -> with('notificate','Update successfully');
    }

    public function getListStudentNews(){
        $news = news::all();
        return view('client.student.news', ['news'=> $news]);
    }

    public function getListStaffNews(){
        $news = news::all();
        return view('client.staff.news', ['news'=> $news]);
    }

    public function getListTutorNews(){
        $news = news::all();
        return view('client.tutor.news', ['news'=> $news]);
    }

    public function getListStaffCourse(){
        $course = course::all();
        $user = User::all();
        $subject = subject::all();
        return view('client.staff.course', ['user'=> $user, 'subject' => $subject, 'course' => $course]);
    }

    public function postAddStaffCourse(Request $request){
//        $course = course::all();
//        $user = User::all();
//        $subject = subject::all();

        $coursedetail = new coursedetail();

        $Coursedetail = coursedetail::all();

        $count = $Coursedetail -> count();

        if ($count == 0)
        {
            $coursedetail -> id = 1;
        }else{
            $array = $Coursedetail[$count - 1] -> id + 1;
            $coursedetail -> id = $array;
        }

        $coursedetail -> idCourse = $request -> idCourse;
        $coursedetail -> idTutor = $request -> idTutor;
        $coursedetail -> idStudent = $request -> idStudent;
        $coursedetail -> idSubject = $request -> idSubject;

        $user = User::all();

//        for ($x = 0; $x < $user -> count(); $x++){
//            if ($x == $request -> selectStudent ){
//                echo $user[$x] -> id;
//            }
//        }
//
//        for ($x = 0; $x <= $user -> count(); $x++){
//            for ($y = $request -> selectStudent; $y < $x; $y++) {
//                if ($y == $x){
//                    echo $y;
//                }
//                //echo $request -> selectStudent;
//            }
//        }

//        if ($request -> selectStudent == 1){
//            echo "true";
//        }

        //$coursedetail -> save();
        //return view('client.staff.course');
    }
}
