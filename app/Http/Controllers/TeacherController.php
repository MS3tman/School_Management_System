<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('teacher/index',['teachers'=>$teachers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_validated = validator::make($request->all(),[
            'full_name'=>'required',
            'phone_number'=>'required|unique:teachers',
            'address'=>'required',
            'email'=>'required|unique:teachers',
            'department'=>'required',
            'salary'=>'required',
           
        ]);
        
        if(!$data_validated->fails()){

            Teacher::create([
                'full_name'=>$request['full_name'],
                'phone_number'=>$request['phone_number'],
                'address'=>$request['address'],
                'email'=>$request['email'],
                'department'=>$request['department'],
                'salary'=>$request['salary'],
                'gander'=>$request['gander'],
                'picture'=>$request['picture'],
            ]);
            return redirect('teacher/index');
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
