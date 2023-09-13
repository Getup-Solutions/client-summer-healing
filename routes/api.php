<?php

use App\Http\Controllers\api\AuthController;
use App\Http\Controllers\api\courseController;
use App\Http\Controllers\api\EventController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\ForgotPasswordController;
use App\Http\Controllers\api\SubscriptionController;
use App\Http\Controllers\api\TrainingsController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





// Public routes
//Route::get('/courses_list', [courseController::class,'index']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/forgot_password', [ForgotPasswordController::class, 'forgot']);
Route::post('/reset_password', [ForgotPasswordController::class, 'reset']);


// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function() {

    //USERS
    Route::get('user_by_id/{id}', [UserController::class,'singleuser']);
    Route::get('user_courses_by_user_id/{id}', [UserController::class,'singleusercourse']);
    Route::get('user_subscription_by_user_id/{id}', [UserController::class,'singleusersubscription']);
    Route::get('orders_by_user_id/{id}', [UserController::class,'userorders']);
    Route::get('events_booked_by_user_id/{id}', [UserController::class,'userbookedevents']);
    Route::get('events_created_by_user_id/{id}', [UserController::class,'usercreatedevents']);
    Route::get('training_order_by_user_id/{id}', [UserController::class,'userordertraining']);

    //EVENTS
    Route::get('subscriptions_list', [SubscriptionController::class,'index']);

    //COURSES
    Route::get('courses_list', [courseController::class,'index']);
    Route::get('course_by_id/{id}', [courseController::class,'singlecourse']);
    Route::get('trainers_by_course_id/{id}', [courseController::class,'coursetrainer']);
    Route::post('course_purchase_by_course_id/{id}', [courseController::class,'coursepurchase']);


    //TRAININGS
    Route::get('trainings_list', [TrainingsController::class,'index']);

    //EVENTS
    Route::get('events_list', [EventController::class,'index']);

    


});

