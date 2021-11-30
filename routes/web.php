<?php
Route::get('/', function() {
    return redirect(route('admin.dashboard'));
});

Route::get('home', function() {
    return redirect(route('admin.dashboard'));
});

Route::get('kesekretariatan', function() {
    return redirect(route('admin.kesekretariatan'));
});
Route::get('/kesekretariatan/upload', 'UploadController@upload');
Route::post('/kesekretariatan/upload/proses', 'UploadController@proses_upload');

Route::get('acara', function() {
    return redirect(route('admin.acara'));
});

Route::get('/acara/upload', 'UploadController@upload');
Route::post('/acara/upload/proses', 'UploadController@proses_upload');

Route::get('konsultasi', function() {
    return redirect(route('admin.konsultasi'));
});
    


Route::name('admin.')->prefix('admin')->middleware('auth')->group(function() {
    Route::get('dashboard', 'DashboardController')->name('dashboard');
    Route::get('kesekretariatan', 'KesekretariantanController')->name('kesekretariatan');
    Route::get('acara', 'AcaraController')->name('acara');
    Route::get('konsultasi', 'KonsultasiController')->name('konsultasi');

    Route::get('users/roles', 'UserController@roles')->name('users.roles');
    Route::resource('users', 'UserController', [
        'names' => [
            'index' => 'users'
        ]
    ]);
});

Route::middleware('auth')->get('logout', function() {
    Auth::logout();
    return redirect(route('login'))->withInfo('You have successfully logged out!');
})->name('logout');

Auth::routes(['verify' => true]);

Route::name('js.')->group(function() {
    Route::get('dynamic.js', 'JsController@dynamic')->name('dynamic');
});

// Get authenticated user
Route::get('users/auth', function() {
    return response()->json(['user' => Auth::check() ? Auth::user() : false]);
});
