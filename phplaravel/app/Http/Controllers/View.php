<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Prepaid;

class View extends Controller
{
    
    function liatin(){
        $data = Product::paginate(1);
        //return $data;
        return view('success',['sukses'=>$data]);
    }

    function gabung(){
        $gabung = Prepaid::join('products', 'products.id', "=", 'prepaids.id')
                            ->get(['prepaids.phone', 'prepaids.value', 
                                    'products.orderid', 'products.price', 'products.status']);
        
        return view('history', compact('gabung'));
    }
}