<x-guest-layout>
    <form x-data="{ formStep: 1 }" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div x-cloak x-show="formStep === 1">
            <div class="text-xl font-semibold mb-2">Informations de la structure</div>
            <div>
                <x-input-label for="structure" :value="__('Dénomination Sociale')" />
                <x-text-input id="structure" class="block mt-1 w-full" type="text" name="structure" :value="old('structure')"
                    required autofocus autocomplete="structure" />
                <x-input-error :messages="$errors->get('structure')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="email_struct" :value="__('Email Professionnel')" />
                <x-text-input id="email_struct" class="block mt-1 w-full" type="email" name="email_struct"
                    :value="old('email_struct')" required autocomplete="email_struct" />
                <x-input-error :messages="$errors->get('email_struct')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="tel" :value="__('Contact')" />
                <x-text-input id="tel" class="block mt-1 w-full" type="tel" name="tel" :value="old('tel')"
                    required autocomplete="tel" />
                <x-input-error :messages="$errors->get('tel')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="address" :value="__('Adresse')" />
                <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')"
                    required autocomplete="address" />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="slug" :value="__('Site Web')" />
                <x-text-input id="slug" class="block mt-1 w-full" type="url" name="slug" :value="old('slug')"
                    autocomplete="slug" />
                <x-input-error :messages="$errors->get('slug')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="logo" :value="__('Logo')" />
                <x-text-input id="logo" class="block mt-1 w-full" type="file" name="logo" :value="old('logo')"
                    autocomplete="logo" />
                <x-input-error :messages="$errors->get('logo')" class="mt-2" />
            </div>

            <div class="mt-8">
                <x-primary-button class="justify-center w-full" @click="formStep += 1">
                    {{ __('Suivant') }}
                </x-primary-button>
            </div>
        </div>

        <div x-cloak x-show="formStep === 2">
            <div class="text-xl font-semibold mb-2">Informations de l'administrateur</div>
            <!-- Name -->
            <div>
                <x-input-label for="lname" :value="__('Nom')" />
                <x-text-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="old('lname')"
                    required autocomplete="lname" />
                <x-input-error :messages="$errors->get('lname')" class="mt-2" />
            </div>
            <div class="mt-4">
                <x-input-label for="fname" :value="__('Prénom')" />
                <x-text-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')"
                    required autocomplete="fname" />
                <x-input-error :messages="$errors->get('fname')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mot de passe')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />

                <svg id="view1" onclick="showPassword()" xmlns="http://www.w3.org/2000/svg" class="relative h-6 w-6"
                    style="bottom: 35px; left: 85%" fill="none" viewBox="0 0 24 24" stroke="#aaa" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>

                <svg id="view2" onclick="showPassword()" xmlns="http://www.w3.org/2000/svg"
                    class="relative h-6 w-6 hidden" style="bottom: 35px; left: 85%" fill="none"
                    viewBox="0 0 24 24" stroke="#aaa" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                </svg>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Mot de passe (Confirmation)')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div>
                <x-primary-button class="mt-8 w-full">
                    {{ __('Enregistrer') }}
                </x-primary-button>
            </div>

            <div class="mt-4 w-full" @click="formStep -= 1">
                <x-secondary-button>
                    {{ __('Retour') }}
                </x-secondary-button>
            </div>
        </div>
    </form>
    <div class="mt-4">
        <a href="{{ route('login') }}">
            <x-secondary-button>
                {{ __('Vous avez déja un compte ?') }}
            </x-secondary-button>
        </a>
    </div>
</x-guest-layout>
