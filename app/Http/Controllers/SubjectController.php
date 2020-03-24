<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\subject;

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
        $Subject = schedule::all() -> count();
        $subject = new subject;
        $array = $Subject + 1;
        $subject -> id = $array;

        $subject -> nameSubject = $request -> nameSubject;
        $subject -> idBlogging = 0;
        $subject -> idUpload = 0;
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

        $subject -> nameSubject = $request->nameSubject;
        $subject -> idBlogging = 0;
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
