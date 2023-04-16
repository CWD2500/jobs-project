<?php   

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//  public  page

// //  Controller  Show Jobs
Route::get('job/home/',[App\Http\Controllers\Show\JobController::class , 'index'])->name('job.home');


// Controller  Show  List Jobs

Route::get('list/job/{slug}/' ,[App\Http\Controllers\Show\JobController::class , 'listJob'])->name('list.job');
Route::get('list/details/job/{slug}' ,[App\Http\Controllers\Show\JobController::class , 'detailJob'])->name('list.details.job');
Route::get('list/details/job/applyJob/{slug}' ,[App\Http\Controllers\Show\ApplyJobController::class , 'applyJob'])->name('list.details.job.applyJob');
Route::post('list/details/job/applyJob/store' ,[App\Http\Controllers\Show\ApplyJobController::class , 'storeApply'])->name('list.details.job.applyJob.store');


// ProFile 
Route::get('proFile/{slug}/' ,         [App\Http\Controllers\ProFileController::class , 'index'])->name('proFile.home');
Route::get('proFile/create/{slug}/' ,  [App\Http\Controllers\ProFileController::class , 'create'])->name('proFile.create');
Route::post('proFile/store/{slug}/' ,  [App\Http\Controllers\ProFileController::class , 'store'])->name('proFile.store');
Route::get('edit/proFile/{slug}/' ,    [App\Http\Controllers\ProFileController::class , 'edit'])->name('proFile.edit');
Route::post('edit/proFile/update/{slug}' , [App\Http\Controllers\ProFileController::class , 'update'])->name('proFile.update');







// Route::group([ 'middleware' => 'auth'], function () {
    

// Route::middleware([ 'middleware' => 'auth'] )->group(function () {



// Admin page
// DashBord
Route::get('admin/dashBord/' ,[App\Http\Controllers\JobController::class , 'dashBord'])->name('admin.dashbord');

//  Controller Jobs
Route::get('admin/dashBord/home/',[App\Http\Controllers\JobController::class , 'index'])->name('admin.dashbord.home');
Route::get('admin/dashBord/create/' ,[App\Http\Controllers\JobController::class , 'create'])->name('admin.dashbord.create');
Route::post('admin/dashBord/store/',[App\Http\Controllers\JobController::class , 'store'])->name('admin.dashbord.store');
Route::get('admin/dashBord/edit/{id}' ,[App\Http\Controllers\JobController::class , 'edit'])->name('admin.dashbord.edit');
Route::post('admin/dashBord/update/{id}/' ,[App\Http\Controllers\JobController::class , 'update'])->name('admin.dashbord.update');
Route::get('admin/dashBord/delete/{id}' ,[App\Http\Controllers\JobController::class , 'destroy'])->name('admin.dashbord.delete');
Route::get('admin/dashBord/trashed/',[App\Http\Controllers\JobController::class , 'trashed'])->name('admin.dashbord.trashed');
Route::get('admin/dashBord/trashed/retore/{id}' ,[App\Http\Controllers\JobController::class , 'trashedRestore'])->name('admin.dashbord.trashed.restore');
Route::get('admin/dashBord/trashed/deleted/{id}/' ,[App\Http\Controllers\JobController::class , 'deleted'])->name('admin.dashbord.trashed.delete');






//  Controller  List Jobs
Route::get('admin/dashBord/list/job/home/'         ,  [App\Http\Controllers\ListJobController::class , 'index'])->name('admin.dashbord.list.job.home');
Route::get('admin/dashBord/list/job/create/'       ,  [App\Http\Controllers\ListJobController::class , 'create'])->name('admin.dashbord.list.job.create');
Route::post('admin/dashBord/list/job/store/'       ,  [App\Http\Controllers\ListJobController::class , 'store'])->name('admin.dashbord.list.job.store');
Route::get('admin/dashBord/list/job/edit/{id}'     ,  [App\Http\Controllers\ListJobController::class , 'edit'])->name('admin.dashbord.list.job.edit');
Route::post('admin/dashBord/list/job/update/{id}'  ,  [App\Http\Controllers\ListJobController::class , 'update'])->name('admin.dashbord.list.job.update');
Route::get('admin/dashBord/list/job/delete/{id}'   ,  [App\Http\Controllers\ListJobController::class , 'destroy'])->name('admin.dashbord.list.job.destroy');
Route::get('admin/dashBord/list/job/trashed/',        [App\Http\Controllers\ListJobController::class , 'trashed'])->name('admin.dashbord.list.job.trashed');
Route::get('admin/dashBord/trashed/list/job/retore/{id}' ,   [App\Http\Controllers\ListJobController::class , 'restore'])->name('admin.dashbord.trashed.list.restore');
Route::get('admin/dashBord/trashed//list/job/deleted/{id}/' ,[App\Http\Controllers\ListJobController::class , 'deleteEnd'])->name('admin.dashbord.trashed.list.job.delete');



// apply Job
Route::get('admin/dashBord/list/apply' ,   [App\Http\Controllers\ListApply::class , 'home'])->name('admin.dashbord.list.apply');
Route::get('admin/dashBord/list/apply/{id}' ,   [App\Http\Controllers\ListApply::class , 'deleteApplyJob'])->name('admin.dashbord.list.deleteApplyJob');
Route::get('admin/dashBord/list/apply/proFile/{id}' ,   [App\Http\Controllers\ListApply::class , 'listApply'])->name('admin.dashbord.list.proFile');





// });