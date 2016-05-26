<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Category;

use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{

    // get all
    public function AllCategory(){
        //$data = Category::select('id','name','description','slug','cate_parent_id')->get()->toArray();
        $data = Category::paginate(5);
        return view('admin.category.list',compact('data'));
    }

    //get form add category
    public function AddCategory(){
        $data = Category::select('id','name')->get()->toArray();
        return view('admin.category.add',compact('data'));

    }

    //post add category
    public function PostCategory( CategoryRequest $request){
        $data = new Category();
        $data->name = $request->name;
        $data->description = $request->description;
        $data->slug = $request->slug;
        $data->cate_parent_id =$request->cate_parent_id;
        $data->save();

       return redirect('admin/category/all');

    }

    public  function EditCategory($id){
        $data = Category::find($id);
      

        return view('admin.category.update',compact('data'));
    }

    public function DeleteCategory($id){
        $data = Category::find($id);
        $data->delete();
        return redirect('admin/category/all');
    }
}
