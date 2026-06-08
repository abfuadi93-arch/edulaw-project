@extends('layouts.app')

@section('title', 'Program Edulaw')

@section('content')
    @php
        $filters = [
            'Rumpun' => ['Discussion', 'Lecture'],
            'Kategori' => ['Program Aktif', 'Portfolio'],
            'Format' => ['Hybrid', 'Online'],
            'Level' => ['Umum', 'Advanced', 'Intermediate'],
        ];

        $portfolio = collect([
            [
                'title' => 'Diskusi Literasi Konstitusi Seri #3',
                'category' => 'Diskusi Literasi Konstitusi',
                'cluster' => 'Discussion',
                'summary' => 'Kebijakan hukum terbuka dalam putusan Mahkamah Konstitusi dan asas retroaktif pada perubahan praktik ketatanegaraan.',
                'points' => [
                    'Membahas konsep kebijakan hukum terbuka dalam putusan MK',
                    'Mengulas asas retroaktif dalam putusan Mahkamah Konstitusi',
                    'Menganalisis hubungan putusan MK, kepastian hukum, dan akibat hukum norma',
                ],
                'duration' => '1 Pertemuan',
                'format' => 'Hybrid',
                'level' => 'Umum',
                'image' => 'images/programs/program-1.jpg',
                'tone' => 'border-teal-200 bg-teal-50/70',
                'badge' => 'border-teal-200 bg-teal-100 text-teal-700',
                'button' => 'bg-teal-600 hover:bg-teal-700',
            ],
            [
                'title' => 'Diskusi Literasi Konstitusi #2',
                'category' => 'Diskusi Literasi Konstitusi',
                'cluster' => 'Discussion',
                'summary' => 'Politik Hukum Yudisial: Sumber Pembangunan Hukum Nasional dan Ragam Persoalan Penyandang Disabilitas.',
                'points' => [
                    'Membahas politik hukum yudisial sebagai sumber pembangunan hukum nasional',
                    'Mengulas peran praktik peradilan dan putusan dalam pembentukan arah hukum',
                    'Menganalisis ragam persoalan penyandang disabilitas dalam pemenuhan hak asasi',
                ],
                'duration' => '1 Pertemuan',
                'format' => 'Hybrid',
                'level' => 'Umum',
                'image' => 'images/programs/program-2.jpg',
                'tone' => 'border-amber-200 bg-amber-50/70',
                'badge' => 'border-amber-200 bg-amber-100 text-amber-700',
                'button' => 'bg-amber-600 hover:bg-amber-700',
            ],
            [
                'title' => 'Diskusi Literasi Konstitusi #1',
                'category' => 'Diskusi Literasi Konstitusi',
                'cluster' => 'Discussion',
                'summary' => 'Perbandingan hukum, disiplin ilmu, metodologi, serta politik hukum kewarganegaraan dalam kajian konstitusi.',
                'points' => [
                    'Membahas perbandingan hukum sebagai disiplin ilmu dan metodologi',
                    'Mengulas politik hukum kewarganegaraan dan perspektif hukum publik',
                    'Menganalisis hubungan status warga negara, hak warga negara, dan kebijakan negara',
                ],
                'duration' => '1 Pertemuan',
                'format' => 'Hybrid',
                'level' => 'Umum',
                'image' => 'images/programs/program-3.jpg',
                'tone' => 'border-sky-200 bg-sky-50/70',
                'badge' => 'border-sky-200 bg-sky-100 text-sky-700',
                'button' => 'bg-sky-700 hover:bg-sky-800',
            ],
            [
                'title' => 'Diskusi Diseminasi Tesis',
                'category' => 'Diskusi Diseminasi Tesis',
                'cluster' => 'Discussion',
                'summary' => 'Rekonseptualisasi ambang batas pengajuan permohonan sengketa perselisihan hasil pemilihan kepala daerah di Mahkamah Konstitusi.',
                'points' => [
                    'Membahas ambang batas pengajuan permohonan sengketa hasil pilkada',
                    'Mengulas peran Mahkamah Konstitusi dalam penyelesaian perselisihan hasil',
                    'Menganalisis hubungan ambang batas permohonan dan akses keadilan elektoral',
                ],
                'duration' => '1 Pertemuan',
                'format' => 'Online',
                'level' => 'Advanced',
                'image' => 'images/programs/program-4.jpg',
                'tone' => 'border-rose-200 bg-rose-50/70',
                'badge' => 'border-rose-200 bg-rose-100 text-rose-700',
                'button' => 'bg-rose-700 hover:bg-rose-800',
            ],
            [
                'title' => 'Diskusi Diseminasi Tesis: Politik Hukum Pengaturan Metode Omnibus',
                'category' => 'Diskusi Diseminasi Tesis',
                'cluster' => 'Discussion',
                'summary' => 'Politik Hukum Pengaturan Metode Omnibus dalam Sistem Perundang-Undangan Indonesia.',
                'points' => [
                    'Membahas politik hukum pengaturan metode omnibus dalam sistem perundang-undangan',
                    'Mengulas kedudukan metode omnibus dalam praktik pembentukan undang-undang',
                    'Menganalisis hubungan metode omnibus, kepastian hukum, dan kualitas legislasi',
                ],
                'duration' => '1 Pertemuan',
                'format' => 'Online',
                'level' => 'Advanced',
                'image' => 'images/programs/program-5.jpg',
                'tone' => 'border-teal-200 bg-teal-50/70',
                'badge' => 'border-teal-200 bg-teal-100 text-teal-700',
                'button' => 'bg-teal-600 hover:bg-teal-700',
            ],
            [
                'title' => 'Diskusi Diseminasi Tesis: EU Packaging Waste Law',
                'category' => 'Diskusi Diseminasi Tesis',
                'cluster' => 'Discussion',
                'summary' => 'Pembelajaran dari hukum limbah kemasan Uni Eropa bagi negara berkembang, dengan Indonesia sebagai contoh kajian.',
                'points' => [
                    'Membahas pembelajaran hukum limbah kemasan Uni Eropa',
                    'Mengulas relevansi kebijakan lingkungan Uni Eropa bagi konteks Indonesia',
                    'Mendiskusikan hubungan tata hukum lingkungan, tata kelola limbah, dan pembangunan berkelanjutan',
                ],
                'duration' => '1 Pertemuan',
                'format' => 'Online',
                'level' => 'Advanced',
                'image' => 'images/programs/program-6.jpg',
                'tone' => 'border-amber-200 bg-amber-50/70',
                'badge' => 'border-amber-200 bg-amber-100 text-amber-700',
                'button' => 'bg-amber-600 hover:bg-amber-700',
            ],
            [
                'title' => 'Diskusi Respons Isu',
                'category' => 'Diskusi Respons Isu',
                'cluster' => 'Discussion',
                'summary' => 'Membaca dialog konstitusional batas usia calon presiden dan calon wakil presiden melalui analisis Putusan MK terkait Pasal 169 UU Pemilu.',
                'points' => [
                    'Membahas isu batas usia capres-cawapres dalam perspektif hukum pemilu',
                    'Mengulas Putusan Mahkamah Konstitusi terkait Pasal 169 UU Pemilu',
                    'Membaca konsep dialog konstitusional dalam praktik peradilan konstitusi',
                ],
                'duration' => '1 Pertemuan',
                'format' => 'Online',
                'level' => 'Intermediate',
                'image' => 'images/programs/program-7.jpg',
                'tone' => 'border-sky-200 bg-sky-50/70',
                'badge' => 'border-sky-200 bg-sky-100 text-sky-700',
                'button' => 'bg-sky-700 hover:bg-sky-800',
            ],
            [
                'title' => 'Diskusi Diseminasi Disertasi',
                'category' => 'Diskusi Diseminasi Disertasi',
                'cluster' => 'Discussion',
                'summary' => 'Penafsiran hak konstitusional dalam perkara pengujian undang-undang dan penerapannya dalam putusan Mahkamah Konstitusi.',
                'points' => [
                    'Membahas penafsiran hak konstitusional dalam perkara pengujian undang-undang',
                    'Mengulas konstruksi argumentasi konstitusional dalam putusan Mahkamah Konstitusi',
                    'Mendiseminasikan gagasan disertasi dalam forum akademik terbuka',
                ],
                'duration' => '1 Pertemuan',
                'format' => 'Online',
                'level' => 'Advanced',
                'image' => 'images/programs/program-8.jpg',
                'tone' => 'border-rose-200 bg-rose-50/70',
                'badge' => 'border-rose-200 bg-rose-100 text-rose-700',
                'button' => 'bg-rose-700 hover:bg-rose-800',
            ],
            [
                'title' => 'Inspiring Lecture #1',
                'category' => 'Inspiring Lecture',
                'cluster' => 'Lecture',
                'summary' => 'Dinamika perubahan konstitusi di berbagai negara sebagai bagian dari soft launching Edulaw Project.',
                'points' => [
                    'Membahas dinamika perubahan konstitusi dalam perspektif hukum tata negara perbandingan',
                    'Mengulas perkembangan gagasan konstitusionalisme di berbagai negara',
                    'Menghadirkan narasumber dengan kepakaran bidang hukum konstitusi',
                ],
                'duration' => '1 Pertemuan',
                'format' => 'Online',
                'level' => 'Umum',
                'image' => 'images/programs/program-9.jpg',
                'tone' => 'border-teal-200 bg-teal-50/70',
                'badge' => 'border-teal-200 bg-teal-100 text-teal-700',
                'button' => 'bg-teal-600 hover:bg-teal-700',
            ],
            [
                'title' => 'Ngabuburit Virtual',
                'category' => 'Lainnya',
                'cluster' => 'Discussion',
                'summary' => 'Warga Alien: Disabilitas Memandang Hukum, sebuah forum ringan untuk membaca pengalaman kelompok rentan dalam akses hukum.',
                'points' => [
                    'Membahas perspektif disabilitas dalam memandang hukum dan keadilan',
                    'Mengulas hubungan antara hukum, aksesibilitas, dan perlindungan hak warga negara',
                    'Mendorong pemahaman mengenai pengalaman kewargaan kelompok rentan',
                ],
                'duration' => '1 Pertemuan',
                'format' => 'Online',
                'level' => 'Umum',
                'image' => 'images/programs/program-10.jpg',
                'tone' => 'border-amber-200 bg-amber-50/70',
                'badge' => 'border-amber-200 bg-amber-100 text-amber-700',
                'button' => 'bg-amber-600 hover:bg-amber-700',
            ],
        ]);
    @endphp

    <section class="border-b border-[#d8e3f8] bg-white">
        <div class="mx-auto max-w-7xl px-6 py-14 lg:py-16">
            <div class="grid gap-10 lg:grid-cols-[minmax(0,1fr)_310px] lg:items-end">
                <div class="max-w-3xl">
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Program</p>
                    <h1 class="mt-3 text-4xl font-extrabold tracking-tight text-[#071b3f] md:text-5xl">
                        Program Edulaw
                    </h1>
                    <p class="mt-5 text-sm leading-7 text-slate-600 md:text-base">
                        Ruang belajar, diskusi, riset, dan kolaborasi untuk memperkuat literasi hukum publik.
                    </p>
                </div>

                <dl class="grid grid-cols-2 gap-4 border-t border-[#d8e3f8] pt-6 lg:border-l lg:border-t-0 lg:pl-8 lg:pt-0">
                    <div>
                        <dt class="text-xs font-bold uppercase tracking-[0.18em] text-slate-500">Program Aktif</dt>
                        <dd class="mt-2 text-4xl font-extrabold leading-none text-[#071b3f]">0</dd>
                    </div>
                    <div>
                        <dt class="text-xs font-bold uppercase tracking-[0.18em] text-slate-500">Portfolio</dt>
                        <dd class="mt-2 text-4xl font-extrabold leading-none text-[#071b3f]">10</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    <section class="bg-[#f8fbff] py-14 lg:py-16">
        <div class="mx-auto grid max-w-7xl gap-8 px-6 lg:grid-cols-[220px_minmax(0,1fr)]">
            <aside class="lg:sticky lg:top-24 lg:self-start">
                <div class="rounded-2xl border border-[#d8e3f8] bg-white p-5 shadow-sm">
                    <div class="flex items-center justify-between gap-4">
                        <h2 class="text-xs font-extrabold uppercase tracking-[0.18em] text-[#071b3f]">
                            Filter Program
                        </h2>
                        <button type="button" class="text-xs font-bold text-slate-400 transition hover:text-[#1f4ed8]">
                            Reset
                        </button>
                    </div>

                    <div class="mt-5 space-y-5">
                        @foreach ($filters as $label => $items)
                            <fieldset>
                                <legend class="text-xs font-extrabold text-[#071b3f]">{{ $label }}</legend>
                                <div class="mt-2 space-y-2">
                                    @foreach ($items as $item)
                                        <label class="flex items-center gap-2 text-xs font-semibold text-slate-600">
                                            <input
                                                type="checkbox"
                                                class="h-3.5 w-3.5 rounded border-[#d8e3f8] text-[#1f4ed8] focus:ring-[#1f4ed8]"
                                            >
                                            <span>{{ $item }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </fieldset>
                        @endforeach
                    </div>
                </div>
            </aside>

            <div class="min-w-0 space-y-9">
                <section>
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Program Aktif</p>
                        <p class="mt-2 max-w-3xl text-sm leading-7 text-slate-600 md:text-base">
                            Inisiatif pembelajaran, riset, publikasi, dan kolaborasi pelatihan yang sedang berjalan atau telah terjadwal.
                        </p>
                    </div>

                    <div class="mt-4 rounded-2xl border border-dashed border-[#d8e3f8] bg-white p-6">
                        <h2 class="text-lg font-extrabold text-[#071b3f]">Belum ada program aktif</h2>
                        <p class="mt-2 text-sm leading-7 text-slate-600 md:text-base">
                            Program dengan periode berjalan atau terjadwal akan tampil di sini.
                        </p>
                    </div>
                </section>

                <section class="border-t border-[#d8e3f8] pt-8">
                    <div>
                        <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Portfolio Edulaw</p>
                        <p class="mt-2 max-w-3xl text-sm leading-7 text-slate-600 md:text-base">
                            Dokumentasi program, kolaborasi, dan pengembangan komunitas yang telah dijalankan Edulaw Project.
                        </p>
                    </div>

                    <div class="mt-5 space-y-5">
                        @foreach ($portfolio as $program)
                            @php
                                $hasPoster = file_exists(public_path($program['image']));
                            @endphp

                            <article class="grid gap-4 rounded-2xl border p-4 transition hover:-translate-y-0.5 hover:shadow-sm md:grid-cols-[150px_minmax(0,1fr)] xl:grid-cols-[150px_minmax(0,1fr)_145px] {{ $program['tone'] }}">
                                <div class="overflow-hidden rounded-xl border border-white/70 bg-white">
                                    @if ($hasPoster)
                                        <img
                                            src="{{ asset($program['image']) }}"
                                            alt="{{ $program['title'] }}"
                                            class="aspect-[4/3] w-full object-cover"
                                        >
                                    @else
                                        <div class="flex aspect-[4/3] w-full items-center justify-center bg-gradient-to-br from-white via-[#eef4fb] to-[#f7f3ec] p-4 text-center">
                                            <span class="text-xs font-extrabold uppercase tracking-[0.18em] text-slate-400">
                                                Edulaw Program
                                            </span>
                                        </div>
                                    @endif
                                </div>

                                <div class="min-w-0">
                                    <div class="flex flex-wrap items-center gap-2">
                                        <span class="inline-flex rounded-full border px-3 py-1 text-[11px] font-bold leading-none {{ $program['badge'] }}">
                                            {{ $program['category'] }}
                                        </span>
                                        <span class="inline-flex rounded-full border border-[#d8e3f8] bg-white/80 px-3 py-1 text-[11px] font-bold leading-none text-slate-500">
                                            {{ $program['cluster'] }}
                                        </span>
                                    </div>

                                    <h2 class="mt-3 line-clamp-2 text-lg font-extrabold leading-snug text-[#071b3f] sm:text-xl">
                                        {{ $program['title'] }}
                                    </h2>

                                    <p class="mt-2 line-clamp-2 text-sm font-medium leading-7 text-slate-600 md:text-base">
                                        {{ $program['summary'] }}
                                    </p>

                                    <p class="mt-4 text-xs font-extrabold uppercase tracking-[0.16em] text-slate-500">
                                        Yang Dipelajari
                                    </p>

                                    <ul class="mt-2 space-y-1.5 text-sm leading-6 text-slate-600">
                                        @foreach ($program['points'] as $point)
                                            <li class="flex gap-2">
                                                <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-[#1f4ed8]"></span>
                                                <span>{{ $point }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="flex flex-col justify-between gap-4 rounded-xl border border-white/70 bg-white/65 p-4 xl:items-start">
                                    <dl class="space-y-2 text-xs font-extrabold leading-5 text-[#071b3f]">
                                        <div>
                                            <dt class="inline text-slate-500">Durasi · </dt>
                                            <dd class="inline">{{ $program['duration'] }}</dd>
                                        </div>
                                        <div>
                                            <dt class="inline text-slate-500">Format · </dt>
                                            <dd class="inline">{{ $program['format'] }}</dd>
                                        </div>
                                        <div>
                                            <dt class="inline text-slate-500">Level · </dt>
                                            <dd class="inline">{{ $program['level'] }}</dd>
                                        </div>
                                    </dl>

                                    <a href="{{ route('program.show', ['slug' => \Illuminate\Support\Str::slug($program['title'])]) }}" class="inline-flex items-center justify-center rounded-lg bg-[#071b3f] px-4 py-2 text-xs font-bold text-white hover:bg-[#1f4ed8]">
                                        Lihat Arsip
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
