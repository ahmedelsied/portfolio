<?php

namespace App\Http\Controllers\Frontend;

use App\Domain\Blog\Models\Blog;
use App\Domain\Business\Models\Client;
use App\Domain\Business\Models\Testimonial;
use App\Domain\Core\Settings\HomeSettings;
use App\Domain\Personal\Models\Education;
use App\Domain\Personal\Models\Experience;
use App\Domain\Personal\Models\Service;
use App\Domain\Personal\Models\Skill;
use App\Domain\Portfolio\Models\Work;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home.index')->with([
            'homeSettings'      => app(HomeSettings::class),
            'skills'            => Skill::latestSkills(),
            'experiences'       => Experience::latestExperiences(),
            'education'         => Education::latestEducation(),
            'services'          => Service::latestServices(),
            'portfolio'         => Work::latestWork(),
            'testimonials'      => Testimonial::latestTestimonials(),
            'clients'           => Client::latestClients(),
            'blog'              => Blog::latestPosts()
        ]);
    }
}
