<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::group(['prefix' => 'admin', 'middleware' => 'is.admin', 'as'=> 'admin.'], function () {
// Route::get('/', 'AdminDashboardController@index')->name('dashboard');
// Route::resource('vehicle', 'AdminVehicleController');
// });https://stackoverflow.com/questions/58246094/admin-route-group-with-prefix-middleware-and-named-routes



/* +++++++++++++++++++++++++ Home Static Routes +++++++++++++++++++++++++ */



Route::get('/', [HomeController::class, 'index'])->name('index');



Route::get('/about', [HomeController::class, 'about'])->name('about');



Route::get('/contact', [HomeController::class, 'contact'])->name('contact');



/* ------------------------- Home Static Routes ------------------------- */



/* +++++++++++++++++++++++++ Projects Guest Routes +++++++++++++++++++++++++ */



Route::name('projects.')->prefix('project')->group(function () {

    Route::get('/all', [HomeController::class, 'allProjects'])->name('all');
    Route::get('/{projectId}', [HomeController::class, 'project'])->name('project');
});



/* ------------------------- Projects Guest Routes ------------------------- */



/* +++++++++++++++++++++++++ Admin Routes +++++++++++++++++++++++++ */



Route::controller(AdminController::class)->prefix("admin")->name("admin.")->group(function () {



    /* +++++++++++++++++++++++++ Admin Menu +++++++++++++++++++++++++ */



    Route::get('', 'menu')->name("menu");



    /* ------------------------- Admin Menu ------------------------- */



    /* +++++++++++++++++++++++++ Projects Routes +++++++++++++++++++++++++ */



    Route::get('/projects', 'projects')->name("projects");



    /* +++++++++++++++++++++++++ Create Project Routes +++++++++++++++++++++++++ */



    Route::get('/projects/create', 'createProject')->name("projects.create");



    /* ------------------------- Create Project Routes ------------------------- */



    /* ------------------------- Projects Routes ------------------------- */



    /* +++++++++++++++++++++++++ categories Routes +++++++++++++++++++++++++ */



    Route::get('/categories', 'categories')->name("categories");



    /* +++++++++++++++++++++++++ Create a Category +++++++++++++++++++++++++ */



    Route::get('/categories/create', 'createCategory')->name("categories.create");



    /* ------------------------- Create a Category ------------------------- */



    /* +++++++++++++++++++++++++ store a Category +++++++++++++++++++++++++ */



    Route::post('/categories/store', 'storeCategory')->name("categories.store");



    /* ------------------------- store a Category ------------------------- */



    /* +++++++++++++++++++++++++ Edit a Category +++++++++++++++++++++++++ */



    Route::get('/categories/edit/{id}', 'editCategory')->name("categories.edit");



    /* ------------------------- edit a Category ------------------------- */



    /* +++++++++++++++++++++++++ Update a Category +++++++++++++++++++++++++ */



    Route::put('/categories/update/{id}', 'updateCategory')->name("categories.update");



    /* ------------------------- Update a Category ------------------------- */



    /* +++++++++++++++++++++++++ Delete a Category +++++++++++++++++++++++++ */



    Route::delete('/categories/delete/{id}', 'deleteCategory')->name("categories.delete");



    /* ------------------------- Delete a Category ------------------------- */



    /* ------------------------- categories Routes ------------------------- */



    /* +++++++++++++++++++++++++ Admins Routes +++++++++++++++++++++++++ */



    Route::get('/admins', 'admins')->name("admins");



    /* ------------------------- Admins Routes ------------------------- */



    /* +++++++++++++++++++++++++ slideshow Routes +++++++++++++++++++++++++ */



    Route::get('/slideshow', 'slideshow')->name("slideshow");



    /* ------------------------- slideshow Routes ------------------------- */
});



/* ------------------------- Admin Routes ------------------------- */


/* +++++++++++++++++++++++++ Contact Us Form +++++++++++++++++++++++++ */



Route::post('/contact', [HomeController::class, 'StoreContactForm'])->name('contact.store');



/* ------------------------- Contact Us Form ------------------------- */
