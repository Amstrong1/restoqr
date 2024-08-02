<x-app-layout>
    <div
        class="content transition-[margin,width] duration-100 px-5 mt-[65px] pt-[31px] pb-16 relative z-10 content--compact xl:ml-[275px] [&.content--compact]:xl:ml-[91px]">
        <div class="container">
            <div class="col-span-12 flex flex-col gap-y-10 2xl:col-span-7">
                <div>
                    <div class="flex h-10 items-center">
                        <div class="text-base font-medium 2xl:group-[.mode--light]:text-white">
                            Visibilité
                        </div>
                    </div>
                    <div class="box box--stacked mt-3.5 p-5">
                        {{-- <div class="flex flex-col gap-y-5 lg:flex-row lg:items-center">
                        <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row sm:items-center">
                            <div class="relative">
                                <i data-tw-merge="" data-lucide="calendar-check2"
                                    class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"></i>
                                <select data-tw-merge=""
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 pl-9 sm:w-44">
                                    <option value="custom-date">Custom Date</option>
                                    <option value="daily">Quotidien</option>
                                    <option value="weekly">Hebdomadaire</option>
                                    <option value="monthly">Mensuel</option>
                                    <option value="yearly">Annuel</option>
                                </select>
                            </div>
                            <div class="relative">
                                <i data-tw-merge="" data-lucide="calendar"
                                    class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"></i>
                                <input data-tw-merge="" type="text"
                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker rounded-[0.3rem] pl-9 sm:w-64">
                            </div>
                        </div>
                        <div class="flex items-center gap-3.5 lg:ml-auto">
                            <a class="flex items-center text-slate-500" href="#">
                                <i data-tw-merge="" data-lucide="printer" class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                <div
                                    class="ml-1.5 whitespace-nowrap underline decoration-slate-300 decoration-dotted underline-offset-[3px]">
                                    Export to PDF
                                </div>
                            </a>
                            <a class="flex items-center text-primary" href="#">
                                <i data-tw-merge="" data-lucide="external-link"
                                    class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                <div
                                    class="ml-1.5 whitespace-nowrap underline decoration-primary/30 decoration-dotted underline-offset-[3px]">
                                    Show full report
                                </div>
                            </a>
                        </div>
                    </div> --}}

                        <div class="mt-5 rounded-md border border-dashed border-slate-300/70 py-5">
                            <div class="flex flex-col md:flex-row">
                                <div
                                    class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r md:w-64">
                                    <div
                                        class="group flex items-center justify-center w-10 h-10 border rounded-full mr-5 [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 success">
                                        <i data-tw-merge="" data-lucide="kanban-square"
                                            class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                    </div>
                                    <div class="flex-start flex flex-col">
                                        <div class="text-slate-500">Total des commandes</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base font-medium">{{ $all_orders_count }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r md:w-64">
                                    <div
                                        class="group flex items-center justify-center w-10 h-10 border rounded-full mr-5 [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 success">
                                        <i data-tw-merge="" data-lucide="person-standing"
                                            class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                    </div>
                                    <div class="flex-start flex flex-col">
                                        <div class="text-slate-500">Commentaires clients</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base font-medium">{{ $feedback_count }}</div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r md:w-64">
                                    <div
                                        class="group flex items-center justify-center w-10 h-10 border rounded-full mr-5 [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 primary">
                                        <i data-tw-merge="" data-lucide="coffee"
                                            class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                    </div>
                                    <div class="flex-start flex flex-col">
                                        <div class="text-slate-500">Articles Vendus</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base font-medium">{{ $products_count }}</div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="flex flex-1 items-center justify-center border-dashed border-slate-300/70 py-3 last:border-0 md:border-r md:w-64">
                                    <div
                                        class="group flex items-center justify-center w-10 h-10 border rounded-full mr-5 [&.primary]:border-primary/10 [&.primary]:bg-primary/10 [&.success]:border-success/10 [&.success]:bg-success/10 success">
                                        <i data-tw-merge="" data-lucide="credit-card"
                                            class="stroke-[1] w-5 h-5 group-[.primary]:text-primary group-[.primary]:fill-primary/10 group-[.success]:text-success group-[.success]:fill-success/10"></i>
                                    </div>
                                    <div class="flex-start flex flex-col">
                                        <div class="text-slate-500">Quantitées Vendues</div>
                                        <div class="mt-1.5 flex items-center">
                                            <div class="text-base font-medium">{{ $sales_count }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="my-10 grid grid-cols-10 gap-x-6 gap-y-10">
                <div class="col-span-12 gap-y-10 2xl:col-span-3">
                    <div class="grid grid-cols-12 gap-x-6 gap-y-10">
                        <div class="col-span-12 md:col-span-6 2xl:col-span-12">
                            <div class="flex h-10 items-center">
                                <div class="text-base font-medium group-[.mode--light]:text-white">
                                    Solde actuel
                                </div>
                            </div>
                            <div class="box box--stacked mt-3.5">
                                <div class="border-b border-dashed p-5">
                                    <div class="flex flex-col gap-3 sm:flex-row">
                                        <div>
                                            <div class="text-base text-slate-500">Total des commandes</div>
                                            <div class="mt-1 flex items-center">
                                                <div class="text-xl font-medium">{{ $orders_count }}</div>
                                                {{-- <div class="-mr-1 ml-2.5 flex items-center text-success">
                                                11%
                                                <i data-tw-merge="" data-lucide="chevron-up"
                                                    class="stroke-[1] ml-px h-4 w-4"></i>
                                            </div> --}}
                                            </div>
                                        </div>
                                        @if ($goal !== null)
                                            <div class="sm:ml-auto">
                                                <select data-tw-merge=""
                                                    class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm rounded-md py-2 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 px-4 sm:w-28">
                                                    <option
                                                        @if ($goal->frequency == 'Mensuel') selected @else disabled @endif
                                                        value="Mensuel">
                                                        Mensuel
                                                    </option>
                                                    <option
                                                        @if ($goal->frequency == 'Annuel') selected @else disabled @endif
                                                        value="Annuel">
                                                        Annuel
                                                    </option>
                                                    <option
                                                        @if ($goal->frequency == 'Hebdomadaire') selected @else disabled @endif
                                                        value="Hebdomadaire">
                                                        Hebdomadaire
                                                    </option>
                                                    <option
                                                        @if ($goal->frequency == 'Quotidien') selected @else disabled @endif
                                                        value="Quotidien">
                                                        Quotidien
                                                    </option>
                                                </select>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="flex flex-col gap-6 border-b border-dashed px-5 py-6">
                                    <div>
                                        <div class="flex items-center text-slate-500">
                                            <div class="mr-auto">Progression nombre de commandes</div>
                                            @if ($goal !== null)
                                                <span class="ml-auto">{{ $orders_count }} / {{ $goal->order }}</span>
                                            @endif
                                        </div>
                                        <div class="mt-2.5 flex h-2 rounded-full border bg-slate-50">
                                            @if ($goal !== null)
                                                <div style="width: {{ ceil(($orders_count / $goal->order) * 100) }}%"
                                                    class="-m-px border border-theme-1/40 bg-theme-1/30 first:rounded-l last:rounded-r">
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex items-center text-slate-500">
                                            <div class="mr-auto">Progression revenue</div>
                                            @if ($goal !== null)
                                                <span class="ml-auto">XOF
                                                    {{ number_format($revenue_progress, 0, ',', ' ') }} /
                                                    {{ number_format($goal->revenue, 0, ',', ' ') }}
                                                </span>
                                            @else
                                                <span class="ml-auto">XOF
                                                    {{ number_format($revenue_progress, 0, ',', ' ') }} /
                                                    0
                                                </span>
                                            @endif
                                        </div>
                                        @if ($goal !== null)
                                            <div class="mt-2.5 flex h-2 rounded-full border bg-slate-50">
                                                <div style="width: {{ ceil(($revenue_progress / $goal->revenue) * 100) }}%"
                                                    class="-m-px border border-theme-2/40 bg-theme-2/30 first:rounded-l last:rounded-r">
                                                </div>
                                            </div>
                                        @else
                                            <div class="mt-2.5 flex h-2 rounded-full border bg-slate-50">
                                                <div style="width: 0%"
                                                    class="-m-px border border-theme-2/40 bg-theme-2/30 first:rounded-l last:rounded-r">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <div>
                                        <div class="flex items-center text-slate-500">
                                            <div class="mr-auto">Commandes terminées</div>
                                            <span class="ml-auto">{{ $orders_done }} / {{ $orders_count }}</span>
                                        </div>
                                        <div class="mt-2.5 flex h-2 rounded-full border bg-slate-50">
                                            <div style="width: {{ $orders_count !== 0 ? ceil(($orders_done / $orders_count) * 100) : 0 }}%"
                                                class="-m-px border border-primary/40 bg-primary/30 first:rounded-l last:rounded-r">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 md:col-span-6 2xl:col-span-12">
                            <div class="flex h-10 items-center">
                                <div
                                    class="text-base font-medium md:group-[.mode--light]:text-white 2xl:group-[.mode--light]:text-current">
                                    Statistiques des ventes
                                </div>
                            </div>
                            <div class="box box--stacked mt-3.5 p-5">
                                <div class="mt-1">
                                    <ul data-tw-merge="" role="tablist"
                                        class="p-0.5 border dark:border-darkmode-400 flex mx-auto w-3/4 rounded-[0.6rem] border-slate-200 bg-white shadow-sm">
                                        <li id="example-1-tab" data-tw-merge="" role="presentation"
                                            class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                            <button data-tw-merge="" data-tw-target="#example-1" role="tab"
                                                class="cursor-pointer block appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 py-1.5 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 active w-full whitespace-nowrap rounded-[0.6rem] text-slate-500">Quotidien</button>
                                        </li>
                                        <li id="example-2-tab" data-tw-merge="" role="presentation"
                                            class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                            <button data-tw-merge="" data-tw-target="#example-2" role="tab"
                                                class="cursor-pointer block appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 py-1.5 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 w-full whitespace-nowrap rounded-[0.6rem] text-slate-500">Hebdomadaire</button>
                                        </li>
                                        <li id="example-3-tab" data-tw-merge="" role="presentation"
                                            class="focus-visible:outline-none flex-1 bg-slate-50 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] [&[aria-selected='true']_button]:text-current">
                                            <button data-tw-merge="" data-tw-target="#example-3" role="tab"
                                                class="cursor-pointer block appearance-none px-3 border border-transparent transition-colors dark:text-slate-400 [&.active]:text-slate-700 py-1.5 dark:border-transparent [&.active]:border [&.active]:shadow-sm [&.active]:font-medium [&.active]:border-slate-200 [&.active]:bg-white [&.active]:dark:text-slate-300 [&.active]:dark:bg-darkmode-400 [&.active]:dark:border-darkmode-400 w-full whitespace-nowrap rounded-[0.6rem] text-slate-500">Mensuel</button>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-8">
                                        <div data-transition="" data-selector=".active"
                                            data-enter="transition-[visibility,opacity] ease-linear duration-150"
                                            data-enter-from="!p-0 !h-0 overflow-hidden invisible opacity-0"
                                            data-enter-to="visible opacity-100"
                                            data-leave="transition-[visibility,opacity] ease-linear duration-150"
                                            data-leave-from="visible opacity-100"
                                            data-leave-to="!p-0 !h-0 overflow-hidden invisible opacity-0"
                                            id="example-1" role="tabpanel" aria-labelledby="example-1-tab"
                                            class="tab-pane active">
                                            <div
                                                class="relative mx-auto w-4/5 [&&gt;div]:!h-[200px] [&&gt;div]:sm:!h-[160px] [&&gt;div]:2xl:!h-[200px]">
                                                <div class="w-auto h-[200px]">
                                                    <canvas class="chart report-donut-chart-5 relative z-10"></canvas>
                                                </div>
                                                <div class="absolute inset-0 flex items-center justify-center">
                                                    <div class="text-center">
                                                        <div class="text-lg font-medium text-slate-600/90">
                                                            {{ $orders_done }}
                                                        </div>
                                                        <div class="mt-1 text-slate-500">Total des ventes</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mt-7 flex flex-wrap items-center justify-center gap-x-5 gap-y-3">
                                                @if ($categories !== null)
                                                    @for ($i = 0; $i < count($categories); $i++)
                                                        <div style="background-color: {{ $colors[$i] }}"
                                                            class="mr-2 h-2 w-2 rounded-full">
                                                        </div>
                                                        {{ $categories[$i] }}
                                                    @endfor
                                                @else
                                                    <span class="italic">Auncune donnée disponible</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-12 flex flex-col gap-y-10 2xl:col-span-7">
                <div>
                    {{-- <div class="flex flex-col gap-y-3 md:h-10 md:flex-row md:items-center">
                    <div class="text-base font-medium">Quick Links</div>
                    <div class="flex flex-col gap-x-3 gap-y-2 sm:flex-row md:ml-auto">
                        <div class="relative">
                            <i data-tw-merge="" data-lucide="calendar-check2"
                                class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"></i>
                            <select data-tw-merge=""
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 rounded-[0.5rem] pl-9 sm:w-44">
                                <option value="custom-date">Custom Date</option>
                                <option value="daily">Quotidien</option>
                                <option value="weekly">Hebdomadaire</option>
                                <option value="monthly">Mensuel</option>
                                <option value="yearly">Annuel</option>
                            </select>
                        </div>
                        <div class="relative">
                            <i data-tw-merge="" data-lucide="calendar"
                                class="absolute inset-y-0 left-0 z-10 my-auto ml-3 h-4 w-4 stroke-[1.3]"></i>
                            <input data-tw-merge="" type="text"
                                class="disabled:bg-slate-100 disabled:cursor-not-allowed dark:disabled:bg-darkmode-800/50 dark:disabled:border-transparent [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 [&[readonly]]:dark:border-transparent transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm placeholder:text-slate-400/90 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 dark:placeholder:text-slate-500/80 [&[type='file']]:border file:mr-4 file:py-2 file:px-4 file:rounded-l-md file:border-0 file:border-r-[1px] file:border-slate-100/10 file:text-sm file:font-semibold file:bg-slate-100 file:text-slate-500/70 hover:file:bg-200 group-[.form-inline]:flex-1 group-[.input-group]:rounded-none group-[.input-group]:[&:not(:first-child)]:border-l-transparent group-[.input-group]:first:rounded-l group-[.input-group]:last:rounded-r group-[.input-group]:z-10 datepicker rounded-[0.5rem] pl-9 sm:w-64">
                        </div>
                    </div>
                </div> --}}
                    <div class="box box--stacked mt-3.5">
                        <div class="overflow-auto xl:overflow-visible">
                            <table data-tw-merge="" class="w-full text-left">
                                <thead data-tw-merge="" class="">
                                    <tr data-tw-merge="" class="">
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 border-slate-200/80 bg-slate-50 py-5 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                            Date
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 w-56 border-slate-200/80 bg-slate-50 py-5 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                            Articles
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 truncate border-slate-200/80 bg-slate-50 py-5 font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                            Commentaires clients
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 w-32 truncate border-slate-200/80 bg-slate-50 py-5 text-right font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                            Quantitées Vendues
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 w-32 truncate border-slate-200/80 bg-slate-50 py-5 text-right font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                            Prix
                                        </td>
                                        <td data-tw-merge=""
                                            class="px-5 border-b dark:border-darkmode-300 w-32 border-slate-200/80 bg-slate-50 py-5 text-center font-medium text-slate-500 first:rounded-tl-[0.6rem] last:rounded-tr-[0.6rem]">
                                            Action
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orderLinesAll as $item)
                                        <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                <a class="whitespace-nowrap" href="#">
                                                    {{ $item->created_at->format('d/m/Y') }}
                                                </a>
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                <a class="flex items-center text-primary" href="#">
                                                    <i data-tw-merge="" data-lucide="external-link"
                                                        class="h-3.5 w-3.5 stroke-[1.7]"></i>
                                                    <div class="ml-1.5 whitespace-nowrap">
                                                        {{ $item->article->name }}
                                                    </div>
                                                </a>
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                <div class="flex items-center">
                                                    <div class="flex items-center">
                                                        <i data-tw-merge="" data-lucide="star"
                                                            class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                        <i data-tw-merge="" data-lucide="star"
                                                            class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                        <i data-tw-merge="" data-lucide="star"
                                                            class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                        <i data-tw-merge="" data-lucide="star"
                                                            class="stroke-[1] mr-1 h-3.5 w-3.5 fill-pending/30 text-pending"></i>
                                                        <i data-tw-merge="" data-lucide="star"
                                                            class="stroke-[1] fill-slate/30 mr-1 h-3.5 w-3.5 text-slate-400"></i>
                                                    </div>
                                                    <div class="ml-1 text-xs text-slate-500">
                                                        (4.3)
                                                    </div>
                                                </div>
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 text-right first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                <a class="whitespace-nowrap font-medium" href="#">
                                                    {{ $item->quantity }}
                                                </a>
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 text-right first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                <a class="whitespace-nowrap font-medium" href="#">
                                                    {{ number_format($item->quantity * $item->article->price, 0, ',', ' ') }}
                                                </a>
                                            </td>
                                            <td data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 relative rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                <div class="flex items-center justify-center">
                                                    <div data-tw-merge="" data-tw-placement="bottom-end"
                                                        class="dropdown relative h-5"><button
                                                            data-tw-toggle="dropdown" aria-expanded="false"
                                                            class="cursor-pointer h-5 w-5 text-slate-500"><i
                                                                data-tw-merge="" data-lucide="more-vertical"
                                                                class="stroke-[1] w-5 h-5 fill-slate-400/70 stroke-slate-400/70"></i>
                                                        </button>
                                                        <div data-transition="" data-selector=".show"
                                                            data-enter="transition-all ease-linear duration-150"
                                                            data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                            data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                                                            data-leave="transition-all ease-linear duration-150"
                                                            data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                                                            data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                                                            class="dropdown-menu absolute z-[9999] hidden">
                                                            <div data-tw-merge=""
                                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-40">
                                                                <a
                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                        data-tw-merge="" data-lucide="file-line-chart"
                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                    Sales Report</a>
                                                                <a
                                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                                                        data-tw-merge="" data-lucide="file-check2"
                                                                        class="stroke-[1] mr-2 h-4 w-4"></i>
                                                                    Item Details</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr data-tw-merge="" class="[&_td]:last:border-b-0">
                                            <td colspan="5" data-tw-merge=""
                                                class="px-5 border-b dark:border-darkmode-300 rounded-l-none rounded-r-none border-x-0 border-t-0 border-dashed py-5 text-right first:rounded-l-[0.6rem] last:rounded-r-[0.6rem] dark:bg-darkmode-600">
                                                <i>Aucune données</i>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="flex-reverse mt-8 flex flex-col-reverse flex-wrap items-center gap-y-2 sm:flex-row">
                        <nav class="mr-auto w-full flex-1 sm:w-auto">
                            {{-- <ul class="flex w-full mr-0 sm:mr-auto sm:w-auto">                                
                            <li class="flex-1 sm:flex-initial">
                                <a data-tw-merge=""
                                    class="transition duration-200 border items-center justify-center py-2 rounded-md cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed min-w-0 sm:min-w-[40px] shadow-none font-normal flex border-transparent text-slate-800 sm:mr-2 dark:text-slate-300 px-1 sm:px-3">...</a>
                            </li>                                
                        </ul> --}}
                            {{ $orderLinesAll->links() }}
                        </nav>
                        {{-- <select data-tw-merge=""
                        class="disabled:bg-slate-100 disabled:cursor-not-allowed disabled:dark:bg-darkmode-800/50 [&[readonly]]:bg-slate-100 [&[readonly]]:cursor-not-allowed [&[readonly]]:dark:bg-darkmode-800/50 transition duration-200 ease-in-out w-full text-sm border-slate-200 shadow-sm py-2 px-3 pr-8 focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus:border-primary focus:border-opacity-40 dark:bg-darkmode-800 dark:border-transparent dark:focus:ring-slate-700 dark:focus:ring-opacity-50 group-[.form-inline]:flex-1 rounded-[0.5rem] sm:w-20">
                        <option>10</option>
                        <option>25</option>
                        <option>35</option>
                        <option>50</option>
                    </select> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    console.log(JSON.parse(`{!! $json_colors !!}`));
    (() => {
        (function() {
            "use strict";
            let r = $(".report-donut-chart-5");
            r.length && r.each(function() {
                let a = $(this)[0].getContext("2d"),
                    t = {{ $qties }},
                    o = new Chart(a, {
                        type: "doughnut",
                        data: {
                            labels: JSON.parse(`{!! $json_categories !!}`),
                            datasets: [{
                                data: t,
                                backgroundColor: JSON.parse(`{!! $json_colors !!}`),
                                hoverBackgroundColor: JSON.parse(`{!! $json_colors !!}`),
                                borderWidth: 1,
                                borderColor: JSON.parse(`{!! $json_colors !!}`)
                            }]
                        },
                        options: {
                            maintainAspectRatio: !1,
                            plugins: {
                                legend: {
                                    display: !1
                                }
                            },
                            cutout: "90%"
                        }
                    });
                helper.watchCssVariables("html", JSON.parse(`{!! $json_colors !!}`))
            })
        })();
    })();
</script>
