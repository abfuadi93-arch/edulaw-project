@extends('layouts.app')

@section('title', 'Politik Hukum Yudisial · Program Edulaw')

@section('content')
    @php
        $program = [
            'category' => 'Diskusi Literasi Konstitusi',
            'title' => 'Politik Hukum Yudisial: Sumber Pembangunan Hukum Nasional dan Ragam Persoalan Penyandang Disabilitas',
            'summary' => 'Forum diskusi yang membahas politik hukum yudisial, pembangunan hukum nasional, dan isu hak penyandang disabilitas dalam kerangka konstitusi.',
            'cluster' => 'Discussion',
            'duration' => '1 Pertemuan',
            'format' => 'Hybrid',
            'level' => 'Umum',
            'status' => 'Arsip Program',
            'date' => '12 Mei 2026',
        ];

        $learningPoints = [
            'Politik hukum yudisial dalam putusan pengadilan',
            'Peran putusan Mahkamah Konstitusi dalam pembangunan hukum nasional',
            'Isu hak penyandang disabilitas dalam kerangka konstitusi',
            'Relasi antara kepastian hukum, keadilan, dan perlindungan hak warga negara',
        ];

        $speakers = [
            ['name' => 'Tim Edulaw Project', 'role' => 'Fasilitator Program', 'initial' => 'TE'],
            ['name' => 'Narasumber Akademisi / Praktisi', 'role' => 'Pemantik Diskusi', 'initial' => 'NA'],
        ];

        $archives = ['Materi kegiatan', 'Rekaman diskusi', 'Galeri dokumentasi'];

        $info = [
            'Kategori' => $program['category'],
            'Rumpun' => $program['cluster'],
            'Durasi' => $program['duration'],
            'Format' => $program['format'],
            'Level' => $program['level'],
            'Status' => $program['status'],
            'Tanggal Kegiatan' => $program['date'],
        ];
    @endphp

    <section class="border-b border-[#d8e3f8] bg-[#f8fbff]">
        <div class="mx-auto max-w-7xl px-6 py-14 lg:py-16">
            <a href="{{ route('program.index') }}" class="inline-flex items-center gap-2 text-sm font-bold text-[#1f4ed8] transition hover:text-[#071b3f]">
                <span aria-hidden="true">&larr;</span>
                <span>Kembali ke Program</span>
            </a>

            <div class="mt-8 grid gap-8 lg:grid-cols-[minmax(0,1fr)_360px] lg:items-end">
                <div class="max-w-4xl">
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Program Edulaw</p>
                    <span class="mt-4 inline-flex rounded-full border border-[#d8e3f8] bg-white px-3 py-1 text-xs font-bold text-[#1f4ed8]">
                        {{ $program['category'] }}
                    </span>

                    <h1 class="mt-5 text-[36px] font-extrabold leading-tight text-[#071b3f] md:text-5xl">
                        {{ $program['title'] }}
                    </h1>

                    <p class="mt-5 max-w-3xl text-base leading-7 text-slate-600">
                        {{ $program['summary'] }}
                    </p>

                    <div class="mt-7 grid gap-3 text-sm sm:grid-cols-2 lg:grid-cols-4">
                        @foreach (['Durasi' => $program['duration'], 'Format' => $program['format'], 'Level' => $program['level'], 'Status' => $program['status']] as $label => $value)
                            <div class="rounded-2xl border border-[#d8e3f8] bg-white p-4">
                                <p class="text-xs font-bold uppercase tracking-[0.16em] text-slate-500">{{ $label }}</p>
                                <p class="mt-2 font-extrabold text-[#071b3f]">{{ $value }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="rounded-3xl border border-[#d8e3f8] bg-white p-4 shadow-sm">
                    <div class="flex h-[300px] flex-col items-center justify-center rounded-2xl bg-gradient-to-br from-[#071b3f] via-[#1f4ed8] to-[#0e5369] p-8 text-center text-white md:h-[360px] lg:h-[390px]">
                        <p class="text-xs font-extrabold uppercase tracking-[0.26em] text-white/75">Edulaw Program</p>
                        <div class="mt-6 h-1.5 w-24 rounded-full bg-white/45"></div>
                        <p class="mt-6 max-w-xs text-lg font-extrabold leading-snug">
                            Area poster atau banner program
                        </p>
                        <span class="mt-8 rounded-lg border border-white/25 bg-white/15 px-4 py-2 text-xs font-bold uppercase tracking-[0.16em]">
                            {{ $program['format'] }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-14 lg:py-16">
        <div class="mx-auto grid max-w-7xl gap-8 px-6 lg:grid-cols-[minmax(0,1fr)_340px] lg:items-start">
            <div class="space-y-6">
                <article class="rounded-2xl border border-[#d8e3f8] bg-white p-6 md:p-8">
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Tentang Program</p>
                    <p class="mt-4 text-base leading-7 text-slate-700">
                        Program ini dirancang sebagai ruang pembelajaran dan diskusi hukum yang mempertemukan isu konstitusi, kebijakan publik, dan kebutuhan literasi masyarakat. Melalui forum ini, peserta diajak memahami perkembangan hukum secara lebih kontekstual, kritis, dan aplikatif.
                    </p>
                </article>

                <article class="rounded-2xl border border-[#d8e3f8] bg-white p-6 md:p-8">
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Yang Dipelajari</p>
                    <ul class="mt-5 space-y-4 text-sm leading-6 text-slate-700 md:text-base md:leading-7">
                        @foreach ($learningPoints as $point)
                            <li class="flex gap-3">
                                <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-[#eef4fb] text-[#1f4ed8]">
                                    <svg class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                                        <path d="M5 10.5 8.25 14 15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                                <span>{{ $point }}</span>
                            </li>
                        @endforeach
                    </ul>
                </article>

                <article class="rounded-2xl border border-[#d8e3f8] bg-white p-6 md:p-8">
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Narasumber</p>
                    <div class="mt-5 grid gap-4 sm:grid-cols-2">
                        @foreach ($speakers as $speaker)
                            <div class="flex gap-4 rounded-2xl border border-[#d8e3f8] bg-[#f8fbff] p-4">
                                <span class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-[#071b3f] text-sm font-extrabold text-white">
                                    {{ $speaker['initial'] }}
                                </span>
                                <div>
                                    <h2 class="text-base font-extrabold text-[#071b3f]">{{ $speaker['name'] }}</h2>
                                    <p class="mt-1 text-sm leading-6 text-slate-600">{{ $speaker['role'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </article>

                <article class="rounded-2xl border border-[#d8e3f8] bg-white p-6 md:p-8">
                    <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                        <div>
                            <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Dokumentasi / Arsip</p>
                            <h2 class="mt-2 text-2xl font-extrabold text-[#071b3f] md:text-3xl">Arsip kegiatan program</h2>
                        </div>
                        <a href="#" class="inline-flex min-h-11 w-fit items-center justify-center rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#1f4ed8]">
                            Lihat Arsip
                        </a>
                    </div>

                    <div class="mt-6 grid gap-4 md:grid-cols-3">
                        @foreach ($archives as $archive)
                            <div class="rounded-2xl border border-[#d8e3f8] bg-[#f8fbff] p-5">
                                <div class="h-10 w-10 rounded-xl bg-gradient-to-br from-[#eef4fb] to-[#f7f3ec]"></div>
                                <h3 class="mt-4 text-base font-extrabold text-[#071b3f]">{{ $archive }}</h3>
                                <p class="mt-2 text-sm leading-6 text-slate-600">Placeholder arsip untuk tahap desain statis.</p>
                            </div>
                        @endforeach
                    </div>
                </article>
            </div>

            <aside class="rounded-2xl border border-[#d8e3f8] bg-[#f8fbff] p-6 lg:sticky lg:top-24">
                <h2 class="text-lg font-extrabold text-[#071b3f]">Informasi Program</h2>
                <dl class="mt-5 divide-y divide-[#d8e3f8] text-sm">
                    @foreach ($info as $label => $value)
                        <div class="flex items-start justify-between gap-6 py-3 first:pt-0">
                            <dt class="font-bold text-slate-500">{{ $label }}</dt>
                            <dd class="text-right font-extrabold text-[#071b3f]">{{ $value }}</dd>
                        </div>
                    @endforeach
                </dl>

                <a href="{{ route('collaboration.index') }}" class="mt-6 inline-flex min-h-12 w-full items-center justify-center rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#1f4ed8]">
                    Diskusikan Program Serupa
                </a>
            </aside>
        </div>
    </section>

    <section class="bg-white pb-14 lg:pb-16">
        <div class="mx-auto max-w-7xl px-6">
            <div class="rounded-3xl bg-[#071b3f] px-8 py-10 text-white md:px-10 md:py-12">
                <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_260px] lg:items-center">
                    <div class="max-w-3xl">
                        <h2 class="text-2xl font-extrabold md:text-3xl">Bangun program literasi hukum bersama Edulaw Project.</h2>
                        <p class="mt-4 text-base leading-7 text-slate-200">
                            Edulaw Project terbuka untuk kerja sama program edukasi hukum, diskusi publik, pelatihan, dan pengembangan kapasitas berbasis kebutuhan komunitas.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3 sm:flex-row lg:flex-col">
                        <a href="{{ route('collaboration.index') }}" class="inline-flex min-h-12 items-center justify-center rounded-lg border border-white bg-white px-5 py-3 text-sm font-bold text-[#071b3f] transition hover:bg-[#eef4fb] lg:w-full">
                            Ajukan Kerja Sama
                        </a>
                        <a href="{{ route('program.index') }}" class="inline-flex min-h-12 items-center justify-center rounded-lg border border-white/25 bg-white/10 px-5 py-3 text-sm font-bold text-white transition hover:bg-white/15 lg:w-full">
                            Lihat Program Lainnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
