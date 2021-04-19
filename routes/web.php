<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('homepage');
});


Route::get('/hello-world', function(){
    return view('hello-world');
});

Route::get('/hello-world/{year}', function($year){
    echo ('Hello world, ' . $year);
    // return view('hello-world');
});


Route::get('/hello-world/{year}/{yourname?}', function($year, $yourname = null){
    $hello_string = '';
    if($yourname == null){
        $hello_string = 'Hello world, ' . $year;
    }else{
        $hello_string = 'Hello world, ' . $year . '. My name is ' . $yourname;
    }
    return view('hello-world')->with('hello_str', $hello_string);
});

Route::get('/detail', function () {
    return view('detail');
});


Route::get('/age/{year}',function($year){
      echo "My date of birth is ".$year;
});

Route::get('/name/{name?}/age/{age}',function($name='Dat', $age =19){
      return 'My name is '. $name. ".I am ". $age. 'Year old';
});

//midleware 

Route::get('/dashboard', function () {
    // Mã xử lý khác viết ở đây
})->middleware('checkage');

Route::get('/dashboard', function () {
    //
})->middleware('auth', 'checkage');


Route::get('/login/{age}', function ($age) {
    return "Du tuoi de dang ki ket hon";
})->middleware('checkage');


Route::get('/role',[
    'middleware' => 'role:superadmin',
    'uses' => 'App\Http\Controllers\MainController@checkRole',
 ]);

 //Route::get('/tin-tuc/{news_id_string}', '@showNews');
 Route::get('/tin-tuc/{news_id_string}',  [MainController::class, 'showNews']);

 Route::get('/controller-middleware', [
    'middleware' => 'First',
    'uses'       => 'App\Http\Controllers\TestController@testControllerMiddleware'
 ]);

 Route::get('category/laravel-nang-cao', [MainController::class, 'uriTest']);

 Route::get('user-info', [MainController::class, 'getUserInfo']);



 Route::get('contact', [ContactController::class,'showContactForm']);

 /*
 use Illuminate\Support\Facades\View;
 Route::get('contact', function(){
    if (View::exists('fontend.contact')) {
        return view('fontend.contact');
    } else {
      return 'Trang liên hệ đang bị lỗi, bạn vui lòng quay lại sau';
    }
  });
  */ 


 Route::post('contact', [ContactController::class, 'insertMessage']);

 Route::get('/basic-response-json', function () {
    $info = ['name' => 'All Laravel', 'version' => 'Laravel 5.4', 'website' => 'http://allaravel.com'];
    return $info;
});

Route::get('test-view', function(){
    return view('fontend.test-view');
  });

  Route::get('first-blade-example', function(){
    return view('fontend.first-blade-example');
  });


  Route::get('components', function () {
    return view('fontend.component-example');
});

Route::get('second-blade-example', function(){
    $comment = 'Tôi là <span class="label label-success">All Laravel</span>'; 
    return view('fontend.second-blade-example')->with('comment', $comment);
});

Route::get('news', function(){
    $news_list = array(
      ['title' => 'Bài viết số 1', 'content' => 'Nội dung bài viết 1', 'post_date' => '2017-01-03'],
      ['title' => 'Bài viết số 2', 'content' => 'Nội dung bài viết 2', 'post_date' => '2017-01-03'],
      ['title' => 'Bài viết số 3', 'content' => 'Nội dung bài viết 3', 'post_date' => '2017-01-03'],
      ['title' => 'Bài viết số 4', 'content' => 'Nội dung bài viết 4', 'post_date' => '2017-01-03']
      );
    return view('fontend.news-list')->with(compact('news_list'));
  });

  Route::get('product/create', [ProductController::class,'create'])->name('product.create');
  Route::get('product/{id}/edit', [ProductController::class,'edit'])->name('product.edit');
  Route::post('product/create', [ProductController::class,'store']);






  Route::get('product/list', [ProductController::class,'index']);

  Route::get('dashboard/login', [AdminController::class,'login'])->name('dashboard.login');

  Route::post('dashboard/login', [AdminController::class,'dashboard']);
  Route::get('dashboard', [AdminController::class,'index'])->name('dashboard');


  Route::get('user/create', 'App\Http\Controllers\UserController@showRegisterForm')->name('user.create');
  Route::post('user/create', 'App\Http\Controllers\UserController@storeUser');
  Route::get('user/list', 'App\Http\Controllers\UserController@getlist')->name('user.list');
  Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');  // declare new style of route 
  Route::get('user/delete/{id}', [UserController::class, 'delete'])->name('user.delete');  // declare new style of route 
 
