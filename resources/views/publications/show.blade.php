@extends('layouts.app')

@section('title', 'Dialektika Emergency of State · Riset & Publikasi')

@section('content')
    @php
        $publication = [
            'type' => 'Policy Brief',
            'year' => '2026',
            'title' => 'Dialektika Emergency of State dan Tujuan Hukum dalam Penetapan PERPU 2/2022 Menjadi Undang-Undang',
            'description' => 'Kajian mengenai argumentasi kegentingan yang memaksa, tujuan hukum, dan implikasinya terhadap prinsip negara hukum serta perlindungan hak warga negara.',
        ];

        $documentInfo = [
            'Penulis' => 'Edulaw Project',
            'Tahun' => '2026',
            'Format' => 'PDF',
            'Ukuran' => '2,4 MB',
            'Unduhan' => '2.135',
            'Jenis' => 'Policy Brief',
        ];

        $topics = [
            'Konsep emergency of state dalam hukum tata negara',
            'Tujuan hukum dalam pembentukan peraturan darurat',
            'Prinsip negara hukum dan perlindungan hak warga negara',
            'Implikasi penetapan PERPU menjadi undang-undang',
        ];

        $related = [
            ['type' => 'Policy Brief', 'title' => 'Perlindungan Hak Konstitusional Masyarakat Pesisir', 'year' => '2026'],
            ['type' => 'Policy Brief', 'title' => 'Policy Brief: Literasi Hukum bagi Kelompok Rentan', 'year' => '2025'],
            ['type' => 'Toolkit', 'title' => 'Toolkit Advokasi Kebijakan Berbasis Hak Konstitusional', 'year' => '2025'],
        ];
    @endphp

    <section class="bg-[#071b3f] text-white">
        <div class="mx-auto max-w-7xl px-6 py-14 lg:py-16">
            <a href="{{ route('publication.index') }}" class="inline-flex items-center gap-2 text-sm font-bold text-white/80 transition hover:text-white">
                <span aria-hidden="true">&larr;</span>
                <span>Kembali ke Publikasi</span>
            </a>

            <div class="mt-8 max-w-4xl">
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#7dd3fc]">Riset & Publikasi</p>
                <div class="mt-4 flex flex-wrap gap-3 text-xs font-bold uppercase tracking-[0.14em]">
                    <span class="rounded-full border border-white/20 bg-white/10 px-3 py-1">{{ $publication['type'] }}</span>
                    <span class="rounded-full border border-white/20 bg-white/10 px-3 py-1">{{ $publication['year'] }}</span>
                </div>

                <h1 class="mt-5 text-[34px] font-extrabold leading-tight md:text-5xl lg:text-[56px]">
                    {{ $publication['title'] }}
                </h1>

                <p class="mt-6 max-w-3xl text-base leading-7 text-slate-200 md:text-lg md:leading-8">
                    {{ $publication['description'] }}
                </p>
            </div>
        </div>
    </section>

    <section class="bg-[#f8fbff] py-14 lg:py-16">
        <div class="mx-auto grid max-w-7xl gap-8 px-6 lg:grid-cols-[minmax(0,1fr)_360px] lg:items-start">
            <div class="rounded-3xl border border-[#d8e3f8] bg-white p-4 shadow-sm">
                <div class="flex min-h-[420px] flex-col justify-between rounded-2xl bg-gradient-to-br from-[#071b3f] via-[#1f4ed8] to-[#0e5369] p-7 text-white md:min-h-[520px]">
                    <div class="flex items-start justify-between gap-4">
                        <span class="rounded-full border border-white/20 bg-white/15 px-3 py-1 text-xs font-extrabold uppercase tracking-[0.16em]">
                            Policy Brief
                        </span>
                        <span class="rounded-lg bg-white px-3 py-1 text-xs font-extrabold text-[#071b3f]">
                            PDF
                        </span>
                    </div>

                    <div>
                        <p class="text-xs font-extrabold uppercase tracking-[0.22em] text-white/70">Policy Brief</p>
                        <h2 class="mt-5 max-w-2xl text-2xl font-extrabold leading-tight md:text-4xl">
                            {{ $publication['title'] }}
                        </h2>
                        <p class="mt-8 text-xs font-extrabold uppercase tracking-[0.2em] text-white/75">
                            Edulaw Project · 2026
                        </p>
                    </div>
                </div>
            </div>

            <aside class="rounded-2xl border border-[#d8e3f8] bg-white p-6 lg:sticky lg:top-24">
                <h2 class="text-lg font-extrabold text-[#071b3f]">Informasi Dokumen</h2>
                <dl class="mt-5 divide-y divide-[#d8e3f8] text-sm">
                    @foreach ($documentInfo as $label => $value)
                        <div class="flex items-start justify-between gap-6 py-3 first:pt-0">
                            <dt class="font-bold text-slate-500">{{ $label }}</dt>
                            <dd class="text-right font-extrabold text-[#071b3f]">{{ $value }}</dd>
                        </div>
                    @endforeach
                </dl>

                <div class="mt-6 flex flex-col gap-3">
                    <a href="{{ route('publication.index') }}" class="inline-flex min-h-12 items-center justify-center rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#1f4ed8]">
                        Lihat Publikasi
                    </a>
                    <a href="#" class="inline-flex min-h-12 items-center justify-center rounded-lg border border-[#d8e3f8] bg-white px-5 py-3 text-sm font-bold text-[#071b3f] transition hover:border-[#1f4ed8] hover:text-[#1f4ed8]">
                        Unduh Publikasi
                    </a>
                </div>
            </aside>
        </div>
    </section>

    <section class="bg-white py-14 lg:py-16">
        <div class="mx-auto grid max-w-7xl gap-8 px-6 lg:grid-cols-[minmax(0,0.85fr)_minmax(0,1.15fr)]">
            <article class="rounded-2xl border border-[#d8e3f8] bg-white p-6 md:p-8">
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Tentang Publikasi</p>
                <p class="mt-4 text-base leading-7 text-slate-700">
                    Publikasi ini disusun sebagai bahan bacaan kebijakan untuk memahami hubungan antara keadaan darurat, pembentukan peraturan perundang-undangan, dan perlindungan hak warga negara dalam negara hukum.
                </p>
            </article>

            <article class="rounded-2xl border border-[#d8e3f8] bg-[#f8fbff] p-6 md:p-8">
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Pokok Bahasan</p>
                <ul class="mt-5 space-y-4 text-sm leading-6 text-slate-700 md:text-base md:leading-7">
                    @foreach ($topics as $topic)
                        <li class="flex gap-3">
                            <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-white text-[#1f4ed8]">
                                <svg class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                                    <path d="M5 10.5 8.25 14 15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <span>{{ $topic }}</span>
                        </li>
                    @endforeach
                </ul>
            </article>
        </div>
    </section>

    <section class="border-y border-[#d8e3f8] bg-[#f8fbff] py-14 lg:py-16">
        <div class="mx-auto max-w-7xl px-6">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Publikasi Terkait</p>
                    <h2 class="mt-2 text-2xl font-extrabold text-[#071b3f] md:text-3xl">Dokumen lain yang relevan</h2>
                </div>
                <a href="{{ route('publication.index') }}" class="hidden min-h-11 items-center justify-center rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#1f4ed8] sm:inline-flex">
                    Lihat Publikasi Lainnya
                </a>
            </div>

            <div class="mt-7 grid gap-5 md:grid-cols-3">
                @foreach ($related as $item)
                    <article class="flex h-full flex-col rounded-2xl border border-[#d8e3f8] bg-white p-5 transition hover:-translate-y-0.5 hover:shadow-md">
                        <div class="flex h-28 items-center justify-center rounded-xl bg-gradient-to-br from-[#eef4fb] via-white to-[#f7f3ec]">
                            <span class="rounded-lg border border-[#d8e3f8] bg-white px-3 py-2 text-xs font-extrabold uppercase tracking-[0.16em] text-[#071b3f]">PDF</span>
                        </div>
                        <p class="mt-5 text-xs font-bold uppercase tracking-wide text-[#1f4ed8]">{{ $item['type'] }} · {{ $item['year'] }}</p>
                        <h3 class="mt-3 text-base font-extrabold leading-snug text-[#071b3f]">{{ $item['title'] }}</h3>
                        <a href="{{ route('publication.show', ['slug' => \Illuminate\Support\Str::slug($item['title'])]) }}" class="mt-auto inline-flex min-h-10 w-fit items-center justify-center rounded-lg border border-[#d8e3f8] bg-white px-4 py-2.5 text-sm font-bold text-[#071b3f] transition hover:border-[#1f4ed8] hover:text-[#1f4ed8]">
                            Lihat Publikasi
                        </a>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-14 lg:py-16">
        <div class="mx-auto max-w-7xl px-6">
            <div class="rounded-3xl bg-[#071b3f] px-8 py-10 text-white md:px-10 md:py-12">
                <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_290px] lg:items-center">
                    <div class="max-w-3xl">
                        <h2 class="text-2xl font-extrabold md:text-3xl">Bangun riset hukum yang berdampak bersama Edulaw Project.</h2>
                        <p class="mt-4 text-base leading-7 text-slate-200">
                            Edulaw Project terbuka untuk kolaborasi riset, policy brief, diskusi publik, penyusunan modul, dan pengembangan pengetahuan hukum yang setara, edukatif, dan merangkul.
                        </p>
                    </div>

                    <div class="flex flex-col gap-3 sm:flex-row lg:flex-col">
                        <a href="{{ route('collaboration.index') }}" class="inline-flex min-h-12 items-center justify-center rounded-lg border border-white bg-white px-5 py-3 text-sm font-bold text-[#071b3f] transition hover:bg-[#eef4fb] lg:w-full">
                            Ajukan Kolaborasi Riset
                        </a>
                        <a href="{{ route('publication.index') }}" class="inline-flex min-h-12 items-center justify-center rounded-lg border border-white/25 bg-white/10 px-5 py-3 text-sm font-bold text-white transition hover:bg-white/15 lg:w-full">
                            Lihat Publikasi Lainnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
