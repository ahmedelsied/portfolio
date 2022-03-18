<?php

route_group('personal', function () {
    Route::resources([
        'skills'            => 'SkillController',
        'experiences'       => 'ExperienceController',
        'education'         => 'EducationController',
        'services'          => 'ServiceController',
        'team-members'      => 'TeamMemberController',
        'work-processes'    => 'WorkProcessController'
    ]);
});
