<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Models\User;

class UserApiController extends Controller
{
    public function showUser($id=null){
        if($id==''){
            $users=User::get();
            return response()->json(['users'=>$users],200);
        }
        else{
            $users=User::find($id);
            return response()->json(['users'=>$users],200);
        }
    }
    public function addUser(Request $request){
        if($request->ismethod('post')){
            $data = $request->all();

            $rules=[
                'name'=>'required',
                'email'=>'required|email|unique:users',
                'password'=>'required',
            ];  

            $flushMessage=[
                'name.required'=>'Name field is Required',
                'email.required'=>'Email field is Required',
                'email.email'=>'Email must be a Valid email',
                'email.unique' => 'Email is already in use',
                'password.required'=>'Password field is Required',
            ];

            $validate =Validator::make($data, $rules, $flushMessage);

            if($validate->fails()){
                return response()->json($validate->errors(), 422);
            }

            $user = new User();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->password = bcrypt($data['password']);
            $user->save();
            $message = 'User created Successfully';
            return response()->json(['message'=>$message], 201);
        }
    }



    // public function masud(){
    //     return 'Hi I am Jaber Masud';
    // }
}
