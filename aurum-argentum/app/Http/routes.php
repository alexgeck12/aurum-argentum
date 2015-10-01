<?php

Route::get('item/{id}', 'ItemController@showItem');

Route::controller('/', 'SectionController');

Route::post('contacts','SectionController@postContacts');

Route::post('silver','SectionController@postSilver');

Route::post('zoloto','SectionController@postZoloto');

Route::post('discont','SectionController@postDiscont');