@extends('layouts.app')

@section('title', 'Multimedia')

@section('content')
    @php
        $stats = [
            ['value' => '18', 'label' => 'Video Pendek'],
            ['value' => '5', 'label' => 'Serial'],
            ['value' => '12', 'label' => 'Galeri Kegiatan'],
        ];

        $categories = [
            'Semua',
            'Reels / Short',
            'Serial YouTube',
            'Galeri Kegiatan',
            'Dokumentasi Diskusi',
        ];

        $shorts = collect([
            [
                'title' => 'Apa itu Judicial Review?',
                'platform' => 'Instagram Reels',
                'tone' => 'from-[#071b3f] via-[#1f4ed8] to-[#e8eefc]',
            ],
            [
                'title' => 'Perbedaan MK, MA, dan KY',
                'platform' => 'YouTube Shorts',
                'tone' => 'from-[#071b3f] via-[#1f4ed8] to-[#f8fbff]',
            ],
            [
                'title' => 'Hak Konstitusional Warga Negara',
                'platform' => 'Instagram Reels',
                'tone' => 'from-[#071b3f] via-[#1f4ed8] to-[#eef4fb]',
            ],
            [
                'title' => 'Mengapa Putusan MK Mengikat?',
                'platform' => 'YouTube Shorts',
                'tone' => 'from-[#071b3f] via-[#1f4ed8] to-[#e8eefc]',
            ],
        ]);

        $series = collect([
            [
                'title' => 'Diskusi Literasi Konstitusi',
                'description' => 'Serial diskusi tentang konstitusi, putusan pengadilan, dan isu hukum publik yang dekat dengan warga.',
                'episodes' => '3 episode',
                'tone' => 'from-[#071b3f] via-[#1f4ed8] to-[#0f766e]',
            ],
            [
                'title' => 'Diskusi Diseminasi Tesis',
                'description' => 'Forum diseminasi riset akademik yang dikemas sebagai percakapan hukum yang terbuka dan mudah diikuti.',
                'episodes' => '4 episode',
                'tone' => 'from-[#071b3f] via-[#155e75] to-[#f7f3ec]',
            ],
            [
                'title' => 'Diskusi Respons Isu',
                'description' => 'Serial respons terhadap isu hukum aktual melalui pembacaan konstitusional yang ringkas dan terarah.',
                'episodes' => '2 episode',
                'tone' => 'from-[#071b3f] via-[#1f4ed8] to-[#f7f3ec]',
            ],
        ]);

        $galleries = collect([
            [
                'title' => 'Diskusi Literasi Konstitusi',
                'description' => 'Dokumentasi forum diskusi hukum, konstitusi, dan pembacaan putusan pengadilan.',
                'tone' => 'from-[#071b3f] via-[#1f4ed8] to-[#eef4fb]',
            ],
            [
                'title' => 'Kelas Hukum Publik',
                'description' => 'Galeri kegiatan kelas, lokakarya, dan ruang belajar hukum publik bersama komunitas.',
                'tone' => 'from-[#071b3f] via-[#1f4ed8] to-[#f8fbff]',
            ],
            [
                'title' => 'Kolaborasi Riset dan Publikasi',
                'description' => 'Dokumentasi kerja sama riset, policy brief, dan pengembangan pengetahuan hukum.',
                'tone' => 'from-[#071b3f] via-[#1f4ed8] to-[#e8eefc]',
            ],
        ]);
    @endphp

    <section class="bg-[#071b3f] text-white">
        <div class="mx-auto max-w-7xl px-6 py-14 lg:py-16">
            <div class="grid gap-10 lg:grid-cols-[minmax(0,1fr)_390px] lg:items-end">
                <div class="max-w-3xl">
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Multimedia</p>
                    <h1 class="mt-4 text-4xl font-extrabold tracking-tight md:text-5xl">
                        Dokumentasi Visual Edulaw.
                    </h1>
                    <p class="mt-5 text-sm leading-7 text-slate-200 md:text-base">
                        Kumpulan video pendek, serial diskusi, dan dokumentasi kegiatan Edulaw Project dalam format visual yang mudah diakses.
                    </p>
                </div>

                <dl class="grid gap-3 sm:grid-cols-3 lg:grid-cols-1">
                    @foreach ($stats as $stat)
                        <div class="rounded-2xl border border-white/15 bg-white/5 p-4">
                            <dt class="text-xs font-extrabold uppercase tracking-[0.16em] text-slate-300">
                                {{ $stat['label'] }}
                            </dt>
                            <dd class="mt-2 text-4xl font-extrabold leading-none">
                                {{ $stat['value'] }}
                            </dd>
                        </div>
                    @endforeach
                </dl>
            </div>
        </div>
    </section>

    <section class="bg-white py-14 lg:py-16">
        <div class="mx-auto max-w-7xl px-6">
            <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Sorotan Multimedia</p>

            <article class="mt-5 grid overflow-hidden rounded-2xl border border-[#d8e3f8] bg-white shadow-sm lg:grid-cols-[minmax(0,1fr)_minmax(0,0.95fr)]">
                <div class="flex aspect-video min-h-72 items-center justify-center bg-gradient-to-br from-[#071b3f] via-[#1f4ed8] to-[#0f766e] p-8 text-center text-white">
                    <div>
                        <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full border border-white/25 bg-white/15 backdrop-blur">
                            <svg class="ml-1 h-9 w-9" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                        <p class="mt-6 text-xs font-extrabold uppercase tracking-[0.24em] text-slate-200">
                            Edulaw Multimedia
                        </p>
                    </div>
                </div>

                <div class="flex flex-col justify-center p-6 sm:p-8 lg:p-10">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="inline-flex rounded-full border border-[#d8e3f8] bg-[#eef4fb] px-3 py-1 text-xs font-extrabold text-[#1f4ed8]">
                            Serial YouTube
                        </span>
                        <span class="text-xs font-extrabold uppercase tracking-[0.14em] text-slate-500">
                            2026
                        </span>
                    </div>

                    <h2 class="mt-4 text-2xl font-extrabold tracking-tight text-[#071b3f] md:text-3xl">
                        Diskusi Literasi Konstitusi: Membaca Putusan MK dalam Ruang Publik
                    </h2>

                    <p class="mt-4 text-sm leading-7 text-slate-600 md:text-base">
                        Serial diskusi yang membahas isu konstitusi, demokrasi, dan kebijakan publik melalui percakapan yang edukatif dan mudah diikuti.
                    </p>

                    <dl class="mt-6 grid gap-3 text-sm sm:grid-cols-3">
                        <div class="rounded-xl border border-[#d8e3f8] bg-[#f8fbff] p-3">
                            <dt class="text-xs font-extrabold uppercase tracking-[0.14em] text-slate-500">Kanal</dt>
                            <dd class="mt-1 font-extrabold text-[#071b3f]">YouTube</dd>
                        </div>
                        <div class="rounded-xl border border-[#d8e3f8] bg-[#f8fbff] p-3">
                            <dt class="text-xs font-extrabold uppercase tracking-[0.14em] text-slate-500">Format</dt>
                            <dd class="mt-1 font-extrabold text-[#071b3f]">Video</dd>
                        </div>
                        <div class="rounded-xl border border-[#d8e3f8] bg-[#f8fbff] p-3">
                            <dt class="text-xs font-extrabold uppercase tracking-[0.14em] text-slate-500">Durasi</dt>
                            <dd class="mt-1 font-extrabold text-[#071b3f]">60 menit</dd>
                        </div>
                    </dl>

                    <a href="#" class="mt-7 inline-flex w-fit rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-extrabold text-white transition hover:bg-[#1f4ed8]">
                        Tonton Serial
                    </a>
                </div>
            </article>
        </div>
    </section>

    <section class="border-y border-[#d8e3f8] bg-[#f8fbff] py-7">
        <div class="mx-auto max-w-7xl px-6">
            <div class="flex flex-wrap gap-3">
                @foreach ($categories as $category)
                    <button
                        type="button"
                        class="{{ $category === 'Semua' ? 'bg-[#071b3f] text-white' : 'border border-[#d8e3f8] bg-white text-[#071b3f] hover:border-[#1f4ed8] hover:text-[#1f4ed8]' }} rounded-full px-4 py-2 text-sm font-extrabold transition"
                    >
                        {{ $category }}
                    </button>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-14 lg:py-16">
        <div class="mx-auto max-w-7xl px-6">
            <div class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Reels / Short Terbaru</p>
                <p class="mt-2 text-sm font-medium leading-6 text-slate-600">
                    Potongan edukasi hukum singkat, cuplikan diskusi, dan konten visual yang mudah dibagikan.
                </p>
            </div>

            <div class="mt-7 grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
                @foreach ($shorts as $short)
                    <article class="group overflow-hidden rounded-2xl border border-[#d8e3f8] bg-white transition hover:-translate-y-0.5 hover:shadow-md">
                        <div class="flex aspect-[4/5] items-center justify-center bg-gradient-to-br {{ $short['tone'] }} p-5 text-center">
                            <div>
                                <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-white/80 text-[#071b3f] shadow-sm">
                                    <svg class="ml-0.5 h-6 w-6" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path d="M8 5v14l11-7z" />
                                    </svg>
                                </div>
                                <p class="mt-4 text-xs font-extrabold uppercase tracking-[0.18em] text-white/80">Short</p>
                            </div>
                        </div>

                        <div class="p-5">
                            <p class="text-xs font-extrabold uppercase tracking-[0.14em] text-[#1f4ed8]">Reels / Short</p>
                            <h2 class="mt-3 text-lg font-extrabold leading-snug text-[#071b3f]">
                                {{ $short['title'] }}
                            </h2>
                            <p class="mt-3 text-sm font-bold text-slate-500">
                                {{ $short['platform'] }}
                            </p>
                            <a href="#" class="mt-5 inline-flex rounded-lg border border-[#d8e3f8] bg-white px-4 py-2 text-xs font-extrabold text-[#071b3f] transition group-hover:border-[#1f4ed8] group-hover:text-[#1f4ed8]">
                                Lihat Short
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="border-y border-[#d8e3f8] bg-[#f8fbff] py-14 lg:py-16">
        <div class="mx-auto max-w-7xl px-6">
            <div class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Serial YouTube</p>
                <p class="mt-2 text-sm font-medium leading-6 text-slate-600">
                    Serial diskusi dan forum edukatif Edulaw Project yang membahas isu hukum secara lebih mendalam.
                </p>
            </div>

            <div class="mt-7 grid gap-5 lg:grid-cols-3">
                @foreach ($series as $item)
                    <article class="rounded-2xl border border-[#d8e3f8] bg-white p-5 transition hover:-translate-y-0.5 hover:shadow-md">
                        <div class="flex aspect-video items-center justify-center rounded-xl bg-gradient-to-br {{ $item['tone'] }} text-white">
                            <div class="flex h-14 w-14 items-center justify-center rounded-full border border-white/25 bg-white/15">
                                <svg class="ml-0.5 h-7 w-7" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>

                        <div class="mt-5">
                            <span class="inline-flex rounded-full border border-[#d8e3f8] bg-[#eef4fb] px-3 py-1 text-xs font-extrabold text-[#1f4ed8]">
                                Serial
                            </span>
                            <h2 class="mt-3 text-xl font-extrabold leading-snug text-[#071b3f]">
                                {{ $item['title'] }}
                            </h2>
                            <p class="mt-3 text-sm font-medium leading-6 text-slate-600">
                                {{ $item['description'] }}
                            </p>
                            <p class="mt-4 text-xs font-extrabold uppercase tracking-[0.14em] text-slate-500">
                                {{ $item['episodes'] }}
                            </p>
                            <a href="#" class="mt-5 inline-flex rounded-lg bg-[#071b3f] px-4 py-2 text-xs font-bold text-white hover:bg-[#1f4ed8]">
                                Lihat Serial
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-14 lg:py-16">
        <div class="mx-auto max-w-7xl px-6">
            <div class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Galeri Kegiatan</p>
                <p class="mt-2 text-sm font-medium leading-6 text-slate-600">
                    Dokumentasi kegiatan, forum, kelas, dan kolaborasi Edulaw Project.
                </p>
            </div>

            <div class="mt-7 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($galleries as $gallery)
                    <article class="group overflow-hidden rounded-2xl border border-[#d8e3f8] bg-white p-5 transition hover:-translate-y-0.5 hover:shadow-md">
                        <div class="-m-5 mb-5 flex aspect-video items-center justify-center bg-gradient-to-br {{ $gallery['tone'] }} p-5">
                            <span class="rounded-full border border-[#d8e3f8] bg-white/85 px-4 py-2 text-xs font-extrabold uppercase tracking-[0.16em] text-[#071b3f]">
                                Galeri
                            </span>
                        </div>

                        <div>
                            <h2 class="text-xl font-extrabold leading-snug text-[#071b3f]">
                                {{ $gallery['title'] }}
                            </h2>
                            <p class="mt-3 text-sm font-medium leading-6 text-slate-600">
                                {{ $gallery['description'] }}
                            </p>
                            <a href="#" class="mt-5 inline-flex rounded-lg border border-[#d8e3f8] bg-white px-4 py-2 text-xs font-bold text-[#071b3f] hover:border-[#1f4ed8]">
                                Lihat Galeri
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-[#f8fbff] py-14 lg:py-16">
        <div class="mx-auto max-w-7xl rounded-3xl bg-[#071b3f] px-6 py-10 text-white md:px-10">
            <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_250px] lg:items-center">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Kolaborasi Program</p>
                    <h2 class="mt-3 max-w-3xl text-2xl font-extrabold tracking-tight md:text-3xl">
                        Dokumentasikan dan perluas dampak literasi hukum bersama Edulaw Project.
                    </h2>
                    <p class="mt-4 max-w-3xl text-sm leading-7 text-slate-200 md:text-base">
                        Edulaw Project terbuka untuk kerja sama program edukasi hukum, diskusi publik, dokumentasi kegiatan, dan pengembangan konten visual yang setara, edukatif, dan merangkul.
                    </p>
                </div>

                <div class="flex flex-col gap-3 sm:flex-row lg:flex-col">
                    <a href="{{ route('collaboration.index') }}" class="inline-flex justify-center rounded-lg border border-[#d8e3f8] bg-white px-5 py-3 text-sm font-bold text-[#071b3f] hover:border-[#1f4ed8]">
                        Ajukan Kerja Sama
                    </a>
                    <a href="{{ route('program.index') }}" class="inline-flex justify-center rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white hover:bg-[#1f4ed8] border border-white/15">
                        Lihat Program
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
