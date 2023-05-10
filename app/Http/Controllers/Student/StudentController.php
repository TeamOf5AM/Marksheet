<?php

namespace App\Http\Controllers\Student;

use App\Models\Student\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['students'] = Student::all();
        return view('user.students.index',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $student = new Student;
        $student->first_name = $input['f_name'];
        $student->last_name = $input['l_name'];
        $student->age = $input['age'];
        $student->gender = $input['gender'];
        $student->blood_group = $input['blood_group'];
        $student->nationality = $input['nationality'];
        $student->father_name = $input['father_name'];
        $student->mother_name = $input['mother_name'];
        $student->mob_num = $input['mob_num'];
        $student->email = $input['email'];
        $student->emg_contact_name = $input['emg_contact_name'];
        $student->emg_mob_num = $input['emg_mob_num'];
        $student->address = $input['address'];
        $student->country = $input['country'];
        $student->state = $input['state'];
        $student->city = $input['city'];
        $student->pincode = $input['pincode'];
        $student->adhar_num = $input['adhar_num'];
        $student->relation = $input['relation'];
        $student->student_roll_num = 0;
        if($input['save']='save')
        {
            $student->status = 1;
        }
        else if($input['draft']='draft')
        {
            $student->status = 0;
        }
        else{
            $student->status = 0;
        }
        $student->save();
        Session::flash('success', 'Student Add Successfully'); 
        return redirect()->route('student.all');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
