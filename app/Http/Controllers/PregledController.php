<?php

namespace App\Http\Controllers;

use App\Models\Pregled;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PregledController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //get
    {
        return Pregled::all();
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
    public function store(Request $request) //POST
    {
        $validator = Validator::make($request->all(), [
            'datum' => 'required|string|max:50',
            'ljubimac' => 'required|integer',
            'veterinar' => 'required|integer',
            'cena' => 'required|integer',

 
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $p = Pregled::create([
            'datum' => $request->datum, 
            'ljubimac' => $request->ljubimac, 
            'cena' => $request->cena,
            'veterinar' => $request->veterinar,
 

        ]);
        $p->save();
        return response()->json(['Objekat je  kreiran', $p]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pregled  $pregled
     * @return \Illuminate\Http\Response
     */
    public function show($id)//get
    {
        return Pregled::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pregled  $pregled
     * @return \Illuminate\Http\Response
     */
    public function edit(Pregled $pregled)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pregled  $pregled
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)//put
    {
        $validator = Validator::make($request->all(), [
            'datum' => 'required|string|max:50',
            'ljubimac' => 'required|integer',
            'veterinar' => 'required|integer',
            'cena' => 'required|integer',

 
        ]);

        if ($validator->fails()) 
            return response()->json($validator->errors());
        $p = Pregled::find($id);
        if($p){
            $p->datum=$request->datum;
            $p->ljubimac=$request->ljubimac;
            $p->veterinar=$request->veterinar;
            $p->cena=$request->cena;

            $p->save();
            return response()->json( ["Uspesno izmenjeno!",$p]);
        }else{
            return response()->json("Objekat ne postoji u bazi");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pregled  $pregled
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)//DELETE
    {
        $pregled = Pregled::find($id);
        if($pregled){
            $pregled->delete();
            return response()->json(["Objekat obrisan",$pregled]);
        }else{
            return response()->json(["Objekat ne postoji"]);

        }
    }
}
