@php
    $documents = collect([
        [
            'year' => '2026',
            'title' => 'Dialektika Emergency of State dan Tujuan Hukum Dalam Penetapan PERPU 2/2022 Menjadi Undang-Undang',
            'description' => 'Kajian disusun oleh Edulaw Project bersama mitra kolaborasi.',
        ],
        [
            'year' => '2026',
            'title' => 'Perlindungan Hak Konstitusional Masyarakat Pesisir: Urgensi Harmonisasi Regulasi',
            'description' => 'Policy brief untuk membaca arah perlindungan hak warga.',
        ],
    ]);
@endphp

<section id="publikasi" class="bg-[#f8fbff] py-14 lg:py-16">
    <div class="mx-auto max-w-7xl px-6">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Perpustakaan Digital</p>
                <h2 class="mt-2 text-2xl font-extrabold text-[#071b3f] md:text-3xl">Riset & Publikasi</h2>
                <p class="mt-2 text-base leading-7 text-slate-600">
                    Unduh kajian terbaru, policy brief, dan laporan riset Edulaw Project secara gratis.
                </p>
            </div>

            <a href="{{ route('publication.index') }}" class="hidden min-h-12 items-center justify-center rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#1f4ed8] sm:inline-flex">
                Jelajahi Riset
            </a>
        </div>

        <div class="mt-7 grid items-stretch gap-4 lg:grid-cols-[0.8fr_0.8fr_2fr]">
            <article class="flex h-full min-h-[180px] flex-col rounded-2xl border border-[#d8e3f8] bg-white p-5 transition hover:-translate-y-0.5 hover:shadow-md">
                <p class="text-xs font-bold uppercase tracking-wide text-[#64748b]">Total Unduhan</p>
                <p class="mt-4 text-3xl font-extrabold text-[#071b3f]">12.458</p>
                <p class="mt-auto pt-4 text-sm leading-6 text-slate-600">Akumulasi unduhan publikasi.</p>
            </article>

            <article class="flex h-full min-h-[180px] flex-col rounded-2xl border border-[#d8e3f8] bg-white p-5 transition hover:-translate-y-0.5 hover:shadow-md">
                <p class="text-xs font-bold uppercase tracking-wide text-[#64748b]">Dokumen Tersedia</p>
                <p class="mt-4 text-3xl font-extrabold text-[#071b3f]">248</p>
                <p class="mt-auto pt-4 text-sm leading-6 text-slate-600">Policy brief, riset, dan toolkit.</p>
            </article>

            <article class="flex h-full min-h-[220px] flex-col rounded-2xl border border-[#d8e3f8] bg-white p-5 transition hover:-translate-y-0.5 hover:shadow-md">
                <div class="flex flex-col gap-3 sm:flex-row sm:items-start sm:justify-between">
                    <p class="text-xs font-bold uppercase tracking-wide text-[#64748b]">Terpopuler (30 hari)</p>
                    <a href="{{ route('publication.index') }}" class="inline-flex min-h-10 w-fit items-center justify-center rounded-lg border border-[#d8e3f8] bg-white px-4 py-2.5 text-sm font-bold text-[#071b3f] transition hover:border-[#1f4ed8] hover:text-[#1f4ed8]">
                        Lihat Publikasi
                    </a>
                </div>
                <h3 class="mt-4 max-w-2xl text-xl font-bold leading-tight text-[#071b3f] md:text-2xl">
                    Dialektika Emergency of State dan Tujuan Hukum dalam Penetapan PERPU 2/2022 Menjadi Undang-Undang
                </h3>
                <p class="mt-auto pt-4 text-sm leading-6 text-slate-600">Publikasi dengan unduhan tertinggi.</p>
            </article>
        </div>

        <div class="mt-4 grid gap-4 lg:grid-cols-2">
            @foreach ($documents as $document)
                <article class="flex h-full min-h-[220px] rounded-2xl border border-[#d8e3f8] bg-white p-5 transition hover:-translate-y-0.5 hover:shadow-md">
                    <div class="grid gap-4 sm:grid-cols-[80px_1fr]">
                        <div class="flex h-24 items-center justify-center rounded-lg border border-[#d8e3f8] bg-gradient-to-br from-[#eef4fb] via-white to-[#f7f3ec] text-center sm:h-full sm:min-h-[132px]">
                            <span class="rounded-lg border border-[#d8e3f8] bg-white px-3 py-2 text-xs font-bold uppercase tracking-[0.16em] text-[#071b3f]">
                                PDF
                            </span>
                        </div>

                        <div>
                            <p class="text-xs font-semibold text-[#64748b]">{{ $document['year'] }}</p>
                            <h3 class="mt-1 text-lg font-bold leading-snug text-[#071b3f]">{{ $document['title'] }}</h3>
                            <p class="mt-2 text-sm leading-6 text-slate-600">{{ $document['description'] }}</p>
                            <a href="{{ route('publication.index') }}" class="mt-4 inline-flex min-h-10 items-center justify-center rounded-lg border border-[#d8e3f8] bg-white px-4 py-2.5 text-sm font-bold text-[#071b3f] transition hover:border-[#1f4ed8] hover:text-[#1f4ed8]">
                                Lihat Publikasi
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
