<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
class NewsController extends Controller
{
    //
    public function getList(){
        $news = news::all();
        return view('admin.news.list',['news'=> $news]);

    }
    public function getEdit($id){
        $news = news::find($id);
        return view('admin.news.edit',['news'=> $news]);
    }
    public function postEdit(Request $request,$id){
        $news = news::find($id);
        $this -> validate($request,[
            'title' => 'required|min:5',
            'content1' => 'required|min:15'
        ],[
            'title.required' =>'You have to enter the news title',
            'title.min'=>'You must input more than 5 characters',
            'content1.required' =>'You have to enter the content',
            'content1.min'=>'You must input more than 15 characters'
        ]);
        $news -> title = $request -> title;
        $news -> content = $request -> content1;
        $news -> status = $request -> status;
        if($request -> hasFile('image'))
        {
            $file = $request -> file('image');
            $image = $file ->getClientOriginalName();
            $file -> move('admin_asset/upload/image/news', $image);
            $news -> image = $image;
        }
        if ($request -> status == 1){
            $news -> status = 1;
        } else {
            $news -> status = 0;
        }
        //echo $news -> status;
        $news -> save();
        return redirect('admin/news/edit/'.$id)-> with('notificate','Update successfully');
    }

    public function getAdd(){
        return view('admin.news.add');
    }
    public function postAdd(Request $request){
        $this -> validate($request,[
            'title' => 'required|min:5',
            'content1' => 'required|min:15'
        ],[
            'title.required' =>'You have to enter the news title',
            'title.min'=>'You must input more than 5 characters',
            'content1.required' =>'You have to enter the content',
            'content1.min'=>'You must input more than 15 characters'
        ]);
        $News = news::all();
        $news = new news;

        $count = $News -> count();

        if ($count == 0)
        {
            $news -> id = 1;
        }else{
            $array = $News[$count - 1] -> id + 1;
            $news -> id = $array;
        }

        $news -> title = $request -> title;
        $news -> content = $request -> content1;
        if($request -> hasFile('image'))
        {
            $file = $request -> file('image');
            $image = $file ->getClientOriginalName();
            $file -> move('admin_asset/upload/image/news', $image);
            $news -> image = $image;
        }else{
            $news -> image = "";
        }
        $news -> status = $request -> status;
        if ($request -> status == 1){
            $news -> status = 1;
        } else {
            $news -> status = 0;
        }
        //echo $news -> status;
        $news -> save();
        return redirect('admin/news/list') -> with('notificate','Add successfully');
    }

    public function getDelete($id){
        $news = news::find($id);
        $news -> delete();
        return redirect('admin/news/list') -> with('notificate','Delete successfully');
    }
}
