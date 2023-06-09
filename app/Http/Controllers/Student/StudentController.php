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
        $result['students'] = Student::where('trash',0)->get();
        return view('user.students.index',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result['f_name'] = '';
        $result['l_name'] = '';
        $result['age'] = '';
        $result['dob'] = '';
        $result['gender'] = '';
        $result['blood_group'] = '';
        $result['nationality'] = '';
        $result['father_name'] = '';
        $result['mother_name'] = '';
        $result['mob_num'] = '';
        $result['email'] = '';
        $result['emg_contact_name'] = '';
        $result['emg_mob_num'] = '';
        $result['address'] = '';
        $result['country'] = '';
        $result['state'] = '';
        $result['city'] = '';
        $result['pincode'] = '';
        $result['adhar_num'] = '';
        $result['relation'] = '';
        $result['student_roll_num'] = '';
        return view('user.students.create',$result);
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
        $student->dob = $input['dob'];
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

    public function status(Request $request)
    {
        Student::where('student_id',$request->student_id)->update(array('status' => $request->status)); 
        return response()->json(['msg'=>trans('Student Updates'),'status' => true],200);
    }

    public function delete($student_id)
    {
        Student::where('student_id',$student_id)->update(array('trash' => 1));
        Session::flash('success', 'Student Deleted Successfully'); 
        return back();
        // return back()->with(['msg' => 'Class Deleted']);
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
    public function edit($student_id)
    {
        $res = Student::where('student_id',$student_id)->first();
        $result['f_name'] = $res->first_name;
        $result['l_name'] = $res->last_name;
        $result['age'] =  $res->age;
        $result['dob'] =  $res->dob;
        $result['gender'] = $res->gender;
        $result['blood_group'] = $res->blood_group;
        $result['nationality'] = $res->nationality;
        $result['father_name'] = $res->father_name;
        $result['mother_name'] = $res->mother_name;
        $result['mob_num'] = $res->mob_num;
        $result['email'] = $res->email;
        $result['emg_contact_name'] = $res->emg_contact_name;
        $result['emg_mob_num'] = $res->emg_mob_num;
        $result['address'] = $res->address;
        $result['country'] = $res->country;
        $result['state'] = $res->state;
        $result['city'] = $res->city;
        $result['pincode'] = $res->pincode;
        $result['adhar_num'] = $res->adhar_num;
        $result['relation'] = $res->relation;
        $result['student_roll_num'] = $res->student_roll_num;
        return view('user.students.create',$result);
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
