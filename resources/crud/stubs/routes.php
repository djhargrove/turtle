// crud_model_variable routes
Route::get('crud_model_variables', 'crud_controller_routes@index')->name('crud_model_variables');
Route::get('crud_model_variables/datatable', 'crud_controller_routes@indexDatatable')->name('crud_model_variables.datatable');
Route::get('crud_model_variables/create', 'crud_controller_routes@createModal')->name('crud_model_variables.create');
Route::post('crud_model_variables/create', 'crud_controller_routes@create');
Route::get('crud_model_variables/update/{id}', 'crud_controller_routes@updateModal')->name('crud_model_variables.update');
Route::patch('crud_model_variables/update/{id}', 'crud_controller_routes@update');
Route::delete('crud_model_variables/delete', 'crud_controller_routes@delete')->name('crud_model_variables.delete');