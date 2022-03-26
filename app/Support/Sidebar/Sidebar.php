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
                'icon-users'
            ),
            SidebarLink::to(
                __('Testimonials'),
                route('dashboard.business.testimonials.index'),
                '',
                'ti-comment-alt'
            ),
            SidebarLink::to(
                __('Contact Messages'),
                route('dashboard.business.contact-messages.index'),
                '',
                'ti-email'
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
                'icon-cogs'
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
                'ti-layout'
            ),
            SidebarLink::to(
                __('Blog Categories'),
                route('dashboard.blog.blog-categories.index'),
                '',
                'ti-list'
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
                'icon-bag'
            ),
            SidebarLink::to(
                __('Work Categories'),
                route('dashboard.portfolio.work-categories.index'),
                '',
                'ti-list'
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
                '<svg style="fill: white;
                    margin-right: 9px;
                    margin-left: -6px;" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 122.88 90.37" style="enable-background:new 0 0 122.88 90.37" xml:space="preserve"><g><path d="M25.75,69.03c0,1.68-1.36,3.03-3.03,3.03c-1.68,0-3.03-1.36-3.03-3.03c0-11.53,4.67-21.97,12.23-29.53 c7.56-7.56,18-12.23,29.53-12.23c11.53,0,21.97,4.67,29.53,12.23c7.56,7.56,12.23,18,12.23,29.53c0,1.68-1.36,3.03-3.03,3.03 c-1.67,0-3.03-1.36-3.03-3.03c0-9.86-3.99-18.78-10.45-25.24c-6.46-6.46-15.38-10.45-25.24-10.45c-9.86,0-18.78,4-25.24,10.45 C29.74,50.25,25.75,59.18,25.75,69.03L25.75,69.03z M87.82,90.37c-0.16-4.78,0.11-4.85-5.48-6.94c-3.28-1.23-7.47-2.79-10.48-4.66 c-3.54,3.28-5.81,7.03-5.89,11.6H87.82L87.82,90.37z M35.06,90.37c0.16-4.78-0.11-4.85,5.48-6.94c3.28-1.23,7.47-2.79,10.48-4.66 c3.54,3.28,5.81,7.03,5.89,11.6H35.06L35.06,90.37z M54.32,74.26c0.15-1.21-3.43-5.8-4.08-8.01c-1.4-2.22-1.9-5.76-0.37-8.11 c0.61-0.93,0.35-2.6,0.35-3.88c0-12.79,22.41-12.8,22.41,0c0,1.62-0.37,2.85,0.51,4.12c1.47,2.13,0.71,5.9-0.53,7.88 c-0.79,2.31-4.54,6.69-4.28,8.01C68.55,80.83,54.27,80.61,54.32,74.26L54.32,74.26L54.32,74.26z M122.88,35.28l-5.14,6.64 l3.65,7.56l-7.9-2.84l-6.06,5.81l0.26-8.39l-7.4-3.97l8.06-2.35l1.49-8.27l4.72,6.94L122.88,35.28L122.88,35.28L122.88,35.28 L122.88,35.28z M96.78,9.17l-1.13,8.32l6.94,4.73l-8.26,1.5l-2.35,8.06l-3.97-7.4l-8.39,0.26l5.81-6.06l-2.85-7.91l7.56,3.65 L96.78,9.17L96.78,9.17L96.78,9.17L96.78,9.17z M0,35.28l8.32,1.13l4.73-6.94l1.5,8.26l8.06,2.35l-7.4,3.97l0.26,8.39L9.4,46.63 l-7.91,2.84l3.65-7.56L0,35.28L0,35.28L0,35.28L0,35.28z M26.1,9.17l6.64,5.14l7.56-3.65l-2.83,7.9l5.81,6.06l-8.39-0.26l-3.97,7.4 l-2.35-8.06l-8.27-1.49l6.94-4.73L26.1,9.17L26.1,9.17L26.1,9.17L26.1,9.17z M61.44,0l3.18,7.77l8.37,0.62l-6.4,5.43l2,8.16 l-7.14-4.42l-7.14,4.42l2-8.16l-6.42-5.43l8.37-0.62L61.44,0L61.44,0L61.44,0L61.44,0z"/></g></svg>
                '
            ),
            SidebarLink::to(
                __('Experiences'),
                route('dashboard.personal.experiences.index'),
                '',
                'icon-stars'
            ),
            SidebarLink::to(
                __('Education'),
                route('dashboard.personal.education.index'),
                '',
                'icon-certificate'
            ),
            SidebarLink::to(
                __('Services'),
                route('dashboard.personal.services.index'),
                '',
                'icon-package'
            ),
            SidebarLink::to(
                __('Team Members'),
                route('dashboard.personal.team-members.index'),
                '',
                'ti-user'
            ),
            SidebarLink::to(
                __('Work Processes'),
                route('dashboard.personal.work-processes.index'),
                '',
                'ti-timer'
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
