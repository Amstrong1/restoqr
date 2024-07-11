<x-guest-layout>
    <form x-data="{ formStep: 1 }" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div x-cloak x-show="formStep === 1">
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
