<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class WelcomeController extends Controller
{
    public function index(){
        return view('front.home.home');
    }

    public function project(){
        return view('front.project.project');
    }

    public function howto(){
        return view('front.howTo.howTo
        ');
    }

    public function pdf(){
    $pdf = PDF::loadview('front.pdf.pdf');
    return $pdf->stream('myPdf.pdf');
    }

//    public function about(){
//        return view('front.about.about');
//    }

    public function team(){
        return view('front.team.team');
    }

    public function contact(){
        return view('front.contact.contact');
    }
}
