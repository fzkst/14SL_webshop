<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFelhasznaloRequest;
use App\Http\Requests\UpdateFelhasznaloRequest;
use App\Models\Felhasznalo;
use Illuminate\Http\Request;

class FelhasznaloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $felhasznalok = Felhasznalo::all();
        return response()->json($felhasznalok);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFelhasznaloRequest $request)
    {
        $felhasznalo = new Felhasznalo();
        $felhasznalo->fill($request->all());
        $felhasznalo->save();
        return response()->json($felhasznalo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $felhasznalo = Felhasznalo::find($id);
        if (is_null($felhasznalo)){
            return response()->json(['message:'=>'Ilyen azonosítóval nem található felhasználó!'], 404);
        }
        return response()->json($felhasznalo, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFelhasznaloRequest $request, $id)
    {
        $felhasznalo = Felhasznalo::find($id);
        if (is_null($felhasznalo)){
            return response()->json(['message:'=>'Ilyen azonosítóval nem található felhasználó!'], 404);
        }
        $felhasznalo->fill($request->all());
        $felhasznalo->update();
        return response()->json($felhasznalo, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $felhasznalo = Felhasznalo::find($id);
        if (is_null($felhasznalo)){
            return response()->json(['message:'=>'Ilyen azonosítóval nem található felhasználó!'], 404);
        }
        Felhasznalo::destroy($id);
        return response()->noContent();
    }
}
