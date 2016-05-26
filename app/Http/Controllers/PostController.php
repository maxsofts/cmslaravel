<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Posts;
use App\Http\Requests\PostRequest;
use App\Category;

class PostController extends Controller
{
    public function AllPosts(){
        $data = Posts::select('id','title','author','category','tags','status')->get()->toArray();
        return view('admin.posts.list',compact('data'));

    }

    public function AddgPosts(){
        $data = Category::select('name')->get()->toArray();
        $name = User::select('name')->get()->toArray();
        return view('admin.posts.add',compact('data'),compact('name'));
    }
    public  function AddPosts(PostRequest $request){


        $data = new  Posts();
        $s="";
        foreach ($request->category as $row){
            $s = $s . $row .",";
        }
        $s = rtrim($s,",");
        $data->title = $request->title;
        $data->author = $request->author;
        $data->category = $s;
        $data->tags = $request->tags;
        $data->status = $request->status;


        $data->save();


        return redirect('admin/posts/all');

    }
    public function EditPosts($id){
        $data = Posts::find($id);
        $name = Category::select('name')->get()->toArray();
       // $data = Posts::select('id','title','author','category','tags','status')->get()->toArray();

        return view('admin.posts.update',compact('data'),compact('name'));
    }

    public function UpdatePosts( PostRequest $request,$id){
        $data = Posts::find($id);
        $s="";
        foreach ($request->category as $row){
            $s = $s . $row .",";
        }
        $s = rtrim($s,",");
        $data->title = $request->title;
        $data->author = $request->author;
        $data->category = $s;
        $data->tags = $request->tags;
        $data->status = $request->status;


        $data->save();


        return redirect('admin/posts/all');

    }
    public  function DeletePosts($id){
        $data = Posts::find($id);
        $data->delete();
        return redirect('admin/posts/all');
    }
    public function DeleteAllPosts(){
        $data = Posts::all();

        $arr = $_POST['name'];
        dd($arr);
       /*if(isset($_POST['deleteall'])){
           echo "OK";
       }else if(isset($_POST['editall'])){
           echo "Edit";
       }else{
           echo "Ko co i";
       }*/

    }
}
