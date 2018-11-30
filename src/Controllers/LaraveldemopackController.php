<?php

namespace Thephpx\laraveldemopack\controllers;

use Illuminate\Routing\Controller as BaseController;

class LaraveldemopackController extends BaseController
{
    public function index()
    {
        return rand();
    }
}