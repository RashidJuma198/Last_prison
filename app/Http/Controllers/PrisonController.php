<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prison;
class PrisonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return prison::all();
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
        $request->validate(
            [
                'Full_Names'=>'required|string',
                'Age'=>'required|integer',
                'Location'=>'required|string',
                'Prison_Name'=>'required|string'
            ]
            );
       return prison::create($request->all()); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return prison::find($id);
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
        $data =prison::find($id);
         $data->Full_Names =$request->Full_Names;
         $data->Age =$request->Age;
         $data->Location =$request->Location;
         $data->Prison_Name =$request->Prison_Name;
         $results =$data->save();
         if($results){
             return [
                 'Data'=>'Updated Successfully'
             ];
         }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = prison::find($id);
        $results= $data->delete();
        if($results){
            return [
                "Data"=>"Deleted"
            ];
        }
    }


     /**
     * Search the specified resource from storage.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return prison::where('Full_Names','like','%'.$name.'%')->get();
        
    }
}
