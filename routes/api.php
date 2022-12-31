<?php

use App\Http\Controllers\Api\AnswerController;
use App\Http\Controllers\Api\BenefitController;
use App\Http\Controllers\Api\DiskonController;
use App\Http\Controllers\Api\MainMenuController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\SubMainMenuController;
use App\Http\Controllers\Api\SubMainTagsController;
use App\Http\Controllers\Api\TagsController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('mainMenu', MainMenuController::class);
Route::apiResource('subMainMenu', SubMainMenuController::class);
Route::apiResource('tags', TagsController::class);
Route::apiResource('subMenuTags', SubMainTagsController::class);
Route::apiResource('questions', QuestionController::class);
Route::apiResource('answer', AnswerController::class);
Route::apiResource('benefit', BenefitController::class);