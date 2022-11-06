<?php

use App\Models\User;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {

    // $rooms = DB::table('rooms')->get();

    // $rooms = DB::table('rooms')->where('price', 465)->get();
    // $rooms = DB::table('rooms')->where('price', '=', 465)->get();
    
    // $rooms = DB::table('rooms')->where('price', '>', 465)->get(); // etc > >= < <=
    
    // $rooms = DB::table('rooms')->where([
    //     ['room_size', 1],
    //     ['price', '<', '200'],
    // ])->get();

    // $rooms = DB::table('rooms')->where('price', '>', 465)->orWhere('room_size', 5)->get();
    
    $rooms = DB::table('rooms')->where('price', '>', 465)->orWhere(function ($query) {
        $query->where('room_size', 5);
        $query->where('room_number', 30);
    })->get();

    dump($rooms);

    return view('welcome');
});
