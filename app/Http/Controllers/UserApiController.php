<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Models\User;

class UserApiController extends Controller
{
    //Get Api for Show User
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
    //Post Api for add User
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
    //Post Api for add Multiple User
    public function addMultipleUser(Request $request){
        if($request->ismethod('post')){
            $data = $request->all();
            $rules=[
                'name.*'=>'required',
                'email.*'=>'required|email|unique:users',
                'password.*'=>'required',
            ];  
            $flushMessage=[
                'name.*.required'=>'Name field is Required',
                'email.*.required'=>'Email field is Required',
                'email.*.email'=>'Email must be a Valid email',
                'email.*.unique' => 'Email is already in use',
                'password.*.required'=>'Password field is Required',
            ];
            $validate =Validator::make($data, $rules, $flushMessage);

            if($validate->fails()){
                return response()->json($validate->errors(), 422);
            }

            foreach($data['users'] as $muser){
                $user = new User();
                $user->name = $muser['name'];
                $user->email = $muser['email'];
                $user->password = bcrypt($muser['password']);
                $user->save();
                $message = 'User created Successfully'; 
            }
            return response()->json(['message'=>$message], 201);
        }
    }

    //Put Api for update user
    public function updateUser(Request $request, $id){
        if($request->ismethod('put')){
            $data = $request->all();
            $rules=[
                'name'=>'required',
                'password'=>'required',
            ];  
            $flushMessage=[
                'name.required'=>'Name field is Required',
                'password.required'=>'Password field is Required',
            ];
            $validate =Validator::make($data, $rules, $flushMessage);

            if($validate->fails()){
                return response()->json($validate->errors(), 422);
            }
            $user = User::findOrFail($id);
            $user->name = $data['name'];
            $user->password = bcrypt($data['password']);
            $user->save();
            $message = 'User Updated Successfully'; 
            return response()->json(['message'=>$message], 202);
        }
    }
    //Patch Api for update Single Record
    public function updateSingleRecord(Request $request, $id){
        if($request->ismethod('patch')){
            $data = $request->all();
            $rules=[
                'name'=>'required',
            ];  
            $flushMessage=[
                'name.required'=>'Name field is Required',
            ];
            $validate =Validator::make($data, $rules, $flushMessage);

            if($validate->fails()){
                return response()->json($validate->errors(), 422);
            }
            $user = User::findOrFail($id);
            $user->name = $data['name'];
            $user->save();
            $message = 'User Updated Successfully'; 
            return response()->json(['message'=>$message], 202);
        }
    }
    //Delete Api for delete User
    public function deleteUser($id=null){
        User::findOrFail($id)->delete();
        $message = 'User Deleted Successfully'; 
        return response()->json(['message'=>$message], 200);
    }
    //Delete Api with JSON
    public function deleteUserJson(Request $jaber){
        if($jaber->isMethod('delete')){
            $data= $jaber->all();
            User::where(['id', $data['id']]);
            $message = 'User Deleted Successfully with JSON'; 
            return response()->json(['message'=>$message], 200);
        }

    }




    // public function masud(){
    //     return 'Hi I am Jaber Masud';
    // }
}
