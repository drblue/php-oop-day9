<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
    	$products = Product::get();

    	return view('products.index', ["products" => $products]);
    }

    public function show($id) {
    	$product = Product::findOrFail($id);

    	return view('products.show', ["product" => $product]);
    }

    public function store() {
    	$name = request('name');
    	$price = request('price');

    	Product::create([
    		"name" => $name,
    		"price" => $price,
    	]);

    	return redirect()->back();
    }
}
