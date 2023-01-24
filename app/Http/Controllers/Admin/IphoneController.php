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

    public function mobilHozzaadas(){
        return view('admin.iphones.hozzaad');
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

        //$iphone->slug = $request->input('slug');
        //$iphone->leiras = $request->input('leiras');
        //$iphone->status = $request->input('status') == true ? '1' : '0';
        //$iphone->nepszeru = $request->input('nepszeru') == true ? '1' : '0';
        //$iphone->meta_cim = $request->input('meta_cim');
        //$iphone->meta_leiras = $request->input('meta_leiras');
        //$iphone->meta_kulcsszo = $request->input('meta_kulcsszo');
        //$iphone->kepfajl = $request->input('kepfajl');
        $iphone->save();
        return redirect('mobilok')->with('message: ', "Sikeresen hozzáadva!");
    }

    public function mobilSzerkeszt($id){
        $iphone = Iphone::find($id);
        return view('admin.iphones.szerkeszt', compact('iphone'));
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
        return redirect('mobilok')->with('message: ', "A mobil adatainak módosítása sikeres!");
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
        return redirect('mobilok')->with('message: ', "A mobil törlése sikeres!");
    }

}

