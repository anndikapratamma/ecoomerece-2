<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
    public function about()
    {
        return view('front.about');
    }
    public function blog_detail()
    {
        return view('front.blog_detail');
    }
    public function blog()
    {
        return view('front.blog');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function home_02()
    {
        return view('front.home_02');
    }
    public function home_03()
    {
        return view('front.home_03');
    }
    public function product()
    {
        return view('front.product');
    }
    public function product_detail()
    {
        return view('front.product_detail');
    }
    public function shoping_cart()
    {
        return view('front.shoping_cart');
    }

}
