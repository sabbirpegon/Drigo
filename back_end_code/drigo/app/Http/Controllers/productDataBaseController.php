<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class productDataBaseController extends Controller
{
    public function addProduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_size' => 'required',
            'product_size_constans' => 'required',
            'product_details' => 'required|max:368',
            'price' => 'required ',
            'image' => 'required',

        ]);

        // echo '<pre>';
        // print_r($request->all());
        $fileName = $request->file('image')->store('public/uploads');
        print_r($fileName);

        $product = new Product;

        $product->product_name = $request['product_name'];
        $product->product_size = $request['product_size'] . ' ' . $request['product_size_constans'];
        $product->product_details = $request['product_details'];
        $product->product_price = $request['price'];
        $product->product_Image =   $fileName;

        $product->seller_id = session()->get('seller_seller_id');
        $product->seller_name = session()->get('seller_name');
        $product->shopname = session()->get('seller_shopname');
        $product->seller_category =  session()->get('seller_category');
        $product->shop_latitude =  session()->get('seller_sellerLatitude');
        $product->shop_longitude = session()->get('seller_sellerLongitude');

        $product->save();
        return redirect('/sellerProfile');



        // $result=$request['product_size'].' '.$request['product_size_constans'];
        // echo $result;

        //     echo '<pre>';
        //     print_r(

        //        [ session()->get('seller_seller_id'),
        //         session()->get('seller_name'),
        //         session()->get('seller_shopname'),
        //         session()->get('seller_category'),
        //         session()->get('seller_sellerLatitude'),
        //         session()->get('seller_sellerLongitude'),

        //         ]

        // );
        // print_r(session()->all());
    }

    public function viewProduct()
    {
        $getProduct = Product::all();
        echo "<pre>";
        print_r($getProduct);
    }
}
