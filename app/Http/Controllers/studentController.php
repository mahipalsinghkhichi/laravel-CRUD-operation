<?php

namespace App\Http\Controllers;

use App\Models\studentModel;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use Exception;
use Illuminate\Support\Facades\Hash;
// use Dotenv\Validator;
use Illuminate\Support\Facades\Validator;


class studentController extends Controller
{
   

    public function create()
    {
        return view('register.create');
    }

    public function register()
    {
        return view('register');
    }
    public function registerPost(StudentRequest $request){
  
        // return "mahipal controller,.return";
        //dd($request->all());
        //return response()->json(['success'=>'Added new records']);
        // dd($request->all());
        
            // $validator = Validator::make($request->all(), [
            //     'name' => 'required',
            //     'email' => 'required',
            //     'password' => 'required',
            // ]);
      
            // if ($validator->fails()) {
            //     return response()->json([
            //                 'error' => $validator->errors()->all()
            //             ]);
            // }
           
            // Post::create([
            //     'name' => $request->name,
            //     'email' => $request->email,
            // ]);
      
            // return response()->json(['success' => 'Post created successfully.']);
        
            // }
            $success = ['User successfully loged In'];
           $failed = ['User not registered yet'];

        try{
        
          $student = new studentModel();
          $student->name = $request->input('name');
          $student->email = $request->input('email');
          $student->password = base64_encode($request->input('password'));
          $student->save();
          return $success;
          
            }catch(Exception $e){
            return $failed;

        }
        //   return redirect('registerPost')->with('status', 'Ajax Form Data Has Been validated and store into database');
        // return redirect('register')->with('status','Student Added Successfully');
      
        // array:2 [
        //     "someName" => "someClass"
        //     "someOtherName" => "someOtherClass"
        //   ]
     

    }
    // $validatedData = $request->validate([
    //     'name' => 'required',
    //     'password' => 'required|min:5',
    //     'email' => 'required|email|unique:users'
    // ], [
    //     'name.required' => 'Name field is required.',
    //     'password.required' => 'Password field is required.',
    //     'email.required' => 'Email field is required.',
    //     'email.email' => 'Email field must be email address.'
    // ]);
       
}
