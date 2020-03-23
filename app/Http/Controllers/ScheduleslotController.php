<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\scheduleslot, App\schedule, App\slot;
class ScheduleslotController extends Controller
{
    //
    public function getList(){
        $schedule = schedule::all();
        $slot = slot::all();
        $scheduleslot = scheduleslot::all();
        return view('admin.scheduleslot.list', ['slot'=> $slot, 'schedule' => $schedule,'scheduleslot'=> $scheduleslot]);
    }
    public function getAdd(){
        $schedule = schedule::all();
        $slot = slot::all();
        return view('admin.scheduleslot.add', ['slot'=> $slot, 'schedule' => $schedule]);
    }
    public function postAdd(Request $request){
        $schedule = schedule::all();
        $slot = slot::all();
        $Scheduleslot = scheduleslot::all() -> count();
        $scheduleslot = new scheduleslot;
        $array = $Scheduleslot + 1;
        $scheduleslot -> id = $array;
        $scheduleslot -> idSchedule = $request -> idSchedule;
        $scheduleslot -> idSlot = $request -> idSlot;
        $scheduleslot -> day = $request -> day;
        $scheduleslot -> idSubject = 0;
        $scheduleslot -> idRoom = 0;
        $scheduleslot -> idCourse = 0;

        $scheduleslot -> save();
        return redirect('admin/scheduleslot/add') -> with('notificate','Add successfully');
    }

    public function getEdit($id){
        $schedule = schedule::all();
        $slot = slot::all();
        $scheduleslot = scheduleslot::find($id);
        return view('admin.scheduleslot.edit',['slot'=> $slot, 'schedule' => $schedule,'scheduleslot'=> $scheduleslot]);
    }
    public function postEdit(Request $request,$id){
        $schedule = schedule::all();
        $slot = slot::all();
        $scheduleslot = scheduleslot::find($id);
        $scheduleslot -> idSchedule = $request -> idSchedule;
        $scheduleslot -> idSlot = $request -> idSlot;
        $scheduleslot -> day = $request -> day;
        $scheduleslot -> idSubject = 0;
        $scheduleslot -> idRoom = 0;
        $scheduleslot -> idCourse = 0;
        $scheduleslot -> save();
        return redirect('admin/scheduleslot/edit/'.$id)-> with('notificate','Update successfully');
    }

    public function getDelete($id){
        $scheduleslot = scheduleslot::find($id);
        $scheduleslot -> delete();
        return redirect('admin/scheduleslot/list') -> with('notificate','Delete successfully');
    }
}
