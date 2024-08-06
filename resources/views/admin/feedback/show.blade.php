<!-- resources/views/feedback/show.blade.php -->

<x-app-layout>
    <div
        class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
        <div class="container">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <div class="mt-4">
                                <div class="p-6 text-gray-900">
                                    <div class="flex justify-between">
                                        <a href="{{ url()->previous() }}">
                                            <x-primary-button>
                                                Retour
                                            </x-primary-button>
                                        </a>
                                        <button onclick="generatePDF()" id="btn"
                                            class="bg-green-700 px-4 py-1 text-white rounded">Imprimer</button>
                                    </div>
                                    <div class="print">
                                        <h1 class="my-4 text-center font-semibold text-lg">Récapitulatif de l'avis du
                                            client</h1>
                                        <ul>
                                            @if ($feedback->name != null)
                                                <li class="font-semibold my-2">Nom : {{ $feedback->name }}</li>
                                            @endif
                                            @if ($feedback->phone != null)
                                                <li class="font-semibold my-2">Contact : {{ $feedback->phone }}</li>
                                            @endif
                                        </ul>
                                        <table class="w-full mt-8">
                                            <thead
                                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50 dark:text-gray-400">
                                                <tr>
                                                    <th class="px-2 py-3">Question</th>
                                                    <th class="px-2 py-3">Nombre d'étoile</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y dark:bg-gray-800">
                                                @if ($feedback->quizzes)
                                                    @foreach ($feedback->quizzes as $quiz)
                                                        <tr class="text-gray-700 dark:text-gray-400">
                                                            <td class="px-2 py-3">{{ $quiz->quiz }}</td>
                                                            <td class="px-2 py-3">{{ $quiz->pivot->rating }} / 5</td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                        <div class="my-4 border px-2 py-3 rounded">
                                            <p class="font-semibold my-4">Avis du client</p>
                                            {{ $feedback->comment ?? 'Pas d\'avis' }}
                                            <p class="font-semibold my-4">Date </p>
                                            {{ $feedback->created_at ?? 'Pas d\'avis' }}
                                        </div>
                                        <div class="my-4 border px-2 py-3 rounded">
                                            <p class="font-semibold my-4">Taux de satisfaction du client</p>
                                            {{ round($satisfactionRate, 2) }}%
                                        </div>
                                    </div>
                                </div>
                                <p class="m-4">Cordialement, l'équipe RestoQR.</p>
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
    }
</script>
