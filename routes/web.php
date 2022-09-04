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



    /* +++++++++++++++++++++++++ categories Routes +++++++++++++++++++++++++ */



    Route::prefix('categories')->name('categories.')->group(function () {

        Route::get('', 'categories')->name("categories");



        /* +++++++++++++++++++++++++ Create a Category +++++++++++++++++++++++++ */



        Route::get('create', 'createCategory')->name("create");



        /* ------------------------- Create a Category ------------------------- */



        /* +++++++++++++++++++++++++ store a Category +++++++++++++++++++++++++ */



        Route::post('store', 'storeCategory')->name("store");



        /* ------------------------- store a Category ------------------------- */



        /* +++++++++++++++++++++++++ Edit a Category +++++++++++++++++++++++++ */



        Route::get('edit/{id}', 'editCategory')->name("edit");



        /* ------------------------- edit a Category ------------------------- */



        /* +++++++++++++++++++++++++ Update a Category +++++++++++++++++++++++++ */



        Route::put('update/{id}', 'updateCategory')->name("update");



        /* ------------------------- Update a Category ------------------------- */



        /* +++++++++++++++++++++++++ Delete a Category +++++++++++++++++++++++++ */



        Route::delete('delete/{id}', 'deleteCategory')->name("delete");



        /* ------------------------- Delete a Category ------------------------- */
    });;



    /* ------------------------- categories Routes ------------------------- */



    /* +++++++++++++++++++++++++ Projects Routes +++++++++++++++++++++++++ */



    Route::prefix('projects')->name('projects.')->group(function () {

        Route::get('', 'projects')->name("projects");



        /* +++++++++++++++++++++++++ Create Project Route +++++++++++++++++++++++++ */



        Route::get('create', 'createProject')->name("create");



        /* ------------------------- Create Project Route ------------------------- */



        /* +++++++++++++++++++++++++ Store Project Route +++++++++++++++++++++++++ */



        Route::post('store', 'storeProject')->name("store");



        /* ------------------------- Store Project Routes ------------------------- */



        /* +++++++++++++++++++++++++ Edit Project Route +++++++++++++++++++++++++ */



        Route::get('edit/{id}', 'editProject')->name("edit");



        /* ------------------------- Edit Project Routes ------------------------- */



        /* +++++++++++++++++++++++++ Update Project Route +++++++++++++++++++++++++ */



        Route::put('update/{id}', 'updateProject')->name("update");



        /* ------------------------- Update Project Routes ------------------------- */



        /* +++++++++++++++++++++++++ Delete Project +++++++++++++++++++++++++ */



        Route::delete('delete/{id}', 'deleteProject')->name("delete");



        /* ------------------------- Delete Project ------------------------- */
    });



    /* ------------------------- Projects Routes ------------------------- */



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
