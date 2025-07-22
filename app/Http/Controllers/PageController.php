<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home() { return view('pages.home'); }
    public function sobre() { return view('pages.sobre'); }
    public function horarios() { return view('pages.horarios'); }
    public function evangelho() { return view('pages.evangelho'); }
}