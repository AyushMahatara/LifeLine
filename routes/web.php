<?php

use App\Http\Controllers\AdviceController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\IllnessController;
use App\Http\Controllers\MedicineController;
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

Route::get('/', function () {
    return view('frontend.main');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

Route::get('/redirect', [HomeController::class, 'redirect']);



Route::get('/med', [homeController::class, 'med'])->name('med');
Route::get('/illness', [homeController::class, 'illness'])->name('illness');
// Route::get('/index', [AdviceController::class, 'index'])->name('advice.index');

// Route::get('/redirect', [homeController::class, 'redirect']);

Route::prefix('/advice')->group(function () {
    Route::get('/index', [AdviceController::class, 'index'])->name('advice.index');
    Route::get('/create', [AdviceController::class, 'create'])->name('advice.create');
    Route::post('/store', [AdviceController::class, 'store'])->name('advice.store');
    Route::get('/{id}/edit', [AdviceController::class, 'edit'])->name('advice.edit');
    Route::post('/{id}/update', [AdviceController::class, 'update'])->name('advice.update');
    Route::get('/{id}/show', [AdviceController::class, 'show'])->name('advice.show');
});
Route::get('/delete_advice/{id}', [AdviceController::class, 'delete']);


Route::prefix('/article')->group(function () {
    Route::get('/index', [ArticleController::class, 'index'])->name('article.index');
    Route::get('/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('/store', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::post('/{id}/update', [ArticleController::class, 'update'])->name('article.update');
    Route::get('/{id}/show', [ArticleController::class, 'show'])->name('article.show');
});
Route::get('/delete_article/{id}', [ArticleController::class, 'delete']);

Route::prefix('/hospital')->group(function () {
    Route::get('/index', [HospitalController::class, 'index'])->name('hospital.index');
    Route::get('/create', [HospitalController::class, 'create'])->name('hospital.create');
    Route::post('/store', [HospitalController::class, 'store'])->name('hospital.store');
    Route::get('/{id}/edit', [HospitalController::class, 'edit'])->name('hospital.edit');
    Route::post('/{id}/update', [HospitalController::class, 'update'])->name('hospital.update');
    Route::get('/{id}/show', [HospitalController::class, 'show'])->name('hospital.show');
});
Route::get('/delete_hospital/{id}', [HospitalController::class, 'delete']);


Route::prefix('/illness')->group(function () {
    Route::get('/index', [IllnessController::class, 'index'])->name('illness.index');
    Route::get('/create', [IllnessController::class, 'create'])->name('illness.create');
    Route::post('/store', [IllnessController::class, 'store'])->name('illness.store');
    Route::get('/{id}/edit', [IllnessController::class, 'edit'])->name('illness.edit');
    Route::post('/{id}/update', [IllnessController::class, 'update'])->name('illness.update');
    Route::get('/{id}/show', [IllnessController::class, 'show'])->name('illness.show');
});
Route::get('/delete_illness/{id}', [IllnessController::class, 'delete']);

Route::prefix('/medicine')->group(function () {
    Route::get('/index', [MedicineController::class, 'index'])->name('medicine.index');
    Route::get('/create', [MedicineController::class, 'create'])->name('medicine.create');
    Route::post('/store', [MedicineController::class, 'store'])->name('medicine.store');
    Route::get('/{id}/edit', [MedicineController::class, 'edit'])->name('medicine.edit');
    Route::post('/{id}/update', [MedicineController::class, 'update'])->name('medicine.update');
    Route::get('/{id}/show', [MedicineController::class, 'show'])->name('medicine.show');
});
Route::get('/delete_medicine/{id}', [MedicineController::class, 'delete']);


Route::prefix('/hospital')->group(function () {
    Route::get('/bir', [HomeController::class, 'bir'])->name('bir');
    Route::get('/bpkhs', [HomeController::class, 'bpkhs'])->name('bpkhs');
    Route::get('/chitwan', [HomeController::class, 'chitwan'])->name('chitwan');
    Route::get('/maharaj', [HomeController::class, 'maharaj'])->name('maharaj');
    Route::get('/narayani', [HomeController::class, 'narayani'])->name('narayani');
    Route::get('/nepalgunj', [HomeController::class, 'nepalgunj'])->name('nepalgunj');
});
