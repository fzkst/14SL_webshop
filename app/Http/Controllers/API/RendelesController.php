<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Rendeles;
use Illuminate\Http\Request;

class RendelesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rendelesek = Rendeles::all();
        return response()->json($rendelesek);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rendeles = new Rendeles();
        $rendeles->fill($request->all());
        $rendeles->save();
        return response()->json($rendeles, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rendeles = Rendeles::find($id);
        if(is_null($rendeles)){
            return response()->json(["message: " => "Ilyen azonosítóval nem található rekord!"], 404);
        }
        return response()->json($rendeles, 201);
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
        $rendeles = Rendeles::find($id);
        if(is_null($rendeles)){
            return response()->json(["message: " => "Ilyen azonosítóval nem található rekord!"], 404);
        }
        $rendeles->fill($request->all());
        $rendeles->save();
        return response()->json($rendeles, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rendeles = Rendeles::find($id);
        if(is_null($rendeles)){
            return response()->json(["message: " => "Ilyen azonosítóval nem található rekord!"], 404);
        }
        Rendeles::destroy($id);
        return response()->noContent();
    }
}
