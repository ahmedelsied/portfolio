<?php

route_group('blog', function () {

    Route::resources([
        'blog'              => 'BlogController',
        'blog-categories'   => 'BlogCategoryController'
    ]);
});
