<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function mojaPrvaMetoda(){
      return view('front.pocetna');
    }

    public function mojaDrugaMetoda(){
      return view('front.druga');
    }
}
