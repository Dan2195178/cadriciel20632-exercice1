<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercice1Controller extends Controller
{
    //
    public function index(){
        return view('home');
    }
    public function about(){
        $title = "We've got what you need!";
        $detail = "Start Bootstrap has everything you need to get your new website up and running in no time! Choose one of our open source, free to download, and easy to use themes! No strings attached!";
        return view('about',['title' => $title,
                             'detail' => $detail
        ]);
    }

    public function service(){
        return view('service');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function contact(){
        return view('contact');
    }

    public function contactForm(Request $request){//Request est une class

      //$request est la réponse de la requête, tous les inputs vont être envoyé dans les propriétés de la variable global $_POST (Tels que $_POST['name'],...) et la variable $_POST va se manipulé dans une class Request{propriété ...,  méthode ...}

     return view('contact', ['data' => $request]);
    }
}
