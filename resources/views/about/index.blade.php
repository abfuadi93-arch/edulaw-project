@extends('layouts.app')

@section('title', 'Tentang Edulaw Project')

@section('content')
    @php
        $values = [
            'Nilai inti: Equal, Educative, Embrace.',
            'Berbasis bukti: rujukan, data, dan integritas.',
            'Orientasi solusi: rekomendasi yang dapat dieksekusi.',
        ];

        $stats = [
            ['label' => 'Pengelola', 'value' => '21 + 17'],
            ['label' => 'Member', 'value' => '11'],
            ['label' => 'Participants', 'value' => '300+'],
            ['label' => 'External Speakers', 'value' => '23'],
            ['label' => 'Member Discussion', 'value' => '10'],
            ['label' => '1 Day 1 Article', 'value' => '300+'],
            ['label' => 'Diseminasi Riset', 'value' => '4'],
            ['label' => 'Inspiring Lecture', 'value' => '1'],
        ];

        $founders = [
            ['name' => 'Abdul Basid Fuadi', 'role' => 'Founder'],
            ['name' => 'Azmi Fatih Rohman', 'role' => 'Co-Founder'],
            ['name' => 'Faraz Alira Aulia', 'role' => 'Co-Founder'],
            ['name' => 'Umi Zakia Azzahro', 'role' => 'Co-Founder'],
        ];

        $focusAreas = [
            [
                'title' => 'Literasi Hukum',
                'description' => 'Materi belajar yang ringkas, kontekstual, dan mudah digunakan.',
                'icon' => 'LH',
            ],
            [
                'title' => 'Riset Kebijakan',
                'description' => 'Kajian berbasis regulasi, putusan, data, dan kebutuhan publik.',
                'icon' => 'RK',
            ],
            [
                'title' => 'Insight Editorial',
                'description' => 'Esai dan analisis hukum dengan gaya akademik yang tetap terbaca.',
                'icon' => 'IE',
            ],
            [
                'title' => 'Kolaborasi Publik',
                'description' => 'Ruang kerja bersama untuk diskusi, advokasi, dan penguatan komunitas.',
                'icon' => 'KP',
            ],
        ];

        $journey = [
            [
                'year' => '2021',
                'title' => 'Gagasan Awal',
                'description' => 'Forum virtual 1 Hari 1 Tulisan mulai dijalankan sebagai ruang membaca, berdiskusi, dan mengembangkan budaya intelektual hukum.',
            ],
            [
                'year' => '2022',
                'title' => 'Pengembangan Komunitas',
                'description' => 'Penguatan forum dan pengembangan pembelajaran hukum kolaboratif mulai dilakukan secara lebih terstruktur.',
            ],
            [
                'year' => '2023',
                'title' => 'Edulaw Project Didirikan',
                'description' => 'Pada 23 Juni 2023, Edulaw Project resmi hadir sebagai platform edukasi hukum independen.',
            ],
            [
                'year' => '2024',
                'title' => 'Ekspansi Program',
                'description' => 'Diskusi Literasi Konstitusi, editorial insight, dan kolaborasi publik mulai berkembang.',
            ],
            [
                'year' => '2025',
                'title' => 'Transformasi Digital',
                'description' => 'Pengembangan website dan ekosistem publikasi digital dilakukan untuk memperluas akses pengetahuan hukum.',
            ],
        ];
    @endphp

    <section class="bg-white">
        <div class="mx-auto grid max-w-7xl gap-10 px-6 py-14 lg:grid-cols-[minmax(0,1fr)_500px] lg:items-center lg:py-16">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Tentang Kami</p>
                <h1 class="mt-4 text-4xl font-extrabold tracking-tight text-[#071b3f] md:text-5xl">
                    Edulaw Project
                </h1>
                <p class="mt-5 max-w-3xl text-sm leading-7 text-slate-600 md:text-base">
                    Edulaw Project adalah platform edukasi hukum yang berfokus pada penguatan literasi konstitusi, advokasi kebijakan publik, dan pengembangan riset hukum yang aplikatif.
                </p>
                <p class="mt-4 max-w-3xl text-sm leading-7 text-slate-600 md:text-base">
                    Melalui pendekatan kolaboratif dan berbasis data, kami membangun ekosistem pengetahuan hukum yang inklusif, kritis, dan berdampak.
                </p>

                <ul class="mt-7 space-y-3">
                    @foreach ($values as $value)
                        <li class="flex gap-3 text-sm font-bold leading-6 text-[#071b3f]">
                            <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full border border-[#d8e3f8] bg-[#f8fbff]">
                                <span class="h-2 w-2 rounded-full bg-[#1f4ed8]"></span>
                            </span>
                            <span>{{ $value }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>

            <aside class="rounded-3xl border border-[#d8e3f8] bg-white p-5 shadow-sm sm:p-6">
                <h2 class="text-lg font-extrabold text-[#071b3f]">
                    Ekosistem Edulaw dalam Angka
                </h2>

                <dl class="mt-5 grid grid-cols-2 gap-3">
                    @foreach ($stats as $stat)
                        <div class="rounded-2xl border border-[#d8e3f8] bg-[#f8fbff] p-4">
                            <dt class="text-[11px] font-extrabold uppercase tracking-[0.14em] text-slate-500">
                                {{ $stat['label'] }}
                            </dt>
                            <dd class="mt-2 text-2xl font-extrabold text-[#071b3f]">
                                {{ $stat['value'] }}
                            </dd>
                        </div>
                    @endforeach
                </dl>

                <div class="mt-6 border-t border-[#d8e3f8] pt-5">
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">
                        Founder & Co-Founder
                    </p>

                    <div class="mt-4 grid gap-3 sm:grid-cols-2">
                        @foreach ($founders as $person)
                            <div class="flex items-center gap-3 rounded-2xl border border-[#d8e3f8] bg-white p-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-[#eef4fb] via-white to-[#f7f3ec] text-xs font-extrabold text-[#071b3f]">
                                    {{ collect(explode(' ', $person['name']))->map(fn ($word) => $word[0])->take(2)->implode('') }}
                                </div>
                                <div class="min-w-0">
                                    <h3 class="truncate text-sm font-extrabold text-[#071b3f]">
                                        {{ $person['name'] }}
                                    </h3>
                                    <p class="mt-0.5 text-xs font-bold text-slate-500">
                                        {{ $person['role'] }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </aside>
        </div>
    </section>

    <section class="border-y border-[#d8e3f8] bg-white py-14 lg:py-16">
        <div class="mx-auto grid max-w-7xl gap-8 px-6 lg:grid-cols-[280px_minmax(0,1fr)]">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Mengapa</p>
                <h2 class="mt-3 text-2xl font-extrabold tracking-tight text-[#071b3f] md:text-3xl">
                    Mengapa Edulaw Hadir?
                </h2>

                <div class="mt-6 flex h-20 w-20 items-center justify-center rounded-2xl border border-[#d8e3f8] bg-[#f8fbff] text-[#071b3f]">
                    <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M4 19h16M6 17V9m4 8V9m4 8V9m4 8V9M3 9h18L12 4 3 9Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>

            <div class="rounded-3xl border border-[#d8e3f8] bg-[#f8fbff] p-6 sm:p-8">
                <div class="space-y-5 text-sm leading-7 text-slate-600 md:text-base">
                    <p>
                        Hukum sering hadir dalam bahasa yang teknis, tertutup, dan sulit dijangkau publik. Padahal, kualitas demokrasi dan kewargaan sangat bergantung pada kemampuan masyarakat memahami hak, kewajiban, serta arah kebijakan negara.
                    </p>
                    <p>
                        Edulaw Project hadir untuk menjembatani pengetahuan hukum, riset kebijakan, dan kebutuhan masyarakat atas informasi yang jernih, reflektif, serta dapat digunakan dalam pembelajaran, diskusi publik, dan advokasi berbasis pengetahuan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#f8fbff] py-14 lg:py-16">
        <div class="mx-auto max-w-7xl px-6">
            <div class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Fokus Kerja</p>
                <h2 class="mt-3 text-2xl font-extrabold tracking-tight text-[#071b3f] md:text-3xl">
                    Dari Literasi Hukum Menuju Pengetahuan Publik
                </h2>
            </div>

            <div class="mt-7 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($focusAreas as $area)
                    <article class="rounded-2xl border border-[#d8e3f8] bg-white p-5 transition hover:-translate-y-1 hover:shadow-md">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#eef4fb] text-xs font-extrabold text-[#1f4ed8]">
                            {{ $area['icon'] }}
                        </div>
                        <h3 class="mt-5 text-lg font-extrabold text-[#071b3f]">
                            {{ $area['title'] }}
                        </h3>
                        <p class="mt-3 text-sm font-medium leading-6 text-slate-600">
                            {{ $area['description'] }}
                        </p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-14 lg:py-16">
        <div class="mx-auto max-w-7xl px-6">
            <div class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Perjalanan Edulaw</p>
                <h2 class="mt-3 text-2xl font-extrabold tracking-tight text-[#071b3f] md:text-3xl">
                    Dari forum kecil menuju ekosistem literasi hukum.
                </h2>
            </div>

            <div class="mt-8 grid gap-6 lg:grid-cols-[150px_minmax(0,1fr)_310px]">
                <div class="rounded-2xl border border-[#d8e3f8] bg-[#f8fbff] p-4">
                    <div class="space-y-3">
                        @foreach ($journey as $item)
                            <div class="flex items-center gap-3">
                                <span class="h-2 w-2 rounded-full bg-[#1f4ed8]"></span>
                                <span class="text-sm font-extrabold text-[#071b3f]">{{ $item['year'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="space-y-4">
                    @foreach ($journey as $item)
                        <article class="rounded-2xl border border-[#d8e3f8] bg-white p-5">
                            <div class="flex flex-wrap items-center gap-3">
                                <span class="rounded-full bg-[#eef4fb] px-3 py-1 text-xs font-extrabold text-[#1f4ed8]">
                                    {{ $item['year'] }}
                                </span>
                                <h3 class="text-lg font-extrabold text-[#071b3f]">
                                    {{ $item['title'] }}
                                </h3>
                            </div>
                            <p class="mt-3 text-sm font-medium leading-6 text-slate-600">
                                {{ $item['description'] }}
                            </p>
                        </article>
                    @endforeach
                </div>

                <aside class="rounded-2xl border border-[#d8e3f8] bg-[#f8fbff] p-5 lg:self-start">
                    <h3 class="text-lg font-extrabold text-[#071b3f]">Ringkasan</h3>
                    <dl class="mt-5 space-y-4">
                        <div>
                            <dt class="text-xs font-extrabold uppercase tracking-[0.14em] text-slate-500">Didirikan</dt>
                            <dd class="mt-1 text-sm font-extrabold text-[#071b3f]">23 Juni 2023</dd>
                        </div>
                        <div>
                            <dt class="text-xs font-extrabold uppercase tracking-[0.14em] text-slate-500">Karakter</dt>
                            <dd class="mt-1 text-sm font-extrabold text-[#071b3f]">Independen, edukatif, dan kolaboratif</dd>
                        </div>
                        <div>
                            <dt class="text-xs font-extrabold uppercase tracking-[0.14em] text-slate-500">Fokus</dt>
                            <dd class="mt-1 text-sm font-extrabold text-[#071b3f]">Literasi hukum dan kebijakan publik</dd>
                        </div>
                    </dl>
                </aside>
            </div>
        </div>
    </section>

    <section class="bg-[#f8fbff] py-14 lg:py-16">
        <div class="mx-auto max-w-7xl rounded-3xl bg-[#071b3f] px-8 py-10 text-white md:px-10">
            <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_250px] lg:items-center">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Kolaborasi</p>
                    <h2 class="mt-3 max-w-3xl text-2xl font-extrabold tracking-tight md:text-3xl">
                        Mari membangun literasi hukum bersama.
                    </h2>
                    <p class="mt-4 max-w-3xl text-sm leading-7 text-slate-200 md:text-base">
                        Edulaw terbuka untuk kolaborasi program, riset tematik, publikasi, diskusi publik, dan kerja sama edukasi hukum berbasis kebutuhan komunitas.
                    </p>
                </div>

                <div class="flex flex-col gap-3 sm:flex-row lg:flex-col">
                    <a href="{{ route('collaboration.index') }}" class="inline-flex justify-center rounded-lg border border-[#d8e3f8] bg-white px-5 py-3 text-sm font-bold text-[#071b3f] hover:border-[#1f4ed8]">
                        Diskusikan Kerja Sama
                    </a>
                    <a href="{{ route('program.index') }}" class="inline-flex justify-center rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white hover:bg-[#1f4ed8] border border-white/15">
                        Lihat Program
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
