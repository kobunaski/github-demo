<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\role;

class RoleController extends Controller
{
    //
    public function getList(){
        $role = role::all();
        return view('admin.role.list', ['role' => $role]);
    }

    public function getAdd(){
        return view('admin.role.add');
    }

    public function postAdd(Request $request){
        $this -> validate($request,[
           'roleName' => 'required'
        ],[
            'roleName.required' => 'Role Name can\'t be empty'
        ]);
        $Roles = role::all();
        $role = new role;

        $count = $Roles -> count();

        if ($count == 0)
        {
            $role -> id = 1;
        }else{
            $array = $Roles[$count - 1] -> id + 1;
            $role -> id = $array;
        }

        $role -> roleName = $request -> roleName;

        $role -> save();

        return redirect('admin/role/add') -> with('notificate', 'Add successfully');
    }

    public function getEdit($id){
        $role = role::find($id);
        return view('admin.role.edit', ['role' => $role]);
    }

    public function postEdit(Request $request, $id){
        $role = role::find($id);
        $this -> validate($request, [
                'roleName' => 'required|unique:role,RoleName'
            ],[
                'roleName.required' => 'You haven\'t input role name',
                'roleName.unique' => 'Role name has existed'
            ]);
        $role -> roleName = $request->roleName;

        $role -> save();

        return redirect('admin/role/edit/'.$id)->with('notificate', 'update successfully');
    }

    public function getDelete($id){
        $role = role::find($id);
        $role->delete();

        return redirect('admin/role/list') -> with('notificate', 'Successfully deleted');
    }
}
