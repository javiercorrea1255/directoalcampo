<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

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
            'name' => ['required', 'string', 'max:255'],
            'fatherlastname'=>['required', 'string', 'max:255'],
            'motherlastname'=>['required', 'string', 'max:255'],
            'telephone'=>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'fatherlastname'=>['required', 'string', 'max:255'],
            'motherlastname'=>['required', 'string', 'max:10'],
            'telephone'=>['required', 'string', 'max:255'],
            'password' => Hash::make($input['password']),
        ]);

   $user->createAsStripeCustomer();

        return $user;
    }
}
