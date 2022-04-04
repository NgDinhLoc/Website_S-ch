<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Product;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
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
