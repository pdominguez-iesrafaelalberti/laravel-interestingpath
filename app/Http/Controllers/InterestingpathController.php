<?php

namespace App\Http\Controllers;

use App\Models\Interestingpath;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class InterestingpathController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paths = Interestingpath::all()->reverse();
        return view('welcome', compact( 'paths'));
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
        $input = $request->all();

    
     //   $request->validate(['path' => 'required','description' => 'required',]);

        $validator_url = Validator::make($request->all(), [
            'path' => 'required|max:255|url'
        ]);

        if ($validator_url->fails()) {
            return redirect('home')->withErrors($validator_url)->with('error', 'Tiene que ser una una url.');
        }
        $validator_des = Validator::make($request->all(), [
            'description' => 'required'
        ]);

        if ($validator_des->fails()) {
            return redirect('home')->withErrors($validator_des)->with('error', 'Tiene que tener una descripción no vacia');
        }


        Interestingpath::create($request->all());
        return redirect()->route('home')->with('success', 'Enlace creado correctamente.');
    }              
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interestingpath  $interestingpath
     * @return \Illuminate\Http\Response
     */
    public function show(Interestingpath $interestingpath)
    {
        print_r($interestingpath);
        $mensaje =  'Enlace eliminado correctamente el id:'. $interestingpath->id." description: ".$interestingpath->description." ".$interestingpath->intpath_id;
    //    $interestingpath->delete();
       // return redirect()->route('home')->with('success', $mensaje);
        echo  $mensaje; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interestingpath  $interestingpath
     * @return \Illuminate\Http\Response
     */
    public function edit(Interestingpath $interestingpath)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Interestingpath  $interestingpath
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interestingpath $interestingpath)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interestingpath  $interestingpath
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interestingpath $interestingpath)
    {

        if( $interestingpath->delete()){
            $mensaje =  'Enlace eliminado correctamente el id:'. $interestingpath->id." description: ".$interestingpath->description;
            return redirect()->route('home')->with('success', $mensaje);
        }else{
            return redirect()->route('home')->with('error', "No se ha podido borrar el id: ". $interestingpath->id);
        }
     
    }
}
