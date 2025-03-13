<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function search(Request $request){
        if($request->ajax()){
            $output = '';
            $studnets = Student::where('name','LIKE','%'.$request->search.'%')->get();

            if($studnets){
                foreach($studnets as $studnet){
                    $output.= '<li>
                               '.$studnet->name.'
                               '.$studnet->age.'
                               <li> ';
                            }
                return response()->json($output);
            }
        }
        return view('recipes.search');
    }

}
