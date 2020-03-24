<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\scheduleslot, App\schedule, App\slot, App\course, App\room;
class ScheduleslotController extends Controller
{
    //
    public function getList(){
        $course = course::all();
        $room = room::all();
        $schedule = schedule::all();
        $slot = slot::all();
        $scheduleslot = scheduleslot::all();
        return view('admin.scheduleslot.list', ['course'=>$course, 'room'=>$room,'slot'=> $slot, 'schedule' => $schedule,'scheduleslot'=> $scheduleslot]);
    }
    public function getAdd(){
        $course = course::all();
        $room = room::all();
        $schedule = schedule::all();
        $slot = slot::all();
        return view('admin.scheduleslot.add', ['course'=>$course, 'room'=>$room,'slot'=> $slot, 'schedule' => $schedule]);
    }
    public function postAdd(Request $request){
        $course = course::all();
        $room = room::all();
        $schedule = schedule::all();
        $slot = slot::all();
        $Scheduleslot = scheduleslot::all() -> count();
        $scheduleslot = new scheduleslot;
        $array = $Scheduleslot + 1;
        $scheduleslot -> id = $array;
        $scheduleslot -> idSchedule = $request -> idSchedule;
        $scheduleslot -> idSlot = $request -> idSlot;
        $scheduleslot -> day = $request -> day;
        $scheduleslot -> idRoom = $request -> idRoom;
        $scheduleslot -> idCourse = $request -> idCourse;

        $scheduleslot -> save();
        return redirect('admin/scheduleslot/add') -> with('notificate','Add successfully');
    }

    public function getEdit($id){
        $course = course::all();
        $room = room::all();
        $schedule = schedule::all();
        $slot = slot::all();
        $scheduleslot = scheduleslot::find($id);
        return view('admin.scheduleslot.edit',['course'=>$course, 'room'=>$room,'slot'=> $slot, 'schedule' => $schedule,'scheduleslot'=> $scheduleslot]);
    }
    public function postEdit(Request $request,$id){
        $course = course::all();
        $room = room::all();
        $schedule = schedule::all();
        $slot = slot::all();
        $scheduleslot = scheduleslot::find($id);
        $scheduleslot -> idSchedule = $request -> idSchedule;
        $scheduleslot -> idSlot = $request -> idSlot;
        $scheduleslot -> day = $request -> day;
        $scheduleslot -> idRoom = $request -> idRoom;
        $scheduleslot -> idCourse = $request -> idCourse;

        $scheduleslot -> save();
        return redirect('admin/scheduleslot/edit/'.$id)-> with('notificate','Update successfully');
    }

    public function getDelete($id){
        $scheduleslot = scheduleslot::find($id);
        $scheduleslot -> delete();
        return redirect('admin/scheduleslot/list') -> with('notificate','Delete successfully');
    }
}
