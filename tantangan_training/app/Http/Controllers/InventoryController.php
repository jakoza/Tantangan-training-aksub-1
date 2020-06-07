<?php

namespace App\Http\Controllers;

use App\inventaris;
use Illuminate\Http\Request;


class InventoryController extends Controller
{
    public function index( ){
        return view('welcome');
    }
    public function link_input(){
        return view('input');
    }
    public function store(Request $request){
        inventaris::create([
            'item_name' => $request->item_name,
            'item_qtt' => $request->item_qtt,
            'item_price' => $request->item_price,
            'item_condition'=>$request->item_condition
        ]);
        return view('welcome');
    }
}
