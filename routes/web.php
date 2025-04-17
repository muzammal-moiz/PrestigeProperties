<?php

use Illuminate\Support\Facades\Route;


Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');

    return "Cleared!";

});

//website routes
Route::get('/', [App\Http\Controllers\WebsiteController::class, 'Home'])->name('/');
Route::get('Home', [App\Http\Controllers\WebsiteController::class, 'Home'])->name('Home');
Route::get('home', [App\Http\Controllers\WebsiteController::class, 'Home'])->name('home');
Route::get('About+Us', [App\Http\Controllers\WebsiteController::class, 'aboutus'])->name('aboutus');
Route::get('Faq', [App\Http\Controllers\WebsiteController::class, 'faq'])->name('faq');
Route::get('Contact+Us', [App\Http\Controllers\WebsiteController::class, 'contactus'])->name('contactus');
Route::get('Blogs', [App\Http\Controllers\WebsiteController::class, 'blogs'])->name('blogs');
Route::get('Blog+Detail/{id}', [App\Http\Controllers\WebsiteController::class, 'blog_detail'])->name('blog_detail');
Route::post('Save+Contact+Us', [App\Http\Controllers\WebsiteController::class, 'save_contact_us'])->name('save_contact_us');
Route::get('Sale+Properties', [App\Http\Controllers\WebsiteController::class, 'sale_properties'])->name('sale_properties');
Route::get('Sale+Properties+Details/{slug}', [App\Http\Controllers\WebsiteController::class, 'sale_property_detail'])->name('sale_property_detail');
Route::get('Rent+Properties', [App\Http\Controllers\WebsiteController::class, 'rent_properties'])->name('rent_properties');
Route::get('Rent+Properties+Details/{slug}', [App\Http\Controllers\WebsiteController::class, 'rent_property_detail'])->name('rent_property_detail');
Route::get('Commercial+Properties', [App\Http\Controllers\WebsiteController::class, 'commercial_properties'])->name('commercial_properties');
Route::get('Commercial+Properties+Details/{slug}', [App\Http\Controllers\WebsiteController::class, 'commercial_property_detail'])->name('commercial_property_detail');

Route::get('Login', [App\Http\Controllers\WebsiteController::class, 'login'])->name('login');
Route::post('customerlogin', [App\Http\Controllers\WebsiteController::class, 'customerlogin'])->name('customerlogin');
Route::get('Registration', [App\Http\Controllers\WebsiteController::class, 'registration'])->name('registration');
Route::post('save_register_user', [App\Http\Controllers\WebsiteController::class, 'save_register_user'])->name('save_register_user');
Route::namespace('Auth')->middleware('auth:web')->group(function () {

//    Route::get('/Dashboard', [App\Http\Controllers\WebsiteController::class, 'dashboard'])->name('dashboard');
    Route::get('/customerlogout', [App\Http\Controllers\WebsiteController::class, 'customerlogout'])->name('customerlogout');
    Route::get('/user+profile', [App\Http\Controllers\WebsiteController::class, 'userprofile'])->name('userprofile');
    Route::post('/updateuserprofile', [App\Http\Controllers\WebsiteController::class, 'updateuserprofile'])->name('updateuserprofile');
    Route::post('/save_inquiry', [App\Http\Controllers\WebsiteController::class, 'save_inquiry'])->name('save_inquiry');
    Route::get('/add_to_favourite/{id}', [App\Http\Controllers\WebsiteController::class, 'add_to_favourite'])->name('add_to_favourite');
    Route::get('/Favourites+Properties', [App\Http\Controllers\WebsiteController::class, 'favourites'])->name('favourites');
    Route::get('/Iinquiries', [App\Http\Controllers\WebsiteController::class, 'inquiries'])->name('inquiries');
});

Route::name('admin.')->prefix('admin')->group(function () {

    Route::match(['get', 'post'], '/login', [App\Http\Controllers\AdminController::class, 'adminLogin'])->name('login');

    Route::namespace('Auth')->middleware('adminauth:admin')->group(function () {

        // After Login
        Route::get('/', [App\Http\Controllers\AdminController::class, 'Dashboard'])->name('/');
        Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'Dashboard'])->name('dashboard');
        Route::get('/Home', [App\Http\Controllers\AdminController::class, 'Dashboard'])->name('Home');
        Route::get('/home', [App\Http\Controllers\AdminController::class, 'Dashboard'])->name('home');
        Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logout');

        // Admin Profile
        Route::get('/AdminProfile', [App\Http\Controllers\AdminController::class, 'AdminProfile'])->name('AdminProfile');
        Route::post('/updateprofile', [App\Http\Controllers\AdminController::class, 'updateprofile'])->name('updateprofile');

        // Application Setting
        Route::get('/setting', [App\Http\Controllers\AdminController::class, 'setting'])->name('setting');
        Route::post('/updatesetting', [App\Http\Controllers\AdminController::class, 'updatesetting'])->name('updatesetting');

        //contact Messages
        Route::get('/Contact+Messages', [App\Http\Controllers\AdminController::class, 'contact_messages'])->name('contact_messages');

        //inquiries
        Route::get('/inquiries', [App\Http\Controllers\AdminController::class, 'inquiries'])->name('inquiries');

        // Manage Blogs
        Route::get('/Add+Blogs', [App\Http\Controllers\AdminController::class, 'add_blogs'])->name('add_blogs');
        Route::post('/Save+Blogs', [App\Http\Controllers\AdminController::class, 'save_blogs'])->name('save_blogs');
        Route::get('/Blogs+List', [App\Http\Controllers\AdminController::class, 'blogs_list'])->name('blogs_list');
        Route::get('/delete_blog/{id}', [App\Http\Controllers\AdminController::class, 'delete_blog'])->name('delete_blog');
        Route::get('/Edit+Blog/{id}', [App\Http\Controllers\AdminController::class, 'edit_blog'])->name('edit_blog');
        Route::post('/update_blog', [App\Http\Controllers\AdminController::class, 'update_blog'])->name('update_blog');

        // Manage properties
        Route::get('/Add+Properties/{type}', [App\Http\Controllers\AdminController::class, 'add_properties'])->name('add_properties');
        Route::post('/Save+Property', [App\Http\Controllers\AdminController::class, 'save_property'])->name('save_property');
        Route::get('/Properties+List/{type}', [App\Http\Controllers\AdminController::class, 'properties_list'])->name('properties_list');
        Route::get('/delete_property/{id}', [App\Http\Controllers\AdminController::class, 'delete_property'])->name('delete_property');
        Route::get('/Edit+Property/{id}', [App\Http\Controllers\AdminController::class, 'edit_property'])->name('edit_property');
        Route::post('/update_property', [App\Http\Controllers\AdminController::class, 'update_property'])->name('update_property');
        Route::get('/Edit+Property+Images/{id}', [App\Http\Controllers\AdminController::class, 'edit_images'])->name('edit_images');
        Route::post('/add_new_property_image', [App\Http\Controllers\AdminController::class, 'add_new_property_image'])->name('add_new_property_image');
        Route::get('/delete_property_image/{id}', [App\Http\Controllers\AdminController::class, 'delete_property_image'])->name('delete_property_image');
        Route::get('/Edit+Property+Amenities/{id}', [App\Http\Controllers\AdminController::class, 'edit_amenities'])->name('edit_amenities');
        Route::post('/add_new_property_amenity', [App\Http\Controllers\AdminController::class, 'add_new_property_amenity'])->name('add_new_property_amenity');
        Route::get('/delete_property_amenity/{id}', [App\Http\Controllers\AdminController::class, 'delete_property_amenity'])->name('delete_property_amenity');
        Route::get('/Edit+Property+Plans/{id}', [App\Http\Controllers\AdminController::class, 'edit_plans'])->name('edit_plans');
        Route::post('/add_new_property_plans', [App\Http\Controllers\AdminController::class, 'add_new_property_plans'])->name('add_new_property_plans');
        Route::get('/delete_property_plans/{id}', [App\Http\Controllers\AdminController::class, 'delete_property_plans'])->name('delete_property_plans');
    });

});


?>
