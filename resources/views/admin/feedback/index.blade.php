<x-app-layout>
    <div
        class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
        <div class="container">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                           
                            <div class="mt-4">
                                <div
                                    class="flex flex-col items-stretch w-full overflow-hidden rounded-lg shadow-xs border">
                                    <div class="w-full overflow-x-auto">
                                        <div
                                            class="flex justify-center items-center p-4 border-b table-search-container">
                                            <label for="table-search" class="sr-only">Rechercher</label>
                                            <div class="relative">
                                                <div
                                                    class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                    <svg class="w-5 h-5 text-gray-500" aria-hidden="true"
                                                        fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                                <input type="text" id="custom-search-input"
                                                    class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                                    placeholder="Rechercher dans la liste">
                                            </div>
                                        </div>
                                        <table class="w-full text-left" id="datas-table-buttons"
                                            style="width: 100% !important">
                                            <thead>
                                                <tr
                                                    class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">

                                                    <th
                                                        class="font-medium border-b-2 border-l border-r border-t whitespace-nowrap px-4 py-3 text-center">
                                                        Nom du clicnt
                                                    </th>
                                                    <th
                                                        class="font-medium border-b-2 border-l border-r border-t whitespace-nowrap px-4 py-3 text-center">
                                                        Numero du client
                                                    </th>
                                                    <th
                                                        class="font-medium border-b-2 border-l border-r border-t whitespace-nowrap px-4 py-3 text-center">
                                                      Commenttaire
                                                    </th>
                                                    <th
                                                        class="font-medium border-b-2 border-l border-r border-t whitespace-nowrap px-4 py-3 text-center">
                                                       Date
                                                    </th>

                                                    <th
                                                        class="font-medium border-b-2 border-l border-r border-t whitespace-nowrap px-4 py-3 text-center">
                                                        Actions
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y">

                                                @foreach ($feedback as $item)
                                                <tr class="text-gray-700">
                                                    
                                                <td
                                                    class="text-center px-5 py-3 border-b border-l border-r border-t">
                                                    <div class="flex items-center justify-center space-x-4 text-sm">

                                                      {{$item->name}}



                                                    </div>
                                                </td>
                                                <td
                                                    class="text-center px-5 py-3 border-b border-l border-r border-t">
                                                    <div class="flex items-center justify-center space-x-4 text-sm">

                                                        {{$item->phone}}


                                                    </div>
                                                </td>
                                                <td
                                                    class="text-center px-5 py-3 border-b border-l border-r border-t">
                                                    <div class="flex items-center justify-center space-x-4 text-sm">

                                                        {{$item->comment}}

                                                    </div>
                                                </td>
                                                <td
                                                    class="text-center px-5 py-3 border-b border-l border-r border-t">
                                                    <div class="flex items-center justify-center space-x-4 text-sm">

                                                        {{$item->created_at}}

                                                    </div>
                                                </td>
                                                <td
                                                    class="text-center px-5 py-3 border-b border-l border-r border-t">
                                                    <div class="flex items-center justify-center space-x-4 text-sm">

                                                        <a href="{{ route('feedback.show', $item->id) }}"
                                                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 rounded-lg focus:outline-none focus:shadow-outline-gray">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                                viewBox="0 0 20 20" fill="currentColor">
                                                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </a>
                                 


                                                    </div>
                                                </td>
                                                
                                            </tr>
                                            @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
