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

    // $isFulltextAdded = DB::statement('ALTER TABLE comments ADD FULLTEXT fulltext_index (content)');
    // dd($isFulltextAdded);

    // dd(DB::table('comments')->get());

    // $result = DB::table('comments')
    //             ->whereRaw("MATCH(content) AGAINST(? IN BOOLEAN MODE)", ['+animi +aut']) // + consists word exists, - consists word not exists
    //             ->get();

    // $result = DB::table('comments')->where('content', 'like', '%animi%')->get();
    
    // dd($result);

    return view('welcome');
});
