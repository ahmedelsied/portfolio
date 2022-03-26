<?php

namespace App\Providers;

use App\Domain\Core\Settings\ContactInfoSettings;
use App\Domain\Core\Settings\GeneralSettings;
use App\Domain\Core\Settings\SectionsSettings;
use App\Domain\Core\Settings\SEOSettings;
use App\Domain\Core\Settings\SocialSettings;
use App\Support\Sidebar\Sidebar;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->viewComposers();
    }

    private function viewComposers()
    {
        View::composer('dashboard.layouts.default', function (\Illuminate\View\View $view) {
            $view->with('sidebar', (new Sidebar())());
        });
        View::composer('dashboard.layouts.components.toolbar', function ($view) {
            $lang = [
                'ar' => [
                    'title' => 'العربيه',
                    'locale' => 'ar',
                    'image' => asset('admin/global_assets/images/lang/eg.svg'),
                ],
                'en' => [
                    'title' => 'English',
                    'locale' => 'en',
                    'image' => asset('admin/global_assets/images/lang/gb.png'),
                ],
            ];
            $locale = app()->getLocale();
            $view->with(['current' => $lang[$locale]]);
        });
        View::composer(['frontend.*'], function (\Illuminate\View\View $view) {
            $view->with([
                'sectionsSettings'=>app(SectionsSettings::class),
                'generalSettings'=>app(GeneralSettings::class),
                'seoSettings'=>app(SEOSettings::class),
            ]);
        });
        View::composer(['frontend.layouts.footer'], function (\Illuminate\View\View $view) {
            $view->with('contactInfoSettings',app(ContactInfoSettings::class));
        });
        View::composer(['frontend.home.index'], function (\Illuminate\View\View $view) {
            $view->with('socialSettings',app(SocialSettings::class));
        });
    }
}
