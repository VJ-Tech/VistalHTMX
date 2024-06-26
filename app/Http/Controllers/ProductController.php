<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::orderBy('created_at', 'desc');

        if ($request->filter) {
            $filter = $request->filter;
            $products->where(function ($query) use ($filter) {
                $query->where('name', 'like', "%$filter%")
                      ->orWhere('description', 'like', "%$filter%");
            });
        }

        $html = '';

        foreach ($products->get() as $product) {
            $html .= "
                <div class='p-4 rounded bg-gray-200 flex flex-col items-center justify-between h-80 w-60 m-2'>
                    <img src='$product->imageURL' class='w-full h-32 object-cover mb-2'>
                    <h3 class='text-2xl mb-2'>$product->name</h3>
                    <hr class='w-full mb-2'>
                    <div class='italic text-gray-500 flex-grow mb-2 overflow-hidden'>
                        $product->description
                    </div>
                    <div class='text-4xl text-right text-orange-600'>
                        $product->price
                    </div>
                </div>
            ";
        }

        return response($html);
    }


    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' =>'required',
            'description' =>'required',
            'price' =>'required',
            'imageURL' =>'required'
        ]);

        if($validator->fails()) {
            $products = Product::orderBy('name');
            return view('templates._create-products-error', ['errors' => $validator->errors()->all(), 'products' => $products]);
        };

        Product::create($request->all());

        $products = Product::orderBy('name');

        return view('templates._products-list-for-create', ['products'=>$products]);

    }
}

