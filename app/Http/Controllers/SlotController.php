<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slot;
class SlotController extends Controller
{
    //
    public function getList(){
        $slot = slot::all();
        return view('admin.slot.list',['slot'=> $slot]);
    }
    public function getAdd(){
        return view('admin.slot.add');
    }
    public function postAdd(Request $request){
        $Slot = slot::all() -> count();
        $slot = new slot;
        $array = $Slot + 1;
        $slot -> id = $array;
        $slot -> save();
        return redirect('admin/slot/add') -> with('notificate','Add successfully');
    }
    public function getDelete($id){
        $slot = slot::find($id);
        $slot -> delete();
        return redirect('admin/slot/list') -> with('notificate','Delete successfully');
    }
}
