@if (Route::has('login'))
    @auth
    @include('dashboard')
@else
        <x-guest-layout>
            <x-authentication-card>
                <x-slot name="logo">
                    <x-authentication-card-logo />
                </x-slot>

                <x-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <x-label for="email" id="labelemail"></x-label>
                        <x-input id="email" class="block mt-1 w-full" type="email" placeholder="Email ou Pseudo" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" id="labelpassword" value="{{ __('') }}" />
                        <x-input id="password" class="block mt-1 w-full" type="password" placeholder="Mot de passe" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Mot de passe oublier?') }}
                            </a>
                        @endif

                        <x-button class="ml-4">
                            {{ __('Se connecter') }}
                        </x-button>
                    </div>
                </form>
                <div class="flex items-center mt-4 justify-end">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">Pas encore inscris?</a>
                </div>
            </x-authentication-card>
        </x-guest-layout>
        <script type="text/javascript">
            //code pour l'effet sur les champs de connexion
            let input_email=document.getElementById('email');
            let input_password=document.getElementById('password');
            let label_email=document.getElementById('labelemail').value;
            let label_password=document.getElementById('labelpassword');
            input_email.addEventListener('input',function(){
                //console.log(toString(label_email))
                input_email_value=input_email.value
                if (input_email_value=="") {
                    labelemail.style.color='Black'
                    labelemail.innerText = ''
                } else {
                    labelemail.innerText = "Email ou Pseudo"
                }
            })
            input_password.addEventListener('input',function(){
                //console.log(toString(label_email))
                input_password_value=input_password.value
                if (input_password_value=="") {
                    labelpassword.style.color='Black'
                    labelpassword.innerText = ''
                } else {
                    labelpassword.innerText = "Mot de passe"
                }
            })
        </script>

    @endauth
@endif
