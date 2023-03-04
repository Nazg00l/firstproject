<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // public function index() {
    //     // return view('products/index');
    //     return view('products.index');
    // }

    // Passing data to views using compact method
    // public function index() {
    //     $title = "Mezzo Welcoming you to his Laravel 8 experience";
    //     $description = "This is Mezzo description";

    //     return view('products.index', 
    //     compact('title', 'description'));
    // }

    // Passing data to views using with method
    // public function index() {
    //     $title = "Mezzo Welcoming you to his Laravel 8 experience";
    //     $description = "This is Mezzo description";

    //     $data = [
    //         'productIchi'   => 'New laptop',
    //         'productNi'     => 'Piano'
    //     ];

    //     // "with" method pass only one variable, unlike compact method
    //     // return view('products.index')->with('title', $title);
    //     return view ('products.index')->with('data', $data);
    // }

    // Passing data Directly in the view
    // public function index() {
    //     $title = "Mezzo Welcoming you to his Laravel 8 experience";
    //     $description = "This is Mezzo description";

    //     $data = [
    //         'productIchi'   => 'New laptop',
    //         'productNi'     => 'Piano'
    //     ];

    //     return view('products.index', [
    //         'data' => $data
    //     ]);
    // }
    public function index() {
        print_r(route('products'));
        return view('products.index');
    }

    public function about() {
        return 'About our freaking products';
    }

    /*public function show($id) {
        return $id;
    }*/
    public function show($name) {
        $data = [
            'productIchi'   => 'New laptop',
            'productNi'     => 'Piano'
        ];
        return view('products.index', [
            'products' => $data[$name] ?? 'Product ' . $name . ' doesn\'t exist' 
        ]);
    }
}
