<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AuthenticationController as auth;
use App\Http\Controllers\Backend\UserController as user;
use App\Http\Controllers\Backend\RoleController as role;
use App\Http\Controllers\Backend\DashboardController as dashboard;
use App\Http\Controllers\Backend\PermissionController as permission;
use App\Http\Controllers\Backend\OrganizationController as organization;
use App\Http\Controllers\Backend\ActivityController as activity;
use App\Http\Controllers\Backend\VolunteerController;
use App\Http\Controllers\Backend\VolunteerActivityController;
use App\Http\Controllers\Backend\EventController as event;

use App\Http\Controllers\vulunteerauthcontroller as userauth;
use App\Http\Controllers\VolunteerController as volunteer;
use App\Http\Controllers\BlogController as blog;
use App\Http\Controllers\SkillController as skill;
use App\Http\Controllers\VolunteerActivityController as volactivity;
use App\Http\Controllers\FrontEndController as fronend;

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
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'signOut'])->name('logOut');

Route::middleware(['checkauth'])->prefix('admin')->group(function () {
    Route::get('dashboard', [dashboard::class, 'index'])->name('dashboard');
    Route::resource('user', user::class);
    Route::resource('organization', organization::class);
    Route::resource('event', event::class);
    Route::resource('activity', activity::class);
    Route::get('user_list',[VolunteerController::class,'user_list'])->name('user.list');
    Route::get('user_edit/{id}',[VolunteerController::class,'user_edit'])->name('user.edit');
    Route::post('user_edit/{id}',[VolunteerController::class,'user_update'])->name('user_update');
    Route::get('blog',[VolunteerActivityController::class, 'blog_list'])->name('blog_list');
    Route::get('skill',[VolunteerActivityController::class, 'skill_list'])->name('skill_list');
    Route::get('activity_list',[VolunteerActivityController::class, 'activity_list'])->name('activity_list');
});
Route::get('/user/register', [userauth::class,'signUpForm'])->name('userregister');
Route::post('user/register', [userauth::class,'signUpStore'])->name('userregister.store');
Route::get('/user/login', [userauth::class,'signInForm'])->name('userlogin');
Route::post('/user/login', [userauth::class,'signInCheck'])->name('userlogin.check');
Route::get('/user/logout', [userauth::class,'signOut'])->name('userlogOut');

Route::middleware(['checkuser'])->prefix('user')->group(function(){
    Route::get('dashboard', [volunteer::class, 'index'])->name('userdashboard');
    Route::get('profile', [volunteer::class, 'myProfile'])->name('myProfile');
    Route::get('profile_edit', [volunteer::class, 'profile_edit'])->name('profile_edit');
    Route::post('profile/save', [volunteer::class, 'save_profile'])->name('save_profile');
    Route::resource('blog', blog::class);
    Route::resource('skill', skill::class);
    Route::resource('volactivity', volactivity::class);
});
Route::get('',[fronend::class, 'home'])->name('frontend-home');
Route::get('organization',[fronend::class, 'organization'])->name('frontend-organization');
Route::get('event',[fronend::class, 'event'])->name('frontend-event');
Route::get('blog',[fronend::class, 'blog'])->name('frontend-blog');

// Route::get('/', function () {
//     return view('welcome');
// });
