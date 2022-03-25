<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'header_text'   => 'required|string|max:150',
            'about_text'    => 'required|string|max:400',
            'name'          => 'required|string|max:80',
            'avatar'        => 'required|image|max:2000',
            'email'         => 'required|email',
            'phone'         => 'nullable|string',
            'address'       => 'nullable|string',
            'facebook'      => 'nullable|url',
            'linkedin'      => 'nullable|url',
            'github'        => 'nullable|url',
            'behance'       => 'nullable|url',
            'services'      => 'required|boolean',
            'team_members'  => 'required|boolean',
            'testimonials'  => 'required|boolean',
            'clients'       => 'required|boolean',
            'blog'          => 'required|boolean',
        ];

       if(request()->isMethod('put')) $rules['avatar'] = 'nullable|image|max:2000';

        return $rules;
    }
}
