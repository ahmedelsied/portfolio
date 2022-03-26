<?php

namespace App\Http\Controllers\Dashboard\Core;

use App\Domain\Core\Models\TempMedia;
use App\Domain\Core\Settings\ContactInfoSettings;
use App\Domain\Core\Settings\GeneralSettings;
use App\Domain\Core\Settings\HomeSettings;
use App\Domain\Core\Settings\PersonalSettings;
use App\Domain\Core\Settings\SectionsSettings;
use App\Domain\Core\Settings\SEOSettings;
use App\Domain\Core\Settings\SocialSettings;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\SettingRequest;
use Arr;

    class SettingController extends Controller
    {
        private $validated;

        public function index(
            GeneralSettings $generalSettings,
            SEOSettings $seoSettings,
            HomeSettings $homeSettings,
            PersonalSettings $personalSettings,
            ContactInfoSettings $contactInfoSettings,
            SocialSettings $socialSettings,
            SectionsSettings $sectionsSettings,
            ) {

            return view('dashboard.core.settings.index')->with([
                'generalSettings' => $generalSettings,
                'seoSettings' => $seoSettings,
                'homeSettings' => $homeSettings,
                'personalSettings' => $personalSettings,
                'contactInfoSettings' => $contactInfoSettings,
                'socialSettings' => $socialSettings,
                'sectionsSettings' => $sectionsSettings,
            ]);
        }

        public function update(SettingRequest $request)
        {
            $this->validated = $request->validated();
            $this->updateGeneralSetting()
                ->updateSEOSetting()
                ->updateHomeSetting()
                ->updatePersonalSetting()
                ->updateContactInfoSetting()
                ->updateSocialSetting()
                ->updateSectionsSetting();

            toast(__('Settings updated successfully'), 'success');

            return redirect()->back();
        }

        private function updateGeneralSetting()
        {
            $generalSettings = app(GeneralSettings::class);
            $generalSettings->site_title = $this->validated['site_title'];
            if(isset($this->validated['site_logo']))
            $generalSettings->site_logo = $this->uploadImage('site_logo',$this->validated['site_logo']);
            $generalSettings->save();
            return $this;
        }

        private function updateSEOSetting()
        {
            $seoSettings = app(SEOSettings::class);
            $seoSettings->site_description = $this->validated['site_description'];
            $seoSettings->site_keywords  = $this->validated['site_keywords'];
            $seoSettings->save();
            return $this;
        }

        private function updateHomeSetting()
        {
            $homeSettings = app(HomeSettings::class);
            $homeSettings->header_text = $this->validated['header_text'];
            $homeSettings->about_text  = $this->validated['about_text'];
            $homeSettings->save();
            return $this;
        }

        private function updatePersonalSetting()
        {
            $personalSettings = app(PersonalSettings::class);
            if(isset($this->validated['avatar']))
            $personalSettings->avatar = $this->uploadImage('peronal_settings',$this->validated['avatar']);
            $personalSettings->name  = $this->validated['name'];
            $personalSettings->save();
            return $this;
        }

        private function updateContactInfoSetting()
        {
            $contactSetting = app(ContactInfoSettings::class);
            $contactSetting->email   = $this->validated['email'];
            $contactSetting->phone   = $this->validated['phone'] ?? '';
            $contactSetting->address = $this->validated['address'] ?? '';
            $contactSetting->save();
            return $this;
        }

        private function updateSocialSetting()
        {
            $socialSetting = app(SocialSettings::class);
            $socialSetting->facebook   = $this->validated['facebook'] ?? '';
            $socialSetting->linkedin   = $this->validated['linkedin'] ?? '';
            $socialSetting->github = $this->validated['github'] ?? '';
            $socialSetting->behance = $this->validated['behance'] ?? '';
            $socialSetting->save();
            return $this;
        }

        private function updateSectionsSetting()
        {
            $sectionsSetting = app(SectionsSettings::class);
            $sectionsSetting->services   = $this->validated['services'] ?? '';
            $sectionsSetting->team_members   = $this->validated['team_members'] ?? '';
            $sectionsSetting->testimonials = $this->validated['testimonials'] ?? '';
            $sectionsSetting->clients = $this->validated['clients'] ?? '';
            $sectionsSetting->blog = $this->validated['blog'] ?? '';
            $sectionsSetting->save();
            return $this;
        }

        private function uploadImage($name,$file)
        {
            $model = TempMedia::firstOrCreate();
            $model->clearMediaCollection($name);
            $model->addMedia($file)->toMediaCollection($name);
            return $model->getFirstMediaUrl($name, 'optimized');
        }

    }
