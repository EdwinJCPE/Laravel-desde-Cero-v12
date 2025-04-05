<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        // Query Builder
        // $products = DB::table('products')->get();
        // dd($products);

        // Raw SQL Queries (Consultas SQL crudas)
        $products = DB::select('select * from products');
        dd($products);

        // return 'This is the list of products from CONTROLLER';
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
        // Query Builder
        // $product = DB::table('products')->where('id', $product)->get();
        // $product = DB::table('products')->where('id', $product)->first();
        // $product = DB::table('products')->find($product);
        // dd($product);

        // Raw SQL Queries (Consultas SQL crudas)
        $product = DB::select('select * from products where id = ?', [$product]);
        dd($product);

        // return "Showing product with id: {$product} from CONTROLLER";
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
