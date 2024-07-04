<x-app-layout>
    <div
        class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
        <div class="container">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <div class="flex justify-between">
                                <h1 class="font-bold text-lg my-2">{{ __('Liste') }}</h1>
                                <a href="{{ route('place.create') }}">
                                    <x-primary-button>
                                        {{ __('Nouveau') }}
                                    </x-primary-button>
                                </a>
                            </div>
                            <div class="mt-4">
                                <x-tables.default :resources="$places" :mattributes="$my_attributes" type="place"
                                    :mactions="$my_actions" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
