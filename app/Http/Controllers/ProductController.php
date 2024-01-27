<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct(){
        return view('user.pages.product.index', [
            'title' => 'Sản phẩm'
        ]);
    }
}
