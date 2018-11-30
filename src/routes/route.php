<?php

Route::get('laraveldemopack/test', function () {
    return 'Test';
});

Route::get('laraveldemopack/rand', 'LaraveldemopackController@index');