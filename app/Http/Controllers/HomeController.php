<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor;

use App\Models\Appointment;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
if(Auth::user()->usertype=='0')
{
    $doctors = doctor::count();
    $appointments = appointment::count();
$users = user::where('usertype',0)->count();
$admins = user::where('usertype',1)->count();
$doctor = doctor::all();
    return view('user.u_dashboard',compact('doctor','users','admins','appointments','doctors'));
}
else
{

    $appointments = appointment::count();
$users = user::where('usertype',0)->count();
$admins = user::where('usertype',1)->count();
$doctors = doctor::count();
$ad = user::all();
    return view('admin.home',compact('doctors','users','admins','appointments','ad'));
}
        }

        else
        {
            return redirect()->back();
        }
    }


    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }

        else
{

$appointments = appointment::all();
$users = user::where('usertype',0)->count();
$admins = user::where('usertype',1)->count();
$doctor = doctor::all();
        return view('user.home',compact('doctor','users','admins','appointments'));
}
    }




    public function appointment(Request $request)
    {

        $data = new appointment;

$data->name=$request->name;

$data->email=$request->email;

$data->date=$request->date;

$data->phone=$request->number;

$data->doctor=$request->doctor;

$data->message=$request->message;

$data->status='in progress';

if(Auth::id()){
    $data->user_id=Auth::user()->id;
}

$data->save();

return redirect()->back()->with('message','Appointment request successful, we will contact you soon.');

    }




    public function myappointment()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;

$appoint=appointment::where('user_id',$userid)->get();

            return view('user.my_appointment',compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }

    }




    public function cancel_appoint($id)
    {
$data=appointment::find($id);

$data->delete();

return redirect()->back();

    }


    public function showprofile()
    {

        $userid=Auth::user()->id;
        $data=user::all();
        return view('user.showprofile',compact('data'));
    }




}
