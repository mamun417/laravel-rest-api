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

// buyers
Route::apiResource('buyers', 'Buyer\BuyerController')->only(['index', 'show']);
Route::apiResource('buyers.transactions', 'Buyer\BuyerTransactionsController')->only(['index']);
Route::apiResource('buyers.products', 'Buyer\BuyerProductsController')->only(['index']);

// sellers
Route::apiResource('sellers', 'Seller\SellerController')->only(['index', 'show']);

Route::apiResource('categories', 'Category\CategoryController');
Route::apiResource('products', 'Product\ProductController')->only(['index', 'show']);
Route::apiResource('transactions', 'Transaction\TransactionController')->only(['index', 'show']);
Route::apiResource('transactions.categories', 'Transaction\TransactionCategoryController')->only(['index']);
Route::apiResource('transactions.sellers', 'Transaction\TransactionSellerController')->only(['index']);
Route::apiResource('users', 'User\UserController');
