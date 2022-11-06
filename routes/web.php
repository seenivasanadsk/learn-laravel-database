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

    $rooms = DB::table('rooms')->whereBetween('room_size', [1,3])->get(); // etc whereNotBetween()
    $rooms = DB::table('rooms')->whereNotIn('room_size', [1,2,3,4])->get(); // etc whereIn()
    // whereNull('column'), WhereNotNull
    
    // $rooms = DB::table('rooms')->whereDate('created_at', date('Y-m-d'))->get();
    // whereMonth('created_at', '5')
    // whereDay('created_at', '14')
    // whereYear('created_at', '2022')
    // whereTime('created_at', '=', '04:23:45')
    // whereColumn('column1', '>', 'column2')
    
    // whereColumn([
    //     ['first_name', '=', 'last_name'],
    //     ['updated_at', '>', 'created_at']
    // ])

    $users = DB::table('users')
        ->whereExists(function($query) {
            $query->select('id')
                ->from('reservations')
                ->whereRaw('reservations.user_id = users.id')
                ->whereMonth('check_in', '11')
                ->limit(1);
        })
        ->get();
    
    dump($users);

    return view('welcome');
});
