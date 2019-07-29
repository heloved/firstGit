<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

// Route::get('hello/:name', 'index/hello');

// 不推荐使用省略的方法
// Route::get('hello', 'index/hello');

// 闭包
// Route::get('hello', function() {
//     return 'hello closures';
// });

//推荐写法
// Route::get('hello', 'index/index/hello');

// 在路由闭包操作中响应模板
// Route::get('hello', function(){
//     return view('index@index/hello');
// });

// 为路由提供参数
// Route::get('hello/:name', function($name){
//     return 'Hello ' . $name;
// });

// 创建第一个静态页面
Route::get('', 'welcome/index/home');
Route::get('/help', 'welcome/index/help');
Route::get('/about', 'welcome/index/about');


return [

];
