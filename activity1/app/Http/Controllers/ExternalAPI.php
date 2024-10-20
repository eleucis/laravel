<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ExternalAPI extends Controller
{
    public function getExternalProduct(){
        
        $response = Http::get('https://dummyjson.com/products');
       
        //return $response;
        $result ="ERROR";
        if ($response -> getStatusCode() == 200){
            $result = json_decode($response->getBody());
        }

        return view ('products.product', compact('result'));

        
    }

    public function authenticateWithKey(){

        $result = Blog::get()->all();

        return $result;
    }

}
