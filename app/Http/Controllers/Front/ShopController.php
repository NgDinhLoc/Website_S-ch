<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Author;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function show($id)
    {
        $products = Product::findOrFail($id);
        $avgRating = 0;
        $sumRating = array_sum(array_column($products->productComments->toArray(), 'rating'));
        $countRating = count($products->productComments);
        if($countRating != 0){
            $avgRating = $sumRating/$countRating;
        }
        return view('front.detail', compact('products', 'avgRating'));
    }

    public function index(){
        $results = Product::orderBy('name')->take(6)->get();
        $results1 = Author::orderBy('Name')->take(6)->get();

        return view('front.index', compact('results', 'results1'));
    }



    public function about(){
        return view('front.about');
    }

    public function author(){
        $results = Author::all()->take(6);
        return view('front.author', compact('results'));
    }

    public function book(){
        $results = Product::all();
        return view('front.book', compact('results'));
    }

    public function contact(){
        return view('front.contact');
    }
}
