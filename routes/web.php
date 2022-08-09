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
use Illuminate\Support\Facades\Route;

//LOGIN
Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//RUTA DE SALARIO
Route::resource('salario', 'SalarioController');

//RUTA DE FACTURA
Route::resource('factura', 'clientehasproductController');

#region para Proveedor
Route::get('Proveedor/delete/{id}', 'ProveedorController@DeletePro')->name('DeleteProveedor');

Route::get('Proveedor/update/{id}', 'ProveedorController@UpdatePro')->name('UpdateProveedor');

Route::get('Proveedor/insert', 'Proveedorcontroller@ViewInsert')->name('insertarpro');

Route::post('Proveedor/insert', 'ProveedorController@InsertPro')->name('InsertProveedor');

Route::get('Proveedor/view', 'ProveedorController@ViewPro')->name('ViewProveedor');

Route::post('Proveedor/update', 'ProveedorController@UpdateBdPro')->name('UpdateBdProveedor');
#endregion
 
#region para Producto
Route::get('Producto/insert', 'ProductoController@ViewInsertProd')->name('ViewInsertProducto');

Route::get('Producto/view', 'ProductoController@ViewProd')->name('ViewProducto');

Route::post('Producto/insert', 'ProductoController@InsertProd')->name('InsertarProducto'); 
#endregion

#region para cliente
Route::get('Cliente/view', 'ClienteController@ViewCli')->name('ViewCliente');

Route::get('Cliente/insert', function(){
    return view('Cliente/insert');
})->name('ViewInsertCliente');

Route::get('Factura/insert/{id}', 'ClientesController@show')->name('ClienteShow');

Route::post('Cliente/insert', 'ClienteController@InsertCli')->name('InsertCliente');


#endregion







