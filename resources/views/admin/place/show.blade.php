<x-app-layout>
    <div
        class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
        <div class="container">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <h1>{{ __('Voir') }}</h1>
                            <x-forms.show :item="$place" :fields="$my_fields" type="place" />
                        </div>

                        <div class="flex justify-between items-center p-6">
                            <h2 class="font-semibold">QR CODE</h2>
                            <a href="">
                                <x-primary-button>
                                    Imprimer 
                                </x-primary-button>
                            </a>

                        </div>
                        <div class="my-4 flex flex-col items-center">
                            <div class="flex justify-center items-center">
                                <div>{!! $qrCode !!}</div>
                                <div>
                                    <span
                                        class="block transform rotate-90 text-2xl font-bold text-black relative -left-8">
                                        CLUB NAME
                                    </span>
                                </div>
                            </div>
                            <div class="text-gray-400 mb-8">
                                <h2 class="mt-4 text-4xl font-bold text-orange-500 mb-2">SCAN FOR MENU</h2>
                                Not working with your camera app? <br>
                                Search for a free QR code reader on your app store.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
