<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthenticationController as auth;
use App\Http\Controllers\Backend\UserController as user;
use App\Http\Controllers\Backend\RoleController as role;
use App\Http\Controllers\Backend\DashboardController as dashboard;
use App\Http\Controllers\Backend\PermissionController as permission;
use App\Http\Controllers\Backend\OrganizationController as organization;

use App\Http\Controllers\vulunteerauthcontroller as userauth;
use App\Http\Controllers\VolunteerController as volunteer;
use App\Http\Controllers\BlogController as blog;
use App\Http\Controllers\SkillController as skill;

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
Route::get('/register', [auth::class,'signUpForm'])->name('register');
Route::post('/register', [auth::class,'signUpStore'])->name('register.store');
Route::get('', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'signOut'])->name('logOut');

Route::middleware(['checkauth'])->prefix('admin')->group(function () {
    Route::get('dashboard', [dashboard::class, 'index'])->name('dashboard');
    Route::resource('user', user::class);
    Route::resource('organization', organization::class);
});
Route::get('/user/register', [userauth::class,'signUpForm'])->name('userregister');
Route::post('user/register', [userauth::class,'signUpStore'])->name('userregister.store');
Route::get('/user/login', [userauth::class,'signInForm'])->name('userlogin');
Route::post('/user/login', [userauth::class,'signInCheck'])->name('userlogin.check');
Route::get('/user/logout', [userauth::class,'signOut'])->name('userlogOut');

Route::middleware(['checkuser'])->prefix('user')->group(function(){
    Route::get('dashboard', [volunteer::class, 'index'])->name('userdashboard');
    Route::resource('blog', blog::class);
    Route::resource('skill', skill::class);
});


// Route::get('/', function () {
//     return view('welcome');
// });
