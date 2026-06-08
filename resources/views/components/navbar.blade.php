@php
    $links = [
        ['label' => 'Beranda', 'route' => 'home'],
        ['label' => 'Program', 'route' => 'program.index'],
        ['label' => 'Insight', 'route' => 'insight.index'],
        ['label' => 'Riset & Publikasi', 'route' => 'publication.index'],
        ['label' => 'Multimedia', 'route' => 'multimedia.index'],
        ['label' => 'Tentang', 'route' => 'about.index'],
    ];
@endphp

<header class="sticky top-0 z-50 border-b border-[#d8e3f8] bg-white/95 backdrop-blur-xl">
    <div class="mx-auto flex h-16 max-w-7xl items-center justify-between gap-4 px-6">
        <a href="{{ route('home') }}" class="flex min-w-0 items-center gap-3">
            <img
                src="{{ asset('images/edulaw-logo.webp') }}"
                alt="Edulaw Project"
                class="h-9 w-auto shrink-0"
            >

            <span class="hidden min-w-0 sm:block">
                <span class="block truncate text-sm font-semibold text-[#071b3f]">Edulaw Project</span>
                <span class="block truncate text-xs text-[#64748b]">Equal, Educative, Embrace</span>
            </span>
        </a>

        <nav class="hidden items-center gap-5 lg:flex" aria-label="Navigasi utama">
            @foreach ($links as $link)
                <a
                    href="{{ route($link['route']) }}"
                    class="{{ request()->routeIs($link['route']) ? 'rounded-full bg-[#eef4fb] px-4 py-2 font-extrabold text-[#071b3f] shadow-inner' : 'text-[#475569] hover:text-[#071b3f]' }} whitespace-nowrap text-sm font-bold leading-6 transition"
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="flex items-center gap-3">
            <form action="{{ route('insight.index') }}" method="GET" class="hidden h-10 items-center gap-2 rounded-full border border-[#d8e3f8] bg-[#f8fbff] px-4 xl:flex">
                <label for="site-search" class="sr-only">Search</label>
                <svg class="h-4 w-4 text-[#64748b]" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="m21 21-4.2-4.2m1.2-5.3a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0Z" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                </svg>
                <input
                    id="site-search"
                    name="q"
                    type="search"
                    placeholder="Cari topik ..."
                    class="w-44 bg-transparent text-sm font-semibold text-[#071b3f] outline-none placeholder:text-[#64748b]"
                >
            </form>

            <a
                href="{{ route('collaboration.index') }}"
                class="hidden h-10 items-center justify-center rounded-lg bg-[#071b3f] px-5 text-sm font-extrabold text-white transition hover:bg-[#1f4ed8] sm:inline-flex"
            >
                Kolaborasi
            </a>
        </div>
    </div>

    <nav class="border-t border-[#eef4fb] bg-white lg:hidden" aria-label="Navigasi mobile">
        <div class="mx-auto flex max-w-7xl gap-5 overflow-x-auto px-6 py-2.5 text-sm font-medium leading-6 text-[#475569]">
            @foreach ($links as $link)
                <a
                    href="{{ route($link['route']) }}"
                    class="{{ request()->routeIs($link['route']) ? 'font-extrabold text-[#1f4ed8]' : 'hover:text-[#071b3f]' }} shrink-0 whitespace-nowrap"
                >
                    {{ $link['label'] }}
                </a>
            @endforeach
            <a href="{{ route('insight.index') }}" class="shrink-0 whitespace-nowrap hover:text-[#071b3f]">
                Search
            </a>
        </div>
    </nav>
</header>
