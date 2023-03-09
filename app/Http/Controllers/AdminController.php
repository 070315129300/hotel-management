<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guest;
use App\Models\Staff;

class AdminController extends Controller
{
    public function addadmin()
    {
        return view('admin.addadmin');
    }

    public function addstaff()
    {
        return view('admin.addstaff');
    }

    public function alladmin()
    {
        return view('admin.alladmin');
    }

    public function allguest()
    {
        return view('admin.allguest');
    }

    public function allstaff()
    {
        return view('admin.allstaff');
    }


}
