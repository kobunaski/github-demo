<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\course, App\staff, App\subject, App\messagebox;

class CourseController extends Controller
{
    //
    //
    public function getList(){
        $course = course::all();
        return view('admin.course.list', ['course' => $course]);
    }

    public function getAdd(){
        return view('admin.course.add');
    }

    public function postAdd(Request $request){
        $this -> validate($request,[
            'courseName' => 'required|max:10',
        ],[
            'courseName.required' => 'Course Name can\'t be empty',
            'courseName.max' => 'Course Name can\' be longer than 10 characters'
        ]);

        $Course = course::all();
        $course = new course;

        $count = $Course -> count();

        if ($count == 0)
        {
            $course -> id = 1;
        }else{
            $array = $Course[$count - 1] -> id + 1;
            $course -> id = $array;
        }

        $course -> courseName = $request -> courseName;
        $course -> save();

        return redirect('admin/course/add') -> with('notificate', 'Add successfully');
    }

    public function getEdit($id){
        $course = course::find($id);
        return view('admin.course.edit', ['course' => $course]);
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

        $course -> save();

        return redirect('admin/course/list/')->with('notificate', 'update successfully');
    }

    public function getDelete($id){
        $course = course::find($id);
        $course -> delete();

        return redirect('admin/course/list') -> with('notificate', 'Successfully deleted');
    }
}
