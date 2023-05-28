<?php

use App\Http\Controllers\GigController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Mockery\Generator\Parameter;
use App\Models\Gig;

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

// Route::get('/', function () {
//     return view('gigs', [
//         'heading' => 'Latest Gigs',
//         'gigs' => Gig::all()
//     ]);
// });
// ;

//Single Gig

// Route::get('{id}', function ($id) {
//     $gig = Gig::find($id);
//     if ($gig) {
//         return view('gig', [
//             'gig' => $gig
//         ]);
//     } else {
//         abort(404);
//     }

// });

//or

// when we call a riute it calls a method-----just like urls.py in django
Route::get('/', [GigController::class,'index']);
Route::get('/create-gig', [GigController::class,'create_gig']);
Route::post('/gigs', [GigController::class,'store']);
Route::get('{gig}',[GigController::class,'show']);
Route::put('update/{gig}',[GigController::class,'update']);