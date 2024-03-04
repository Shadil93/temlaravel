<?php

namespace App\Http\Controllers;


use  Illuminate\Support\Facades\Redirect;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class HomeController extends Controller
{
    //

    public function index(){
        return view('index');
    }
    public function register(){
        return view('register');
    }
    public function do_register(Request $request){
       
         $request->validate([
              'name'=>'required',
              'mobile'=>'required',
              'address'=>'required',
              'email'=>'required',
              'password'=>'required',
         ]);
         Employee::create([
              'name'=>$request->name,
              'mobile'=>$request->mobile,
              'address'=>$request->address,
              'email'=>$request->email,
              'password'=>bcrypt($request->password),
         ]);


         
        return redirect()->route('index')->with('success,register successfully');
    }


    public function view(){
        $data=Employee::all();
        return view('view',compact('data'));
    }

    public function edit($id){
        $data = Employee::find($id);
        return view('edit',compact('data'));
    }

    public function update(Request $request,$id){
        $dd=Employee::find($id);

        $dd->update([
            'name'=>$request->name,
            'address'=>$request->address,
            'mobile'=>$request->mobile,
            'email'=>$request->email,

        ]);

        return redirect()->route('view')->with('success','update successfully');

    }
    public function delete($id){
        Employee::find($id)->delete();
        return redirect()->route('view')->with('success',"deleted");
    }
   

    public function login(){
        return view('layout.login');
    }
    public function do_login(Request $request){
        $credentials=$request->only('email','password');
        if(Auth::guard('employee')->attempt($credentials)){
            $request->session()->regenerate();
           return redirect()->route('dashboard');

        }
    }

    public function dashboard()
    {
        return view('dashboard');
    }
    public function profile()
    {
        return view('profile');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}