<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Product;

class ProductTest extends TestCase
{
    /**
     * 
     *
     * @return void
     */
    public function testCreateProduct()
    {   
            $product = new Product;
    	    $product->product_name  = $data['product_name'];
    		$product->product_price = $data['product_price'];
    		$product->product_description = $data['product_description'];
    		$product->product_sku = $data['product_sku'];
    		if($product->save())
    		{
            	$this->assertProductCreate(true);
        	} else {
        		$this->assertProductCreate(false);
        	}
    }


    public function testUpdateProduct()
    {   
            $product = new Product::find(1);
    	    $product->product_name  ="Updated Test Product "
    		
    		if($product->save())
    		{
            	$this->assertProductUpdate(true);
        	} else {
        		$this->assertProductUpdate(false);
        	}
    }

    public function testDeleteProduct()
    {   
            $product = new Product::find(1);
    	    if($product->delete())
    		{
            	$this->assertProductDelete(true);
        	} else {
        		$this->assertProductDelete(false);
        	}
    }
}
