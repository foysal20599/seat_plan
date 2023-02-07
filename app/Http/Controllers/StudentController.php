<?php

namespace App\Http\Controllers;

use App\Exports\SeatPlanExport;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function teacher(Request $request)
    {

        $rules = [
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'user_name' => 'required', 'string', 'max:30', 'unique:users',
            'phone' => 'required', 'string', 'numeric', 'min:11', 'unique:users',
            'password' => 'required',
            'f_id' => 'required',
            'password_confirmation' => 'required_with:password|same:password|min:6',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = new  User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->user_name = $request->user_name;
        $data->desination = $request->desination;
        $data->password = Hash::make($request->password);
        $data->f_id = $request->f_id;
        if ($data->save()) {
            return redirect()->back()->with('status', 'Registration Successfully!');
        }
    }

    public function login()
    {
        return view('login');
    }
    public function seatPlan()
    {
        return view('seat_plan');
    }
    public function seatPlanExport()
    {
        return Excel::download(new SeatPlanExport, 'seat_plan.xlsx');
    }
    public function getSection(Request $request)
    {
        $data = Section::where('batch_id', $request->batch_id)->get();
        return response()->json($data);
    }
    public function store(Request $request){
        return $request;
    }
}
