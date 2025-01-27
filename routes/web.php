<?php
use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@index')->name('main.index');

Route::resources([
    'labels'   => 'LabelController',
    'projects' => 'ProjectController',
    'issues'   => 'IssueController',
]);

// legacy routes
Route::get('/p', 'ProjectController@index')->name('projects.legacy');
Route::get('/l', 'LabelController@index')->name('labels.legacy');
Route::get('/i', 'IssueController@index')->name('issues.legacy');
