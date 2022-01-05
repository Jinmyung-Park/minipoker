<?php

Route::get('/','HomeController@index')->name('home');
Route::get('/poker','HomeController@index')->name('home');  ## 戻るボタン,f5時にホームに戻る処理

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get'); 
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');             


Route::get('login','Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login.post');
Route::get('logout','Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware'=> ['auth']],function(){
    
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::resource('stage', 'StageController');
        Route::post('stage', 'StageController@cardOpen')->name('cardOpenCheck');
        
        Route::post('stage/cardChange', 'StageController@cardChange')->name('cardChange');
        Route::post('stage/cardDetermine', 'StageController@cardDetermine')->name('cardDetermine');
    
        Route::post('stage/nextStage', 'StageController@nextStage')->name('nextStage');

    });

Route::resource('messages', 'MessagesController', ['only' => ['store']]);

});