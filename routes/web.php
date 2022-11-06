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

    // $users = DB::table('users')->latest()->get();
    // $users = DB::table('users')->latest()->first();
    // $users = DB::table('users')->orderBy('name')->get();
    // $users = DB::table('users')->orderBy('name', 'desc')->get();
    // $users = DB::table('users')->inRandomOrder()->get();
    // $users = DB::table('users')->inRandomOrder()->first();
    // $users = DB::table('users')->inRandomOrder()->first();

    // $comments = DB::table('comments')
    //             ->selectRaw('count(id) as number_of_5stars_comments, rating')
    //             ->groupBy('rating')
    //             ->where('rating', 5)
    //             ->get();  
    
    // $comments = DB::table('comments')->skip(5)->take(5)->get();
    $comments = DB::table('comments')->limit(5)->offset(5)->get();

    // dump($users);
    dump($comments);

    return view('welcome');
});
