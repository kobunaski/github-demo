<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\messagebox;
use App\course;
use App\User;
use Illuminate\Support\Facades\Auth;
class MessageboxController extends Controller
{
    //
    public function getDelete($id, $idCourse){
        $messagebox = messagebox::find($id);
        $messagebox -> delete();

        return redirect('admin/course/edit/'.$idCourse) -> with('notificate', 'Successfully deleted');
    }

    public function getMessCourse($id){
        $course = course::find($id);
        $user = User::all();
        $messagebox = messagebox::all();
        return view('client.student.messagecourse', ['user'=> $user, 'course' => $course, 'messagebox' => $messagebox]);
    }
    public function getMessCourse2($id){
        $course = course::find($id);
        $user = User::all();
        $messagebox = messagebox::all();
        return view('client.tutor.messagecourse', ['user'=> $user, 'course' => $course, 'messagebox' => $messagebox]);
    }

    public function postMessCourse($id, Request $request){
        $idCourse = $id;
        $course = course::find($id);
        $messagebox = new messagebox;
        $messagebox -> idCourse = $idCourse;
        $messagebox -> idUser = Auth::User()->id;
        $messagebox -> content = $request -> messageContent;
        $messagebox -> save();

        return redirect('client/student/messagecourse/'.$id) -> with('notificate', 'Successfully deleted');
    }
    public function postMessCourse2($id, Request $request){
        $idCourse = $id;
        $course = course::find($id);
        $messagebox = new messagebox;
        $messagebox -> idCourse = $idCourse;
        $messagebox -> idUser = Auth::User()->id;
        $messagebox -> content = $request -> messageContent;
        $messagebox -> save();

        return redirect('client/tutor/messagecourse/'.$id) -> with('notificate', 'Successfully deleted');
    }
}
