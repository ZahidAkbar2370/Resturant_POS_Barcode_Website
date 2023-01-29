<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('WebApp.Pages.home');
});

Route::get('/resturants', function () {
    return view('WebApp.Pages.resturants');
});

Route::get('/pricing', function () {
    return view('WebApp.Pages.pricing');
});

Route::get('/contact-us', function () {
    return view('WebApp.Pages.contact_us');
});

Route::get('/login', function () {
    return view('WebApp.Pages.login');
});

Route::get('/register', function () {
    return view('WebApp.Pages.register');
});

// Route::post('save-customer', [App\Http\Controllers\Auth\CategoryController::class,"save"]);



///////////////////////////////////////// Admin Panel ///////////////////////////////////////////////

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', function () {
        return view('Administrator.layout');
    });

    Route::get('dashboard', function () {
        return view('Administrator.Dashboard.dashboard');
    });
});


///////////////////////////////////////// Resturant Panel ///////////////////////////////////////////////

Route::group(['prefix' => 'resturant'], function(){
    Route::get('/', function () {
        return view('Resturant.Dashboard.dashboard');
    });

    Route::get('/dashboard', function () {
        return view('Resturant.Dashboard.dashboard');
    });

    Route::get('/users', function () {
        return view('Resturant.User.view_users');
    });

    Route::get('/add-user', function () {
        return view('Resturant.User.add_user');
    });

    Route::get('banners', [App\Http\Controllers\ResturantPanel\BannerController::class,"index"]);
    Route::get('add-banner', [App\Http\Controllers\ResturantPanel\BannerController::class,"create"]);
    Route::post('save-banner', [App\Http\Controllers\ResturantPanel\BannerController::class,"store"]);
    Route::get('delete-banner/{id}', [App\Http\Controllers\ResturantPanel\BannerController::class,"destroy"]);
    Route::get('edit-banner/{id}', [App\Http\Controllers\ResturantPanel\BannerController::class,"edit"]);
    Route::post('update-banner', [App\Http\Controllers\ResturantPanel\BannerController::class,"update"]);
    // Route::get('/banners', function () {
    //     return view('Resturant.Banner.view_banners');
    // });

    // Route::get('/add-banner', function () {
    //     return view('Resturant.Banner.add_banner');
    // });

    // Route::get('/categories', function () {
    //     return view('Resturant.Category.view_categories');
    // });

    // Route::get('/add-category', function () {
    //     return view('Resturant.Category.add_category');
    // });

    Route::get('add-category', [App\Http\Controllers\ResturantPanel\CategoryController::class,"create"]);
    Route::get('categories', [App\Http\Controllers\ResturantPanel\CategoryController::class,"index"]);
    Route::post('save-category', [App\Http\Controllers\ResturantPanel\CategoryController::class,"save"]);
    Route::get('edit-category/{id}', [App\Http\Controllers\ResturantPanel\CategoryController::class,"edit"]);
    Route::post('update-category', [App\Http\Controllers\ResturantPanel\CategoryController::class,"update"]);
    Route::get('delete-category/{id}', [App\Http\Controllers\ResturantPanel\CategoryController::class,"delete"]);
    

    Route::get('add-sub-category', [App\Http\Controllers\ResturantPanel\SubCategoryController::class,"create"]);
    Route::get('sub-categories', [App\Http\Controllers\ResturantPanel\SubCategoryController::class,"index"]);
    Route::post('save-sub-category', [App\Http\Controllers\ResturantPanel\SubCategoryController::class,"store"]);
    Route::get('edit-sub-category/{id}', [App\Http\Controllers\ResturantPanel\SubCategoryController::class,"edit"]);
    Route::post('update-sub-category', [App\Http\Controllers\ResturantPanel\SubCategoryController::class,"update"]);
    Route::get('delete-sub-category/{id}', [App\Http\Controllers\ResturantPanel\SubCategoryController::class,"destory"]);

    // Route::get('/sub-categories', function () {
    //     return view('Resturant.SubCategory.view_sub_categories');
    // });

    // Route::get('/menus', function () {
    //     return view('Resturant.Menu.view_menus');
    // });

    Route::get('menus', [App\Http\Controllers\ResturantPanel\MenuController::class,"index"]); 
    Route::get('add-menu', [App\Http\Controllers\ResturantPanel\MenuController::class,"create"]); 
    Route::post('save-menu', [App\Http\Controllers\ResturantPanel\MenuController::class,"store"]); 
    Route::get('delete-menu/{id}', [App\Http\Controllers\ResturantPanel\MenuController::class,"destroy"]); 
    // Route::get('/add-menu', function () {
    //     return view('Resturant.Menu.add_menu');
    // });

    Route::get('/orders', function () {

        $title = "ALL";

        if(isset($_GET["status"])){
            $title = $_GET["status"];
        }
        return view('Resturant.Order.view_orders',["title" => $title]);
    });

    Route::get('/announcement', function () {
        return view('Resturant.Announcement.announcement');
    });

    Route::get('/product-reviews', function () {
        return view('Resturant.ProductReview.product_reviews');
    });

    Route::get('expenses', [App\Http\Controllers\ResturantPanel\ExpenseController::class,"index"]);
    Route::post('save-expense', [App\Http\Controllers\ResturantPanel\ExpenseController::class,"store"]);
    Route::get('delete-expense/{id}', [App\Http\Controllers\ResturantPanel\ExpenseController::class,"destroy"]);
    // Route::get('/expenses', function () {
    //     return view('Resturant.Expense.view_expenses');
    // });

    Route::get('/setup', function () {
        return view('Resturant.Setting.setup');
    });

    Route::get('/mail-config', function () {
        return view('Resturant.Setting.mail_config');
    });

    Route::get('/sms-module', function () {
        return view('Resturant.Setting.sms_module');
    });

    Route::get('/payment-methods', function () {
        return view('Resturant.Setting.payment_methods');
    });

    Route::get('/push-notifications', function () {
        return view('Resturant.Setting.push_notifications');
    });

    Route::get('/term-and-conditions', function () {
        return view('Resturant.Setting.term_and_conditions');
    });

    Route::get('/about-us', function () {
        return view('Resturant.Setting.about_us');
    });
});


///////////////////////////////////////// Kitchen ///////////////////////////////////////////////

Route::group(['prefix' => 'kitchen'], function(){
    Route::get('/', function () {
        return view('Kitchen.dashboard');
    });

});

///////////////////////////////////////// Resturant App Routes ///////////////////////////////////////////////

Route::group(['prefix' => 'resturants'], function(){
    Route::get('home', function () {
        return view('ResturantApp.Pages.home');
    });

    Route::get('menus', function () {
        return view('ResturantApp.Pages.menus');
    });

    Route::get('category', function () {
        return view('ResturantApp.Pages.categories');
    });

    Route::get('about', function () {
        return view('ResturantApp.Pages.about');
    });

    Route::get('cart', function () {
        return view('ResturantApp.Pages.cart');
    });

    Route::get('checkout', function () {
        return view('ResturantApp.Pages.checkout');
    });

    Route::get('thankyou', function () {
        return view('ResturantApp.Pages.thankyou');
    });

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
