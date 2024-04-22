<?php

use App\Http\Controllers\ForgetPasswordManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\FoodController;
use App\Models\Menu;


Route::get('/', function () {
    return view('welcome');
})->name('areas');
Route::get('/landingpage1', [AuthManager::class, 'landingPage1'])->name('landingPage.1');
Route::get('/landingpage2', [AuthManager::class, 'landingPage2'])->name('landingPage.2');
Route::get('/landingpage3', [AuthManager::class, 'landingPage3'])->name('landingPage.3');
Route::get('/landingpage4', [AuthManager::class, 'landingPage4'])->name('landingPage.4');


Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/owner-registration', [AuthManager::class, 'ownerRegistration'])->name('owner.registration');
Route::post('/owner-registration', [AuthManager::class, 'ownerRegistrationPost'])->name('owner.registration.post');
Route::get('/logout', [AuthManager::class, 'logout'])->name('logout');
Route::get('/forget-password', [ForgetPasswordManager::class, 'forgetPassword'])->name('forget.password');
Route::post('/forget-password', [ForgetPasswordManager::class, 'forgetPasswordPost'])->name('forget.password.post');
Route::get('/reset-password/{token}', [ForgetPasswordManager::class, 'resetPassword'])->name('reset.password');
Route::post('/reset-password', [ForgetPasswordManager::class, 'resetPasswordPost'])->name('reset.password.post');



Route::get('/about', function () {
    return view('about', [
        "title" => "ABOUT",
        "name" => "Beatrice",
        "email" => "awfanaifa@email.com",
        "image" => "dbesto.jpg"
    ]);
});

Route::get('/view_orders', [OrderController::class, 'viewOrder'])
    ->name('view_orders');

Route::get('/view_sales', [SalesController::class, 'index'])
->name('view_sales');




Route::middleware(['auth'])->group(function () {
    Route::get('/orders', [AuthManager::class, 'viewOrders'])->name('view.orders');
});

Route::middleware(['auth', 'owner'])->group(function () {
    Route::get('/owner-home', [AuthManager::class, 'ownerHome'])->name('owner.home');
});

Route::get('/owner-home', [AuthManager::class, 'ownerHome'])->name('owner.home');
Route::get('/{area_name}/{restaurant_id}/menu', [MenuController::class, 'show'])->name('menu.show');





//All area
Route::get('/', [AreaController::class, 'index'])->name('areas');

Route::resource('menus', FoodController::class);

//Single area
Route::get('/{area_name}', [AreaController::class, 'show']);

//Single restaurant
Route::get('/{area_name}/{restaurant_id}', [AreaController::class, 'show_menu']);

//add to cart
Route::post('/{area_name}/{restaurant_id}/cart/store', [CartController::class, 'store']);

//payment page
Route::post('/{area_name}/{restaurant_id}/cart/payment', [OrderController::class, 'index']);

//add to order
Route::post('/{area_name}/{restaurant_id}/cart/payment/store', [OrderController::class, 'store']);


//single menu
Route::get('/{area_name}/{restaurant_id}/{menu_id}', [MenuController::class, 'index'])
->where('menu_id', '[0-9]+');

//cart page
Route::get('/{area_name}/{restaurant_id}/cart', [CartController::class, 'index']);

Route::post('/{area_name}/{restaurant_id}/cart/store', [CartController::class, 'store']);
Route::post('/{area_name}/{restaurant_id}/cart/delete', [CartController::class, 'delete'])->name('cart.delete');

// routes/web.php




// routes/web.php

// Route::post('/{area}/{restaurant}/cart/delete', 'CartController')->name('cart.delete');


//food details
Route::get('/posts/{id}', function ($id) {
    return response('Post '. $id);
})->where('id','[0-9]+');

