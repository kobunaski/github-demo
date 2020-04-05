<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\subject, App\blogging;

class SubjectController extends Controller
{
    //
    public function getList(){
        $subject = subject::all();
        return view('admin.subject.list', ['subject' => $subject]);
    }

    public function getAdd(){
        return view('admin.subject.add');
    }

    public function postAdd(Request $request){
        $this -> validate($request,[
            'nameSubject' => 'required'
        ],[
            'nameSubject.required' => 'Subject name can\'t be empty'
        ]);
        $Subject = subject::all();
        $subject = new subject;

        $count = $Subject -> count();

        if ($count == 0)
        {
            $subject -> id = 1;
        }else{
            $array = $Subject[$count - 1] -> id + 1;
            $subject -> id = $array;
        }

        $subject -> nameSubject = $request -> nameSubject;
        if ($request -> status == 1){
            echo $subject -> status = 1;
        } else {
            echo $subject -> status = 0;
        }

        $subject -> save();

        return redirect('admin/subject/add') -> with('notificate', 'Add successfully');
    }

    public function getEdit($id){
        $subject = subject::find($id);
        return view('admin.subject.edit', ['subject' => $subject]);
    }

    public function postEdit(Request $request, $id){
        $subject = subject::find($id);

        $this -> validate($request,[
            'nameSubject' => 'required'
        ],[
            'nameSubject.required' => 'Subject name can\'t be empty'
        ]);

        $subject -> nameSubject = $request -> nameSubject;
        $subject -> idUpload = 0;
        if ($request -> status == 1){
            echo $subject -> status = 1;
        } else {
            echo $subject -> status = 0;
        }

        $subject -> save();

        return redirect('admin/subject/list/')->with('notificate', 'update successfully');
    }

    public function getDelete($id){
        $subject = subject::find($id);
        $subject->delete();

        return redirect('admin/subject/list') -> with('notificate', 'Successfully deleted');
    }
}
