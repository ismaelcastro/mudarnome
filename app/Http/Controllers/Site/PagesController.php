<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('site.pages.home.index');
    }
    public function planos(){
        return view('site.pages.planos.index');
    }
    public function privacidade(){
        return view('site.pages.privacidade.index');
    }
    public function termos_de_uso(){
        return view('site.pages.termos-de-uso.index');
    }
}