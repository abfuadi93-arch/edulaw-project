@php
    $insights = collect([
        ['category' => 'Insight', 'date' => '12 Mei 2025', 'title' => 'R.A. Kartini: Jejak Perempuan Pencerah Bangsa', 'author' => 'Redaksi Edulaw', 'read' => '3 menit baca', 'cover' => 'from-[#e8f8f5] via-white to-[#eef4fb]'],
        ['category' => 'Opini', 'date' => '12 Mei 2025', 'title' => 'MPR, DPR, dan DPD: Tiga Wajah Perwakilan dalam Demokrasi Konstitusional', 'author' => 'Tim Edulaw Project', 'read' => '4 menit baca', 'cover' => 'from-[#e8eefc] via-white to-[#fff4df]'],
        ['category' => 'Insight', 'date' => '12 Mei 2025', 'title' => 'Hukum di Era Validasi Digital: Masih Relevan atau Kalah Cepat?', 'author' => 'Redaksi Edulaw', 'read' => '4 menit baca', 'cover' => 'from-[#eef4fb] via-white to-[#e8eefc]'],
        ['category' => 'Opini', 'date' => '12 Mei 2025', 'title' => 'Ujian Berat Reformasi Birokrasi di Indonesia', 'author' => 'Tim Edulaw Project', 'read' => '3 menit baca', 'cover' => 'from-[#fff4df] via-white to-[#eef4fb]'],
        ['category' => 'Insight', 'date' => '15 Apr 2025', 'title' => 'Menjaga Marwah Perguruan Tinggi dari Kejahatan Seksual', 'author' => 'Redaksi Edulaw', 'read' => '3 menit baca', 'cover' => 'from-[#fbe8ed] via-white to-[#eef4fb]'],
        ['category' => 'Analisis', 'date' => '10 Apr 2025', 'title' => 'Membaca Putusan MK dalam Ruang Publik Digital', 'author' => 'Tim Edulaw Project', 'read' => '4 menit baca', 'cover' => 'from-[#e8f8f5] via-white to-[#fff4df]'],
        ['category' => 'Insight', 'date' => '28 Mar 2025', 'title' => 'Arah Baru Pendidikan Hukum Klinis', 'author' => 'Redaksi Edulaw', 'read' => '3 menit baca', 'cover' => 'from-[#e8eefc] via-white to-[#f8fbff]'],
        ['category' => 'Opini', 'date' => '18 Mar 2025', 'title' => 'Literasi Hukum untuk Masyarakat yang Rentan', 'author' => 'Tim Edulaw Project', 'read' => '4 menit baca', 'cover' => 'from-[#fff4df] via-white to-[#fbe8ed]'],
    ]);
@endphp

<section id="insight" class="bg-white py-14 lg:py-16">
    <div class="mx-auto max-w-7xl px-6">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Editorial</p>
                <h2 class="mt-2 text-2xl font-extrabold text-[#071b3f] md:text-3xl">Edulaw Insight</h2>
                <p class="mt-2 text-base leading-7 text-slate-600">
                    Esai, opini, dan catatan analitis tentang hukum, konstitusi, demokrasi, serta kebijakan publik.
                </p>
            </div>

            <a href="{{ route('insight.index') }}" class="hidden min-h-12 items-center justify-center rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#1f4ed8] sm:inline-flex">
                Baca Semua Insight
            </a>
        </div>

        <div class="mt-7 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ($insights as $insight)
                <article class="flex h-full flex-col overflow-hidden rounded-2xl border border-[#d8e3f8] bg-white transition hover:-translate-y-0.5 hover:shadow-md">
                    <div class="relative h-40 overflow-hidden bg-gradient-to-br {{ $insight['cover'] }}">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/35 via-transparent to-white/30"></div>
                        <div class="absolute left-4 top-4 flex items-center gap-2">
                            <span class="rounded-full border border-white/60 bg-white/75 px-3 py-1 text-xs font-bold uppercase tracking-wide text-[#071b3f]">
                                {{ $insight['category'] }}
                            </span>
                            <span class="flex h-8 w-8 items-center justify-center rounded-md border border-white/60 bg-white/55 text-xs font-extrabold text-[#1f4ed8]">
                                E
                            </span>
                        </div>
                        <div class="absolute bottom-5 left-4 right-4">
                            <div class="h-1.5 w-20 rounded-full bg-[#1f4ed8]/35"></div>
                            <div class="mt-2 h-1.5 w-32 rounded-full bg-[#071b3f]/20"></div>
                            <p class="mt-3 text-xs font-bold uppercase tracking-[0.16em] text-[#071b3f]/45">Edulaw Insight</p>
                        </div>
                    </div>

                    <div class="flex flex-1 flex-col p-5">
                        <p class="text-xs font-bold uppercase leading-5 tracking-wide text-[#1f4ed8]">
                            {{ $insight['category'] }} · {{ $insight['date'] }}
                        </p>

                        <h3 class="mt-3 line-clamp-3 min-h-[4.75rem] text-base font-bold leading-snug text-[#071b3f]">
                            {{ $insight['title'] }}
                        </h3>

                        <p class="mt-3 text-xs font-semibold leading-5 text-[#64748b]">
                            {{ $insight['author'] }} · {{ $insight['read'] }}
                        </p>

                        <a href="{{ route('insight.index') }}" class="mt-auto inline-flex min-h-10 w-fit items-center justify-center rounded-lg bg-[#071b3f] px-4 py-2.5 text-sm font-bold text-white transition hover:bg-[#1f4ed8]">
                            Baca Insight
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
