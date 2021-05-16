<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // show Product
    public function index()
    {
        $products = DB::select('select * from product');
        return view('index', ['products' => $products]);
    }
    // load form
    public function insertform()
    {
        return view('create');
    }

    public function show($id)
    {
        $product = DB::select('select * from product where id = ?', [$id]);
        return view('update', ['product' => $product]);
    }

    // insert data to database 
    // pertemuan 09
    public function insert(Request $request)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $category_id = $request->input('category');
        DB::insert("insert into product (name,price,category_id) values(?,?,?)", [$name, $price, $category_id]);
        // Jika data berhasil di tambahkan
        echo "Record inserted successfully<br>";
        echo '<a href = "/product-show">Click Here</a> to add product';
    }

    // fungsi untuk edit product
    // pertemuan 10
    public function edit(Request $request, $id)
    {
        $name = $request->input('name');
        $price = $request->input('price');
        $category_id = $request->input('category');
        DB::update('update product set (name, price, category) values(?,?,?) where id = ?', [$name, $price, $category_id, $id]);
        echo "Record updated successfully<br/>";
        echo '<a href = "/edit">Click Here</a> to go back.';
    }

    // fungsi untuk delete product
    // pertemuan 11
    public function destroy($id)
    {
        DB::delete('delete from product where id = ?', [$id]);
        echo "Record deleted successfully.<br/>";
        echo '<a href = "/delete-records">Click Here</a> to go back.';
    }
}
