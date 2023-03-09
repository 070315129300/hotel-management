<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;

class GuestController extends Controller
{
    public function bookaroomguest(Request $request){
        $guest = new Guest;
        $guest->firstname =$request->firstname;
        $guest->lastname =$request->lastname;
        $guest->phone =$request->phone;
        $guest->email =$request->email;
        $guest->arrivaldate =$request->arrivaldate;
        $guest->arrivaltime =$request->arrivaltime;
        $guest->departuredate = $request->departuredate;
        $guest->guest = $request->guest;
        $guest->roomtype = $request->roomtype;
        $guest->specialrequest = $request->specialrequest;
        $guest->save();
        return redirect()->back()->with('message', 'Booking Request Successful. Hope to see you soon ');
    }
}
