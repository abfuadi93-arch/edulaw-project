@extends('layouts.app')

@section('title', 'Kolaborasi')

@section('content')
    @php
        $stats = [
            ['value' => '8', 'label' => 'Kolaborasi Riset'],
            ['value' => '23', 'label' => 'Narasumber Eksternal'],
            ['value' => '300+', 'label' => 'Partisipan Program'],
        ];

        $workspaces = [
            [
                'title' => 'Program Edukasi',
                'description' => 'Kelas, diskusi, lokakarya, dan ruang belajar hukum publik untuk komunitas, kampus, maupun organisasi.',
                'icon' => 'PE',
            ],
            [
                'title' => 'Riset & Publikasi',
                'description' => 'Kolaborasi policy brief, laporan riset, modul, dan dokumen pengetahuan yang disusun secara terarah.',
                'icon' => 'RP',
            ],
            [
                'title' => 'Diskusi Publik',
                'description' => 'Forum percakapan hukum, konstitusi, demokrasi, dan kebijakan publik dengan format yang mudah diikuti.',
                'icon' => 'DP',
            ],
            [
                'title' => 'Multimedia',
                'description' => 'Dokumentasi kegiatan, serial video, dan konten visual edukatif untuk memperluas dampak literasi hukum.',
                'icon' => 'MM',
            ],
        ];

        $steps = [
            [
                'label' => '01',
                'title' => 'Pemetaan Kebutuhan',
                'description' => 'Kami membaca tujuan, audiens, isu hukum, dan bentuk kolaborasi yang paling sesuai.',
            ],
            [
                'label' => '02',
                'title' => 'Perancangan Program',
                'description' => 'Agenda, keluaran, narasumber, materi, dan format kerja disusun bersama secara ringkas.',
            ],
            [
                'label' => '03',
                'title' => 'Pelaksanaan & Dokumentasi',
                'description' => 'Kolaborasi dijalankan dengan dukungan dokumentasi, catatan pembelajaran, dan tindak lanjut.',
            ],
        ];
    @endphp

    <section class="bg-[#071b3f] text-white">
        <div class="mx-auto max-w-7xl px-6 py-14 lg:py-16">
            <div class="grid gap-10 lg:grid-cols-[minmax(0,1fr)_390px] lg:items-end">
                <div class="max-w-3xl">
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Kolaborasi</p>
                    <h1 class="mt-4 text-4xl font-extrabold tracking-tight md:text-5xl">
                        Kerja Sama Literasi Hukum Publik.
                    </h1>
                    <p class="mt-5 text-sm leading-7 text-slate-200 md:text-base">
                        Ruang kerja bersama untuk program edukasi hukum, riset tematik, publikasi, diskusi publik, pelatihan, dan dokumentasi pengetahuan bersama Edulaw Project.
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
            <div class="max-w-3xl">
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Ruang Kerja</p>
                <h2 class="mt-3 text-2xl font-extrabold tracking-tight text-[#071b3f] md:text-3xl">
                    Kolaborasi yang terarah, edukatif, dan berdampak.
                </h2>
                <p class="mt-4 text-sm leading-7 text-slate-600 md:text-base">
                    Bentuk kerja sama dirancang sesuai kebutuhan komunitas, kampus, organisasi, atau lembaga yang ingin memperkuat literasi hukum dan kebijakan publik.
                </p>
            </div>

            <div class="mt-6 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($workspaces as $workspace)
                    <article class="rounded-2xl border border-[#d8e3f8] bg-white p-5 transition hover:-translate-y-1 hover:shadow-md">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#eef4fb] text-xs font-extrabold text-[#1f4ed8]">
                            {{ $workspace['icon'] }}
                        </div>
                        <h3 class="mt-5 text-lg font-extrabold leading-snug text-[#071b3f]">
                            {{ $workspace['title'] }}
                        </h3>
                        <p class="mt-3 text-sm font-medium leading-6 text-slate-600">
                            {{ $workspace['description'] }}
                        </p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="border-y border-[#d8e3f8] bg-[#f8fbff] py-14 lg:py-16">
        <div class="mx-auto grid max-w-7xl gap-8 px-6 lg:grid-cols-[330px_minmax(0,1fr)]">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Alur Kolaborasi</p>
                <h2 class="mt-3 text-2xl font-extrabold tracking-tight text-[#071b3f] md:text-3xl">
                    Dari gagasan menuju program yang dapat dijalankan.
                </h2>
            </div>

            <div class="grid gap-5 md:grid-cols-3">
                @foreach ($steps as $step)
                    <article class="rounded-2xl border border-[#d8e3f8] bg-white p-5">
                        <span class="inline-flex rounded-full bg-[#eef4fb] px-3 py-1 text-xs font-extrabold text-[#1f4ed8]">
                            {{ $step['label'] }}
                        </span>
                        <h3 class="mt-4 text-lg font-extrabold leading-snug text-[#071b3f]">
                            {{ $step['title'] }}
                        </h3>
                        <p class="mt-3 text-sm font-medium leading-6 text-slate-600">
                            {{ $step['description'] }}
                        </p>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-white py-14 lg:py-16">
        <div class="mx-auto grid max-w-7xl gap-8 px-6 lg:grid-cols-[minmax(0,0.9fr)_minmax(0,1.1fr)]">
            <div class="rounded-3xl border border-[#d8e3f8] bg-[#f8fbff] p-6 sm:p-8">
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Mulai Percakapan</p>
                <h2 class="mt-3 text-2xl font-extrabold tracking-tight text-[#071b3f] md:text-3xl">
                    Diskusikan kebutuhan kerja sama.
                </h2>
                <p class="mt-4 text-sm leading-7 text-slate-600 md:text-base">
                    Ceritakan bentuk kerja sama yang ingin dibangun. Pengelola Edulaw Project akan menindaklanjuti gagasan yang sesuai dengan ruang kerja edukasi hukum, riset, publikasi, diskusi publik, dan multimedia.
                </p>

                <div class="mt-6 rounded-2xl border border-[#d8e3f8] bg-white p-5">
                    <p class="text-sm font-extrabold text-[#071b3f]">Kontak Utama</p>
                    <ul class="mt-3 space-y-2 text-sm leading-6 text-slate-600">
                        <li><span class="font-bold text-[#071b3f]">Email:</span> hello@edulawproject.com</li>
                        <li><span class="font-bold text-[#071b3f]">Lokasi:</span> Jakarta, Indonesia</li>
                    </ul>
                </div>
            </div>

            <form action="#" method="GET" class="rounded-3xl border border-[#d8e3f8] bg-white p-8 shadow-sm">
                <div class="grid gap-5 sm:grid-cols-2">
                    <label class="block">
                        <span class="text-sm font-extrabold text-[#071b3f]">Nama</span>
                        <input type="text" name="name" class="mt-2 h-12 w-full rounded-xl border border-[#d8e3f8] bg-[#f8fbff] px-4 text-sm font-medium text-[#071b3f] outline-none transition focus:border-[#1f4ed8] focus:ring-2 focus:ring-[#1f4ed8]/15">
                    </label>

                    <label class="block">
                        <span class="text-sm font-extrabold text-[#071b3f]">Email</span>
                        <input type="email" name="email" class="mt-2 h-12 w-full rounded-xl border border-[#d8e3f8] bg-[#f8fbff] px-4 text-sm font-medium text-[#071b3f] outline-none transition focus:border-[#1f4ed8] focus:ring-2 focus:ring-[#1f4ed8]/15">
                    </label>

                    <label class="block">
                        <span class="text-sm font-extrabold text-[#071b3f]">Instansi</span>
                        <input type="text" name="organization" class="mt-2 h-12 w-full rounded-xl border border-[#d8e3f8] bg-[#f8fbff] px-4 text-sm font-medium text-[#071b3f] outline-none transition focus:border-[#1f4ed8] focus:ring-2 focus:ring-[#1f4ed8]/15">
                    </label>

                    <label class="block">
                        <span class="text-sm font-extrabold text-[#071b3f]">Ruang Kerja</span>
                        <select name="workspace" class="mt-2 h-12 w-full rounded-xl border border-[#d8e3f8] bg-[#f8fbff] px-4 text-sm font-medium text-[#071b3f] outline-none transition focus:border-[#1f4ed8] focus:ring-2 focus:ring-[#1f4ed8]/15">
                            <option>Program Edukasi</option>
                            <option>Riset & Publikasi</option>
                            <option>Diskusi Publik</option>
                            <option>Multimedia</option>
                        </select>
                    </label>
                </div>

                <label class="mt-5 block">
                    <span class="text-sm font-extrabold text-[#071b3f]">Catatan Kebutuhan</span>
                    <textarea name="message" rows="5" class="mt-2 w-full rounded-xl border border-[#d8e3f8] bg-[#f8fbff] px-4 py-3 text-sm font-medium text-[#071b3f] outline-none transition focus:border-[#1f4ed8] focus:ring-2 focus:ring-[#1f4ed8]/15"></textarea>
                </label>

                <div class="mt-6 flex flex-col gap-3 sm:flex-row">
                    <button type="submit" class="inline-flex justify-center rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white hover:bg-[#1f4ed8]">
                        Ajukan Kerja Sama
                    </button>
                    <a href="{{ route('program.index') }}" class="inline-flex justify-center rounded-lg border border-[#d8e3f8] bg-white px-5 py-3 text-sm font-bold text-[#071b3f] hover:border-[#1f4ed8]">
                        Lihat Program
                    </a>
                </div>
            </form>
        </div>
    </section>

    <section class="bg-[#f8fbff] py-14 lg:py-16">
        <div class="mx-auto max-w-7xl rounded-3xl bg-[#071b3f] px-6 py-10 text-white md:px-10">
            <div class="grid gap-8 lg:grid-cols-[minmax(0,1fr)_250px] lg:items-center">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Kolaborasi</p>
                    <h2 class="mt-3 max-w-3xl text-2xl font-extrabold tracking-tight md:text-3xl">
                        Bangun ruang kerja pengetahuan hukum bersama.
                    </h2>
                    <p class="mt-4 max-w-3xl text-sm leading-7 text-slate-200 md:text-base">
                        Edulaw Project terbuka untuk kolaborasi program, riset tematik, publikasi, diskusi publik, pelatihan, dan dokumentasi visual yang setara, edukatif, dan merangkul.
                    </p>
                </div>

                <a href="{{ route('about.index') }}" class="inline-flex justify-center rounded-lg bg-white px-5 py-3 text-sm font-extrabold text-[#071b3f] transition hover:bg-[#d8e3f8]">
                    Tentang Edulaw
                </a>
            </div>
        </div>
    </section>
@endsection
