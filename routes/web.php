<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamsController;
use Illuminate\Support\Facades\Route;

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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/teams', [TeamsController::class, 'index'])->name('teams');
Route::get('/blog/{type?}', [PostsController::class, 'blog'])->name('blog');
Route::get('/blog/{type}/{slug}', [PostsController::class, 'blogShow'])->name('blog.show');
Route::get('/case', [PostsController::class, 'case'])->name('case');
Route::get('/case/{slug}', [PostsController::class, 'caseShow'])->name('case.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{type?}', [ServicesController::class, 'services'])->name('services.items');
Route::get('/services/{type}/{slug}', [ServicesController::class, 'servicesShow'])->name('services.items.show');

Route::any('/clear-cache', function () {
    \Artisan::call('optimize:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('route:clear');
    \Artisan::call('config:clear');
    \Artisan::call('config:cache');
    \Artisan::call('view:clear');
    // return "All Cache is cleared";
    // $pageInfo = PageSettingInfo::getHomeBanner('/index');
    // return view('index', ['pageInfo' => $pageInfo]);
    return redirect()->route('index');
});

Route::any('/sitemap-generate', function () {
    \Artisan::call('sitemap:generate');
    return redirect()->route('index');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('generator_builder', 'App\Http\Controllers\Admin\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function() {
        Route::resource('aboutUsInfos', App\Http\Controllers\Admin\AboutUsInfoController::class, ["as" => 'admin']);
        Route::resource('pageSettingInfos', App\Http\Controllers\Admin\PageSettingInfoController::class, ["as" => 'admin']);
        Route::resource('postTypeInfos', App\Http\Controllers\Admin\PostTypeInfoController::class, ["as" => 'admin']);
        Route::resource('servicesInfos', App\Http\Controllers\Admin\ServicesInfoController::class, ["as" => 'admin']);
        Route::resource('postsInfos', App\Http\Controllers\Admin\PostsInfoController::class, ["as" => 'admin']);
        Route::resource('companyInfos', App\Http\Controllers\Admin\CompanyInfoController::class, ["as" => 'admin']);
        Route::resource('teamInfos', App\Http\Controllers\Admin\TeamInfoController::class, ["as" => 'admin']);

        Route::any('adminUsers', [App\Http\Controllers\Admin\AdminAccountController::class, 'index'])->name('admin.adminUsers.index');
        Route::any('adminUsers/create', [App\Http\Controllers\Admin\AdminAccountController::class, 'create'])->name('admin.adminUsers.create');
        Route::any('adminUsers/store', [App\Http\Controllers\Admin\AdminAccountController::class, 'store'])->name('admin.adminUsers.store');
        Route::any('adminUsers/show/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'show'])->name('admin.adminUsers.show');
        Route::any('adminUsers/edit/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'edit'])->name('admin.adminUsers.edit');
        Route::any('adminUsers/update/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'update'])->name('admin.adminUsers.update');
        Route::any('adminUsers/destroy/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'destroy'])->name('admin.adminUsers.destroy');
    });
});


Route::any('/editor-image-upload', [App\Http\Controllers\EditorImageUploadController::class, 'upload'])->name('editor-image-upload');
Route::any('/delete-editor-image', [App\Http\Controllers\EditorImageUploadController::class, 'deleteUpload'])->name('delete-editor-image');

