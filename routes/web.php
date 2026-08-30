<?php

use App\Http\Controllers\Admin\ActivityController as AdminActivityController;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\BureauMemberController as AdminBureauMemberController;
use App\Http\Controllers\Admin\ChurchController as AdminChurchController;
use App\Http\Controllers\Admin\ConfessionPointController as AdminConfessionPointController;
use App\Http\Controllers\Admin\ContactMessageController as AdminContactMessageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController as AdminDepartmentController;
use App\Http\Controllers\Admin\DownloadController as AdminDownloadController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\HistoryEventController as AdminHistoryEventController;
use App\Http\Controllers\Admin\KeyDateController as AdminKeyDateController;
use App\Http\Controllers\Admin\LibraryItemController as AdminLibraryItemController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\NewsletterController as AdminNewsletterController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\SettingController as AdminSettingController;
use App\Http\Controllers\Admin\SocialWorkController as AdminSocialWorkController;
use App\Http\Controllers\Admin\VideoController as AdminVideoController;
use App\Http\Controllers\Admin\ZoneController as AdminZoneController;
use App\Http\Controllers\ChurchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SocialWorkController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

// Public site
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/mot-president', [PageController::class, 'motPresident'])->name('mot-president');
Route::get('/notre-histoire', [PageController::class, 'histoire'])->name('notre-histoire');
Route::get('/organisation-gouvernance', [PageController::class, 'gouvernance'])->name('organisation-gouvernance');
Route::get('/confession-foi', [PageController::class, 'confessionFoi'])->name('confession-foi');
Route::get('/mission-valeurs', [PageController::class, 'missionValeurs'])->name('mission-valeurs');
Route::get('/don', [PageController::class, 'don'])->name('don');

Route::get('/actualites', [NewsController::class, 'index'])->name('actualites');
Route::get('/actualites/{news}', [NewsController::class, 'show'])->name('actualites.show');
Route::get('/evenements', [EventController::class, 'index'])->name('evenements');
Route::get('/galerie', [GalleryController::class, 'index'])->name('galerie');
Route::get('/galerie/{gallery}', [GalleryController::class, 'show'])->name('galerie.show');
Route::get('/videos-predications', [VideoController::class, 'index'])->name('videos-predications');
Route::get('/newsletters', [NewsletterController::class, 'index'])->name('newsletters');
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

Route::get('/carte-eglises', [ChurchController::class, 'map'])->name('carte-eglises');
Route::get('/annuaire-region', [ChurchController::class, 'directory'])->name('annuaire-region');
Route::get('/zones', [ChurchController::class, 'zones'])->name('zones');
Route::get('/oeuvres-missions', [SocialWorkController::class, 'index'])->name('oeuvres-missions');

Route::get('/bibliotheque', [LibraryController::class, 'index'])->name('bibliotheque');
Route::get('/telechargement', [DownloadController::class, 'index'])->name('telechargement');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Admin auth
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.attempt');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
});

// Admin panel
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('activities', AdminActivityController::class)->except('show');
    Route::resource('confession-points', AdminConfessionPointController::class)->except('show');
    Route::resource('history-events', AdminHistoryEventController::class)->except('show');
    Route::resource('zones', AdminZoneController::class)->except('show');
    Route::resource('bureau-members', AdminBureauMemberController::class)->except('show');
    Route::resource('departments', AdminDepartmentController::class)->except('show');
    Route::resource('churches', AdminChurchController::class)->except('show');
    Route::resource('news', AdminNewsController::class)->except('show');
    Route::resource('events', AdminEventController::class)->except('show');
    Route::resource('key-dates', AdminKeyDateController::class)->except('show');
    Route::resource('videos', AdminVideoController::class)->except('show');
    Route::resource('newsletters', AdminNewsletterController::class)->except('show');
    Route::resource('social-works', AdminSocialWorkController::class)->except('show');
    Route::resource('library-items', AdminLibraryItemController::class)->except('show');
    Route::resource('downloads', AdminDownloadController::class)->except('show');

    Route::get('/pages', [AdminPageController::class, 'index'])->name('pages.index');
    Route::get('/pages/{page}/edit', [AdminPageController::class, 'edit'])->name('pages.edit');
    Route::put('/pages/{page}', [AdminPageController::class, 'update'])->name('pages.update');

    Route::get('/settings', [AdminSettingController::class, 'edit'])->name('settings.edit');
    Route::put('/settings', [AdminSettingController::class, 'update'])->name('settings.update');

    Route::get('/galleries', [AdminGalleryController::class, 'index'])->name('galleries.index');
    Route::get('/galleries/create', [AdminGalleryController::class, 'create'])->name('galleries.create');
    Route::post('/galleries', [AdminGalleryController::class, 'store'])->name('galleries.store');
    Route::get('/galleries/{gallery}/edit', [AdminGalleryController::class, 'edit'])->name('galleries.edit');
    Route::put('/galleries/{gallery}', [AdminGalleryController::class, 'update'])->name('galleries.update');
    Route::delete('/galleries/{gallery}', [AdminGalleryController::class, 'destroy'])->name('galleries.destroy');
    Route::post('/galleries/{gallery}/photos', [AdminGalleryController::class, 'storePhoto'])->name('galleries.photos.store');
    Route::delete('/galleries/{gallery}/photos/{photo}', [AdminGalleryController::class, 'destroyPhoto'])->name('galleries.photos.destroy');

    Route::get('/messages', [AdminContactMessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/{message}', [AdminContactMessageController::class, 'show'])->name('messages.show');
    Route::delete('/messages/{message}', [AdminContactMessageController::class, 'destroy'])->name('messages.destroy');
});
