<?php

namespace App\Http\Controllers\Frontend;

use App\Domain\Business\Models\Client;
use App\Domain\Core\Models\Page;
use App\Domain\Core\Settings\PersonalSettings;
use App\Domain\Personal\Models\TeamMember;
use App\Domain\Personal\Models\WorkProcess;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function about()
    {
        return view('frontend.pages.about')->with([
            'page'          => Page::where('key','ABOUT_US')->first(),
            'clients'       => Client::latestClients(),
            'teamMembers'   => TeamMember::latestTeamMembers(),
            'workProcesses' => WorkProcess::latestWorkProcesses(),
            'personalSettings' => app(PersonalSettings::class)
        ]);
    }
}
