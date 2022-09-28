<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\basiccontroller;
use App\Http\Controllers\twocontreoller;
use App\Http\Controllers\photo;
use App\Http\Controllers\regcontroller;
use App\Models\Coustomer;
use Illuminate\Http\Request;
use App\Http\Controllers\coustomercontroller;


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
    return view('index');
});

Route:: get('/demo/{name}/{id?}', function($name , $id = null) {

$data = compact ('name' , 'id') ;

return view('info')->with($data);

} );

route:: get('/info', function(){

    return view ('info');
});


Route:: get('/home' , [basiccontroller::class , 'index']);
route::get('/about', 'App\Http\Controllers\basiccontroller@about');
Route::get('/info',twocontreoller::class);
Route::resource('photo',photo::class);



Route::get('/form' , [regcontroller::class , 'index']);

Route::post('/form' , [regcontroller::class , 'register']);


Route::get('/coustomer' , [coustomercontroller::class , 'index']);
Route::get('/coustomer/view',[coustomercontroller::class, 'view']);
Route::get('/coustomer/delete/{id}',[coustomercontroller::class, 'delete'])->name('coustomer.delete');
Route::get('/coustomer/forcedelete/{id}',[coustomercontroller::class, 'forcedelete'])->name('coustomer.forcedelete');
Route::get('/coustomer/restore/{id}',[coustomercontroller::class, 'restore'])->name('coustomer.restore');
Route::get('/coustomer/edit/{id}',[coustomercontroller::class, 'edit'])->name('coustomer.edit');
Route::post('/coustomer/update/{id}',[coustomercontroller::class, 'update'])->name('coustomer.update');
Route::post('/coustomer',[coustomercontroller::class, 'coustreg']);
Route::get('/coustomer/trash',[coustomercontroller::class, 'trash']);
route::get('/test',function(){
    return view('test');
});



route:: get('get-all-session',function()

{
    $session = session()->all();
    p($session);
});
Route:: get('set-session',function(Request $request){
$request->session()->put('username','All users data');
$request->session()->put('userid','86405');

// Flash working but show line below .
// $request->session()->flash('userRoll','123');
// $request->session()->flash('usercode','****');

return redirect('get-all-session');
});


Route::get('destroy-session',function(){
    session()->forget('username');
    session()->forget('userid');



    return redirect('get-all-session');
});



// Route::get('/coustomer',function(){


//     $coustomer = Coustomer::all();

//     echo"<pre>";
//     print_r($coustomer->toArray());
    
// });