<x-app-layout>
    <div
        class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
        <div class="container">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <h1>{{ __('Modifier les informations de ma structure') }}</h1>
                            <x-forms.edit :item="$structure" :fields="$my_fields" type="structure" />
                        </div>

                        <div class="p-6 text-gray-900">
                            <h1>{{ __('Personnaliser la présentation de ma structure') }}</h1>
                            <x-forms.edit :item="$banner" :fields="$banner_fields" type="banner" />
                        </div>

                        <div class="p-6 text-gray-900">
                            <h1>{{ __('Ajouter des liens vers les reseau sociaux') }}</h1>
                            <x-forms.edit :item="$social" :fields="$social_fields" type="social" />
                        </div>

                        <div class="p-6 text-gray-900">
                            <h1>{{ __('Ajuster vos objectifs commerciaux') }}</h1>
                            <x-forms.edit :item="$goal" :fields="$goal_fields" type="goal" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
