@extends('layouts.app')

@section('title', 'Program Edulaw Project')

@section('content')

{{-- HERO --}}
<section class="border-b border-[#d8e3f8] bg-[#f8fbff]">
    <div class="mx-auto max-w-7xl px-6 py-20">

        <div class="max-w-3xl">

            <div class="mb-6 text-sm text-slate-500">
                Beranda / Program
            </div>

            <h1 class="text-5xl font-bold tracking-tight text-[#071b3f]">
                Program Edulaw Project
            </h1>

            <p class="mt-6 text-lg leading-8 text-slate-600">
                Program edukasi, diskusi, pelatihan, dan pengembangan kapasitas
                yang dirancang untuk memperkuat literasi hukum, konstitusi,
                dan kebijakan publik.
            </p>

        </div>

    </div>
</section>

{{-- PROGRAM AKTIF --}}
<section class="py-20">
    <div class="mx-auto max-w-7xl px-6">

        <div class="mb-12">

            <span class="text-sm font-semibold uppercase tracking-wide text-[#1f4ed8]">
                Program Aktif
            </span>

            <h2 class="mt-3 text-3xl font-bold text-[#071b3f]">
                Sedang Berjalan
            </h2>

        </div>

        <div class="grid gap-8 lg:grid-cols-3">

            @for ($i = 1; $i <= 3; $i++)

                <article class="overflow-hidden rounded-3xl border border-[#d8e3f8] bg-white transition hover:-translate-y-1 hover:shadow-lg">

                    <div class="aspect-[16/10] bg-slate-100"></div>

                    <div class="p-6">

                        <span class="inline-flex rounded-full bg-green-100 px-3 py-1 text-xs font-semibold text-green-700">
                            Aktif
                        </span>

                        <div class="mt-4 text-sm text-slate-500">
                            Juli 2026
                        </div>

                        <h3 class="mt-2 text-xl font-semibold text-[#071b3f]">
                            Diskusi Literasi Konstitusi
                        </h3>

                        <p class="mt-4 text-sm leading-7 text-slate-600">
                            Forum diskusi berkala yang membahas isu konstitusi,
                            hukum tata negara, dan perkembangan praktik ketatanegaraan.
                        </p>

                        <a href="#"
                            class="mt-6 inline-flex text-sm font-semibold text-[#1f4ed8]">
                            Lihat Detail →
                        </a>

                    </div>

                </article>

            @endfor

        </div>

    </div>
</section>

{{-- PORTOFOLIO PROGRAM --}}
<section class="bg-[#f8fbff] py-20">

    <div class="mx-auto max-w-7xl px-6">

        <div class="mb-12">

            <span class="text-sm font-semibold uppercase tracking-wide text-[#1f4ed8]">
                Portofolio
            </span>

            <h2 class="mt-3 text-3xl font-bold text-[#071b3f]">
                Ragam Program Edulaw
            </h2>

        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">

            @foreach([
                'Diskusi Literasi Konstitusi',
                'Sekolah Legislasi',
                'Pelatihan dan Workshop',
                'Webinar Hukum',
                'Kuliah Umum',
                'Forum Diskusi Publik'
            ] as $program)

                <div class="rounded-3xl border border-[#d8e3f8] bg-white p-8">

                    <h3 class="text-xl font-semibold text-[#071b3f]">
                        {{ $program }}
                    </h3>

                    <p class="mt-4 text-sm leading-7 text-slate-600">
                        Program pengembangan kapasitas dan literasi hukum yang
                        dirancang untuk berbagai kalangan.
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>

{{-- METODE PEMBELAJARAN --}}
<section class="py-20">

    <div class="mx-auto max-w-7xl px-6">

        <div class="mb-12 text-center">

            <span class="text-sm font-semibold uppercase tracking-wide text-[#1f4ed8]">
                Pendekatan
            </span>

            <h2 class="mt-3 text-3xl font-bold text-[#071b3f]">
                Metode Pembelajaran
            </h2>

        </div>

        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">

            <div class="rounded-3xl border border-[#d8e3f8] p-8">
                <h3 class="font-semibold text-[#071b3f]">Diskusi</h3>
                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Forum interaktif untuk memperdalam pemahaman isu hukum dan konstitusi.
                </p>
            </div>

            <div class="rounded-3xl border border-[#d8e3f8] p-8">
                <h3 class="font-semibold text-[#071b3f]">Pelatihan</h3>
                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Penguatan keterampilan praktis melalui pelatihan dan workshop.
                </p>
            </div>

            <div class="rounded-3xl border border-[#d8e3f8] p-8">
                <h3 class="font-semibold text-[#071b3f]">Riset</h3>
                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Produksi pengetahuan berbasis penelitian dan kajian hukum.
                </p>
            </div>

            <div class="rounded-3xl border border-[#d8e3f8] p-8">
                <h3 class="font-semibold text-[#071b3f]">Publikasi</h3>
                <p class="mt-3 text-sm leading-7 text-slate-600">
                    Diseminasi gagasan melalui artikel, policy brief, dan laporan kajian.
                </p>
            </div>

        </div>

    </div>

</section>

{{-- CTA --}}
<section class="bg-[#071b3f] py-20">

    <div class="mx-auto max-w-4xl px-6 text-center">

        <h2 class="text-4xl font-bold text-white">
            Mari Mengembangkan Literasi Hukum yang Lebih Inklusif
        </h2>

        <p class="mx-auto mt-6 max-w-2xl text-slate-300">
            Edulaw Project terbuka untuk kolaborasi program, pelatihan,
            diskusi, riset, dan kemitraan strategis.
        </p>

        <div class="mt-8 flex flex-wrap justify-center gap-4">

            <a href="/kolaborasi"
                class="rounded-xl bg-white px-6 py-3 font-semibold text-[#071b3f]">
                Ajukan Kolaborasi
            </a>

            <a href="#"
                class="rounded-xl border border-white px-6 py-3 font-semibold text-white">
                Hubungi Kami
            </a>

        </div>

    </div>

</section>

@endsection