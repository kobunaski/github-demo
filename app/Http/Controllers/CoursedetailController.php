<?php

namespace App\Http\Controllers;

use App\course;
use App\coursedetail;
use App\subject;
use App\User;
use Illuminate\Http\Request;

class CoursedetailController extends Controller
{
    //
    public function getList(){
        $coursedetail = coursedetail::all();
        $course = course::all();
        $user = User::all();
        $subject = subject::all();
        return view('admin.coursedetail.list', ['coursedetail' => $coursedetail, 'course' => $course, 'user' => $user, 'subject' => $subject]);
    }

    public function getAdd(){
        $course = course::all();
        $user = User::all();
        $subject = subject::all();
        return view('admin.coursedetail.add', ['subject' => $subject, 'user' => $user, 'course' => $course]);
    }

    public function postAdd(Request $request){
//        $this -> validate($request,[
//            'courseName' => 'required|max:10',
//            'idSubject' => 'required'
//        ],[
//            'courseName.required' => 'Course Name can\'t be empty',
//            'courseName.max' => 'Course Name can\' be longer than 10 characters',
//            'idSubject.required' => 'Choose a subject'
//        ]);
        $coursedetail = new coursedetail;

        $Coursedetail = coursedetail::all();
        $coursedetail = new coursedetail;

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
        $coursedetail -> save();

        return redirect('admin/coursedetail/add') -> with('notificate', 'Add successfully');
    }

    public function getEdit($id){
        $coursedetail = coursedetail::find($id);
        $user = User::all();
        $course = course::all();
        $subject = subject::all();
        return view('admin.coursedetail.edit', ['course' => $course, 'user' => $user, 'coursedetail' => $coursedetail, 'subject' => $subject]);
    }

    public function postEdit(Request $request, $id){
        $coursedetail = coursedetail::find($id);

//        $this -> validate($request,[
//            'courseName' => 'required|max:10',
//            //'idSubject' => 'required'
//        ],[
//            'courseName.required' => 'Course Name can\'t be empty',
//            'courseName.max' => 'Course Name can\' be longer than 10 characters',
//            //'idSubject.required' => 'Choose a subject'
//        ]);

        $coursedetail -> idCourse = $request -> idCourse;
        $coursedetail -> idSubject = $request -> idSubject;
        $coursedetail -> idTutor = $request -> idTutor;
        $coursedetail -> idStudent = $request -> idStudent;

        $coursedetail -> save();

        return redirect('admin/coursedetail/list/')->with('notificate', 'update successfully');
    }

    public function getDelete($id){
        $course = course::find($id);
        $course -> delete();

        return redirect('admin/course/list') -> with('notificate', 'Successfully deleted');
    }
}
