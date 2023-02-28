<?php

use App\Http\Controllers\Api\CallbackController;
use App\Http\Controllers\Api\GetProductsController;
use App\Http\Controllers\Site\SendCartFormController;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Product;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/products', [GetProductsController::class, 'index']);

Route::get('/products/{id}', function($id) {
    $prod = Product::findOrFail($id);

    if ($prod->brand->id === 2071 || ($prod->brand->id === 2070 && $prod->status == 'on_order2')) {
        $prod->textPrice = "<span class=\"text-muted\">по запросу</span>";
    }
    if (!$prod->ric_current) {
        $prod->ric_current = 0;
    }

    $prod->fullTitle = $prod->getFullTitle();
    return $prod;
});

Route::get('/prod/get_popular', function (Request $request) {
    $p = Product::whereHas('badges', function($b) {
        $b->where('code', '(s2)');
    });

    $prod = $p->paginate(20);

    $products = ProductResource::collection(
        $prod
    );
    return $products;
});

Route::post('/callback/send', [CallbackController::class, 'index']);

Route::post('/cart/send', [SendCartFormController::class, 'send']);

Route::get('/clear-cache-all', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');

    return "Cache Clear All";
});
