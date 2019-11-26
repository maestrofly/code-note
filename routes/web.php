<?php

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
use App\Notebook;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'auth'], function(){

	Route::get('/add-notebook', 'NotebooksController@ShowAddNotebookForm')->name('notebooks.add');
Route::post('/add', 'NotebooksController@addNotebook')->name('notebooks.save'); 
Route::get('/notebooks', 'NotebooksController@showNotebooks')->name('notebooks');
Route::delete('/notebooks/{id}', 'NotebooksController@destroy')->name('notebooks.delete');
Route::get('/notebooks/edit/{id}', 'NotebooksController@showEditForm')->name('notebooks.edit');
Route::put('/notebooks/update/{id}', 'NotebooksController@update')->name('notebooks.update');
Route::get('/notes/{id}','NotesController@showNotes')->name('notes.all');
Route::get('/add-note/{id}', 'NotesController@showAddForm')->name('notes.add');
Route::post('/save-note/{id}', 'NotesController@saveNote')->name('notes.save');
Route::delete('/delete-note/{note_id}/{notebook_id}', 'NotesController@destroy')->name('notes.delete');
Route::get('/notes/edit/{note_id}/{notebook_id}', 'NotesController@showEditForm')->name('notes.update');
Route::put('/notes/update/{note_id}/{notebook_id}', 'NotesController@updateNote')->name('note.update');
Route::get('/notes/details/{id}', 'NotesController@showDetails')->name('notes.details');

});





