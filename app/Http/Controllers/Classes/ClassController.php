<?php

namespace App\Http\Controllers\Classes;

use App\Http\Controllers\Controller;
use App\Models\Classes\Classes;
use App\Models\Section\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

Class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['classes'] = Classes::all();
        $result['sections'] = Section::get();
        return view('user.classes.index',$result);
    }

    public function all()
    {
        $res = Classes::select('class_section')->get();
        return response()->json(['msg'=>trans('Data Found'),'status' => true,'data' => $res],200);
    }
    
    public function edit($id)
    {
        $res = Classes::select('class_name','class_numeric','class_section')->where('class_id',$id)->first();
        if($res)
        {
            return response()->json(['status' => true,'data' => $res],200);
        }
        else
        {
            return response()->json(['msg'=>trans('Data Found'),'status' => false,],200);
        }
    }
    
    /**
     * Show the form for Classeseating a new resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $section = [];
        $section = $request->class_section;
        // dd(count($request->class_section));
        $model = new Classes;
        $model->class_name = $request->class_name;
        $model->class_numeric = $request->class_numeric;
        $model->class_section = json_encode($section);
        $model->save();
        Session::flash('success', 'Class Added Successfully'); 
        return response()->json(['msg'=>trans('Data Found'),'status' => true],200);
    }

    public function status(Request $request)
    {
        dd($request->class_id);
        // $section = [];
        // $section = $request->class_section;
        // dd(count($request->class_section));
        // $model = new Classes;
        // $model->class_name = $request->class_name;
        // $model->class_numeric = $request->class_numeric;
        // $model->class_section = json_encode($section);
        // $model->save();
        Session::flash('success', 'Class Added Successfully'); 
        return response()->json(['msg'=>trans('Data Found'),'status' => true],200);
    }

    /**
     * Store a newly Classeseated resource in storage.
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
     * @param  \App\Models\Classes\Classes  $Classes
     * @return \Illuminate\Http\Response
     */
    public function show(Classes $Classes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classes\Classes  $Classes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classes $Classes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classes\Classes  $Classes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classes $Classes)
    {
        //
    }
}
