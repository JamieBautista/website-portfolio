<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $seo = [];

        $seo['title'] = 'Website Base';
        $seo['description'] = 'Website Base';

        // dd($seo);
        return view('index')
                ->with('seo', @$seo);
    }
}
