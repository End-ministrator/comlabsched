<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faculties = Faculty::all();
        // $editfaculties = Faculty::all()->toArray();
        // $faculty = Faculty::find($id);
        // dd($editfaculties);
      
       
        return view('facultycrud.faculty')->with('faculties', $faculties);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facultycrud.createFaculty');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Faculty::create($input);
        return redirect('faculty')->with('success', 'Faculty Addedd!');
    }


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
        $faculty = Faculty::find($id);
        return view('facultycrud.editFaculty')->with('faculties', $faculty);
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
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'tag_id' => 'required',
            'permissions' => 'required',
        ]);

        Faculty::where('id', $id)->update([

            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
            'tag_id' => $request->tag_id,
            'permissions' => $request->permissions,

        ]);
        return redirect('faculty')->with('success', 'Faculty Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Faculty::destroy($id);
        return redirect('faculty')->with('flash_message', 'Faculty deleted!');  
    }

    public function test (){

        $faculties = User::all();
        return view('facultycrud.test')->with(compact('faculties'));
    }
}
