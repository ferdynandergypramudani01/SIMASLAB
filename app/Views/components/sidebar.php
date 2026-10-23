<?php

$activeClass = 'bg-slate-900 text-white';
$inactiveClass = 'text-slate-600 hover:bg-slate-100 hover:text-slate-900';

$menuClass = function (string $pattern) use (
    $activeClass,
    $inactiveClass
) {
    return url_is($pattern)
        ? $activeClass
        : $inactiveClass;
};

?>





<!-- Overlay -->
<div
    id="sidebar-overlay"
    class="fixed inset-0 z-40 hidden bg-slate-950/50 lg:hidden"></div>


<!-- Sidebar -->
<aside
    id="sidebar"
    class="fixed inset-y-0 left-0 z-50 flex w-72 -translate-x-full flex-col border-r border-slate-200 bg-white transition-transform duration-300 lg:translate-x-0">

    <!-- Logo / Brand -->
    <div class="flex h-20 items-center border-b border-slate-200 px-6">

        <div class="flex items-center gap-3">

            <!-- Logo -->
            <div class="flex size-10 items-center justify-center rounded-xl bg-slate-900 text-white">
                <svg
                    class="size-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M9 3v6.5L4.5 17a2 2 0 0 0 1.8 3h11.4a2 2 0 0 0 1.8-3L15 9.5V3M8 3h8M8 14h8" />
                </svg>
            </div>

            <!-- Brand -->
            <div>
                <h1 class="text-sm font-bold text-slate-900">
                    Sistem Manajemen
                </h1>

                <p class="text-sm font-bold text-slate-500">
                    Aslab
                </p>
            </div>

        </div>


        <!-- Close Sidebar -->
        <button
            id="close-sidebar"
            type="button"
            class="ml-auto flex size-9 items-center justify-center rounded-lg text-slate-500 hover:bg-slate-100 lg:hidden"
            aria-label="Close sidebar">
            <svg
                class="size-5"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                viewBox="0 0 24 24">
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>

    </div>


    <!-- Navigation -->
    <nav class="flex-1 overflow-y-auto px-4 py-6">

        <p class="mb-3 px-3 text-xs font-semibold uppercase tracking-wider text-slate-400">
            Main Menu
        </p>

        <div class="space-y-1">
            <a
                href="<?= url_to('dashboard') ?>"
                class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium <?= $menuClass('dashboard') ?>">
                <svg
                    class="size-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 13h6V4H4v9Zm0 7h6v-4H4v4Zm10 0h6v-9h-6v9Zm0-16v4h6V4h-6Z" />
                </svg>

                <span>Dashboard</span>
            </a>

            <!-- Rekrutmen -->
            <a
                href="<?= url_to('rekrutmen') ?>"
                class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium <?= $menuClass('rekrutmen') ?>">
                <svg
                    class="size-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>

                <span>Rekrutmen Aslab</span>
            </a>


            <!-- Manajemen Aslab -->
            <a
                href="<?= url_to('aslab') ?>"
                class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium <?= $menuClass('aslab') ?>">
                <svg
                    class="size-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2M9 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM23 21v-2a4 4 0 0 0-4-4h-1M16 3.13a4 4 0 0 1 0 7.75" />
                </svg>
                <span>Manajemen Aslab</span>
            </a>


            <!-- Jadwal -->
            <a
                href="<?= url_to('jadwal') ?>"
                class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium <?= $menuClass('jadwal') ?>">
                <svg
                    class="size-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8 2v4M16 2v4M3 10h18M5 4h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z" />
                </svg>
                <span>Manajemen Jadwal</span>
            </a>


            <!-- Laporan -->
            <a
                href="<?= url_to('laporan') ?>"
                class="group flex items-center gap-3 rounded-xl px-3 py-2.5 text-sm font-medium <?= $menuClass('laporan') ?>">
                <svg
                    class="size-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 19V5M4 19h16M8 16v-5M12 16V7M16 16v-3M20 16V4" />
                </svg>
                <span>Laporan</span>
            </a>

        </div>

    </nav>


    <!-- User Profile -->
    <div class="border-t border-slate-200 p-4">

        <div class="flex items-center gap-3 rounded-xl p-2 hover:bg-slate-50">

            <!-- Avatar -->
            <div class="flex size-10 shrink-0 items-center justify-center rounded-full bg-slate-200 text-sm font-semibold text-slate-700">
                FE
            </div>

            <!-- User -->
            <div class="min-w-0 flex-1">
                <p class="truncate text-sm font-semibold text-slate-900">
                    Ferdynand
                </p>

                <p class="truncate text-xs text-slate-500">
                    Administrator
                </p>
            </div>

            <!-- More -->
            <button
                type="button"
                class="flex size-8 items-center justify-center rounded-lg text-slate-400 hover:bg-slate-100 hover:text-slate-700">
                <svg
                    class="size-5"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    viewBox="0 0 24 24">
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 5.5h.01M12 12h.01M12 18.5h.01" />
                </svg>
            </button>

        </div>

    </div>

</aside>