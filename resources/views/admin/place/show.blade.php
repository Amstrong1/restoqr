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

                            <span>
                                <x-primary-button onclick="generatePDF()" id="btn">
                                    Imprimer 
                                </x-primary-button>
                            </span>

                        </div>
                        <div id="print" class="my-4 flex flex-col items-center">
                            <div class="flex justify-center items-center">
                                <div>{!! $qrCode !!}</div>
                                <div>
                                    <span
                                        class="block transform rotate-90 text-sm font-bold text-black relative -left-8">
                                        {{ auth()->user()->structure->name }}
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
    integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    function generatePDF() {
        var element = document.getElementById("print");
        document.getElementById('btn').style.display = "none";
        var opt = {
            margin: 0.3,
            filename: 'document.pdf',
            image: {
                type: 'jpeg',
                quality: 0.98
            },
            html2canvas: {
                scale: 2
            },
            jsPDF: {
                unit: 'in',
                format: 'letter',
                orientation: 'portrait'
            }
        };
        html2pdf().from(element).set(opt).save();

        // setTimeout(function() {
        //     document.getElementById('btn').style.display = 'block';
        // }, 10000);
    }
</script>