<?php

use App\Http\Controllers\AmoFunctionsController;
use App\Http\Controllers\Mail\SendMailController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SearchPageController;
use App\Http\Controllers\Site\AnyRouteController;
use App\Http\Controllers\Site\CartController;
use App\Http\Controllers\Site\CreatePDFController;
use App\Http\Controllers\Site\IndexController;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\Site\SeriesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

// Index Page
Route::get('/', [IndexController::class, 'index'])->name('hiconix.index');

// About Pages
Route::get('/about', function() {
    $title = 'О компании';
    return view('pages.about', compact('title'));
})->name('hiconix.about');

Route::get('/about/about-us', function() {
    $title = 'О нас';
    return view('pages.about-us', compact('title'));
})->name('hiconix.about.about-us');

Route::get('/about/licenses', function() {
    $title = 'Сертификаты';
    return view('pages.licenses', compact('title'));
})->name('hiconix.about.licenses');

// Support
Route::get('/support', function() {
    $title = 'Сервис и поддержка';
    return view('pages.support', compact('title'));
})->name('hiconix.support');

Route::get('/support/marketing/', function() {
    $title = 'Сервис и поддержка - Маркетинг';
    return view('pages.support-marketing', compact('title'));
})->name('hiconix.support-marketing');

Route::get('/support/delivery/', function() {
    $title = 'Сервис и поддержка - Доставка';
    return view('pages.support-delivery', compact('title'));
})->name('hiconix.support-delivery');

Route::get('/support/ingeneer/', function() {
    $title = 'Сервис и поддержка - Проектная';
    return view('pages.support-ingeneer', compact('title'));
})->name('hiconix.support-ingeneer');

Route::get('/support/tech/', function() {
    $title = 'Сервис и поддержка - Техническая';
    return view('pages.support-tech', compact('title'));
})->name('hiconix.support-tech');

// Contacts
Route::get('/contacts', function() {
    $title = 'Контакты';
    return view('pages.contacts', compact('title'));
})->name('hiconix.contacts');

// Partners
Route::get('/partners', function() {
    $title = 'Наши партнёры';
    return view('pages.partners', compact('title'));
})->name('hiconix.partners');

// FAQ
Route::get('/faq', function() {
    $title = 'Часто задаваемые вопросы о компании Хиконикс';
    return view('pages.faq', compact('title'));
})->name('hiconix.faq');

// Partner
Route::get('/partner', function() {
    $title = 'Парнерская программа';
    return view('pages.partner', compact('title'));
})->name('hiconix.partner.index');

Route::get('/partner/regionalnye-distribyutory', function() {
    $title = 'Региональные дистрибьюторы';
    return view('pages.reg-dis', compact('title'));
})->name('hiconix.partner.reg-dis');

Route::get('/partner/optovye-klimaticheskie-kompanii', function() {
    $title = 'Оптовые климатические компании';
    return view('pages.opt-klim', compact('title'));
})->name('hiconix.partner.opt-klim');

Route::get('/partner/roznichnye-klimaticheskie-kompanii', function() {
    $title = 'Розничные климатические компании';
    return view('pages.rozn-klim', compact('title'));
})->name('hiconix.partner.rozn-klim');

Route::get('/partner/internet-magazin', function() {
    $title = 'Интернет-магазины';
    return view('pages.int-mag', compact('title'));
})->name('hiconix.partner.int-mag');

Route::get('/partner/inzhiniringovye-kompanii', function() {
    $title = 'Инжиниринговые компании';
    return view('pages.inz-komp', compact('title'));
})->name('hiconix.partner.inz-komp');

Route::get('/partner/proektnye-organizatsii', function() {
    $title = 'Проектные организации';
    return view('pages.proect-org', compact('title'));
})->name('hiconix.partner.proect-org');

// Cart
Route::get('/cart', [CartController::class, 'index']);

// Series
Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/{series}', [SeriesController::class, 'show']);

// Publications
Route::get('/publications',[PublicationController::class, 'all']); // All Publications
Route::get('/publications/{group}',[PublicationController::class, 'group']); // All Publications By Group
Route::get('/publications/{group}/{code}', [PublicationController::class, 'index']); // Publication By Code In Group

// Search
Route::get('/search', [SearchPageController::class, 'index']);

// Some Docs
Route::get('/privacy-policy', function () {
    $title = "Политика конфиденциальности компании ООО «Хиконикс»";

    return view('pages.privacy-policy', compact('title'));
});

// Catalog & Products
Route::get('/products/{slug}/', [ProductController::class, 'index']);

//// Catalog - Categories
Route::get('{slug}/', [AnyRouteController::class, 'index'])->where('slug', '([A-Za-z0-9\-\/]+)');

Route::get("/test-url", function () {
     return 123;
});

Route::fallback(function () {
    return App::abort(404);
});

Route::get("/sitemap.xml", function () {
    
});

Route::get("/sitemap-product.xml", function () {
    return 'test123';
});