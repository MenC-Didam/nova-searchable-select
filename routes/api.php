<?php

use MenC\SearchableSelect\Http\Controllers\SearchableSelectController;

Route::get('/{resource}', SearchableSelectController::class."@index");
