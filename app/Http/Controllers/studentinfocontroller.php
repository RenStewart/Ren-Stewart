<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentInfo;

class studentinfocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $studentInfo = StudentInfo::all();

        return view('students.index', compact('studentInfo'));

        // $studentInfo = new studentInfo();

        // $studentInfo -> idNo = 'C19-0553';
        // $studentInfo -> firstName = 'Ren Stewart';
        // $studentInfo -> middleName = 'Babia';
        // $studentInfo -> lastName = 'Enerio';
        // $studentInfo -> suffix = '';
        // $studentInfo -> course = 'BSIT';
        // $studentInfo -> year = 3;
        // $studentInfo -> birthdate = '1999-10-17';
        // $studentInfo -> gender = 'Male';
        
        // $studentInfo->save();

        // echo "Student Information successfully saved in the database";
        // find() -- using the field name 'id' (default)
        // where() -- using another field name
        // SELECT * FROM studentInfo WHERE sNo = 2
        // $studentInfo = studentInfo::where('sno',2);
        // $studentInfo->delete();
        // echo "Student Information has been deleted from the database";

        // UPDATE RECORD IN DATABASE
        // $studentInfo = studentInfo::where('sNo',2) ->update(['firstName'=> 'Ren Stewart']);
        // echo "Student Information has been successfully updated";

        // RETRIEVE RECORDS
        // $studentInfo = studentInfo::all();
        // return $studentInfo;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $validatedData = $request->validate([
            'xidNo' => ['required', 'max:8'],
            'xfirstName' => ['required', 'max:20'],
            'xmiddleName' => ['max:15'],
            'xlastName' => ['required', 'max:15'],
            'xsuffix' => ['nullable', 'max:5'],
            'xcourse' => ['required', 'max:15'],
            'xyear' => ['required'],
            'xbirthdate' => ['required', 'date'],
            'xgender' => ['required']
            
            

        ]);
            

    $studentInfo= new studentInfo();
    $studentInfo->idNo = $request->xidNo;
    $studentInfo->firstName = $request->xfirstName;
    $studentInfo->middleName = $request->xmiddleName;
    $studentInfo->lastName = $request->xlastName;
    $studentInfo->suffix = $request->xsuffix;
    $studentInfo->course = $request->xcourse;
    $studentInfo->year = $request->xyear;
    $studentInfo->birthdate = $request->xbirthdate;
    $studentInfo->gender = $request->xgender;

    $studentInfo->save();
    return redirect()->route('students');
    

    
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
        $studentInfo = StudentInfo::where('sNo',$id)->get();
       return view('students.show', compact('studentInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
