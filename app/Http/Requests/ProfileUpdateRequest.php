<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Tentukan apakah user berhak melakukan request ini.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Aturan validasi data profil.
     */
    public function rules(): array
    {
        $userId = optional(Auth::user())->id;

        return [
            'name' => ['bail', 'required', 'string', 'max:255'],
            'email' => [
                'bail',
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class)->ignore($userId),
            ],
            'password' => [
                'nullable',
                'confirmed',
                Password::min(8)->letters()->numbers()->symbols(),
            ],
        ];
    }

    /**
     * Pesan error yang ramah pengguna.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama tidak boleh kosong.',
            'name.max' => 'Nama maksimal 255 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email ini sudah digunakan.',
            'password.confirmed' => 'Konfirmasi password tidak cocok.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.letters' => 'Password harus mengandung huruf.',
            'password.numbers' => 'Password harus mengandung angka.',
            'password.symbols' => 'Password harus mengandung simbol.',
        ];
    }

    /**
     * Siapkan data sebelum validasi.
     */
    protected function prepareForValidation(): void
{
    $this->merge([
        'email' => strtolower($this->input('email')),
    ]);
}
}
