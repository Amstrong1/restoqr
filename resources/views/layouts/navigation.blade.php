<div
    class="box fixed inset-x-0 top-0 z-10 flex h-[65px] rounded-none border-x-0 border-t-0 border-transparent bg-gradient-to-r from-theme-1 to-theme-2 shadow-lg">
    <div
        class="side-menu__content bg-white flex-none flex items-center z-10 px-5 h-full xl:w-[275px] overflow-hidden relative duration-300 group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000001f] before:content-[''] before:hidden before:xl:block before:absolute before:right-0 before:border-r before:border-dashed before:border-white/[0.15] before:h-4/6 before:group-[.side-menu--collapsed.side-menu--on-hover]:xl:hidden after:content-[''] after:left-[-1.25rem] after:bg-[1.25rem_top] after:absolute after:w-screen after:h-full after:bg-[length:100vw_65px] after:z-[-1] after:bg-gradient-to-r after:from-theme-1 after:to-theme-2">
        <a class="hidden items-center transition-[margin] xl:flex group-[.side-menu--collapsed.side-menu--on-hover]:xl:ml-0 group-[.side-menu--collapsed]:xl:ml-2"
            href="#">
            <div
                class="flex h-[34px] w-[34px] items-center justify-center rounded-lg bg-white/10 transition-transform ease-in-out group-[.side-menu--collapsed.side-menu--on-hover]:xl:-rotate-180">
                <div class="relative h-[16px] w-[16px] -rotate-45 [&_div]:bg-white">
                    <div class="absolute inset-y-0 left-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                    </div>
                    <div class="absolute inset-0 m-auto h-[120%] w-[21%] rounded-full"></div>
                    <div class="absolute inset-y-0 right-0 my-auto h-[75%] w-[21%] rounded-full opacity-50">
                    </div>
                </div>
            </div>
            {{-- <x-application-logo/> --}}
            <div
                class="ml-3.5 font-medium text-white transition-opacity group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0">
                RestoQR
            </div>
        </a>
        <a class="toggle-compact-menu ml-auto hidden h-[20px] w-[20px] items-center justify-center rounded-full border border-white/40 text-white transition-[opacity,transform] hover:bg-white/5 group-[.side-menu--collapsed]:xl:rotate-180 group-[.side-menu--collapsed.side-menu--on-hover]:xl:opacity-100 group-[.side-menu--collapsed]:xl:opacity-0 3xl:flex"
            href="#">
            <i data-tw-merge="" data-lucide="arrow-left" class="h-3.5 w-3.5 stroke-[1.3]"></i>
        </a>
        <div class="flex items-center gap-1 xl:hidden">
            <a class="open-mobile-menu rounded-full p-2 hover:bg-white/5" href="#">
                <i data-tw-merge="" data-lucide="align-justify" class="stroke-[1] h-[18px] w-[18px] text-white"></i>
            </a>
            <a class="rounded-full p-2 hover:bg-white/5" data-tw-toggle="modal" data-tw-target="#quick-search"
                href="javascript:;">
                <i data-tw-merge="" data-lucide="search" class="stroke-[1] h-[18px] w-[18px] text-white"></i>
            </a>
        </div>
    </div>
    <div
        class="absolute inset-x-0 h-full transition-[padding] duration-100 xl:pl-[275px] group-[.side-menu--collapsed]:xl:pl-[91px]">
        <div class="flex h-full w-full items-center px-5">
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="hidden flex-1 xl:block">
                <ol class="flex items-center text-theme-1 dark:text-slate-300 text-white/90">
                    <li class="">
                        <a href="#">App</a>
                    </li>
                    <li
                        class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-white before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white">
                        <a href="#">Tableau de bord</a>
                    </li>
                    <li
                        class="relative ml-5 pl-0.5 before:content-[''] before:w-[14px] before:h-[14px] before:bg-chevron-white before:transform before:rotate-[-90deg] before:bg-[length:100%] before:-ml-[1.125rem] before:absolute before:my-auto before:inset-y-0 dark:before:bg-chevron-white text-white/70">
                        <a href="#">{{ Str::ucfirst(explode('.', Route::currentRouteName())[0]) }}</a>
                    </li>
                </ol>
            </nav>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->            

            <!-- END: Search -->
            <!-- BEGIN: Notification & User Menu -->
            <div class="flex flex-1 items-center">
                <div class="ml-auto flex items-center gap-1">
                    {{-- <a class="rounded-full p-2 hover:bg-white/5" data-tw-toggle="modal"
                        data-tw-target="#activities-panel" href="javascript:;">
                        <i data-tw-merge="" data-lucide="layout-grid"
                            class="stroke-[1] h-[18px] w-[18px] text-white"></i>
                    </a> --}}
                    <a class="request-full-screen rounded-full p-2 hover:bg-white/5" href="javascript:;">
                        <i data-tw-merge="" data-lucide="expand" class="stroke-[1] h-[18px] w-[18px] text-white"></i>
                    </a>
                    <a class="rounded-full p-2 hover:bg-white/5" data-tw-toggle="modal"
                        data-tw-target="#notifications-panel" href="javascript:;">
                        <i data-tw-merge="" data-lucide="bell" class="stroke-[1] h-[18px] w-[18px] text-white"></i>
                    </a>
                </div>

                <div data-tw-merge="" data-tw-placement="bottom-end" class="dropdown relative ml-5">
                    <button data-tw-toggle="dropdown" aria-expanded="false"
                        class="cursor-pointer image-fit h-[36px] w-[36px] overflow-hidden rounded-full border-[3px] border-white/[0.15]">
                        {{-- <img
                            src="{{ asset('dist/images/users/user5-50x50.jpg') }}" alt="Tailwise - Admin Dashboard Template"> --}}
                        <i data-tw-merge data-lucide="user" class="stroke-[1] stroke-white w-5 h-5 text-white mx-auto block"></i>
                    </button>
                    <div data-transition="" data-selector=".show" data-enter="transition-all ease-linear duration-150"
                        data-enter-from="absolute !mt-5 invisible opacity-0 translate-y-1"
                        data-enter-to="!mt-1 visible opacity-100 translate-y-0"
                        data-leave="transition-all ease-linear duration-150"
                        data-leave-from="!mt-1 visible opacity-100 translate-y-0"
                        data-leave-to="absolute !mt-5 invisible opacity-0 translate-y-1"
                        class="dropdown-menu absolute z-[9999] hidden">
                        <div data-tw-merge=""
                            class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 mt-1 w-56">
                            
                            <a href="/profile"
                                class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                    data-tw-merge="" data-lucide="users" class="stroke-[1] mr-2 h-4 w-4"></i>
                                Profile Info
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item"><i
                                        data-tw-merge="" data-lucide="power" class="stroke-[1] mr-2 h-4 w-4"></i>
                                    Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div data-tw-backdrop="" aria-hidden="true" tabindex="-1" id="notifications-panel"
                    class="modal group bg-gradient-to-b from-theme-1/50 via-theme-2/50 to-black/50 transition-[visibility,opacity] w-screen h-screen fixed left-0 top-0 [&:not(.show)]:duration-[0s,0.2s] [&:not(.show)]:delay-[0.2s,0s] [&:not(.show)]:invisible [&:not(.show)]:opacity-0 [&.show]:visible [&.show]:opacity-100 [&.show]:duration-[0s,0.4s]">
                    <div data-tw-merge=""
                        class="ml-auto h-screen flex flex-col bg-white relative shadow-md transition-[margin-right] duration-[0.6s] -mr-[100%] group-[.show]:mr-0 dark:bg-darkmode-600 sm:w-[460px] w-72 rounded-[0.75rem_0_0_0.75rem/1.1rem_0_0_1.1rem]">
                        <a class="absolute inset-y-0 left-0 right-auto my-auto -ml-[60px] flex h-8 w-8 items-center justify-center rounded-full border border-white/90 bg-white/5 text-white/90 transition-all hover:rotate-180 hover:scale-105 hover:bg-white/10 focus:outline-none sm:-ml-[105px] sm:h-14 sm:w-14"
                            data-tw-dismiss="modal" href="javascript:;">
                            <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8"></i>
                        </a>
                        <div data-tw-merge=""
                            class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 px-6 py-5">
                            <h2 class="mr-auto text-base font-medium">Notifications</h2>
                            <button data-tw-merge=""
                                class="transition duration-200 border shadow-sm items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&:hover:not(:disabled)]:bg-opacity-90 [&:hover:not(:disabled)]:border-opacity-90 [&:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&:hover:not(:disabled)]:bg-secondary/20 [&:hover:not(:disabled)]:dark:bg-darkmode-100/10 hidden sm:flex"><i
                                    data-tw-merge="" data-lucide="shield-check" class="stroke-[1] mr-2 h-4 w-4"></i>
                                Mark all as
                                read</button>
                        </div>
                        <div data-tw-merge="" class="overflow-y-auto flex-1 p-0">
                            <div class="flex flex-col gap-0.5 p-3">
                                <a class="flex items-center rounded-xl px-3 py-2.5 hover:bg-slate-100/80"
                                    href="#">
                                    <div>
                                        <div
                                            class="image-fit h-11 w-11 overflow-hidden rounded-full border-2 border-slate-200/70">
                                            <img src="{{ asset('dist/images/users/user7-50x50.jpg') }}"
                                                alt="Tailwise - Admin Dashboard Template">
                                        </div>
                                    </div>
                                    <div class="sm:ml-5">
                                        <div class="font-medium">Uploaded audio recordings</div>
                                        <div class="mt-0.5 text-slate-500">
                                            Recorded podcast episodes
                                        </div>
                                        <div class="mt-1.5 text-xs text-slate-500">
                                            Sun Oct 2021
                                        </div>
                                    </div>
                                    <div
                                        class="ml-auto h-2 w-2 flex-none rounded-full border border-primary/40 bg-primary/40">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notification & User Menu -->
        </div>
    </div>
</div>
