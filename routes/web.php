<?php

use App\Http\Controllers\apprentices_Controller;
use App\Http\Controllers\Crud_Operation;
use App\Http\Controllers\Searchnado;
use Illuminate\Support\Facades\Route;

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


//when you hit add i want u to grab the controller u  made and call out the method display 
Route::get('/add', [Crud_Operation::class, 'form_Page'])->name('form_Page');

//when you hit the create as a post request from a form ,grab the request instance copy and callout the method insert within the controller
Route::Post('/add', [Crud_Operation::class, 'Insert'])->name('insert');
//when you hit the /index i want you to go to ur database fetch all of the data and display em 
Route::get('/index', [Crud_Operation::class, 'index'])->name('index');
//--------------------------Standard Route--------------------------------------
//Route for retrieving data 
Route::get('Edit/{id}', [Crud_Operation::class, 'Retriever']);
//Route for updating data 
Route::post('update/{id}', [Crud_Operation::class, 'update']);
//Route for deleting data 
Route::get("Delete/{id}", [Crud_Operation::class, 'delete']);
//------------------premium Route and version------------------------


Route::get("Studentadd/{id}", [apprentices_Controller::class, 'FormRetriever']);




//Route for updating Student information


Route::post("Studentstore", [apprentices_Controller::class, 'Studentstore']);



//search route hehehehehe Ya boih
Route::get("search", [Searchnado::class, 'search']);
