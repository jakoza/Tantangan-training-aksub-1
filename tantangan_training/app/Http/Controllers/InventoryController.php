<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inventory;

class InventoryController extends Controller
{
    public function index( ){
        return view('welcome');
    }
    public function link_input(){
        return view('input');
    }
    // public function store(Request $request){
    //     inventory::create([
    //         'item_name' => $request->item_name,
    //         'item_qtt' => $request->item_count,
    //         'item_price' => $request->item_price,
    //         'item_condition'=>$request->item_condition
    //     ]);
    //     return back();
    // }
}
