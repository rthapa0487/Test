<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Product as ProductModel;

class product extends Controller
{
    //product listing action
    public function list() {
        $data = Input::all();

    	//Get All Products
    	$products = ProductModel::paginate(1);        
     	return view('product.list', compact('products'));
    }
     

    public function create() {
    	$data = Input::all();
    	   
    	if ($data) {
    		//Save new data
    		$product = new ProductModel;
    		$product->product_name  = $data['product_name'];
    		$product->product_price = $data['product_price'];
    		$product->product_description = $data['product_description'];
    		$product->product_sku = $data['product_sku'];
    		
    		if (isset($data['product_image'])) {
    			$path = Input::file('product_image')->store('product');
    			$product->product_image = 'storage/app/' .$path;
    		}
    		$product->save();

    		return redirect()->route('list');
    	}

    	return view('product.create');
    }

    public function update($product_id) {
    	$data = Input::all();
    	$product = ProductModel::find( $product_id);   
    	if ($data) {

    		//update product data
    		$product->product_name  = $data['product_name'];
    		$product->product_price = $data['product_price'];
    		$product->product_description = $data['product_description'];
    		$product->product_sku = $data['product_sku'];
    		
    		if (isset($data['product_image'])) {
    			$path = Input::file('product_image')->store('product');
    			$product->product_image = 'storage/app/' .$path;
    		}
    		$product->save();
    	}
    	
    	return view('product.update', compact('product'));
    }

    public function view($product_id) {
    	$product = ProductModel::find( $product_id);   
    	return view('product.view', compact('product'));
    }


    public function delete($product_id) {
        $product = ProductModel::find( $product_id);
     	$product->delete();
    	return redirect()->route('list');
    }
}
