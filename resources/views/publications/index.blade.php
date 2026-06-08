@extends('layouts.app')

@section('title', 'Riset & Publikasi')

@section('content')
    @php
        $stats = [
            ['value' => '24', 'label' => 'Dokumen', 'icon' => 'DOC'],
            ['value' => '12.458', 'label' => 'Unduhan', 'icon' => 'DL'],
            ['value' => '4', 'label' => 'Jenis Publikasi', 'icon' => 'PUB'],
            ['value' => '8', 'label' => 'Kolaborasi Riset', 'icon' => 'RIS'],
        ];

        $categories = [
            'Semua',
            'Policy Brief',
            'Laporan Riset',
            'Artikel Akademik',
            'Toolkit',
            'Dokumen Kolaborasi',
        ];

        $publications = collect([
            [
                'type' => 'Policy Brief',
                'year' => '2026',
                'title' => 'Perlindungan Hak Konstitusional Masyarakat Pesisir: Urgensi Harmonisasi Regulasi',
                'description' => 'Policy brief untuk membaca kebutuhan harmonisasi regulasi dalam perlindungan hak masyarakat pesisir.',
                'downloads' => '1.842',
                'tone' => 'from-[#e8f8f5] via-white to-[#f8fbff]',
                'badge' => 'bg-teal-50 text-teal-700 border-teal-200',
            ],
            [
                'type' => 'Laporan Riset',
                'year' => '2025',
                'title' => 'Membaca Arah Demokrasi Konstitusional Pasca Putusan Mahkamah Konstitusi',
                'description' => 'Laporan riset tentang arah demokrasi konstitusional dan dinamika kelembagaan pasca putusan MK.',
                'downloads' => '1.523',
                'tone' => 'from-[#eef4fb] via-white to-[#e8eefc]',
                'badge' => 'bg-blue-50 text-blue-700 border-blue-200',
            ],
            [
                'type' => 'Policy Brief',
                'year' => '2025',
                'title' => 'Policy Brief: Literasi Hukum bagi Kelompok Rentan',
                'description' => 'Dokumen ringkas mengenai strategi literasi hukum yang mudah diakses oleh kelompok rentan.',
                'downloads' => '1.267',
                'tone' => 'from-[#f7f3ec] via-white to-[#fff4df]',
                'badge' => 'bg-amber-50 text-amber-700 border-amber-200',
            ],
            [
                'type' => 'Toolkit',
                'year' => '2025',
                'title' => 'Toolkit Advokasi Kebijakan Berbasis Hak Konstitusional',
                'description' => 'Toolkit praktis untuk membantu pembacaan isu kebijakan publik berbasis hak konstitusional.',
                'downloads' => '1.116',
                'tone' => 'from-[#e8eefc] via-white to-[#f8fbff]',
                'badge' => 'bg-indigo-50 text-indigo-700 border-indigo-200',
            ],
            [
                'type' => 'Laporan Riset',
                'year' => '2024',
                'title' => 'Laporan Riset: Pendidikan Hukum Publik dan Akses Keadilan',
                'description' => 'Kajian tentang peran pendidikan hukum publik dalam memperluas akses terhadap keadilan.',
                'downloads' => '987',
                'tone' => 'from-[#f8fbff] via-white to-[#e8f8f5]',
                'badge' => 'bg-sky-50 text-sky-700 border-sky-200',
            ],
            [
                'type' => 'Modul',
                'year' => '2024',
                'title' => 'Modul Diskusi Literasi Konstitusi',
                'description' => 'Modul diskusi untuk membantu fasilitasi pembelajaran hukum konstitusi secara terstruktur.',
                'downloads' => '853',
                'tone' => 'from-[#fff4df] via-white to-[#eef4fb]',
                'badge' => 'bg-orange-50 text-orange-700 border-orange-200',
            ],
            [
                'type' => 'Catatan Kebijakan',
                'year' => '2024',
                'title' => 'Catatan Kebijakan tentang Partisipasi Publik dalam Pembentukan Undang-Undang',
                'description' => 'Catatan kebijakan mengenai standar partisipasi publik yang bermakna dalam proses legislasi.',
                'downloads' => '742',
                'tone' => 'from-[#eef4fb] via-white to-[#f7f3ec]',
                'badge' => 'bg-slate-50 text-slate-700 border-slate-200',
            ],
            [
                'type' => 'Artikel Akademik',
                'year' => '2024',
                'title' => 'Asas Proporsionalitas dalam Pembatasan Hak Konstitusional',
                'description' => 'Artikel akademik tentang ukuran proporsionalitas dalam pembatasan hak konstitusional warga negara.',
                'downloads' => '631',
                'tone' => 'from-[#e8eefc] via-white to-[#f7f3ec]',
                'badge' => 'bg-violet-50 text-violet-700 border-violet-200',
            ],
        ]);
    @endphp

    <section class="bg-[#071b3f] text-white">
        <div class="mx-auto max-w-7xl px-6 py-14 lg:py-16">
            <div class="grid gap-10 lg:grid-cols-[minmax(0,1fr)_420px] lg:items-end">
                <div class="max-w-3xl">
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Riset & Publikasi</p>
                    <h1 class="mt-4 text-4xl font-extrabold tracking-tight md:text-5xl">
                        Perpustakaan Digital Edulaw.
                    </h1>
                    <p class="mt-5 text-sm leading-7 text-slate-200 md:text-base">
                        Kumpulan policy brief, laporan riset, artikel akademik, dan dokumen pengetahuan yang disusun dan dikurasi oleh Edulaw Project.
                    </p>
                </div>

                <dl class="grid grid-cols-2 gap-3">
                    @foreach ($stats as $stat)
                        <div class="rounded-2xl border border-white/15 bg-white/5 p-4">
                            <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-white/10 text-[10px] font-extrabold tracking-[0.12em] text-slate-200">
                                {{ $stat['icon'] }}
                            </div>
                            <dt class="mt-4 text-xs font-extrabold uppercase tracking-[0.16em] text-slate-300">
                                {{ $stat['label'] }}
                            </dt>
                            <dd class="mt-1 text-3xl font-extrabold leading-none">
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
            <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Publikasi Unggulan</p>

            <article class="mt-5 grid overflow-hidden rounded-2xl border border-[#d8e3f8] bg-white shadow-sm lg:grid-cols-[minmax(0,0.92fr)_minmax(0,1.08fr)]">
                <div class="flex min-h-80 flex-col justify-between bg-gradient-to-br from-[#071b3f] via-[#1f4ed8] to-[#0f766e] p-7 text-white">
                    <div class="flex items-start justify-between gap-4">
                        <span class="rounded-full bg-white/15 px-3 py-1 text-xs font-extrabold uppercase tracking-[0.16em]">
                            Policy Brief
                        </span>
                        <span class="rounded-lg bg-white px-3 py-1 text-xs font-extrabold text-[#071b3f]">
                            PDF
                        </span>
                    </div>

                    <div class="mt-10">
                        <p class="text-xs font-extrabold uppercase tracking-[0.2em] text-slate-200">Edulaw Project</p>
                        <h2 class="mt-4 max-w-xl text-2xl font-extrabold tracking-tight md:text-3xl">
                            Dialektika Emergency of State dan Tujuan Hukum dalam Penetapan PERPU 2/2022 Menjadi Undang-Undang
                        </h2>
                        <p class="mt-5 text-sm font-bold uppercase tracking-[0.18em] text-slate-200">
                            Edulaw Project &middot; 2026
                        </p>
                    </div>
                </div>

                <div class="p-6 sm:p-8 lg:p-10">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="inline-flex rounded-full border border-[#d8e3f8] bg-[#eef4fb] px-3 py-1 text-xs font-extrabold text-[#1f4ed8]">
                            Policy Brief
                        </span>
                        <span class="text-xs font-extrabold uppercase tracking-[0.14em] text-slate-500">
                            2026
                        </span>
                    </div>

                    <h2 class="mt-4 text-2xl font-extrabold tracking-tight text-[#071b3f] md:text-3xl">
                        Dialektika Emergency of State dan Tujuan Hukum dalam Penetapan PERPU 2/2022 Menjadi Undang-Undang
                    </h2>

                    <p class="mt-4 text-sm leading-7 text-slate-600 md:text-base">
                        Kajian mengenai argumentasi kegentingan yang memaksa, tujuan hukum, dan implikasinya terhadap prinsip negara hukum serta perlindungan hak warga negara.
                    </p>

                    <dl class="mt-6 grid gap-3 text-sm sm:grid-cols-2">
                        <div class="rounded-xl border border-[#d8e3f8] bg-[#f8fbff] p-3">
                            <dt class="text-xs font-extrabold uppercase tracking-[0.14em] text-slate-500">Penulis</dt>
                            <dd class="mt-1 font-extrabold text-[#071b3f]">Edulaw Project</dd>
                        </div>
                        <div class="rounded-xl border border-[#d8e3f8] bg-[#f8fbff] p-3">
                            <dt class="text-xs font-extrabold uppercase tracking-[0.14em] text-slate-500">Tahun</dt>
                            <dd class="mt-1 font-extrabold text-[#071b3f]">2026</dd>
                        </div>
                        <div class="rounded-xl border border-[#d8e3f8] bg-[#f8fbff] p-3">
                            <dt class="text-xs font-extrabold uppercase tracking-[0.14em] text-slate-500">Format</dt>
                            <dd class="mt-1 font-extrabold text-[#071b3f]">PDF &middot; 2,4 MB</dd>
                        </div>
                        <div class="rounded-xl border border-[#d8e3f8] bg-[#f8fbff] p-3">
                            <dt class="text-xs font-extrabold uppercase tracking-[0.14em] text-slate-500">Unduhan</dt>
                            <dd class="mt-1 font-extrabold text-[#071b3f]">2.135</dd>
                        </div>
                    </dl>

                    <a href="{{ route('publication.show', ['slug' => \Illuminate\Support\Str::slug('Dialektika Emergency of State dan Tujuan Hukum dalam Penetapan PERPU 2/2022 Menjadi Undang-Undang')]) }}" class="mt-7 inline-flex rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white hover:bg-[#1f4ed8]">
                        Lihat Publikasi
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
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Semua Publikasi</p>
                    <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-[#071b3f] md:text-3xl">
                        Dokumen Pengetahuan
                    </h2>
                </div>

                <p class="hidden text-sm font-extrabold text-slate-500 sm:block">
                    Urutkan: Terbaru
                </p>
            </div>

            <div class="mt-7 grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
                @foreach ($publications as $publication)
                    <article class="group flex h-full flex-col rounded-2xl border border-[#d8e3f8] bg-white p-5 transition hover:-translate-y-0.5 hover:shadow-md">
                        <div class="flex h-32 items-center justify-center rounded-xl bg-gradient-to-br {{ $publication['tone'] }} text-center">
                            <span class="rounded-lg border border-[#d8e3f8] bg-white px-3 py-2 text-xs font-extrabold uppercase tracking-[0.16em] text-[#071b3f]">
                                PDF
                            </span>
                        </div>

                        <div class="mt-5 flex flex-wrap items-center gap-2">
                            <span class="inline-flex rounded-full border px-3 py-1 text-[11px] font-extrabold leading-none {{ $publication['badge'] }}">
                                {{ $publication['type'] }}
                            </span>
                            <span class="text-xs font-extrabold uppercase tracking-[0.14em] text-slate-500">
                                {{ $publication['year'] }}
                            </span>
                        </div>

                        <h3 class="mt-3 text-lg font-extrabold leading-snug text-[#071b3f]">
                            {{ $publication['title'] }}
                        </h3>

                        <p class="mt-3 text-sm font-medium leading-6 text-slate-600">
                            {{ $publication['description'] }}
                        </p>

                        <div class="mt-auto pt-5">
                            <div class="flex items-center justify-between gap-3 border-t border-[#d8e3f8] pt-4">
                                <p class="text-xs font-extrabold uppercase tracking-[0.12em] text-slate-500">
                                    {{ $publication['downloads'] }} unduhan
                                </p>

                                <a href="{{ route('publication.show', ['slug' => \Illuminate\Support\Str::slug($publication['title'])]) }}" class="inline-flex rounded-lg border border-[#d8e3f8] bg-white px-4 py-2 text-xs font-bold text-[#071b3f] hover:border-[#1f4ed8]">
                                    Lihat Publikasi
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>

            <p class="mt-6 text-sm font-extrabold text-slate-500 sm:hidden">
                Urutkan: Terbaru
            </p>
        </div>
    </section>

    <section class="bg-[#f8fbff] py-14 lg:py-16">
        <div class="mx-auto max-w-7xl rounded-3xl bg-[#071b3f] px-6 py-10 text-white md:px-10">
            <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_260px] lg:items-center">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Kolaborasi Riset</p>
                    <h2 class="mt-3 max-w-3xl text-2xl font-extrabold tracking-tight md:text-3xl">
                        Bangun riset hukum yang berdampak bersama Edulaw Project.
                    </h2>
                    <p class="mt-4 max-w-3xl text-sm leading-7 text-slate-200 md:text-base">
                        Edulaw Project terbuka untuk kolaborasi riset, policy brief, diskusi publik, penyusunan modul, dan pengembangan pengetahuan hukum yang setara, edukatif, dan merangkul.
                    </p>
                </div>

                <div class="flex flex-col gap-3 sm:flex-row lg:flex-col">
                    <a href="{{ route('collaboration.index') }}" class="inline-flex justify-center rounded-lg bg-white px-5 py-3 text-sm font-extrabold text-[#071b3f] transition hover:bg-[#d8e3f8]">
                        Ajukan Kolaborasi Riset
                    </a>
                    <a href="{{ route('program.index') }}" class="inline-flex justify-center rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white hover:bg-[#1f4ed8] border border-white/15">
                        Lihat Program
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
