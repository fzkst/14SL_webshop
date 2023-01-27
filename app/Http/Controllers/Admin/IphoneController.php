<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIphoneRequest;
use App\Http\Requests\UpdateIphoneRequest;
use App\Models\Iphone;
use Illuminate\Support\Facades\File;


class IphoneController extends Controller
{
    public function index(){
        $iphones = Iphone::all();
        return view('admin.iphones.index', compact('iphones'));
    }

    public function create(){
        return view('admin.iphones.create');
    }

    public function store(StoreIphoneRequest $request){
        $iphone = new Iphone();
        if($request->hasFile('kepfajl')){
            $file = $request->file('kepfajl');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/feltoltesek/mobilok', $filename);
            $iphone->kepfajl = $filename;
        }
        $iphone->modell = $request->input('modell');
        $iphone->szin = $request->input('szin');
        $iphone->tarhely = $request->input('tarhely');
        $iphone->ar = $request->input('ar');
        $iphone->keszlet = $request->input('keszlet');
        //$iphone->leiras = $request->input('leiras');
        //$iphone->status = $request->input('status') == true ? '1' : '0';
        //$iphone->nepszeru = $request->input('nepszeru') == true ? '1' : '0';
        $iphone->save();
        return redirect('iphones')->with('message: ', "Sikeresen hozzáadva!");
    }

    public function edit($id){
        $iphone = Iphone::find($id);
        return view('admin.iphones.edit', compact('iphone'));
    }

    public function update(UpdateIphoneRequest $request, $id){
        $iphone = Iphone::find($id);
        if($request->hasFile('kepfajl')){
            $path = 'img/feltoltesek/mobilok/'.$iphone->kepfajl;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('kepfajl');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/feltoltesek/mobilok', $filename);
            $iphone->kepfajl = $filename;
        }
        $iphone->modell = $request->input('modell');
        $iphone->szin = $request->input('szin');
        $iphone->tarhely = $request->input('tarhely');
        $iphone->ar = $request->input('ar');
        $iphone->keszlet = $request->input('keszlet');
        $iphone->update();
        return redirect('iphones')->with('message: ', "A mobil adatainak módosítása sikeres!");
    }

    public function destroy($id){
        $iphone = Iphone::find($id);
        if (is_null($iphone)){
            return response()->json(["message: " => "Ilyen azonosítóval nem található mobil!"], 404);
        }
        if($iphone->kepfajl){
            $path = 'img/feltoltesek/mobilok/'.$iphone->kepfajl;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $iphone->delete();
        return redirect('iphones')->with('message: ', "A mobil törlése sikeres!");
    }

}

