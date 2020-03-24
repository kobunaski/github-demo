<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\course, App\staff;

class CourseController extends Controller
{
    //
    //
    public function getList(){
        $course = course::all();
        $staff = staff::all();
        return view('admin.course.list', ['course' => $course, 'staff' => $staff]);
    }

    public function getAdd(){
        $staff = staff::all();
        return view('admin.course.add', ['staff' => $staff]);
    }

    public function postAdd(Request $request){
        $this -> validate($request,[
            'courseName' => 'required|max:10',
            'idStaff' => 'required'
        ],[
            'courseName.required' => 'Course Name can\'t be empty',
            'courseName.max' => 'Course Name can\' be longer than 10 characters',
            'idStaff.required' => 'Choose a tutor'
        ]);

        $Course = room::all() -> count();
        $course = new room;
        $array = $Course + 1;
        $course -> id = $array;
        $course -> courseName = $request -> courseName;
        $course -> idStaff = $request -> idStaff;
        $course -> idStudent = 0;
        $course -> save();

        return redirect('admin/course/add') -> with('notificate', 'Add successfully');
    }

    public function getEdit($id){
        $course = course::find($id);
        $staff = staff::all();
        return view('admin.course.edit', ['course' => $course, 'staff' => $staff]);
    }

    public function postEdit(Request $request, $id){
        $course = course::find($id);

        $this -> validate($request,[
            'courseName' => 'required|max:10',
            'idStaff' => 'required'
        ],[
            'courseName.required' => 'Course Name can\'t be empty',
            'courseName.max' => 'Course Name can\' be longer than 10 characters',
            'idStaff.required' => 'Choose a tutor'
        ]);

        $course -> courseName = $request -> courseName;
        $course -> idStaff = $request -> idStaff;
        $course -> idStudent = 0;

        $course -> save();

        return redirect('admin/course/list/')->with('notificate', 'update successfully');
    }

    public function getDelete($id){
        $course = course::find($id);
        $course -> delete();

        return redirect('admin/course/list') -> with('notificate', 'Successfully deleted');
    }
}
