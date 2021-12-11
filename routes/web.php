<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


Route::get('/macro', function () {

    dd(
        Str::currency('10000000'),
        Str::currency_prefix('10000000'),
    );

});
