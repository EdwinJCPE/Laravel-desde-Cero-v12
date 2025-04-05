<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        // return 'This is the list of products from CONTROLLER';
        // 
        // Query Builder
        // $products = DB::table('products')->get();
        // dd($products);

        // Raw SQL Queries (Consultas SQL crudas)
        // $products = DB::select('select * from products');
        // dd($products);
        // 
        // Eloquent ORM
        $products = Product::all();
        // $products = Product::get(); // get: No se recomienda usar solo. Úsalo después de armar una consulta.
        // dd($products);
        return $products; //Laravel Formatea en formato json

        return view('products.index');
    }

    public function create()
    {
        return 'This is the form to create a product from CONTROLLER';
    }

    public function store()
    {
        //
    }

    public function show($product)
    {
        // return "Showing product with id: {$product} from CONTROLLER";
        // 
        // Query Builder
        // $product = DB::table('products')->where('id', $product)->get();
        // $product = DB::table('products')->where('id', $product)->first();
        // $product = DB::table('products')->find($product);
        // dd($product);

        // Raw SQL Queries (Consultas SQL crudas)
        // $product = DB::select('select * from products where id = ?', [$product]);
        // dd($product);

        // Eloquent ORM
        // $product = Product::find($product);
        $product = Product::findOrFail($product);
        // $product = Product::where('id', $product)->first();
        // $product = Product::where('id', $product)->firstOrFail();
        // dd($product);
        return $product;

        return view('products.show');
    }

    public function edit($product)
    {
        return "Showing the form to edit the product with id: {$product}";
    }

    public function update($product)
    {
        //
    }

    public function destroy($product)
    {
        //
    }
}
