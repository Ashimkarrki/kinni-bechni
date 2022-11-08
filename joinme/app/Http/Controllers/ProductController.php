<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function homepage(Request $request){ 
    $numbers = 0;
    $data = array();
    for ($id=454; $id<465; $id++){
        $datas = product::find($id);
//        $prod_json = json("products"->$datas);
        array_push($data, $datas);
    }
    return response()->json($data);    
    }
    public function addproduct(Request $request){
        // $this->validate([
        //     'name'=>'required',
        //     'stock'=>'required',
        //     'price'=>'required'
        // ]);
        $addproduct_instance = new product;
        $addproduct_instance->Name =$request->name;
        $addproduct_instance->stock= $request->stock;
        $addproduct_instance->price=$request->price;
        $addproduct_instance->description=$request->description;
        $addproduct_instance->fileName=$request->file('file')->store('products');
        $addproduct_instance->save();
        return response()->json([
            "message"=>"Added Product successfully"
        ]);
    }
};
