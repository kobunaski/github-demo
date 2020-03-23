<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\email;
use App\staff;

class EmailController extends Controller
{
    //
    public function getList(){
        $email = email::all();

        return view('admin.email.list', ['email' => $email]);
    }

//    public function getAdd(){
//        return view('admin.role.add');
//    }
//
//    public function postAdd(Request $request){
//        $this -> validate($request,[
//            'roleName' => 'required'
//        ],[
//            'roleName.required' => 'Role Name can\'t be empty'
//        ]);
//
//        $role = new role;
//        $role -> roleName = $request -> roleName;
//
//        $role -> save();
//
//        return redirect('admin/role/add') -> with('notificate', 'Add successfully');
//    }
//
//    public function getEdit($id){
//        $role = role::find($id);
//        return view('admin.role.edit', ['role' => $role]);
//    }
//
//    public function postEdit(Request $request, $id){
//        $role = role::find($id);
//        $this -> validate($request, [
//            'roleName' => 'required|unique:role,RoleName'
//        ],[
//            'roleName.required' => 'You haven\'t input role name',
//            'roleName.unique' => 'Role name has existed'
//        ]);
//        $role -> roleName = $request->roleName;
//
//        $role -> save();
//
//        return redirect('admin/role/edit/'.$id)->with('notificate', 'update successfully');
//    }

    public function getDelete($id){
        $email = email::find($id);
        $email->delete();

        return redirect('admin/email/list') -> with('notificate', 'Successfully deleted');
    }
}
