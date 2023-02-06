<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController :: class, 'home']) -> name('human.home');

Route :: get('/human/show/{human}', [MainController :: class, 'humanShow'])
    -> name('human.show');

Route :: get('/human/delete/{human}', [MainController :: class, 'humanDelete'])
    -> name('human.delete');