<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guest;
use App\Models\Staff;
use Hash;
use Paginate;
use Session;

class AdminController extends Controller
{
    public function addadmin(Request $request)
    {
    return view('admin.addadmin');
    }

    public function addstaff(Request $request)
    {
        return view('admin.addstaff');

    }

    public function alladmin()
    {
        $user = User::all();
        return view('admin.alladmin', ['user' =>$user]);
    }

    public function allguest()
    {
        $user = Guest::all();
        return view('admin.allguest',  ['user' =>$user]);
    }

    public function allstaff()
    {
        $user = Staff::all();
        return view('admin.allstaff',  ['user' =>$user]);
    }

    public function insertadmin(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success', 'User added successfully');
        }else{
            return back()->with('fail', 'something went wrong, try again');
        }
    }

    public function insertstaff (Request $request){
        $user = new Staff();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->dob = $request->dob;
        $user->phone = $request->phone;
        $image = $request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('staffimage', $imagename);
        $user->image =$imagename;

        $res = $user->save();
        if($res){
            return back()->with('success', 'User added successfully');
        }else{
            return back()->with('fail', 'something went wrong, try again');
        }
    }

    public function logout()
    {
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
        }
    }



}
