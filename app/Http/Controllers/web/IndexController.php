<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\common\Controller;
use App\Http\Services\annotation\ControllerAnnotation;

#[ControllerAnnotation(title: 'index')]
class IndexController extends Controller
{
    public function initialize()
    {
        parent::initialize();
    }

    public function index()
    {
        return view('web.index');
    }
}
