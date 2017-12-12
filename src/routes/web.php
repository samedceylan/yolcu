<?php
$namespace = 'Tkaratug\Yolcu\Controllers';

Route::group([
    'namespace' => $namespace,
    'prefix'    => 'yolcu',
], function(){
    Route::get('/', 'CountryController@index');
    Route::get('/country/{country}', 'CountryController@country');
    Route::post('/country/{country}/review', 'CountryController@addReview');
    Route::get('/hotel/{hotel}', 'HotelController@index');
    Route::post('/hotel/{hotel}/review', 'HotelController@addReview');
});
