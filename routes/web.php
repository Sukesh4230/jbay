<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AmenityController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SpaController;
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



Route::get('admin-poolvilla', function () {
    return view('admin-poolvilla');
});

Route::get('admin-beetle', function () {
    return view('admin-beetle');
})->name('beetle');
Route::get('admin-jacuzzivilla', function () {
    return view('admin-jacuzzivilla');
});

Route::get('admin-bougainvilla', function () {
    return view('admin-bougainvilla');
});

Route::get('admin-pavilionroom', function () {
    return view('admin-pavilionroom');
});

Route::get('admin-penthouse', function () {
    return view('admin-penthouse');
});
Route::get('/home', function () {
    return view('admin-homepage');
});
Route::get('admin-amenities', function () {
    return view('admin-amenities');
});

Route::get('admin-activities', function () {
    return view('admin-activities');
});

Route::get('admin-wayanad', function () {
    return view('admin-wayanad');
});

Route::get('admin-gallery', function () {
    return view('admin-gallery');
});

Route::get('admin-spa', function () {
    return view('admin-spa');
});

Route::get('admin-blog', function () {
    return view('admin-blog');
});

Route::get('admin-contact', function () {
    return view('admin-contact');
});

Route::get('/', function () {
    return view('auth.login');
});

Route::view('sad','website.index');

Auth::routes();
Route::group(
    ['middleware' => ['auth']],
    function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::post('edit-home', [HomeController::class, 'edit'])->name('edit-home');
        Route::post('home-slider-upload', [HomeController::class, 'sliderImageUpload'])->name('home_slider_upload');
        Route::get('delete-home_slider-image/{id}', [HomeController::class, 'deleteHomeSlider'])->name('delete-home_slider-image');

        Route::resource('stays', RoomController::class);
        Route::post('room-slider-upload', [RoomController::class, 'sliderImageUpload'])->name('room_slider_upload');
        Route::get('delete-room_slider-image/{id}', [RoomController::class, 'deleteRoomSlider'])->name('delete-room_slider-image');
        Route::post('room-footer-upload', [RoomController::class, 'footerImageUpload'])->name('room_footer_upload');
        Route::get('delete-room_footer-image/{id}', [RoomController::class, 'deleteRoomFooter'])->name('delete-room_footer-image');

        Route::resource('spa', SpaController::class);
        Route::get('delete-spa_slider-image/{id}', [SpaController::class, 'deleteSpaSlider'])->name('delete-spa_slider-image');
        Route::get('delete-spa_footer-image/{id}', [SpaController::class, 'deleteSpaFooter'])->name('delete-spa_footer-image');

        Route::resource('amenities', AmenityController::class);
        Route::post('amenities-slider-upload', [AmenityController::class, 'sliderImageUpload'])->name('amenities_slider_upload');
        Route::get('delete-amenity_slider-image/{id}', [AmenityController::class, 'deleteSlider'])->name('delete-amenity_slider-image');

        Route::resource('activities', ActivityController::class);
        Route::post('activity-slider-upload', [ActivityController::class, 'sliderImageUpload'])->name('activity_slider_upload');
        Route::get('delete-activity_slider-image/{id}', [ActivityController::class, 'deleteSlider'])->name('delete-activity_slider-image');

        Route::resource('discovers', DiscoverController::class);
        Route::post('discover-slider-upload', [DiscoverController::class, 'sliderImageUpload'])->name('discover-slider-upload');
        Route::get('delete-discover-slider-image/{id}', [DiscoverController::class, 'deleteSlider'])->name('delete-discover-slider-image');
    }
);
