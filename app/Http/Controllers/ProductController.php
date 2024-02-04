<?php

namespace App\Http\Controllers;


class ProductController extends Controller
{
    public function showProduct(){
        return view('user.pages.product.index', [
            'title' => 'Sản phẩm'
        ]);
    }
}
