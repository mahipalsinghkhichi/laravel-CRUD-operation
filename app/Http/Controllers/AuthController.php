<?php

namespace App\Http\Controllers;

use App\Models\{CandidateModel, LoginModel, studentModel};
use App\Models\UserModel;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        // dd(url('registersPost'));
        return view('login.index');
    }
    public function login()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        // dump($request->email);
        // $checCred = studentModel::get();
        // dd($checCred->toArray());
        // return redirect()->back()->with('Status', 'login Added Successfully');
        // dd($checCred->toArray()->email);


        //    dd($checCred);
        $login = new studentModel();
        $login->email = $request->input('email');
        $email = $request->input('email');
        //  dd($login->get());
        $changesEmail = studentModel::where('email', $email)->first();
        $login->password = $request->input('password');
        $password = $request->input('password');
        $DBPass = $changesEmail->password;
        $DBPass01 = base64_decode($DBPass);
        // dd($DBPass->toArray()); 

        if (($email == $changesEmail->email) && ($password == $DBPass01)) {
            $message = 'User Successfully logged in';
            $page = 'candidateTable';
        } else {
            $message = 'Entered record is not correct';
            $page = 'login';
        }
        return redirect($page)->with('message', $message);
    }



    public function dashboard()
    {
        $data= studentModel::paginate(5);
        return view('dashboard',['students'=>$data]);
        
    }
    
  // there was a code for candidateTable
  
    // public function createBooking()
    // {
    //     $products = DB::table('products')
    //         ->orderBy('id', 'asc')
    //         ->lists('name', 'id'); 
    //     return View::make('users.addbooking', array('products' => $products));
    // }
}
