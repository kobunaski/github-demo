<?php

namespace App\Http\Controllers;

use App\coursedetail;
use Illuminate\Http\Request;
use App\User;
use App\course;
use App\subject;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function getIndex()
    {
        $user = User::count();
        $course = course::count();
        $subject = subject::count();
        return view('admin.dashboard.index', ['user' => $user, 'course' => $course, 'subject' => $subject]);
    }

    public function getIndex1()
    {
        $count = 0;
        $id = Auth::user()->id;
        $coursedetail = coursedetail::all();
        foreach ($coursedetail as $item) {
            if ($item->idStudent == $id) {
                $count++;
            }
        }
        return view('client.student.index1', ['count' => $count]);
    }

    public function getIndex2()
    {
        $count2 = 0;
        $id = Auth::user()->id;
        $coursedetail = coursedetail::all();
        foreach ($coursedetail as $item) {
            if ($item->idTutor == $id) {
                $count2++;
            }
        }
        $course_array = array();
        $id = Auth::user()->id;
        $coursedetail = coursedetail::all();
        foreach ($coursedetail as $item) {
            if ($item->idTutor == $id) {
                $course_array[] = $item -> idTutor;
            }
        }
        $unique_course = array_unique($course_array);
        return view('client.tutor.index2', ['count' => $unique_course, 'count2' => $count2]);
    }
}
