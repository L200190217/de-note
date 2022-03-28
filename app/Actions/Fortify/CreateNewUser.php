<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:60'],
            'email' => [
                'required',
                'string',
                'email',
                'max:150',
                Rule::unique(User::class),
            ],
            'no_telp' => ['required', 'string', 'max:14'],
            'username' => ['required', 'string', 'min:6', 'max:50', Rule::unique(User::class)],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'no_telp' => $input['no_telp'],
            'username' => $input['username'],
            'password' => Hash::make($input['password']),
            'status' => 'member'
        ]);
    }
}
