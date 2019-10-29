<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::paginate(5);
        return view('students.index', ['students' => $students]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=> 'required',
            'address' => 'required',
            'course'=> 'required',
            'enroll'=> 'required',
        ]);
        $student = new Student([
            'name' => $request->get('name'),
            'email'=> $request->get('email'),
            'address'=> $request->get('address'),
            'course'=> $request->get('course'),
            'enroll'=> $request->get('enroll')
        ]);
        $student->save();
        return redirect('/students')->with('success', 'Student has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'email'=> 'required',
            'address' => 'required',
            'course'=> 'required',
            'enroll'=> 'required'
        ]);

        $student = Student::find($id);
        $student->name = $request->get('name');
        $student->email = $request->get('email');
        $student->address = $request->get('address');
        $student->course = $request->get('course');
        $student->enroll = $request->get('enroll');
        $student->save();

        return redirect('/students')->with('success', 'Student has been updated');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/students')->with('success', 'Student has been deleted Successfully');    }
}
