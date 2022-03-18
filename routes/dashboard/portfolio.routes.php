<?php

route_group('portfolio', function () {

    Route::resources([
        'work'              => 'WorkController',
        'work-categories'   => 'WorkCategoryController'
    ]);
});
