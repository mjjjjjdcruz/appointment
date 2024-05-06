<?php

namespace App\Http\Controllers\ClientController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientPagesController extends Controller
{
    public function events()
    {
        return view('client.events');
    }
    public function client()
    {
        return view('client.dashboard');
    }
    public function aboutus()
    {
        return view('client.aboutus');
    }
    public function faqs()
    {
        return view('client.faqs');
    }
    public function reviews()
    {
        return view('client.reviews');
    }
    public function book()
    {
        return view('client.book-form');
    }
    public function return()
    {
        return view('client.return-form');
    }

}
