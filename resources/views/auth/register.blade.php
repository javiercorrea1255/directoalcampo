<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nombre(s)') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="apellido_paterno" value="{{ __('Apellido Paterno') }}" />
                <x-jet-input id="apellido_paterno" class="block mt-1 w-full" type="text" name="apellido_paterno" :value="old('apellido_paterno')" required autofocus autocomplete="apellido_paterno" />
            </div>

            <div>
                <x-jet-label for="apellido_materno" value="{{ __('Apellido Materno') }}" />
                <x-jet-input id="apellido_materno" class="block mt-1 w-full" type="text" name="apellido_materno" :value="old('apellido_materno')" required autofocus autocomplete='apellido_materno' />
            </div>

            <div>
                <x-jet-label for="telefono" value="{{ __('Teléfono') }}" />
                <x-jet-input id="telefono" class="block mt-1 w-full" type="number" name="telefono" :value="old('telefono')" required autofocus autocomplete='telefono' />
            </div>
        
            <div>
                <x-jet-label for="carrera" value="{{ __('Carrera') }}" />
                <x-jet-input id="carrera" class="block mt-1 w-full" type="text" name="carrera" :value="old('carrera')" required autofocus autocomplete='carrera' />
            </div>

            <div>
                <x-jet-label for="ocupacion" value="{{ __('Ocupación') }}" />
                <x-jet-input id="ocupacion" class="block mt-1 w-full" type="text" name="ocupacion" :value="old('ocupacion')" required autofocus autocomplete='ocupacion' />
            </div>

           
           
            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Correo Electrónico') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirme su contraseña') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>
            

            
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('Acepto los :términos_y_condiciones y la :política_de_privacidad', [
                                        'términos_y_condiciones' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Términos y condiciones').'</a>',
                                        'política_de_privacidad' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Política de privacidad').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('¿Ya estás registrado?') }}
                </a>
@section("recaptcha")
{!! htmlScriptTagJsApi(['action' => 'homepage']) !!}
@endsection
                <x-jet-button class="ml-4">
                    {{ __('Registro') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
    <meta name="csrf-token" content="{{ csrf_token() }}">
<script type="text/javascript">
function callbackThen(response){
    // read HTTP status
    console.log(response.status);

    // read Promise object
    response.json().then(function(data){
        console.log(data);
    });
}
function callbackCatch(error){
    console.error('Error:', error)
}
</script>

{!! htmlScriptTagJsApi([
    'callback_then' => 'callbackThen',
    'callback_catch' => 'callbackCatch'
]) !!}
</x-guest-layout>

