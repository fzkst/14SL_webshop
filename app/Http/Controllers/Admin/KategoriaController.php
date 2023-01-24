<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKategoriaRequest;
use App\Http\Requests\UpdateKategoriaRequest;
use App\Models\Kategoria;
use Illuminate\Support\Facades\File;


class KategoriaController extends Controller
{
    public function index()
    {
        $kategoria = Kategoria::all();
        return view('admin.kategoriak.index', compact('kategoria'));
    }

    public function kategoriaHozzaadas()
    {
        return view('admin.kategoriak.hozzaad');
    }

    public function store(StoreKategoriaRequest $request)
    {
        $kategoria = new Kategoria();
        if($request->hasFile('kepfajl')){
            $file = $request->file('kepfajl');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/feltoltesek/kategoriak', $filename);
            $kategoria->kepfajl = $filename;

        }

        $kategoria->nev = $request->input('nev');
        //$kategoria->slug = $request->input('slug');
        $kategoria->leiras = $request->input('leiras');
        $kategoria->status = $request->input('status') == true ? '1' : '0';
        $kategoria->nepszeru = $request->input('nepszeru') == true ? '1' : '0';
        //$kategoria->meta_cim = $request->input('meta_cim');
        //$kategoria->meta_leiras = $request->input('meta_leiras');
        //$kategoria->meta_kulcsszo = $request->input('meta_kulcsszo');
        //$kategoria->kepfajl = $request->input('kepfajl');
        $kategoria->save();
        return redirect('kategoriak')->with('message: ', "Sikeresen hozzáadva!");

        //return view('admin.index');

    }

    public function kategoriaSzerkesztes($id)
    {
        $kategoria = Kategoria::find($id);
        return view('admin.kategoriak.szerkeszt', compact('kategoria'));
    }


    public function update(UpdateKategoriaRequest $request, $id)
    {
        $kategoria = Kategoria::find($id);
        if($request->hasFile('kepfajl')){
            $path = 'img/feltoltesek/kategoriak/'.$kategoria->kepfajl;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('kepfajl');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('img/feltoltesek/kategoriak', $filename);
            $kategoria->kepfajl = $filename;
        }
        $kategoria->nev = $request->input('nev');
        //$kategoria->slug = $request->input('slug');
        $kategoria->leiras = $request->input('leiras');
        $kategoria->status = $request->input('status') == true ? '1' : '0';
        $kategoria->nepszeru = $request->input('nepszeru') == true ? '1' : '0';
        //$kategoria->meta_cim = $request->input('meta_cim');
        //$kategoria->meta_leiras = $request->input('meta_leiras');
        //$kategoria->meta_kulcsszo = $request->input('meta_kulcsszo');
        $kategoria->update();
        return redirect('kategoriak')->with('message:', "A kategória módosítása sikeres!");
    }

    public function destroy($id)
    {
        $kategoria = Kategoria::find($id);
        if(is_null($kategoria)){
            return response()->json(["message: " => "Ilyen azonosítóval nem található rekord!"], 404);
        }
        if($kategoria->kepfajl){
            $path = 'img/feltoltesek/kategoriak/'.$kategoria->kepfajl;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        //Kategoria::destroy($id);
        $kategoria->delete();
        return redirect('kategoriak')->with('message: ', "A kategória törlése sikeres!");
    }

}
