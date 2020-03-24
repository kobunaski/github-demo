<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\course, App\staff, App\subject;

class CourseController extends Controller
{
    //
    //
    public function getList(){
        $course = course::all();
        $staff = staff::all();
        $student = staff::all();
        $subject = subject::all();
        return view('admin.course.list', ['course' => $course, 'staff' => $staff, 'student' => $student, 'subject' => $subject]);
    }

    public function getAdd(){
        $subject = subject::all();
        return view('admin.course.add', ['subject' => $subject]);
    }

    public function postAdd(Request $request){
        $this -> validate($request,[
            'courseName' => 'required|max:10',
            'idSubject' => 'required'
        ],[
            'courseName.required' => 'Course Name can\'t be empty',
            'courseName.max' => 'Course Name can\' be longer than 10 characters',
            'idSubject.required' => 'Choose a subject'
        ]);

        $course = new course;
        $course -> courseName = $request -> courseName;
        $course -> idStaff = 0;
        $course -> idStudent = 0;
        $course -> idSubject = $request -> idSubject;
        $course -> save();

        return redirect('admin/course/add') -> with('notificate', 'Add successfully');
    }

    public function getEdit($id){
        $course = course::find($id);
        $staff = staff::all();
        $student = staff::all();
        $subject = subject::all();
        return view('admin.course.edit', ['course' => $course, 'staff' => $staff, 'student' => $student, 'subject' => $subject]);
    }

    public function postEdit(Request $request, $id){
        $course = course::find($id);

        $this -> validate($request,[
            'courseName' => 'required|max:10',
            //'idSubject' => 'required'
        ],[
            'courseName.required' => 'Course Name can\'t be empty',
            'courseName.max' => 'Course Name can\' be longer than 10 characters',
            //'idSubject.required' => 'Choose a subject'
        ]);

        $course -> courseName = $request -> courseName;
        $course -> idSubject = $request -> idSubject;

        $course -> save();

        return redirect('admin/course/list/')->with('notificate', 'update successfully');
    }

    public function getDelete($id){
        $course = course::find($id);
        $course -> delete();

        return redirect('admin/course/list') -> with('notificate', 'Successfully deleted');
    }
}
