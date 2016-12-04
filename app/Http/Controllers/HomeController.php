<?php
namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        $number = "AAA000";
        return view('index', ['number' => $number]);
    }
}