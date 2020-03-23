<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\room;

class RoomController extends Controller
{
    //
    public function getList(){
        $room = room::all();
        return view('admin.room.list', ['room' => $room]);
    }

    public function getAdd(){
        return view('admin.room.add');
    }

    public function postAdd(Request $request){
        $this -> validate($request,[
            'id' => 'required'
        ],[
            'id.required' => 'Room id can\'t be empty'
        ]);

        $room = new room;

        $room -> id = $request -> id;

        $room -> save();

        return redirect('admin/room/add') -> with('notificate', 'Add successfully');
    }

    public function getEdit($id){
        $room = room::find($id);
        return view('admin.room.edit', ['room' => $room]);
    }

    public function postEdit(Request $request, $id){
        $room = room::find($id);

        $this -> validate($request,[
            'id' => 'required'
        ],[
            'id.required' => 'Room id can\'t be empty',
        ]);

        $room -> id = $request -> id;

        $room -> save();

        return redirect('admin/room/list/')->with('notificate', 'update successfully');
    }

    public function getDelete($id){
        $room = room::find($id);
        $room -> delete();

        return redirect('admin/room/list') -> with('notificate', 'Successfully deleted');
    }
}
