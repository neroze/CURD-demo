<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use File;
use Validator;

class Product extends Model
{	
		/**
		 * Validation rules for saving product details
		 *
		 * @return void
		 * @author 
		 **/
		
    public static function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'quantity' => 'required',
            'price' => 'required'
        ]);
    }

    public static function saveToFile($data='')
    {
    	$xdata = File::get("products.json");

    	if($xdata == 1){
    		$xdata = [];
    	}else{
    		$xdata = json_decode($xdata);
    	}

    	$data['total'] =  $data['price'] * $data['quantity'];
    	$xdata[] = $data;

    	File::put("products.json", json_encode($xdata));
			
			return $data;
    }


}
