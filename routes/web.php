<?php

use App\Events\OrderPlaceEvent;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Event;
use App\Events\SendMailEvent;
use App\Models\Order;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Event listener routes
Route::get('event', function () {
    $order = Order::create();
    OrderPlaceEvent::dispatch($order);
    return "order placed successfully";
});


Route::view('latest-order', 'order');