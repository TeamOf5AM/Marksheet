<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Classes\ClassController;
use App\Http\Controllers\Subject\SubjectController;
use App\Http\Controllers\Student\StudentController;

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
Route::get('/', function () {return view('index');})->name('home');
Route::post('/register',[UserController::class,'register'])->name('user.register');
Route::post('/login',[UserController::class,'login'])->name('user.login');
Route::get('test','User@login');
//Users Registeration Routes
// Route::group(['middleware'=>'user_auth'], function () {
Route::group([], function () {
    Route::get('dashboard',[UserController::class,'dashboard']);
    Route::group(['prefix' => 'class'], function () {
        Route::get('all',[ClassController::class,'index'])->name('class.all');
        Route::get('classall',[ClassController::class,'all'])->name('cl.all');
        Route::get('edit/{id}',[ClassController::class,'edit'])->name('class.edit');
        Route::get('delete/{id}',[ClassController::class,'delete'])->name('class.delete');
        Route::post('status',[ClassController::class,'status'])->name('class.status');
        Route::post('add',[ClassController::class,'create'])->name('class.add');
    });
    
    Route::group(['prefix' => 'subject'], function () {
        Route::get('all',[SubjectController::class,'index'])->name('subject.all');
        Route::get('edit/{id}',[SubjectController::class,'edit'])->name('subject.edit');
        Route::get('delete/{id}',[SubjectController::class,'delete'])->name('subject.delete');
        Route::post('status',[SubjectController::class,'status'])->name('subject.status');
        Route::post('add',[SubjectController::class,'create'])->name('subject.add');
    });
    Route::group(['prefix' => 'student'], function () {
        Route::get('all',[StudentController::class,'index'])->name('student.all');
        Route::get('edit/{id}',[StudentController::class,'edit'])->name('student.edit');
        Route::get('delete/{id}',[StudentController::class,'delete'])->name('student.delete');
        Route::post('status',[StudentController::class,'status'])->name('student.status');
        Route::post('add',[StudentController::class,'create'])->name('student.add');
    });













    // Start Of Assets Routes
        
    // Route::group(['prefix' => 'assets'], function () {
    //     Route::get('get-assets',[TemplateController::class,'index']);
        
    // });

    // End Of Assets Routes

    // Route::get('createportfolio',[PortfolioController::class,'create']);

    // Route::post('saveheader',[PortfolioController::class,'saveheader']);
    Route::get('logout', function () {
        session()->forget('USER_LOGIN');
        session()->forget('USER_ID');
        session()->flash('error','Logout sucessfully');
        return redirect('/');
    });
    // your routes here
});
// End Of Users Registeration Routes




Route::get('blog',[BloggerController::class,'index']);
Route::post('blog/auth',[BloggerController::class,'auth'])->name('blog.auth');
Route::group(['middleware'=>'blogger_auth'],function(){
    Route::get('blog/dashboard',[BloggerController::class,'dashboard']);

    Route::get('blog/my_writeups',[BlogController::class,'index']);
    Route::get('blog/my_writeups/status/{status}/{id}',[BlogController::class,'status']);
    
    Route::get('blog/my_photographs',[PhotographController::class,'index']);
    Route::get('blog/my_photographs/status/{status}/{id}',[PhotographController::class,'status']);
    
    Route::get('blog/article/create',[ArticleController::class,'manage_article']);
    Route::get('blog/article/my_writeups/status/{status}/{id}',[ArticleController::class,'status']);
    Route::post('blog/article/manage_article_process',[ArticleController::class,'manage_article_process'])->name('article.manage_article_process');
    Route::get('blog/article/delete/{id}',[ArticleController::class,'destroy']);
    Route::get('blog/article/manage_article/{id}',[ArticleController::class,'manage_article']);
    
    Route::get('blog/blog/manage_blog/{id}',[BlogController::class,'manage_blog']);
    Route::get('blog/blog/create',[BlogController::class,'manage_blog']);
    Route::get('blog/blog/manage_blog/{id}',[BlogController::class,'manage_blog']);
    Route::post('blog/blog/manage_blog_process',[BlogController::class,'manage_blog_process'])->name('blog.manage_blog_process');
    Route::get('blog/blog/delete/{id}',[BlogController::class,'destroy']);





    Route::get('blog/logout', function () {
        session()->forget('BLOGGER_LOGIN');
        session()->forget('BLOGGER_ID');
        session()->flash('error','Logout sucessfully');
        return redirect('/');
    });
});