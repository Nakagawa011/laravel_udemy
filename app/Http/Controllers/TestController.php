<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index1() {
        return view('test-pages.test1');
    }

    public function index2() {
        return view('test-pages.test2');
    }
}
