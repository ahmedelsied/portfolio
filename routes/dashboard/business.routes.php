<?php

route_group('business', function () {

    Route::resources([
        'clients'           => 'ClientController',
        'testimonials'      => 'TestimonialController',
        'contact-messages'  => 'ContactMessageController',
    ]);
});
