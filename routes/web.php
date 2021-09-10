<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Medicine\MedicineController;

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



//MedcineController

Route::get('/medicines' , [MedicineController::class , 'index'] )->name('medlisting');

Route::get('/medicines/{id}' , [MedicineController::class , 'show'] )->name('medicines-detail');

//view route
            //link       //view
Route::view('/pelajar' , 'pelajar' , 
[
   'name' => 'matyo'
]);

/*
* HTTP PROTOCOL
* GET  // paparkan data
* POST //untuk terima , simpan
* PATCH //utk update
* DELETE
* PUT // utk update
* OPTIONS
*/

Route::get('/pesakit/{name}' , function ( $name = '') {

    echo " <h1> Selamat Datang {$name} " ;

});


/*model binding 

 Route::get('/pesakit/{pesakit}' , function (Pesakit $pesakit){

         echo $pesakit->name;
 }); */




//naming  //memudahkan untuk guna dlm controller or view

//Grouping

//  Route::prefix('medicines')->name('medicines.')->group(function (){

//     //medicines.index
//     Route::get('/medicines' , [MedicineController::class , 'index'])->name('index');

//     //medicines.show
//     Route::get('/medicines/{id}' , [MedicineController::class , 'show'])->name('show');

//     //medicines.create
//     Route::post('/medicines' , [MedicineController::class , 'create'])->name('create');

//     //medicines.edit
//     Route::get('/medicines/{id}/{edit}' , [MedicineController::class , 'edit'])->name('edit');

//     //medicines.update
//     Route::get('/medicines/{id}' , [MedicineController::class , 'edit'])->name('update');

// });