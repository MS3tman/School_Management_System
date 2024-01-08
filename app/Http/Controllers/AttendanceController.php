<?php

namespace App\Http\Controllers;
use App\Http\Controllers\DateTime;
use App\Models\Attendance;
use Attribute;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendances = Attendance::all();
        return view('attendance/index',['attendances'=>$attendances]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attendance/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_validate = validator::make($request->all(),[
            'history'=>'required|date',
            'teacher_name'=>'required',
            'student_name'=>'required',
        ]);

        if(!$data_validate->fails()){
            Attendance::create($request->all());
            return redirect('attendance/index');
        }
        else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
