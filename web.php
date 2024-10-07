<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;
    

// Route::post('/cliente/login',[clienteController::class,'iniciar']);
// route ::view ('/index','/plantillas/index');
// route ::view ('/admin/lista', '/administrador/listado');
// route ::view ('/admin/crear', '/administrador/crear');
// route ::view ('/admin/contacto', '/administrador/contacto');
// route ::view ('/admin/admin', '/administrador/admin');
// route ::view ('/admin/layout', '/administrador/layout');
//route ::view ('/cliente/login', '/clientes/login');
//route ::view ('/cliente/editar/{id}', '/clientes/editar');
//route ::view ('/cliente/show', '/clientes/mostrar');
// route ::view ('/cliente/ver', '/clientes/tabla');
// //route ::view ('/cliente/iniciar', '/clientes/iniciar');
//guardar
Route::POST('/cliente/crear',[clienteController::class,'crear']);
//vista tabla 
Route::GET('admin/ver',[clienteController::class,'Index']);
//crear usuarios
Route::GET('/cliente/log',[clienteController::class,'iniciar']);
//vista editar solo se accede de la tabla
Route::GET('cliente/editar/{id}', [clienteController::class, 'editar']);
//guardar
Route::PUT('clientes/update/{id}',[clienteController::class,'update']);
//mostrar
Route::GET('/cliente/mostrar/{id}', [clienteController::class, 'mostar']);
//Vista eliminar
Route::GET('/cliente/borrar/{id}', [clienteController::class, 'borrar']);
//eliminar     
Route::DELETE('cliente/eliminar/{id}', [clienteController::class, 'eliminar']);
//gg
//show vista mostrar 