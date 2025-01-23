<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     // $aboutPageUrl = route("about");
//     // dd("$aboutPageUrl");
//     $productviewPageUrl = route("product.view", ['lang' => 'fr', 'id' => '16']);
//     dd("$productviewPageUrl");
//     return view('welcome');
// });//by default
//Route::get('/about', function () {
//return view('about');
//});
// Route::view('/about', 'about');
// //with required parmeters
// Route::get('/product/{id}', function (int $id) {
//     return "product id=$id";
// });
// //or
// Route::get('/product/{id}', function (string $id) {
//     return "product id=$id";
// })->whereNumber("id");

// /*Route::get('/product', function () {
//     return "product page";
// });*/
// //with optional parmeters
// /*Route::get('/product/{category?}', function (string $category = null) {
//     return "product category =$category";
// });*/
// Route::get('/user/{username}', function (string $username) {
//     // ...
// })->where('username', '[a-z]+');

// /*Route::get('/user/{username}', function (string $username) {
//     return "product id=$username";
// })->whereAlpha("username");*/
// /*Route::get('/user/{username}', function (string $username) {
//     return "product id=$username";
// })->whereAlphaNumeric("username");*/
// /*Route::get("{lang}/products", function (string $lang) {
//     return "product in language  $lang";
// })->whereIn("lang", ["en", "ka", "in"]);*/

// Route::get("{lang}/product/{id}", function (string $lang, string $id) {
//     // ...
// })->where(["lang" => '[A-Z]{2}', 'id' => '\d{4,}']); //a_z if we want it lower case

// Route::get('/search/{search}', function (string $search) {
//     return $search;
// })->where('search', '.*')->name('search');


// Route::get("/about", function () {
//     // ...
// })->name("about");

// Route::get("/about-us", function () {
//     // ...
// })->name("about");

// Route::get("/P/O/{lang}/product/{id}", function () {
//     // ...
// })->name("product.view");

// Route::get("/user/profile", function () {
// })->name("profilepage");

// Route::get("/newuser", function () {
//     // return redirect("/user/profile");
//     return redirect()->route("profilepage");
//     //return to_route("profilepage");
// });

// //prefiix
// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         // Matches The "/admin/users" URL
//     });
// });

// Route::name('admin.')->group(function () {
//     Route::get('/users', function () {
//         return Route::currentRouteName();
//         ;
//         // Route assigned name "admin.users"...
//     })->name('users');
// });
// Route::fallback(function () {
//     return 'unexisting path';
// });

// Route::get('/sum/{a}/{b}', function (int $a, int $b) {
//     // return $a + $b;
//     echo 'Sum: $a + $b =' . ($a + $b);
// })->whereNumber(['a', 'b'])->name('somme');
// Route::get('/sum/{a}/{b}', [calcul::class, 'calculateSum'])
//     ->whereNumber(['a', 'b'])
//     ->name('somme');

// Route::controller(calcul::class)->group(function () {
//     Route::get('/sum/{a}/{b}', 'calculateSum')
//         ->whereNumber(['a', 'b'])
//         ->name('somme');

//     Route::get('/sous/{a}/{b}', 'calculateSous')
//         ->whereNumber(['a', 'b'])
//         ->name('somme');

// });

// Route::get('/about', function () {
//     return "about";
// })->name('about');

// Route::get('/hello', [HelloController::class, 'Hello']);


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/car/search', [CarController::class, 'search'])->name('car.search');
Route::resource('car', CarController::class);
Route::get('/signup', [SignupController::class, 'signup'])->name('signup');
Route::get('/login', [LoginController::class, 'login'])->name('login');

