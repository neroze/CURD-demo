<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use File;

class ProductController extends Controller
{

	/**
	 * Displays manage Page
	 *
	 * @return View
	 * @author 
	 **/

	public function index()
	{
		
		return view('product.index');
	}

	/**
	 * Saves post
	 *
	 *
	 * @param  $request Illuminate\Http\Request
	 * @return Array $data Product Details
	 * @author 
	 **/
	
  public function saveProduct(Request $request)
  {
  	$product = Product::validator($request->all());
    if($product->fails()){
        return ["stat" => false, "msg" => $product->errors()->all() ];
    }

  	$prod = Product::saveToFile($request->toArray());
   	return ['stat' =>true, "data" => $prod ];
  }

  /**
   * Get Products JSON
   *
   * @return JSON
   * @author 
   **/
  
  public function getProducts($value='')
  {
  	$products = File::get("products.json");
  	header('Content-Type: application/json');
		echo $products; 
  }

}
