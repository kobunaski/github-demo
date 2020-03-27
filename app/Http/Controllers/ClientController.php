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

    public function getEditStaffCourse(Request $request){
        $coursedetail = coursedetail::all();
        $course = course::all();
        $user = User::all();
        $subject = subject::all();
        return view('client.staff.editcourse', ['user'=> $user, 'subject' => $subject, 'course' => $course, 'coursedetail'=> $coursedetail]);

    }

    public function postAddStaffCourse(Request $request){
//        $course = course::all();
//        $user = User::all();
//        $subject = subject::all();



//        if ($count == 0)
//        {
//            $coursedetail -> id = 1;
//        }else{
//            $array = $Coursedetail[$count - 1] -> id + 1;
//            $coursedetail -> id = $array;
//        }
//
//        $coursedetail -> idCourse = $request -> idCourse;
//        $coursedetail -> idTutor = $request -> idTutor;
//        $coursedetail -> idStudent = $request -> idStudent;
//        $coursedetail -> idSubject = $request -> idSubject;

        //$user = User::all();
        //$testCount = 0;

//        foreach ($user as $us){
//            if ($us -> idRole == 4) {
//                $testCount++;
//            }
//        }
//
//        for ($x = 0; $x < $testCount; $x++){
//            if ($request -> student[$x] == $user[$request -> student[$x]] -> id){
//                echo "true";
//            }
//        }
//        if (isset($request -> student)){
////            $test = count($request -> student);
////            for ($x = 0; $x < $test; $x++){
////
////            }
//            $coursedetail = new coursedetail();
//
//            foreach ($request -> student as $req){
//                $Coursedetail = coursedetail::all();
//
//                $count = $Coursedetail -> count();
//
//                if ($count == 0)
//                {
//                    $coursedetail -> id = 1;
//                }else{
//                    $array = $Coursedetail[$count - 1] -> id + 1;
//                    $coursedetail -> id = $array;
//                }
//
//                $coursedetail -> idCourse = $request -> idCourse;
//                $coursedetail -> idTutor = $request -> idTutor;
//                $coursedetail -> idSubject = $request -> idSubject;
//                $coursedetail -> idStudent = $req;
//
//                $coursedetail -> save();
//            }
//        }

        if(isset($request -> student))
        {

            $Coursedetail = coursedetail::all();

            $count = $Coursedetail -> count();
            $count2 = 0;

            if ($count == 0)
            {
                $id = 1;
            }else{
                $array = $Coursedetail[$count - 1] -> id + 1;
                $id = $array;
            }

            // Submitted books
            $idStudent = $request -> student;
            $idCourse = $request -> idCourse;
            $idTutor = $request -> idTutor;
            $idSubject = $request -> idSubject;

            // Book records to be saved
            $coursedetail_records = [];

            // Add needed information to book records
            foreach($idStudent as $req)
            {
                $count2++;
                if(! empty($req))
                {
                    // Formulate record that will be saved
                    $coursedetail_records[] = [
                        'id' => ($id + $count2) - 1,
                        'idCourse' => $idCourse,
                        'idTutor' => $idTutor,
                        'idSubject' => $idSubject,
                        'idStudent' => $req
                    ];
                }
            }

            // Insert book records
            coursedetail::insert($coursedetail_records);
        }

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

        //return view('client.staff.course');
    }
}
