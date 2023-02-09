<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Felhasznalo;
use App\Models\Iphone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        $iphones = Iphone::all();
        $felhasznalok = Felhasznalo::all();
        $adatok = Felhasznalo::select('vezeteknev')->where('varos', 'LIKE', '%Budapest%')->get();
        return view('admin.index', compact(['felhasznalok', 'iphones', 'adatok']));
    }
}

   
