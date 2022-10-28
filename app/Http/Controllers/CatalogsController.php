<?php

namespace App\Http\Controllers;

use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class CatalogsController extends Controller
{
    /*public function index()
    {
        $catalogs = catalog::all();
        $positions = catalog::allPositions()->get();
        $deta = [];
        foreach ($positions as $position)
        {
            $data["$positions->$position"] = $position->$position;
        }
        return view('catalog.index', ['catalogs' => $catalogs, 'positions'=>$data]);
    }*/
}
