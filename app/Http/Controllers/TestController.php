<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index1()
    {
        $message = "メッセージ(1)";
        return view('test-pages.test1', compact('message'));
    }

    public function index2()
    {
        $message = 'メッセージ(2)';
        return view('test-pages.test2', compact('message'));
    }
}
