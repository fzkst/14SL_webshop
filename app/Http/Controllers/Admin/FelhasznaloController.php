<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFelhasznaloRequest;
use App\Http\Requests\UpdateFelhasznaloRequest;
use App\Models\Felhasznalo;
use Illuminate\Http\Request;

class FelhasznaloController extends Controller
{
    public function index(){
        $felhasznalok = Felhasznalo::all();
        return view('admin.felhasznalok.index', compact('felhasznalok'));
    }

    public function felhasznaloHozzaadas(){
        return view('admin.felhasznalok.hozzaad');
    }

    public function store(StoreFelhasznaloRequest $request){
        $felhasznalo = new Felhasznalo();
        $felhasznalo->user_id = $request->input('user_id');
        $felhasznalo->maganszemely = $request->input('maganszemely')  == true ? '1' : '0';
        $felhasznalo->cegnev = $request->input('cegnev');
        $felhasznalo->vezeteknev = $request->input('vezeteknev');
        $felhasznalo->keresztnev = $request->input('keresztnev');
        $felhasznalo->iranyitoszam = $request->input('iranyitoszam');
        $felhasznalo->varos = $request->input('varos');
        $felhasznalo->cim = $request->input('cim');
        $felhasznalo->telefon = $request->input('telefon');
        $felhasznalo->adoszam = $request->input('adoszam');
        $felhasznalo->save();
        return redirect('felhasznalok')->with('message: ', "Sikeresen hozzáadva!");
    }

    public function felhasznaloSzerkeszt($id){
        $felhasznalo = Felhasznalo::find($id);
        return view('admin.felhasznalok.szerkeszt', compact('felhasznalo'));
    }

    public function update(UpdateFelhasznaloRequest $request, $id){
        $felhasznalo = Felhasznalo::find($id);
        $felhasznalo->user_id = $request->input('user_id');
        $felhasznalo->maganszemely = $request->input('maganszemely')  == true ? '1' : '0';
        $felhasznalo->cegnev = $request->input('cegnev');
        $felhasznalo->vezeteknev = $request->input('vezeteknev');
        $felhasznalo->keresztnev = $request->input('keresztnev');
        $felhasznalo->iranyitoszam = $request->input('iranyitoszam');
        $felhasznalo->varos = $request->input('varos');
        $felhasznalo->cim = $request->input('cim');
        $felhasznalo->telefon = $request->input('telefon');
        $felhasznalo->adoszam = $request->input('adoszam');
        $felhasznalo->update();
        return redirect('felhasznalok')->with('message: ', "A felhasználó adatainak módosítása sikeres!");
    }

    public function destroy($id){
        $felhasznalo = Felhasznalo::find($id);
        if(is_null($felhasznalo)){
            return response()->json(["message: " => "Ilyen azonosítóval nem található felhasználó!"], 404);
        }
        $felhasznalo->destroy();
        return redirect('felhasznalok')->with('message: ', "A felhasználó törlése sikeres!");
    }
}
