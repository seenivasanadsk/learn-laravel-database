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

    // $user = DB::select('select * from users where id = ?', [1]);
    // $users = DB::select('select * from users');
    // $user = DB::insert('insert into users (name, email, password) VALUES (?, ?, ?)', ['seeni', 'sen@as.c', 'pass']);
    // $user = DB::update('update users set name = ? where name = ?', ['Seenivasan', 'seeni']);
    // $user = DB::delete('delete from users where name = ?', ['Seenivasan']);
    // $user = DB::statement('truncate table users');

    // $user = DB::table('users')->select('id', 'name')->get();

    $user = User::get();
    
    dump($user);

    return view('welcome');
});
