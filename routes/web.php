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

Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => 'role'], function(){
        Route::get('list', 'RoleController@getList');

        Route::get('edit/{id}', 'RoleController@getEdit');
        Route::post('edit/{id}', 'RoleController@postEdit');

        Route::get('add', 'RoleController@getAdd');
        Route::post('add', 'RoleController@postAdd');

        Route::get('delete/{id}', 'RoleController@getDelete');
    });
    Route::group(['prefix' => 'staff'], function(){
        Route::get('list', 'StaffController@getList');

        Route::get('edit/{id}', 'StaffController@getEdit');
        Route::post('edit/{id}', 'StaffController@postEdit');

        Route::get('add', 'StaffController@getAdd');
        Route::post('add', 'StaffController@postAdd');

        Route::get('delete/{id}', 'StaffController@getDelete');
    });
    Route::group(['prefix' => 'course'], function(){
        Route::get('list', 'CourseController@getList');

        Route::get('edit/{id}', 'CourseController@getEdit');
        Route::post('edit/{id}', 'CourseController@postEdit');

        Route::get('add', 'CourseController@getAdd');
        Route::post('add', 'CourseController@postAdd');

        Route::get('delete/{id}', 'CourseController@getDelete');
    });
    Route::group(['prefix' => 'room'], function(){
        Route::get('list', 'RoomController@getList');

        Route::get('edit/{id}', 'RoomController@getEdit');
        Route::post('edit/{id}', 'RoomController@postEdit');

        Route::get('add', 'RoomController@getAdd');
        Route::post('add', 'RoomController@postAdd');

        Route::get('delete/{id}', 'RoomController@getDelete');
    });
    Route::group(['prefix' => 'email'], function(){
        Route::get('list', 'EmailController@getList');

        Route::get('edit/{id}', 'EmailController@getEdit');
        Route::post('edit/{id}', 'EmailController@postEdit');

        Route::get('add', 'EmailController@getAdd');
        Route::post('add', 'EmailController@postAdd');

        Route::get('delete/{id}', 'EmailController@getDelete');
    });
    Route::group(['prefix' => 'subject'], function(){
        Route::get('list', 'SubjectController@getList');

        Route::get('edit/{id}', 'SubjectController@getEdit');
        Route::post('edit/{id}', 'SubjectController@postEdit');

        Route::get('add', 'SubjectController@getAdd');
        Route::post('add', 'SubjectController@postAdd');

        Route::get('delete/{id}', 'SubjectController@getDelete');
    });
});
