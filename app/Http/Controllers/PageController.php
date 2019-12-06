<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage()
    {
        return view('pages.homePage');
    }
    public function aboutPage()
    {
        return view('pages.aboutPage');
    }
    public function contactPage()
    {
        return view('pages.contactPage');
    }
    public function portfolioPage()
    {
        return view('pages.portfolioPage');
    }
}
