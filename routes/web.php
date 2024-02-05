<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\PropertyTypeController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Backend\TeacherController;
use App\Http\Controllers\Backend\DepartmentController;
use App\Http\Controllers\Backend\HostalController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function(){

    Route::get('/profile',[ProfileController::class,'index'])->name('profiles.index');
    Route::get('/profile/{id}',[ProfileController::class,'edit'])->name('profile.edit');
    Route::put('/profile',[ProfileController::class,'update'])->name('profile.update');
    Route::delete('/profile',[ProfileController::class,'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';


//ADmin group middleware
Route::middleware(['auth', 'role:admin'])->group(function () {

Route::get('/admin/dashboard',[AdminController::class,'admin'])->name('admin.dashboard');
Route::get('/admin/logout',[AdminController::class,'adminLogout'])->name('admin.logout');
Route::get('/admin/profile',[AdminController::class,'adminProfile'])->name('admin.profile');
Route::put('/admin/profile/store',[AdminController::class,'adminProfileStore'])->name('admin.profile.store');
Route::get('/admin/change/password',[AdminController::class,'adminChangePassword'])->name('admin.change.password');
Route::put('/admin/update/password',[AdminController::class,'adminUpdatePassword'])->name('admin.update.password');

});//End Admin middleware
Route::get('/admin/login',[AdminController::class,'adminLogin'])->name('admin.login');


//Agent group middleware
Route::middleware(['auth', 'role:agent'])->group(function () {

Route::get('/agent/dashboard',[AgentController::class,'agent'])->name('agent.dashboard');

});//End agent middleware


//Admin access group
Route::middleware(['auth', 'role:user,admin,agent'])->group(function () {

Route::get('/user/dashboard',[UserController::class,'user'])->name('user.dashboard');


    Route::controller(UserController::class)->group(function(){
        Route::get('/all/user','allUser')->name('all.user');
        Route::get('/add/user','addUser')->name('add.user');
        Route::post('/add/user/store','addUserStore')->name('add.user.store');
        Route::get('/edit/user','editUser')->name('edit.user');
        Route::put('/update/user/{id}','updateUser')->name('update.user');
    }); //UserController

    Route::controller(StudentController::class)->group(function(){

        Route::get('/all/student','allStudent')->name('all.student');
        Route::get('/add/student','addStudent')->name('add.student');
        Route::post('/add/student/store','addStudentStore')->name('add.student.store');
        Route::get('/edit/student/{id}','editStudent')->name('edit.student');
        Route::put('/update/student/{id}','updateStudent')->name('update.student');
        Route::get('/delete/student/{id}','deleteStudent')->name('delete.student');

    }); //StudentController



});//End Admin access group


    //Admin access group
Route::middleware(['auth', 'role:admin,agent'])->group(function () {

    Route::controller(TeacherController::class)->group(function(){

        Route::get('/all/teacher','allTeacher')->name('all.teacher');
        Route::get('/add/teacher','addTeacher')->name('add.teacher');
        Route::post('/add/teacher/store','addTeacherStore')->name('add.teacher.store');
        Route::get('/edit/teacher/{id}','editTeacher')->name('edit.teacher');
        Route::put('/update/teacher/{id}','updateTeacher')->name('update.teacher');
        Route::get('/delete/teacher/{id}','deleteTeacher')->name('delete.teacher');

    }); //TeacherController

    Route::controller(DepartmentController::class)->group(function(){

        Route::get('/all/department','allDepartment')->name('all.department');
        Route::get('/all/department/student/{id}','allDepartmentStudent')->name('all.department.student');
        Route::get('/add/department','addDepartment')->name('add.department');
        Route::post('/add/department/store','addDepartmentStore')->name('add.department.store');
        Route::get('/edit/department/{id}','editDepartment')->name('edit.department');
        Route::put('/update/department/{id}','updateDepartment')->name('update.department');
        Route::get('/delete/department/{id}','deleteDepartment')->name('delete.department');


    }); //DepartmentController

    Route::controller(HostalController::class)->group(function(){

        Route::get('/all/hostal','allHostal')->name('all.hostal');
        Route::get('/all/hostal/student/{id}','allHostalStudent')->name('all.hostal.student');
        Route::get('/delete/hostal/{id}','deleteHostal')->name('delete.hostal');


    }); //HostalController



});//End Admin access group


//Admin access group
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::controller(PropertyTypeController::class)->group(function(){

        Route::get('/all/type','allType')->name('all.type');
        Route::get('/add/type','addType')->name('add.type');
        Route::post('/add/type/store','addTypeStore')->name('add.type.store');
        Route::get('/edit/type/{id}','editType')->name('edit.type');
        Route::put('/update/type/{id}','updateType')->name('update.type');
        Route::get('/delete/type/{id}','deleteType')->name('delete.type');


    }); //PropertyTypeController

});//End Admin access group
