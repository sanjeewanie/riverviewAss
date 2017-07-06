<?php // Route group for API versioning
Route::group(array('prefix' => 'api/v1'), function()
{
    Route::resource('article', 'ArticleController');
});
