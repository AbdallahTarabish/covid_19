<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("test" , function (){
    $DB_URL=parse_url(    "postgres://igvihlwvomnlrk:359561b97341ddc5783135dc87c70251c0f16002f964e52dac00d194e656a896@ec2-34-195-233-155.compute-1.amazonaws.com:5432/dchaqd99a2dj41");

    return $DB_URL;
});
Route::resources([
    "advice" =>\App\Http\Controllers\AdviceController::class ,
    "article" =>\App\Http\Controllers\ArticalController::class ,
]);
Route::get("article/{id}/subject" , function ($id){
    return \App\Models\Models\Artical::query()->select("subject")->where("id" , $id)->get();
});
