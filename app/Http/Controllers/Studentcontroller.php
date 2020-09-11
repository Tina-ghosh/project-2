<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class studentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::all() ;
        return view('student',['students'=>$students,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $students = student::all() ;
        return view('student',['students'=>$students,'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $student = new student();
        $student->cne = $request->input('cne');
        $student->firstname = $request->input('firstname');
        $student->secondname = $request->input('secondname');
        $student->age = $request->input('age');
        $student->speciality = $request->input('speciality');
        $student->save() ;
        return redirect('/') ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = student::find($id) ;
        $students = student::all() ;
        return view('student',['students'=>$students,'student'=>$student,'layout'=>'show']);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = student::find($id) ;
        $students = student::all() ;
        return view('student',['students'=>$students,'student'=>$student,'layout'=>'edit']);  
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
        $students = student::find($id) ; 
        $student->cne = $request->input('cne');
        $student->firstname = $request->input('firstname');
        $student->secondname = $request->input('secondname');
        $student->age = $request->input('age');
        $student->speciality = $request->input('speciality');
        $student->save() ;
        return redirect('/') ;
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function destroy($id)
    {
        $students = student::find($id) ; 
        $student->delete();
        return redirect('/') ;
    }
}
