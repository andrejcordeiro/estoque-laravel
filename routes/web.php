<?php

use Illuminate\Support\Facades\Route;

Route::get('/', ['as' => 'lista', 'uses' => 'ProdutoController@lista']);

Route::get('/produtos', ['as' => 'lista', 'uses' => 'ProdutoController@lista']);

Route::get('/produtos/visualizar/{id?}', 'ProdutoController@visualizar')->where('id', '[0-9]+');

Route::get('/produtos/novo', ['as' => 'novo', 'uses' => 'ProdutoController@novo']);

Route::get('/produtos/editar/{id?}', 'ProdutoController@editar')->where('id', '[0-9]+');

Route::match(array('GET', 'POST'), '/produtos/adicionar', 'ProdutoController@adicionar');

Route::match(array('GET', 'POST'), '/produtos/edicao/{id?}', 'ProdutoController@edicao')->where('id', '[0-9]+');

Route::get('/produtos/excluir/{id?}', 'ProdutoController@excluir')->where('id', '[0-9]+');