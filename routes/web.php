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

    // $orderBy = 'rating';
    // $orderBy = null;

    // $comments = DB::table('comments')->when($orderBy, function ($query) use ($orderBy){
    //     $query->orderBy($orderBy);
    // }, function ($query) {
    //     $query->orderBy("id", 'desc');
    // })->get();

    // $comments = DB::table('comments')->orderBy('id')->chunk(3, function($comments) {
    //     foreach ($comments as $comment) {
    //         DB::table('comments')->whereId($comment->id)->update(['rating' => 0]);
    //     }
    // });

    // dump(DB::table('comments')->get());

    return view('welcome');
});
