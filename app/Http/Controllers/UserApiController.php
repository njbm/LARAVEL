<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

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
    public function deleteUserJson(Request $request){
        if($request->isMethod('delete')){
            $data= $request->all();
            User::where('id', $data['id'])->delete();
            $message = 'User Deleted Successfully with JSON'; 
            return response()->json(['message'=>$message], 200);
        }

    }
    public function deleteMUser($ids){
        $ids = explode(',',$ids);
        User::whereIn('id',$ids)->delete();
        $message = 'Multiple User Deleted Successfully'; 
        return response()->json(['message'=>$message], 200);
    }
    public function deleteMUserJson(Request $jaber){
        $header = $jaber->header('Authorization');
        if($header==''){
            $message = 'Authorization is Required'; 
            return response()->json(['message'=>$message], 422);
        }
        else{
            if ($header=='eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjb2RlIjoiOTkwMCIsIm5hbWUiOiJKYWJlciBNYXN1ZCIsInRpdGxlIjoiQmh1aXlhbiJ9.ZK5ST-b9Y4YoHurqhlu8EIMpsuhzDLgMViY_WTm7KXo') {
                if($jaber->isMethod('delete')){
                    $data= $jaber->all();
                    User::whereIn('id', $data['ids'])->delete();
                    $message = 'Users Deleted Successfully with JSON'; 
                    return response()->json(['message'=>$message], 200);
                } 
            }
            else{
                $message = 'Authorization Does Not Match'; 
                return response()->json(['message'=>$message], 422);
            }
        }
        
    }

    public function userPassportApi(Request $request){
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

            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
                $user = User::where('email',$data['email'])->first();
                $access_token = $user->createToken($data['email'])->accessToken;
                User::where('email', $data['email'])->update(['access_token'=> $access_token]);
            }
            $message = 'User Registerd Successfully';
            return response()->json(['message'=>$message, 'access_token'=> $access_token], 201);
        }
        else{
            $message = 'Opps..!!! Something went Wrong';
            return response()->json(['message'=>$message], 422);
        }
    }
    public function userPassportApiLog(Request $request){
        if($request->ismethod('post')){
            $data = $request->all();

            $rules=[
                'email'=>'required|email|exists:users',
                'password'=>'required',
            ];  

            $flushMessage=[
                'email.required'=>'Email field is Required',
                'email.email'=>'Email must be a Valid email',
                'email.exists' => 'Email Does Not Exists',
                'password.required'=>'Password field is Required',
            ];

            $validate =Validator::make($data, $rules, $flushMessage);

            if($validate->fails()){
                return response()->json($validate->errors(), 422);
            }

            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
                $user = User::where('email',$data['email'])->first();
                $access_token = $user->createToken($data['email'])->accessToken;
                User::where('email', $data['email'])->update(['access_token'=> $access_token]);
            }
            $message = 'User Login Successfull';
            return response()->json(['message'=>$message, 'access_token'=> $access_token], 201);
        }
        else{
            $message = 'Invalid email or password';
            return response()->json(['message'=>$message], 422);
        }
    }




    // public function masud(){
    //     return 'Hi I am Jaber Masud';
    // }
}
