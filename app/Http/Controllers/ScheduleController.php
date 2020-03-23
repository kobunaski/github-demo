<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\schedule;
class ScheduleController extends Controller
{
    //
    public function getList(){
        $schedule = schedule::all();
        return view('admin.schedule.list',['schedule'=> $schedule]);
    }
    public function getAdd(){
        return view('admin.schedule.add');
    }
    public function postAdd(Request $request){
        $Schedule = schedule::all() -> count();
        $schedule = new schedule;
        $array = $Schedule + 1;
        $schedule -> id = $array;
        $schedule -> startTime = $request -> startTime;
        $schedule -> endTime = $request -> endTime;
        $schedule -> save();
        return redirect('admin/schedule/add') -> with('notificate','Add successfully');
    }

    public function getEdit($id){
        $schedule = schedule::find($id);
        return view('admin.schedule.edit',['schedule'=> $schedule]);
    }
    public function postEdit(Request $request,$id){
        $schedule = schedule::find($id);
        $schedule -> startTime = $request -> startTime;
        $schedule -> endTime = $request -> endTime;
        $schedule -> save();
        return redirect('admin/schedule/edit/'.$id)-> with('notificate','Update successfully');
    }

    public function getDelete($id){
        $schedule = schedule::find($id);
        $schedule -> delete();
        return redirect('admin/schedule/list') -> with('notificate','Delete successfully');
    }
}
