<?php

namespace App\Http\Controllers\Subject;

use App\Models\Subject\Subject;
use App\Models\Classes\Classes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['subjects']=Subject::where('trash',0)->get();
        $result['classes']=Classes::all();
        return view('user.subjects.index',$result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $section = [];
        $section = $request->class_id;
        foreach($section as $key => $data)
        {
            $model = new Subject;
            $model->class_id = $section[$key];
            $model->subject_name = $request->subject_name;
            $model->subject_code = $request->subject_code;
            $model->save();
        }
        Session::flash('success', 'Subject Added Successfully'); 
        return response()->json(['msg'=>trans('Data Found'),'status' => true],200);
    }


    public function status(Request $request)
    {
        Subject::where('subject_id',$request->subject_id)->update(array('status' => $request->status)); 
        return response()->json(['msg'=>trans('Subject Updates'),'status' => true],200);
    }

    public function delete($subject_id)
    {
        Subject::where('subject_id',$subject_id)->update(array('trash' => 1));
        Session::flash('success', 'Subject Deleted Successfully'); 
        return back();
        // return back()->with(['msg' => 'Class Deleted']);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subject\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
