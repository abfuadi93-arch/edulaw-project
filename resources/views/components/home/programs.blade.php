@php
    $programs = collect([
        [
            'tone' => 'bg-[#eefdf9] border-[#a8e2d7]',
            'badge' => 'bg-[#c9fff3] text-[#0f766e]',
            'number' => '01',
            'category' => 'Diskusi Literasi Konstitusi',
            'title' => 'Politik Hukum Yudisial: Sumber Pembangunan Hukum Nasional dan Ragam Persoalan Penyandang Disabilitas',
            'learning_points' => [
                'Politik hukum yudisial dalam putusan pengadilan',
                'Peran putusan MK dalam pembangunan hukum nasional',
                'Isu hak penyandang disabilitas dalam kerangka konstitusi',
            ],
            'meta' => 'Durasi: 1 Pertemuan · Format: Hybrid · Level: Umum',
        ],
        [
            'tone' => 'bg-[#fffaf0] border-[#f3d99b]',
            'badge' => 'bg-[#fff0c9] text-[#b7791f]',
            'number' => '02',
            'category' => 'Diskusi Diseminasi Tesis',
            'title' => 'Politik Hukum Pengaturan Metode Omnibus dalam Sistem Perundang-Undangan Indonesia',
            'learning_points' => [
                'Konsep metode omnibus dalam pembentukan undang-undang',
                'Politik hukum penyederhanaan regulasi',
                'Problematika harmonisasi dan partisipasi publik',
            ],
            'meta' => 'Durasi: 1 Pertemuan · Format: Online · Level: Advanced',
        ],
    ]);
@endphp

<section id="program" class="bg-white py-14 lg:py-16">
    <div class="mx-auto max-w-7xl px-6">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Program</p>
                <h2 class="mt-2 text-2xl font-extrabold text-[#071b3f] md:text-3xl">Program Edulaw</h2>
                <p class="mt-2 text-base leading-7 text-slate-600">Pilih ruang belajar yang sesuai dengan kebutuhanmu.</p>
            </div>

            <a href="{{ route('program.index') }}" class="hidden min-h-12 items-center justify-center rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#1f4ed8] sm:inline-flex">
                Lihat Semua Program
            </a>
        </div>

        <div class="mt-7 grid items-stretch gap-5 lg:grid-cols-2">
            @foreach ($programs as $program)
                <article class="flex h-full rounded-2xl border border-[#d8e3f8] bg-white p-5 transition hover:-translate-y-0.5 hover:shadow-md sm:p-6">
                    <div class="flex w-full items-start gap-4">
                        <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-md text-sm font-semibold {{ $program['badge'] }}">
                            {{ $program['number'] }}
                        </span>

                        <div class="flex min-w-0 flex-1 flex-col">
                            <span class="inline-flex w-fit rounded-full px-3 py-1 text-xs font-semibold uppercase leading-5 {{ $program['badge'] }}">
                                {{ $program['category'] }}
                            </span>

                            <h3 class="mt-4 text-lg font-bold leading-snug text-[#071b3f] md:text-xl">
                                {{ $program['title'] }}
                            </h3>

                            <p class="mt-5 text-xs font-bold uppercase tracking-[0.16em] text-slate-500">
                                Yang Dipelajari
                            </p>

                            <ul class="mt-3 space-y-3 text-sm leading-6 text-slate-700">
                                @foreach ($program['learning_points'] as $point)
                                    <li class="flex gap-3">
                                        <span class="mt-0.5 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-[#eef4fb] text-[#1f4ed8]">
                                            <svg class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                                                <path d="M5 10.5 8.25 14 15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <span>{{ $point }}</span>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="mt-auto pt-6">
                                <p class="border-t border-[#d8e3f8] pt-4 text-sm font-semibold leading-6 text-[#64748b]">
                                    {{ $program['meta'] }}
                                </p>

                                <a href="{{ route('program.index') }}" class="mt-5 inline-flex min-h-11 items-center justify-center rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#1f4ed8]">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
