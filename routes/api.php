<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/services', [ApiController::class, 'getCategoriesServices']);
        Route::get('/our_work', [ApiController::class, 'getCategoriesOur_work']);
        Route::get('/blog', [ApiController::class, 'getCategoriesblog']);
    });

    Route::group(['prefix' => 'ourClients'], function () {
        Route::get('/', [ApiController::class, 'getOurClients']);
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/{id}', [ApiController::class, 'getBlogId']);
    });




    Route::group(['prefix' => '/ourTeam'], function () {
        Route::get('/country', [ApiController::class, 'getCountry']);
        Route::get('/country/{id}', [ApiController::class, 'getCountryId']);
        Route::get('/', [ApiController::class, 'getOurTeam']);
    });

    Route::group(['prefix' => '/email-send'], function () {
        Route::post('/', [ApiController::class, 'email_send']);
    });


