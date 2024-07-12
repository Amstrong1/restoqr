<x-app-layout>
    <div
        class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
        <div class="container">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg py-8">
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
                        <div id="print" class="my-4 flex flex-col items-center gap-2 text-black h-full">
                            <h2 class="mt-2 text-4xl font-bold text-orange-500 mb-2">MENU</h2>
                            <h3 class="mb-2 text-sm font-semibold">Scannez le code QR pour voir le menu sur votre téléphone</h3>
                            <div>{!! $qrCode !!}</div>
                            <span class="mt-4 block">{{ auth()->user()->structure->name }}</span>
                            <span class="bloc font-semibold mb-2">TABLE N°: {{ $place->number }}</span>
                            <p>Si le scan ne fonctionne pas avec votre application de caméra,</p>
                            <p>Recherchez un lecteur de codes QR gratuit dans le playstore.</p>
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
            filename: {{ 'table' . json_encode($place->number) }} . '.pdf',
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
