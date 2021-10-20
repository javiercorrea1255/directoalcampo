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
            'apellido_paterno'=>['required', 'string', 'max:255'],
            'apellido_materno'=>['required', 'string', 'max:255'],
            'telefono'=>['required', 'string', 'max:10'],
            'carrera'=>['required', 'string', 'max:20'],
            'ocupacion'=>['required', 'string', 'max:20'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $user = User::create([
            'name' => $input['name'],
            'apellido_paterno'=>$input['apellido_paterno'],
            'apellido_materno'=>$input['apellido_materno'],
            'telefono'=>$input['telefono'],
            'carrera'=>$input['carrera'],
            'ocupacion'=>$input['ocupacion'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

   $user->createAsStripeCustomer();

        return $user;
    }
}
