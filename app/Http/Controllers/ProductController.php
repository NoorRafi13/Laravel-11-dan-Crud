<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        //get all products
        $products = Product::latest()->paginate(10);
     
        return view('products.index', compact('products'));
    }
    /**
     * create
     * 
     * @return View
     */
    public function create(): View
    {
        return view('prducts.create');
    }

    /**
     * store
     * 
     * @param mixed $requrst
     * @return RedirectResponse
     */ 
    }

{
    

}