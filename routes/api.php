<?php

Route::apiResource('dogs','App\Http\Controllers\api\DogController');
Route::apiResource('usuario','App\Http\Controllers\api\UsuarioController');
Route::apiResource('tipospiso','App\Http\Controllers\api\TiposPisoController');
Route::apiResource('orcamentospisos','App\Http\Controllers\api\OrcamentosPisosController');
Route::apiResource('tipospintura','App\Http\Controllers\api\TiposPinturaController');
Route::apiResource('orcamentospintura','App\Http\Controllers\api\OrcamentosPinturasController');
