<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
           return view('all_products', compact('products'));
       }

       public function store( Request $request  ){
            $product = new Product();
            $product->Product_name = $_REQUEST['product_name'];
            $product->Product_price = $_REQUEST['product_price'];
            $product->Product_quantity =$_REQUEST['product_qty'];
            $product->save();

           return redirect('/');
           }

           public function create (){
               return view('create_product');
           }

           public function delete($id){

            Product::find($id)->delete();
            return redirect()->back();
        }


    public function edit($id){
         $data= Product::find($id);
         return view('all_products',compact('data','products'));

    }
}
