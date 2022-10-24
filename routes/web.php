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

    // $users    = DB::table('users')->get()->pluck('email');
    // $users    = DB::table('users')->pluck('email');
    // $users    = User::pluck('email');
    // $user     = DB::table('users')->where('email', 'dooley.zoie@example.net')->first();
    // $user     = DB::table('users')->where('email', 'dooley.zoie@example.net')->value('name');
    // $user     = DB::table('users')->find(1);
    // $comments = DB::table('comments')->select('content as comment_content')->get();
    // $comments = DB::table('comments')->distinct()->pluck('user_id');
    // $comments = DB::table('comments')->min('user_id');
    // $comments = DB::table('comments')->max('user_id');
    // $comments = DB::table('comments')->sum('user_id');
    // $comments = DB::table('comments')->avg('user_id');
    // $comments = DB::table('comments')->where('content', 'content')->exists();
    // $comments = DB::table('comments')->where('content', 'content')->doesntExist();
    $comments = DB::table('comments')->where('content', 'content')->doesntExist();
    dump($comments);

    return view('welcome');
});
