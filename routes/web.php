<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Routes de l'appli
|--------------------------------------------------------------------------
*/


// Route visualisation du fonctionnement des modules
Route::get('/', 'ModuleController@index');

// Route affichage formulaire d'inscription nouveau module
Route::get('/pages/module-form', [
    'as'=>'module-registration',
    'uses'=>'ModuleController@getModuleRegistrationForm']);

// Route inscription d'un nouveau module
Route::post('/pages/save-module', [
    'as'=>'new-module',
    'uses'=>'ModuleController@addModule']);

// Route liste des modules
Route::get('/pages/modules', [
    'as'=>'modules-list',
    'uses'=>'ModuleController@findAll']);

// Route génération d'état de tous les modules
Route::get('/pages/print-state/modules', [
    'as'=>'printAll',
    'uses'=>'ModuleController@generatorStateOfAllModules']);

// Route génération d'état de tous les modules
Route::get('/pages/print-state/module/{id}', [
    'as'=>'printOne',
    'uses'=>'ModuleController@generatorStateOfOneModule']);

