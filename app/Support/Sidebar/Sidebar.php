<?php

namespace App\Support\Sidebar;

use App\Support\Sidebar\Components\SidebarGenerator;
use App\Support\Sidebar\Components\SidebarLink;
use App\Support\Sidebar\Components\SidebarMenu;
use function route;

class Sidebar
{

    private function business()
    {
        return [
            SidebarLink::to(
                __('Clients'),
                route('dashboard.business.clients.index'),
                '',
                'icon-copy'
            ),
            SidebarLink::to(
                __('Testimonials'),
                route('dashboard.business.testimonials.index'),
                '',
                'icon-copy'
            ),
            SidebarLink::to(
                __('Contact Messages'),
                route('dashboard.business.contact-messages.index'),
                '',
                'icon-copy'
            )
        ];
    }

    private function core()
    {
        $adminList = [
            SidebarLink::to(__('Admins'), route('dashboard.core.administration.admins.index')),
            SidebarLink::to(__('Roles'), route('dashboard.core.administration.roles.index')),
        ];

        return [
            SidebarMenu::create(__('Administration'), 'icon-lock', 'administration')
                       ->push($adminList),

            SidebarLink::to(
                __('Static Pages'),
                route('dashboard.core.pages.index'),
                'pages',
                'icon-copy'
                ),
            SidebarLink::to(
                __('Settings'),
                route('dashboard.core.settings.index'),
                'pages',
                'icon-copy'
                ),
        ];
    }

    private function blog()
    {

        return [
            SidebarLink::to(
                __('Blog'),
                route('dashboard.blog.blog.index'),
                '',
                'icon-copy'
            ),
            SidebarLink::to(
                __('Blog Categories'),
                route('dashboard.blog.blog-categories.index'),
                '',
                'icon-copy'
            ),
        ];
    }

    private function portfolio()
    {

        return [
            SidebarLink::to(
                __('Work'),
                route('dashboard.portfolio.work.index'),
                '',
                'icon-copy'
            ),
            SidebarLink::to(
                __('Work Categories'),
                route('dashboard.portfolio.work-categories.index'),
                '',
                'icon-copy'
            ),
        ];
    }

    private function personal()
    {

        return [
            SidebarLink::to(
                __('Skills'),
                route('dashboard.personal.skills.index'),
                '',
                'icon-copy'
            ),
            SidebarLink::to(
                __('Experiences'),
                route('dashboard.personal.experiences.index'),
                '',
                'icon-copy'
            ),
            SidebarLink::to(
                __('Education'),
                route('dashboard.personal.education.index'),
                '',
                'icon-copy'
            ),
            SidebarLink::to(
                __('Services'),
                route('dashboard.personal.services.index'),
                '',
                'icon-copy'
            ),
            SidebarLink::to(
                __('Team Members'),
                route('dashboard.personal.team-members.index'),
                '',
                'icon-copy'
            ),
            SidebarLink::to(
                __('Work Processes'),
                route('dashboard.personal.work-processes.index'),
                '',
                'icon-copy'
            ),
        ];
    }

    public function __invoke()
    {
        $generator = SidebarGenerator::create();
        $generator->addModule(__('Business'), 'icon-home')->push($this->business());
        $generator->addModule(__('Personal'), 'icon-home')->push($this->personal());
        $generator->addModule(__('Portfolio'), 'icon-home')->push($this->portfolio());
        $generator->addModule(__('Blog'), 'icon-home')->push($this->blog());
        $generator->addModule(__('Core'), 'icon-home')->push($this->core());

        return $generator->toArray();
    }
}
