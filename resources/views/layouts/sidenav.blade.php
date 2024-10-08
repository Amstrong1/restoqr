<div class="side-menu__content absolute inset-y-0 z-10 xl:top-[65px] xl:z-0">
    <div
        class="xl:ml-0 bg-gradient-to-b from-slate-100 to-slate-50 border-r border-slate-300/70 border-dashed rounded-none w-[275px] duration-300 transition-[width,margin] group-[.side-menu--collapsed]:xl:w-[91px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:shadow-[6px_0_12px_-4px_#0000000f] group-[.side-menu--collapsed.side-menu--on-hover]:xl:w-[275px] group-[.side-menu--collapsed.side-menu--on-hover]:xl:border-solid relative overflow-hidden h-full flex flex-col after:content-[''] after:fixed after:inset-0 after:bg-black/80 after:z-[-1] after:xl:hidden group-[.side-menu--mobile-menu-open]:ml-0 group-[.side-menu--mobile-menu-open]:after:block -ml-[275px] after:hidden">
        <div
            class="close-mobile-menu fixed ml-[275px] w-10 h-10 items-center justify-center xl:hidden [&.close-mobile-menu--mobile-menu-open]:flex hidden">
            <a class="ml-5 mt-5" href="#">
                <i data-tw-merge="" data-lucide="x" class="stroke-[1] h-8 w-8 text-white"></i>
            </a>
        </div>
        <div
            class="scrollable-ref w-full h-full z-20 px-5 overflow-y-auto overflow-x-hidden pb-3 [-webkit-mask-image:-webkit-linear-gradient(top,rgba(0,0,0,0),black_30px)] [&:-webkit-scrollbar]:w-0 [&:-webkit-scrollbar]:bg-transparent [&_.simplebar-content]:p-0 [&_.simplebar-track.simplebar-vertical]:w-[10px] [&_.simplebar-track.simplebar-vertical]:mr-0.5 [&_.simplebar-track.simplebar-vertical_.simplebar-scrollbar]:before:bg-slate-400/30">
            <ul class="scrollable">
                <li class="side-menu__divider">
                    Tableau de bord
                </li>
                <li>
                    <a href="/dashboard"
                        class="side-menu__link @if (request()->routeIs('dashboard')) side-menu__link--active @endif">
                        <i data-tw-merge="" data-lucide="book-marked"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Tableau de bord</div>
                    </a>
                </li>

                <li>
                    <a href="{{ route('structure.edit', Auth::user()->structure->id) }}"
                        class="side-menu__link @if (request()->routeIs('structure.edit')) side-menu__link--active @endif">
                        <i data-tw-merge="" data-lucide="compass" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Mon Restaurant</div>
                    </a>
                </li>

                <li>
                    <a href="/order/pending"
                        class="side-menu__link @if (request()->routeIs('order.pending')) side-menu__link--active @endif">
                        <i data-tw-merge data-lucide="alert-circle"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon pulse"></i>
                        <div class="side-menu__link__title">Commandes en attente</div>
                    </a>
                </li>

                <li>
                    <a href="/order/in-progress"
                        class="side-menu__link @if (request()->routeIs('order.progress')) side-menu__link--active @endif">
                        <i data-tw-merge data-lucide="zap" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Commandes en cours</div>
                    </a>
                </li>

                <li>
                    <a href="/order"
                        class="side-menu__link @if (request()->routeIs('order.*')) side-menu__link--active @endif">
                        <i data-tw-merge data-lucide="archive" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Commandes</div>
                    </a>
                </li>

                <li>
                    <a href="/menu"
                        class="side-menu__link @if (request()->routeIs('menu.*')) side-menu__link--active @endif">
                        <i data-tw-merge="" data-lucide="layout-grid"
                            class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Catégorie</div>
                    </a>
                </li>

                <li>
                    <a href="/article"
                        class="side-menu__link @if (request()->routeIs('article.*')) side-menu__link--active @endif">
                        <i data-tw-merge="" data-lucide="coffee" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Article</div>
                    </a>
                </li>

                <li>
                    <a href="/place"
                        class="side-menu__link @if (request()->routeIs('place.*')) side-menu__link--active @endif">
                        <i data-tw-merge="" data-lucide="columns" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Tables</div>
                    </a>
                </li>

                <li>
                    <a href="/quiz"
                        class="side-menu__link @if (request()->routeIs('quiz.*')) side-menu__link--active @endif">
                        <i data-tw-merge="" data-lucide="star" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Questions</div>
                    </a>
                </li>

                <li>
                    <a href="/feedback"
                        class="side-menu__link @if (request()->routeIs('feedback.*')) side-menu__link--active @endif">
                        <i data-tw-merge="" data-lucide="users" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
                        <div class="side-menu__link__title">Avis client</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
