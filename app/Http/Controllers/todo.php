<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos=\App\Todo::all();

        return response(json_encode($todos));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $todo=new \App\Todo();
        $todo->title=$request->title;
        $todo->description=$request->description;
        $todo->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo=\App\Todo::find($id);
        return response(json_encode($todo));
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
        $todo=\App\Todo::find($id);
        $todo->title=$request->title;
        $todo->description=$request->description;
        $todo->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo=\App\Todo::find($id);
        $todo->delete();
    }
}
