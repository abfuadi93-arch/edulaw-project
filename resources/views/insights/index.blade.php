@extends('layouts.app')

@section('title', 'Edulaw Insight')

@section('content')
    @php
        $categories = [
            'Semua',
            'Editorial',
            'Opini',
            'Analisis',
            'Catatan Hukum',
            'Konstitusi',
            'Kebijakan Publik',
        ];

        $articles = collect([
            [
                'category' => 'Editorial',
                'date' => '12 Mei 2026',
                'title' => 'R.A. Kartini: Jejak Perempuan Pencerah Bangsa',
                'read_time' => '4 menit baca',
                'cover' => 'from-[#e8f8f5] via-white to-[#f7f3ec]',
            ],
            [
                'category' => 'Opini',
                'date' => '12 Mei 2026',
                'title' => 'MPR, DPR, dan DPD: Tiga Wajah Perwakilan dalam Demokrasi Konstitusional',
                'read_time' => '5 menit baca',
                'cover' => 'from-[#eef4fb] via-white to-[#e8eefc]',
            ],
            [
                'category' => 'Analisis',
                'date' => '15 Mei 2026',
                'title' => 'Hukum di Era Validasi Digital: Masih Relevankah Cepat?',
                'read_time' => '5 menit baca',
                'cover' => 'from-[#e8eefc] via-white to-[#f8fbff]',
            ],
            [
                'category' => 'Opini',
                'date' => '18 Mei 2026',
                'title' => 'Ujian Berat Reformasi Birokrasi di Indonesia',
                'read_time' => '4 menit baca',
                'cover' => 'from-[#f7f3ec] via-white to-[#eef4fb]',
            ],
            [
                'category' => 'Catatan Hukum',
                'date' => '20 Mei 2026',
                'title' => 'Menjaga Marwah Perguruan Tinggi dari Kejahatan Seksual',
                'read_time' => '4 menit baca',
                'cover' => 'from-[#fbe8ed] via-white to-[#f7f3ec]',
            ],
            [
                'category' => 'Konstitusi',
                'date' => '22 Mei 2026',
                'title' => 'Membaca Putusan MK dalam Ruang Publik Digital',
                'read_time' => '6 menit baca',
                'cover' => 'from-[#e8f8f5] via-white to-[#eef4fb]',
            ],
            [
                'category' => 'Analisis',
                'date' => '28 Mei 2026',
                'title' => 'Arah Baru Pendidikan Hukum Klinis',
                'read_time' => '5 menit baca',
                'cover' => 'from-[#e8eefc] via-white to-[#f7f3ec]',
            ],
            [
                'category' => 'Kebijakan Publik',
                'date' => '30 Mei 2026',
                'title' => 'Literasi Hukum untuk Masyarakat yang Rentan',
                'read_time' => '4 menit baca',
                'cover' => 'from-[#fff4df] via-white to-[#e8f8f5]',
            ],
        ]);
    @endphp

    <section class="bg-[#071b3f] text-white">
        <div class="mx-auto max-w-7xl px-6 py-14 lg:py-16">
            <div class="grid gap-10 lg:grid-cols-[minmax(0,1fr)_310px] lg:items-end">
                <div class="max-w-3xl">
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Insight</p>
                    <h1 class="mt-4 text-4xl font-extrabold tracking-tight md:text-5xl">
                        Edulaw Insight
                    </h1>
                    <p class="mt-5 text-sm leading-7 text-slate-200 md:text-base">
                        Esai, opini, dan catatan analitis tentang hukum, konstitusi, demokrasi, dan kebijakan publik.
                    </p>
                </div>

                <dl class="grid grid-cols-2 gap-4 border-t border-white/15 pt-6 lg:border-l lg:border-t-0 lg:pl-8 lg:pt-0">
                    <div>
                        <dt class="text-xs font-extrabold uppercase tracking-[0.18em] text-slate-300">Artikel</dt>
                        <dd class="mt-2 text-4xl font-extrabold leading-none">24</dd>
                    </div>
                    <div>
                        <dt class="text-xs font-extrabold uppercase tracking-[0.18em] text-slate-300">Kategori</dt>
                        <dd class="mt-2 text-4xl font-extrabold leading-none">6</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <section class="bg-white py-14 lg:py-16">
        <div class="mx-auto max-w-7xl px-6">
            <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Sorotan Utama</p>

            <article class="mt-5 grid overflow-hidden rounded-3xl border border-[#d8e3f8] bg-white shadow-sm lg:grid-cols-[minmax(0,0.95fr)_minmax(0,1.05fr)]">
                <div class="flex min-h-72 items-center justify-center bg-gradient-to-br from-[#e8eefc] via-white to-[#f7f3ec] p-8 text-center">
                    <span class="text-xs font-extrabold uppercase tracking-[0.24em] text-slate-400">
                        Edulaw Insight
                    </span>
                </div>

                <div class="flex flex-col justify-center p-6 sm:p-8 lg:p-10">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="inline-flex rounded-full border border-[#d8e3f8] bg-[#eef4fb] px-3 py-1 text-xs font-extrabold text-[#1f4ed8]">
                            Analisis
                        </span>
                        <span class="text-xs font-bold uppercase tracking-[0.14em] text-slate-500">
                            15 Mei 2026
                        </span>
                    </div>

                    <h2 class="mt-4 text-2xl font-extrabold tracking-tight text-[#071b3f] md:text-3xl">
                        Hukum di Era Validasi Digital: Masih Relevankah Cepat?
                    </h2>

                    <p class="mt-4 text-sm leading-7 text-slate-600 md:text-base">
                        &ldquo;Percepatan teknologi menuntut hukum untuk merespons lebih cepat. Namun validasi digital, algoritma, dan otomatisasi masih menyisakan banyak pertanyaan tentang hak, keadilan, dan akuntabilitas.&rdquo;
                    </p>

                    <div class="mt-6 flex flex-wrap items-center gap-x-4 gap-y-2 text-xs font-bold uppercase tracking-[0.12em] text-slate-500">
                        <span>Tim Redaksi Edulaw Project</span>
                        <span>5 menit baca</span>
                    </div>

                    <a href="{{ route('insight.show', ['slug' => \Illuminate\Support\Str::slug('Hukum di Era Validasi Digital: Masih Relevankah Cepat?')]) }}" class="mt-7 inline-flex w-fit rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white hover:bg-[#1f4ed8]">
                        Baca Insight
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
            <div class="flex items-end justify-between gap-6">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Artikel Terbaru</p>
                    <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-[#071b3f] md:text-3xl">
                        Catatan Editorial Terbaru
                    </h2>
                </div>

                <a href="{{ route('insight.index') }}" class="hidden text-sm font-extrabold text-[#1f4ed8] transition hover:text-[#071b3f] sm:inline-flex">
                    Lihat Semua Insight <span aria-hidden="true" class="ml-1">&rarr;</span>
                </a>
            </div>

            <div class="mt-7 grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
                @foreach ($articles as $article)
                    <article class="group overflow-hidden rounded-2xl border border-[#d8e3f8] bg-white p-5 transition hover:-translate-y-0.5 hover:shadow-md">
                        <div class="-m-5 mb-5 flex h-40 items-center justify-center bg-gradient-to-br {{ $article['cover'] }} p-5 text-center">
                            <span class="text-xs font-bold uppercase tracking-[0.2em] text-[#071b3f]/25">
                                Edulaw Insight
                            </span>
                        </div>

                        <div>
                            <div class="flex flex-wrap items-center gap-2 text-xs font-extrabold uppercase tracking-[0.12em]">
                                <span class="text-[#1f4ed8]">{{ $article['category'] }}</span>
                                <span class="text-slate-400">{{ $article['date'] }}</span>
                            </div>

                            <h3 class="mt-3 text-lg font-extrabold leading-snug text-[#071b3f]">
                                {{ $article['title'] }}
                            </h3>

                            <div class="mt-5 space-y-1 text-xs font-bold leading-5 text-slate-500">
                                <p>Tim Redaksi Edulaw Project</p>
                                <p>{{ $article['read_time'] }}</p>
                            </div>

                            <a href="{{ route('insight.show', ['slug' => \Illuminate\Support\Str::slug($article['title'])]) }}" class="mt-5 inline-flex rounded-lg bg-[#071b3f] px-4 py-2 text-xs font-bold text-white hover:bg-[#1f4ed8]">
                                Baca Insight <span aria-hidden="true" class="ml-1">&rarr;</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <a href="{{ route('insight.index') }}" class="mt-7 inline-flex text-sm font-extrabold text-[#1f4ed8] transition hover:text-[#071b3f] sm:hidden">
                Lihat Semua Insight <span aria-hidden="true" class="ml-1">&rarr;</span>
            </a>
        </div>
    </section>
@endsection
