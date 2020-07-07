<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clothes;

class ClothesController extends Controller
{
    public function index() {
        $all_clothes = Clothes::all();
        return view('clothes', ['clothes_list'=>$all_clothes]);
    }
};
