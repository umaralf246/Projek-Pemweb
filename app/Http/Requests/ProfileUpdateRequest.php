<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Izinkan request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Aturan validasi update profile.
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($this->user()->id),
            ],
            'password' => ['nullable', 'confirmed', Password::defaults()],
        ];
    }
}
