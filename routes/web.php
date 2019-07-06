<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'PublicController@index')->name('index');

Route::get('/about', 'PublicController@about')->name('about');

// Holds routes for login/register and password reset pages
Auth::routes();

// Require login to access all routes in the below group
Route::group(['middleware' => 'auth', 'prefix' => 'app', 'namespace' => 'App'], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard.index');

    Route::group(['prefix' => 'plan'], function () {
        Route::get('/', 'PlanController@index')->name('dashboard.plan.index');
        Route::post('/', 'PlanController@store')->name('dashboard.plan.store');
    });

    Route::group(['prefix' => 'calendar'], function () {
        Route::get('/', 'CalendarController@index')->name('dashboard.calendar.index');
    });

    Route::group(['prefix' => 'list'], function () {
        Route::get('/', 'ListController@index')->name('dashboard.list.index');
    });

    // Allow the user to view and update their profile information
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', 'ProfileController@index')->name('dashboard.profile.index');
        Route::get('edit', 'ProfileController@edit')->name('dashboard.profile.edit');
        Route::post('edit', 'ProfileController@update')->name('dashboard.profile.update');
    });

    Route::group(['prefix' => 'group'], function () {
        Route::post('/', 'GroupController@create')->name('dashboard.group.create');
        Route::patch('/', 'GroupController@edit')->name('dashboard.group.edit');
        Route::delete('/', 'GroupController@destroy')->name('dashboard.group.destroy');
    });

    Route::group(['prefix' => 'recipes'], function () {
        Route::get('/', 'RecipeController@index')->name('dashboard.recipes.index');
        Route::get('/{id}/{no_eating}', 'RecipeController@show')->name('dashboard.recipes.show');
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('/', 'BlogController@index')->name('dashboard.blog.index');
    });

    Route::get('/admin', 'AdminController@index')
        ->middleware('admin')
        ->name('dashboard.admin.index');
});
