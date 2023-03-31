<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\enrolledSubjects;

class enrolledSubjectscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enrolled_Subjects = enrolledsubjects::all();

        return view('enrolledsubjects.index', compact('enrolled_Subjects'));

    // $enrolledSubjects = new enrolledSubjects();

    // $enrolledSubjects->subjectCode="123";
    // $enrolledSubjects->description="qwe";
    // $enrolledSubjects->units="3";
    // $enrolledSubjects->schedule="qwet";
    
    // $enrolledSubjects->save();
    //     //
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
        $enrolled_Subjects = enrolledsubjects::where('esNo',$id)->get();
       return view('enrolledsubjects.show', compact('enrolled_Subjects'));
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