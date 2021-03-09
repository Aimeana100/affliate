<?php

use App\Http\Livewire\FrontComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\UserPackageComponent;
use App\Http\Livewire\User\UserDashboardComponent;

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

Route::get('/', FrontComponent::class)->name('front');

Route::get('/about', FrontComponent::class)->name('front.about');
Route::get('/contact', FrontComponent::class)->name('front.contact');

// // route for User or customer
Route::middleware(['auth:sanctum', 'verified', 'user-package'])->group(function(){
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/user/dashboard/payclick', UserDashboardComponent::class)->name('user.dashboard.payclick');
    Route::get('/user/dashboard/balance', UserDashboardComponent::class)->name('user.dashboard.balance');
    Route::get('/user/dashboard/payments', UserDashboardComponent::class)->name('user.dashboard.payments');
    Route::get('user/dashboard/packages_list', UserDashboardComponent::class)->name('user.dashboard.packages_list');
    Route::get('user/dashboard/team_structure', UserDashboardComponent::class)->name('user.dashboard.team_structure');
    Route::get('user/dashboard/education_pdf', UserDashboardComponent::class)->name('user.dashboard.education_pdf');
    Route::get('user/dashboard/packages_list', UserDashboardComponent::class)->name('user.dashboard.packages_list');
    Route::get('user/dashboard/exchange', UserDashboardComponent::class)->name('user.dashboard.exchange');
    Route::get('user/dashboard/product', UserDashboardComponent::class)->name('user.dashboard.product');
    Route::get('user/dashboard/refer_earn', UserDashboardComponent::class)->name('user.dashboard.refer_earn');
    Route::get('user/dashboard/account', UserDashboardComponent::class)->name('user.dashboard.account');
    Route::get('user/dashboard/faq', UserDashboardComponent::class)->name('user.dashboard.faq');
    Route::get('/user/package',UserPackageComponent::class)->name('user.package')->withoutMiddleware('user-package') ;

});

// // route for Admin
// Route::middleware(['auth:sanctum', 'verified', 'admin_auth'])->group(function(){
//     Route::get('/user/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
// });




// Route::middleware(['auth:sanctum', 'verified','user-package'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/package', function () {
//     return view('livewire.package-component');
// })->name('package');

