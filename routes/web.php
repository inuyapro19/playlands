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


Auth::routes();
//mensaje para mj
//agrupa las rutas
Route::get('/home', 'HomeController@index')->name('home');
//slider
Route::resource('slider','SliderController')->middleware('authenticated');
Route::resource('users','UserController')->middleware('authenticated');
//contacto 
Route::get('contacto/{id}/edit','ContactoController@edit')->name('contacto.edit')->middleware('authenticated');
Route::put('contacto/{id}','ContactoController@update')->name('contacto.update')->middleware('authenticated');
//despues de clases
Route::get('taller/{id}/edit','TallerController@edit')->name('taller.edit')->middleware('authenticated');
Route::put('taller/{id}','TallerController@update')->name('taller.update')->middleware('authenticated');
//cumpleaños
Route::resource('planes','PlanController')->middleware('authenticated');
Route::resource('albums','AlbumController')->middleware('authenticated');
//galerias
Route::get('galerias/{id}','GaleriaController@index')->name('galerias.index')->middleware('authenticated');
Route::get('galerias/{gal}/create','GaleriaController@create')->name('galerias.create')->middleware('authenticated');
Route::post('galerias/store','GaleriaController@store')->name('galerias.store');
Route::delete('galerias/{gal}','GaleriaController@destroy')->name('galerias.destroy')->middleware('authenticated');
//documentos descargables
Route::resource('documentos','DocumentoController')->middleware('authenticated');

//pagina

Route::get('/','PrincipalController@index')->name('inicio');

Route::get('quienes_somos','PrincipalController@quienes_somos')->name('nosotros');

Route::get('after_school','PrincipalController@after_school')->name('school');

Route::get('cumpleanos','PrincipalController@planes')->name('plan');

Route::get('imagenes/','PrincipalController@albums')->name('images.albums');

Route::get('gallary/{id}','PrincipalController@galeria')->name('gallary.index');

Route::get('contacto','PrincipalController@contacto')->name('formulario_contacto');

Route::post('enviar_contacto','PrincipalController@enviar_mail')->name('enviar');
//sort 
Route::post('sort', '\Rutorika\Sortable\SortableController@sort');


