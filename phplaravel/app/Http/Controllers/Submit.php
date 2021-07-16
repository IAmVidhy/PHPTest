<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prepaid;
use App\Models\Product;

class Submit extends Controller
{
    //
    function save(Request $req){
        print_r($req->input());
        $prepaid = new Prepaid;
        $prepaid->phone= $req->phone;
        $prepaid->value= $req->value;
        echo $prepaid->save();
        return redirect('product');
    }
 
    function simpan(Request $req){
        print_r($req->input());
        $product = new Product;
        $product->orderid= random_int(1000000000, 9999999999);
        $product->product= $req->product;
        $product->address= $req->address;
        $product->price= $req->price;
        $product->status= 'Pay Now';
        echo $product->save();
        return redirect('success');
    }
}
