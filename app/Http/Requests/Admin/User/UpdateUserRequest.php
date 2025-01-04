<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Laravel\Facades\Image;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'photo'         => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'name'          => 'required',
            'email'         => 'required|email',
            'password'      => 'nullable',
            'enviar_datos'  => 'required|boolean',
            "roles"         => [
                'nullable',
                'array',
                'min:1',
            ],
            "roles.*"       => [
                'required',
                'integer',
                'distinct',
            ]
        ];
    }

    /**
     * Handle a passed validation attempt.
    */
    protected function passedValidation(): void
    {
        if ($this->has('roles')) {
            $roles = array_map('intval', $this->input('roles'));

            $this->merge([
                'roles' => $roles,
            ]);
        }

        if ($this->filled('password')) {
            $this->merge([
                'password_encrypt' => Hash::make($this->input('password'))
            ]);
        }

        if ($this->hasFile('photo')) {
            $nameFile = time().'-'.$this->file('photo')->getClientOriginalName();

            $this->merge([
                'name_file' => $nameFile
            ]);
        }

        $this->merge([
            'email_verified_at' => date('Y-m-d')
        ]);
    }


}
