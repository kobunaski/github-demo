<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogging;
class BloggingController extends Controller
{
    //
    public function getList(){
        $blogging = blogging::all();
        return view('admin.blogging.list',['blogging'=> $blogging]);
    }
    public function getEdit($id){
        $blogging = blogging::find($id);
        return view('admin.blogging.edit',['blogging'=> $blogging]);
    }
    public function postEdit(Request $request,$id){
        $blogging = blogging::find($id);
        $this -> validate($request, [
            'content1' => 'required|min:5'
        ],[
            'content1.required' =>'You have to enter the document link title',
            'content1.min'=>'You must input more than 5 characters',
        ]);
        $blogging -> content = $request -> content1;
        $blogging -> save();
        return redirect('admin/blogging/edit/'.$id)-> with('notificate','Update successfully');
    }

    public function getAdd(){
        return view('admin.blogging.add');
    }
    public function postAdd(Request $request){
        $this -> validate($request,[
            'content1' => 'required|min:5'
        ],[
            'content1.required' =>'You have to enter the document link',
            'content1.min'=>'You must input more than 5 characters',
        ]);
        $Blogging = blogging::all() -> count();
        $blogging = new blogging;
        $array = $Blogging + 1;
        $blogging -> id = $array;
        $blogging -> content = $request -> content1;
        $blogging -> save();
        return redirect('admin/blogging/add') -> with('notificate','Add successfully');
    }

    public function getDelete($id){
        $blogging = blogging::find($id);
        $blogging -> delete();
        return redirect('admin/blogging/list') -> with('notificate','Delete successfully');
    }
}
