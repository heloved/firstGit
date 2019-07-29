<?php

namespace app\welcome\controller;

use think\Controller;

class Index extends Controller
{
    public function home()
    {
        return view();
    }
    public function help()
    {
        return '帮助';
    }
    public function about()
    {
        return '关于';
    }
}