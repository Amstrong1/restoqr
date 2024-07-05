<x-app-layout>
    <div
        class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
        <div class="container">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="shadow-lg sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <h1>{{ __('Nouveau') }}</h1>
                            <x-forms.create :fields="$my_fields" type="article" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>