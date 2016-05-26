<?php

namespace App\Http\Controllers;

use App\User;
use Crypt;
use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use PhpParser\Node\Expr\Cast\Array_;

class UserController extends Controller
{
    public function profile(){
        return "Day la user profile";
    }
    public function ListUser(){

        $data = User::select('id','name','email')->get()->toArray();

        return view('admin.listuser',compact('data'));
    }
    public  function EditUser($id){
        $data = User::find($id);
        return view('admin.edituser',compact('data'));
    }
    public function UpdateUser( UserRequest $request ,$id){
        $user = User::find($id);
        $user->name=$request->name;
        //echo $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        dd($user);
        $user->save();
        //return redirect('admin/user/list');
    }
    public function DeleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('admin/user/list');
    }

    public  function  AddgUser(){
        return view('admin.adduser');
    }
    public function AddUser( UserRequest $request){
        $password =  $request->password;
        $comfimpassword = $request->confirmPassword;
        if($password == $comfimpassword){
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;

            if (Hash::needsRehash($user->password))
            {
                $user->password = Hash::make($user->password);
            }
            //echo ($user->password);
            $user->save();
            return redirect('admin/user/list');
        }else{

            $erro='Mk xac nhan khong dung';
            return view('admin/user/add');
        }



    }

}