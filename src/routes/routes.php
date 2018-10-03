<?php


Route::get('/gallery', 'Vilbur\Gallery\Controllers\GalleryController@testView');

/* API */
Route::get('/db/gallery',	'Vilbur\Gallery\Controllers\GalleryController@getAllGalleries');