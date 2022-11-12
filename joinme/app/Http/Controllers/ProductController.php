<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\book;
use App\Models\equipments;
use App\Models\notes;

class ProductController extends Controller
{



    public function homepage(Request $request){ 
    $numbers = 1;
    for ($id=454; $id<465; $id++){
        $datas = product::find($id);
//        $prod_json = json("products"->$datas);
        $data[$numbers] = $datas;
        $numbers++;
    }
    return response()->json($data);    
    }





    public function addproduct(Request $request){
        // $this->validate([
        //     'name'=>'required',
        //     'stock'=>'required',
        //     'price'=>'required'
        // ]);
        if($request->category==="books"){
            $addproduct_instance = new book;
            $addproduct_instance->name =$request->name;
            $addproduct_instance->stock= $request->stock;
            $addproduct_instance->price=$request->price;
            $addproduct_instance->faculty=$request->faculty;
            $addproduct_instance->edition=$request->edition;
            $addproduct_instance->category=$request->category;
            $addproduct_instance->subjectName=$request->subjectName;
            $addproduct_instance->authorName=$request->authorName;
            $addproduct_instance->description=$request->description;
            $addproduct_instance->fileName1=$request->file('fileName1')->store('products');
            $addproduct_instance->fileName2=$request->file('fileName2')->store('products');
            $addproduct_instance->fileName3=$request->file('fileName3')->store('products');
            $addproduct_instance->save();
            return response()->json([
                "message"=>"Added Product successfully"
            ]);
        }
        elseif($request->category==="equipments"){
            $addproduct_instance = new equipments;
            $addproduct_instance->name =$request->name;
            $addproduct_instance->stock= $request->stock;
            $addproduct_instance->price=$request->price;
            $addproduct_instance->category=$request->category;
            $addproduct_instance->faculty=$request->faculty;
            $addproduct_instance->description=$request->description;
            $addproduct_instance->subCategory=$request->subCategory;
            $addproduct_instance->fileName1=$request->file('fileName1')->store('products');
            $addproduct_instance->fileName2=$request->file('fileName2')->store('products');
            $addproduct_instance->fileName3=$request->file('fileName3')->store('products');
            $addproduct_instance->save();
            return response()->json([
                "message"=>"Added Product successfully"
            ]);
        }
        elseif($request->category==="notes"){
            $addproduct_instance = new notes;
            $addproduct_instance->name =$request->name;
            $addproduct_instance->stock= $request->stock;
            $addproduct_instance->price=$request->price;
            $addproduct_instance->faculty=$request->faculty;
            $addproduct_instance->category=$request->category;
            $addproduct_instance->description=$request->description;
            $addproduct_instance->fileName1=$request->file('fileName1')->store('products');
            $addproduct_instance->fileName2=$request->file('fileName2')->store('products');
            $addproduct_instance->fileName3=$request->file('fileName3')->store('products');
            $addproduct_instance->save();
            return response()->json([
                "message"=>"Added Product successfully"
            ]);
        }
        else{
            return response()->json([
                "message"=>"Out OF bound category"
            ]);

        }

    }




    public function returnproduct(Request $request){
        $model_name = $request->category;
        $id = $request->id;
        if($model_name == "books"){
            $data = book::find($id);
            return response() -> json($data);
        }
        elseif($model_name == "notes"){
            $data = notes::find($id);
            return response() -> json($data);
        }
        elseif($model_name == "equipments"){
            $data = equipments::find($id);
            return response() -> json($data);
        }
        else{
            return response()->json([
                "message" => "Unexpected error occured"
        ]);
        }}



};
