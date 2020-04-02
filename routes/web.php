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

Route::get('admin/login', 'UserController@getLoginAdmin');
Route::post('admin/login', 'UserController@postLoginAdmin');
Route::get('admin/logout', 'UserController@getLogoutAdmin');

Route::group(['prefix' => 'admin', 'middleware' => 'adminLogin'], function(){
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
    Route::group (['prefix'=>'news'],function(){
        //admin/news/list
        Route::get('list', 'NewsController@getList');

        Route::get('edit/{id}', 'NewsController@getEdit');
        Route::post('edit/{id}', 'NewsController@postEdit');

        Route::get('add', 'NewsController@getAdd');
        Route::post('add', 'NewsController@postAdd');

        Route::get('delete/{id}', 'NewsController@getDelete');
    });

    Route::group (['prefix'=>'user'],function(){
        //admin/news/list
        Route::get('list', 'UserController@getList');

        Route::get('edit/{id}', 'UserController@getEdit');
        Route::post('edit/{id}', 'UserController@postEdit');

        Route::get('add', 'UserController@getAdd');
        Route::post('add', 'UserController@postAdd');

        Route::get('delete/{id}', 'UserController@getDelete');
    });

    Route::group (['prefix'=>'slot'],function(){
        //admin/news/list
        Route::get('list', 'SlotController@getList');

        Route::get('add', 'SlotController@getAdd');
        Route::post('add', 'SlotController@postAdd');

        Route::get('delete/{id}', 'SlotController@getDelete');
    });

    Route::group (['prefix'=>'schedule'],function(){
        //admin/schedule/list
        Route::get('list', 'ScheduleController@getList');

        Route::get('edit/{id}', 'ScheduleController@getEdit');
        Route::post('edit/{id}', 'ScheduleController@postEdit');

        Route::get('add', 'ScheduleController@getAdd');
        Route::post('add', 'ScheduleController@postAdd');

        Route::get('delete/{id}', 'ScheduleController@getDelete');
    });
    Route::group (['prefix'=>'messagebox'],function(){
        //admin/schedule/list
        Route::get('delete/{id}/{idCourse}', 'MessageBoxController@getDelete');
    });

    Route::group (['prefix'=>'scheduleslot'],function(){
        //admin/schedule/list
        Route::get('list', 'ScheduleslotController@getList');

        Route::get('edit/{id}', 'ScheduleslotController@getEdit');
        Route::post('edit/{id}', 'ScheduleslotController@postEdit');

        Route::get('add', 'ScheduleslotController@getAdd');
        Route::post('add', 'ScheduleslotController@postAdd');

        Route::get('delete/{id}', 'ScheduleslotController@getDelete');
    });

    Route::group (['prefix'=>'blogging'],function(){
        //admin/blogging/list
        Route::get('list', 'BloggingController@getList');

        Route::get('edit/{id}', 'BloggingController@getEdit');
        Route::post('edit/{id}', 'BloggingController@postEdit');

        Route::get('add', 'BloggingController@getAdd');
        Route::post('add', 'BloggingController@postAdd');

        Route::get('delete/{id}', 'BloggingController@getDelete');
    });

    Route::group (['prefix'=>'coursedetail'],function(){
        //admin/blogging/list
        Route::get('list', 'CoursedetailController@getList');

        Route::get('edit/{id}', 'CoursedetailController@getEdit');
        Route::post('edit/{id}', 'CoursedetailController@postEdit');

        Route::get('add', 'CoursedetailController@getAdd');
        Route::post('add', 'CoursedetailController@postAdd');

        Route::get('delete/{id}', 'CoursedetailController@getDelete');
    });
});

Route::get('client/login', 'UserController@getLoginClient');
Route::post('client/login', 'UserController@postLoginClient');
Route::get('client/logout', 'UserController@getLogoutClient');

Route::group(['prefix' => 'client'], function(){
    Route::group(['prefix' => 'student', 'middleware' => 'studentLogin'], function(){
        Route::get('profile', 'ClientController@getStudentProfile');

        Route::get('edit/{id}', 'ClientController@getEdit');
        Route::post('edit/{id}', 'ClientController@postEditStudentProfile');

        Route::get('news', 'ClientController@getListStudentNews');

        Route::get('newsdetail/{id}', 'ClientController@getDetailStudentNews');

        Route::get('messagebox', 'ClientController@getListCourse');
        //Route::post('messagebox', 'ClientController@postListCourse');

        Route::get('messagecourse/{id}', 'MessageBoxController@getMessCourse');
        Route::post('messagecourse/{id}', 'MessageBoxController@postMessCourse');
    });


    Route::group(['prefix' => 'tutor', 'middleware' => 'tutorLogin'], function(){
        Route::get('profile', 'ClientController@getTutorProfile');

        Route::get('edit/{id}', 'ClientController@getEdit');
        Route::post('edit/{id}', 'ClientController@postEditTutorProfile');

        Route::get('news', 'ClientController@getListTutorNews');

        Route::get('newsdetail/{id}', 'ClientController@getDetailTutorNews');

        Route::get('messagebox', 'ClientController@getListCourse2');
        //Route::post('messagebox', 'ClientController@postListCourse');

        Route::get('messagecourse/{id}', 'MessageBoxController@getMessCourse2');
        Route::post('messagecourse/{id}', 'MessageBoxController@postMessCourse2');

        Route::get('infoclass', 'ClientController@getListCourse3');

        Route::get('detailclass/{id}', 'ClientController@getDetailClass');
        Route::post('detailclass/{id}', 'ClientController@postDetailClass');
    });


    Route::group(['prefix' => 'staff', 'middleware' => 'staffLogin'], function(){
        Route::get('profile', 'ClientController@getStaffProfile');

        Route::get('edit/{id}', 'ClientController@getEdit');
        Route::post('edit/{id}', 'ClientController@postEditStaffProfile');

        Route::get('news', 'ClientController@getListStaffNews');

        Route::get('newsdetail/{id}', 'ClientController@getDetailStaffNews');

        Route::get('course', 'ClientController@getListStaffCourse');
        Route::post('addcourse', 'ClientController@postAddStaffCourse');

        Route::get('editcourse', 'ClientController@getEditStaffCourse');
        //Route::post('editcourse', 'ClientController@postSearchStaffCourse');

        Route::post('showcourse', 'ClientController@postSearchStaffCourse');
        Route::post('showcourse2', 'ClientController@postSearchStaffCourse2');

        Route::post('reallocate', 'ClientController@postReallocateStaffCourse');
    });

});
