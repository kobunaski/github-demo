<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blogging, App\subject;
class BloggingController extends Controller
{
    //
    public function getList(){
        $blogging = blogging::all();
        $subject = subject::all();
        return view('admin.blogging.list',['blogging'=> $blogging, 'subject'=> $subject]);
    }
    public function getEdit($id){
        $blogging = blogging::find($id);
        $subject = subject::all();
        return view('admin.blogging.edit',['blogging'=> $blogging, 'subject'=> $subject]);
    }
    public function postEdit(Request $request,$id){
        $blogging = blogging::find($id);

        $this -> validate($request, [
            'content1' => 'required|min:5',
            'idSubject' => 'required'
        ],[
            'content1.required' =>'You have to enter the document link title',
            'content1.min'=>'You must input more than 5 characters',
            'idSubject.required'=>'You must choose a subject',
        ]);

        $blogging -> content = $request -> content1;
        $blogging -> idSubject = $request -> idSubject;

        $blogging -> save();

        return redirect('admin/blogging/edit/'.$id)-> with('notificate','Update successfully');
    }

    public function getAdd(){
        $subject = subject::all();
        return view('admin.blogging.add', ['subject'=> $subject]);
    }
    public function postAdd(Request $request){

        $this -> validate($request, [
            'content1' => 'required|min:5',
            'idSubject' => 'required'
        ],[
            'content1.required' =>'You have to enter the document link title',
            'content1.min'=>'You must input more than 5 characters',
            'idSubject.required'=>'You must choose a subject',
        ]);

        $Blogging = blogging::all();
        $blogging = new blogging;

        $count = $Blogging -> count();
        $array = $Blogging[$count - 1] -> id + 1;

        $blogging -> id = $array;
        $blogging -> content = $request -> content1;
        $blogging -> idSubject = $request -> idSubject;

        $blogging -> save();
        return redirect('admin/blogging/add') -> with('notificate','Add successfully');
    }

    public function getDelete($id){
        $blogging = blogging::find($id);
        $blogging -> delete();
        return redirect('admin/blogging/list') -> with('notificate','Delete successfully');
    }
}
