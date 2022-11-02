<?php

namespace App\Http\Controllers;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class ManufacturersController extends Controller
{
    public function index(){
        $manufacturers = manufacturer::all(); // 撈出所有資料
        return view('manufacturers.index', ['manufacturers' => $manufacturers]);
    }
}
