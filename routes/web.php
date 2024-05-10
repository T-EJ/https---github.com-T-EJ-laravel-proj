<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MlController;
use App\Http\Controllers\productController;
use App\Http\Controllers\ctController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ExcelController;

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
// Route::group(['middleware'=>"web"],function(){
Route::get('/', function () {
    return view('welcome');
});

 Route::get('/log', function () {
     return view('login');
 });

Route::get('/home2', function () {
    return view('home2');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

//

Route::get('/signup',[\App\Http\Controllers\SignUpController::class,'index']);
 Route::get('/login', [\App\Http\Controllers\SignUpcontroller::class,'log']);
// Route::get('/signup', [SignUpController::class,'index'])->middleware('alreadyLoggedIn');
// login mate
Route::post('/login',[\App\Http\Controllers\SignUpController::class,'login']);

// 
Route::post('/index',[\App\Http\Controllers\SignUpController::class,'store'])->name('store');
Route::post('/',[\App\Http\Controllers\SignUpController::class,'index'])->name('index');
Route::get('/view',[\App\Http\Controllers\SignUpController::class,'view']);
Route::get('/dashboard',[\App\Http\Controllers\SignUpController::class,'dashboard']);


Route::get('/', function () {
    return view('home');

});



//view mate
Route::get('/prod',[\App\Http\Controllers\productController::class,'index']);
Route::post('/product',[\App\Http\Controllers\productController::class,'store']);
Route::get('/myproduct',[\App\Http\Controllers\productController::class,'show_gallery']);

//edit  data mate 
Route::get('/editdata/{id}',[\App\Http\Controllers\SignUpcontroller::class,'edits']);
Route::post('/updates/{id}',[\App\Http\Controllers\SignUpController::class,'updates']);
Route::get('/deldata/{id}',[\App\Http\Controllers\SignUpcontroller::class,'dele']);

//edit image mate
Route::get('/edit/{id}',[\App\Http\Controllers\productController::class,'edit']);
Route::post('/update/{id}',[\App\Http\Controllers\productController::class,'update']);
Route::get('/delrec/{id}',[\App\Http\Controllers\productController::class,'del']);

Route::get('/dashboard', [\App\Http\Controllers\SignUpController::class, 'dashboard']);//->middleware('isLoggedIn');

Route::get('/logout', [\App\Http\Controllers\SignUpController::class, 'logout']);

//mail 
Route::get('/mail',[MlController::class,'index']);
//   });

Route::get('/pro',[\App\Http\Controllers\productController::class, 'show_ed']);
Route::get('/Products',[\App\Http\Controllers\productController::class, 'show_gall']);
// Cart

Route::get('/cart', function () {
    return view('ct');
});
Route::get('/cart',[CtController::class,'index']);
Route::get('/addincart/{product}',[CtController::class,'addincart'])->name('add-cart');
Route::get('/remove/{id}',[CtController::class,'removecart'])->name('remove');
Route::get('/deletecart',[CtController::class,'deletecart']);

 Route::get('/Act/{id}',[\App\Http\Controllers\productController::class,'productopen']);
 Route::get('/contact',[\App\Http\Controllers\SignUpController::class,'cont']);
 Route::get('/profile/{id}', [\App\Http\Controllers\SignUpcontroller::class, 'profile']);

 //Profile Update
 Route::get('/proedit/{id}',[\App\Http\Controllers\SignUpcontroller::class,'proedit']);
Route::post('/proupdate/{id}',[\App\Http\Controllers\SignUpcontroller::class,'proupdate']);



Route::get('/buy', function () {
    return view('buy');

});


Route::get('/checkout', function () {
    return view('checkout');

});

Route::get('/myPDF', [\App\Http\Controllers\productController::class, 'pdf']);




Route::get('/asign', [\App\Http\Controllers\AdminController::class, 'index']);
Route::post('/admin', [\App\Http\Controllers\AdminController::class, 'login']);
Route::get('/admin1', [\App\Http\Controllers\AdminController::class, 'ad']);



Route::get('/users',[\App\Http\Controllers\ExcelController::class,'export']);
Route::post('/user',[\App\Http\Controllers\ExcelController::class,'import'])->name('import');
Route::get('/excel',[\App\Http\Controllers\SignUpController::class,'excel']);
