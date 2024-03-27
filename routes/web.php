<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\OurClientController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SubscribersController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


        Route::get('/clear', function () {
            Artisan::call('cache:clear');
            Artisan::call('config:clear');
            Artisan::call('config:cache');
            Artisan::call('view:clear');
            Artisan::call('optimize:clear');
            return "Cleared cache , config , view , optimize !";
        });

    Route::get('/logout', function () {
         Auth::logout();
        return redirect('/login');
    });

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix'=>'dashboard'], function(){
        Route::get('/', [HomeController::class, 'index'])->name('dashboard-index');
        Route::resource('roles', RoleController::class);
        Route::resource('users', UserController::class);


            Route::group(['prefix' => 'categories'], function () {
                Route::group(['middleware' => ['permission:view_categories']], function () {
                    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
                    Route::get('create/', [CategoryController::class, 'create'])->name('categories.create');
                    Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
                    Route::post('/', [CategoryController::class, 'store'])->name('categories.store');
                    Route::get('{id}', [CategoryController::class, 'show'])->name('categories.show');
                    Route::put('{id}', [CategoryController::class, 'update'])->name('categories.update');
                    Route::delete('{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
                    Route::get('{id}/check-association', [CategoryController::class, 'checkAssociation'])->name('categories.checkAssociation');

                });
            });



            Route::group(['prefix' => 'orders'], function () {
                    Route::get('/', [OrderController::class, 'index'])->name('orders.index');
            });

            Route::group(['prefix' => 'subCategory'], function () {
                Route::group(['middleware' => ['permission:view_categories']], function () {
                    Route::get('/', [SubCategoryController::class, 'index'])->name('subCategory.index');
                    Route::get('create/', [SubCategoryController::class, 'create'])->name('subCategory.create');
                    Route::get('edit/{id}', [SubCategoryController::class, 'edit'])->name('subCategory.edit');
                    Route::post('/', [SubCategoryController::class, 'store'])->name('subCategory.store');
                    Route::get('{id}', [SubCategoryController::class, 'show'])->name('subCategory.show');
                    Route::put('{id}', [SubCategoryController::class, 'update'])->name('subCategory.update');
                    Route::delete('{id}', [SubCategoryController::class, 'destroy'])->name('subCategory.destroy');
                });
            });


            Route::group(['prefix' => 'services'], function () {
                Route::group(['middleware' => ['permission:view_blog']], function () {
                    Route::get('/', [ServiceController::class, 'index'])->name('services.index');
                    Route::get('create/', [ServiceController::class, 'create'])->name('services.create');
                    Route::get('/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
                    Route::post('/c', [ServiceController::class, 'store'])->name('services.c');
                    Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
                    Route::delete('{id}', [ServiceController::class, 'destroy'])->name('services.destroy');

                });
            });


            Route::group(['prefix' => 'blog'], function () {
                Route::group(['middleware' => ['permission:view_blog']], function () {
                    Route::get('/', [BlogController::class, 'index'])->name('blog.index');
                    Route::get('create/', [BlogController::class, 'create'])->name('blog.create');
                    Route::get('edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
                    Route::post('/', [BlogController::class, 'store'])->name('blog.store');
                    Route::get('{id}', [BlogController::class, 'show'])->name('blog.show');
                    Route::put('{id}', [BlogController::class, 'update'])->name('blog.update');
                    Route::delete('{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
                });
            });

            // OurClient Routes
            Route::group(['prefix' => 'ourClient'], function () {
                Route::group(['middleware' => ['permission:view_ourClient']], function () {
                    Route::get('create', [OurClientController::class, 'create'])->name('ourClient.create');
                    Route::get('edit/{id}', [OurClientController::class, 'edit'])->name('ourClient.edit');
                    Route::get('/', [OurClientController::class, 'index'])->name('ourClient.index');
                    Route::post('/', [OurClientController::class, 'store'])->name('ourClient.store');
                    Route::get('{id}', [OurClientController::class, 'show'])->name('ourClient.show');
                    Route::put('{id}', [OurClientController::class, 'update'])->name('ourClient.update');
                    Route::delete('{id}', [OurClientController::class, 'destroy'])->name('ourClient.destroy');
                });
            });


            // OurTeam Routes
            Route::group(['prefix' => 'ourTeam'], function () {
                Route::group(['middleware' => ['permission:view_projects']], function () {
                    Route::get('create', [OurTeamController::class, 'create'])->name('ourTeam.create');
                    Route::get('edit/{id}', [OurTeamController::class, 'edit'])->name('ourTeam.edit');
                    Route::get('/', [OurTeamController::class, 'index'])->name('ourTeam.index');
                    Route::post('/', [OurTeamController::class, 'store'])->name('ourTeam.store');
                    Route::get('{id}', [OurTeamController::class, 'show'])->name('ourTeam.show');
                    Route::put('{id}', [OurTeamController::class, 'update'])->name('ourTeam.update');
                    Route::delete('{id}', [OurTeamController::class, 'destroy'])->name('ourTeam.destroy');
                });
            });

            Route::group(['prefix' => 'projects'], function () {
                Route::group(['middleware' => ['permission:view_projects']], function () {
                    Route::get('create', [ProjectsController::class, 'create'])->name('projects.create');
                    Route::get('edit/{id}', [ProjectsController::class, 'edit'])->name('projects.edit');
                    Route::get('/', [ProjectsController::class, 'index'])->name('projects.index');
                    Route::post('/', [ProjectsController::class, 'store'])->name('projects.store');
                    Route::get('{id}', [ProjectsController::class, 'show'])->name('projects.show');
                    Route::put('{id}', [ProjectsController::class, 'update'])->name('projects.update');
                    Route::delete('{id}', [ProjectsController::class, 'destroy'])->name('projects.destroy');
                });
            });

            // Country Routes
            Route::group(['prefix' => 'country'], function () {
                Route::group(['middleware' => ['permission:view_country']], function () {
                    Route::get('create', [CountryController::class, 'create'])->name('country.create');
                    Route::get('edit/{id}', [CountryController::class, 'edit'])->name('country.edit');
                    Route::get('/', [CountryController::class, 'index'])->name('country.index');
                    Route::post('/', [CountryController::class, 'store'])->name('country.store');
                    Route::get('{id}', [CountryController::class, 'show'])->name('country.show');
                    Route::post('{id}', [CountryController::class, 'update'])->name('country.update');
                    Route::delete('{id}', [CountryController::class, 'destroy'])->name('country.destroy');
                });
            });


        Route::group(['prefix'=>'image'], function(){
            Route::post('/upload', [ImageItemController::class, 'store'])->name('image.upload');
            Route::post('delete', [ImageItemController::class, 'delete'])->name('image.delete');
        });

    });
});

Route::group(['prefix'=>'/image'], function(){
    Route::post('/upload', [ImageItemController::class, 'store'])->name('image.upload');
    Route::post('delete', [ImageItemController::class, 'delete'])->name('image.delete');
});


// Route::get('/', function () {
//     return view('home');
// });


Auth::routes();

        Route::get('b/{categoryName}/{blog}', [BlogController::class, 'blog_id'])->name('blog.show');
        Route::get('c/{category}', [CategoryController::class, 'showByCategory'])->name('showByCategory');
        Route::get('s/{SudCategory}', [CategoryController::class, 'showBySudCategory'])->name('showBySudCategory');

        Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');
        Route::resource('subscribers', SubscribersController::class);

        Route::group(['prefix' => 'category'], function () {
            Route::get('/blog-archive', [BlogController::class, 'archive'])->name('blog-archive');
            // Route::get('/articles-by-category', [CategoryController::class, 'showByCategory'])->name('articles.by.category');
        });


        Route::post('/services/store', [OrderController::class, 'store'])->name('services.store');


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', [App\Http\Controllers\CategoryController::class, 'homePage'])->name('homePage');
    Route::get('/contact-us', [App\Http\Controllers\CategoryController::class, 'contact_us'])->name('contact_us');
    Route::get('/page-about', [App\Http\Controllers\CategoryController::class, 'page_about'])->name('page_about');
