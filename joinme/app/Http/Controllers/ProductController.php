<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\book;
use App\Models\equipments;
use App\Models\notes;
use App\Models\products;

class ProductController extends Controller
{



    public function homepage(Request $request){ 
    $books_data = book::where('stock',">",0)->inRandomOrder()->get()->take(30)->toArray();
    $equipments_data = equipments::where('stock',">",0)->inRandomOrder()->get()->take(30)->toArray();
    $notes_data = notes::where('stock',">",0)->inRandomOrder()->get()->take(30)->toArray();
    array_merge($books_data, $equipments_data);
    array_merge($books_data, $notes_data);
    shuffle($books_data);
    return response()->json(array_slice($books_data, 0, 30));
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
            if($request->file('fileName2')!==null){
                $addproduct_instance->fileName2=$request->file('fileName2')->store('products');}
            if($request->file('fileName3')!==null){
                $addproduct_instance->fileName3=$request->file('fileName3')->store('products');
            }
            $addproduct_instance->save();
            
            $common_product_instance = new products;
            $common_product_instance->name =$request->name;
            $common_product_instance->stock= $request->stock;
            $common_product_instance->price=$request->price;
            $common_product_instance->faculty=$request->faculty;
            $common_product_instance->edition=$request->edition;
            $common_product_instance->category=$request->category;
            $common_product_instance->subjectName=$request->subjectName;
            $common_product_instance->authorName=$request->authorName;
            $common_product_instance->description=$request->description;
            $common_product_instance->fileName1=$request->file('fileName1');
            $common_product_instance->fileName2=$request->file('fileName2');
            $common_product_instance->fileName3=$request->file('fileName3');
            $common_product_instance->save();
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
            if($request->file('fileName2')!==null){
                $addproduct_instance->fileName2=$request->file('fileName2')->store('products');}
            if($request->file('fileName3')!==null){
                $addproduct_instance->fileName3=$request->file('fileName3')->store('products');
            }
            $addproduct_instance->save();
            $common_product_instance = new products;
            $common_product_instance->name =$request->name;
            $common_product_instance->stock= $request->stock;
            $common_product_instance->price=$request->price;
            $common_product_instance->category=$request->category;
            $common_product_instance->faculty=$request->faculty;
            $common_product_instance->description=$request->description;
            $common_product_instance->subCategory=$request->subCategory;
            $common_product_instance->fileName1=$request->file('fileName1');
            $common_product_instance->fileName2=$request->file('fileName2');
            $common_product_instance->fileName3=$request->file('fileName3');
            $common_product_instance->save();
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
            if($request->file('fileName2')!==null){
                $addproduct_instance->fileName2=$request->file('fileName2')->store('products');}
            if($request->file('fileName3')!==null){
                $addproduct_instance->fileName3=$request->file('fileName3')->store('products');
            }
            $addproduct_instance->save();

            $common_product_instance = new products;
            $common_product_instance->name =$request->name;
            $common_product_instance->stock= $request->stock;
            $common_product_instance->price=$request->price;
            $common_product_instance->faculty=$request->faculty;
            $common_product_instance->category=$request->category;
            $common_product_instance->description=$request->description;
            $common_product_instance->fileName1=$request->file('fileName1');
            $common_product_instance->fileName2=$request->file('fileName2');
            $common_product_instance->fileName3=$request->file('fileName3');
            $common_product_instance->save();
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
