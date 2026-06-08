@props(['slides' => []])

@php
    $slides = collect($slides)->map(fn ($slide) => [
        'type' => $slide['type'] ?? 'Hero',
        'title' => $slide['title'] ?? 'Ekosistem Edukasi Hukum, Riset, dan Literasi Publik',
        'subtitle' => $slide['subtitle'] ?? 'Menghadirkan pengetahuan hukum yang kredibel, mudah dipahami, dan dapat diakses oleh semua.',
        'image' => $slide['image'] ?? asset('images/hero/hero-1.jpg'),
        'button_text' => $slide['button_text'] ?? 'Lihat Program',
        'button_url' => $slide['button_url'] ?? route('program.index'),
    ])->values();

    if ($slides->isEmpty()) {
        $slides = collect([
            [
                'type' => 'Hero',
                'title' => 'Ekosistem Edukasi Hukum, Riset, dan Literasi Publik',
                'subtitle' => 'Menghadirkan pengetahuan hukum yang kredibel, mudah dipahami, dan dapat diakses oleh semua.',
                'image' => asset('images/hero/hero-1.jpg'),
                'button_text' => 'Lihat Program',
                'button_url' => route('program.index'),
            ],
        ]);
    }

    $audiences = [
        ['tone' => 'bg-[#0e5369] border-[#2f7182]', 'icon' => 'M', 'title' => 'Mahasiswa Hukum', 'description' => 'Materi pendamping kuliah dan pengembangan kapasitas akademik.'],
        ['tone' => 'bg-[#36404f] border-[#68707c]', 'icon' => 'P', 'title' => 'Profesional', 'description' => 'Pembaruan isu hukum, kebijakan, dan penguatan keahlian.'],
        ['tone' => 'bg-[#102f7f] border-[#3150a0]', 'icon' => 'W', 'title' => 'Masyarakat', 'description' => 'Pengetahuan hukum praktis dengan bahasa yang mudah dipahami.'],
        ['tone' => 'bg-[#3d254e] border-[#69436f]', 'icon' => 'K', 'title' => 'Pembuat Kebijakan', 'description' => 'Riset dan analisis untuk mendukung perumusan kebijakan.'],
    ];
@endphp

<section
    class="overflow-hidden bg-[#071b3f] text-white"
    x-data="heroSlider(@js($slides))"
    @mouseenter="stop()"
    @mouseleave="start()"
>
    <div class="mx-auto max-w-7xl px-6 py-14 lg:py-16">
        <div class="grid gap-10 lg:grid-cols-[0.95fr_1.05fr] lg:items-center">
            <div>
                <p class="inline-flex rounded-full border border-white/15 bg-[#4d375d] px-4 py-2 text-xs font-bold uppercase tracking-[0.22em] text-white/85">
                    Equal, Educative, Embrace
                </p>

                <h1 class="mt-6 max-w-2xl text-[42px] font-extrabold leading-[1.08] text-white md:text-[56px] lg:text-[60px]">
                    Ekosistem Edukasi Hukum, Riset, dan Literasi Publik
                </h1>

                <p class="mt-5 max-w-xl text-base leading-7 text-white/78">
                    Menghadirkan pengetahuan hukum yang kredibel, mudah dipahami, dan dapat diakses oleh semua.
                </p>

                <div class="mt-8 flex flex-wrap gap-3 sm:gap-4">
                    <a href="{{ route('program.index') }}" class="inline-flex min-h-12 items-center justify-center rounded-lg border border-white bg-white px-5 py-3 text-sm font-bold text-[#071b3f] transition hover:border-[#bfdbfe] hover:bg-[#eef4fb]">
                        Lihat Program
                    </a>
                    <a href="{{ route('insight.index') }}" class="inline-flex min-h-12 items-center justify-center rounded-lg border border-white/20 bg-white/10 px-5 py-3 text-sm font-bold text-white transition hover:border-white/35 hover:bg-white/15">
                        Baca Insight
                    </a>
                    <a href="{{ route('publication.index') }}" class="inline-flex min-h-12 items-center justify-center rounded-lg border border-white/20 bg-white/10 px-5 py-3 text-sm font-bold text-white transition hover:border-white/35 hover:bg-white/15">
                        Jelajahi Pusat Riset
                    </a>
                </div>
            </div>

            <div class="lg:pt-4">
                <div class="rounded-2xl border border-white/20 bg-white/10 p-2.5 shadow-2xl shadow-black/20">
                    <div class="relative h-[300px] overflow-hidden rounded-xl bg-[#d8e3f8] md:h-[360px] lg:h-[390px]">
                        @foreach ($slides as $index => $slide)
                            <img
                                src="{{ $slide['image'] }}"
                                alt="{{ $slide['title'] }}"
                                class="absolute inset-0 h-full w-full object-cover"
                                x-show="active === {{ $index }}"
                                x-transition.opacity.duration.500ms
                                @if ($index > 0) x-cloak @endif
                            >
                        @endforeach
                        <div class="absolute inset-0 bg-gradient-to-t from-[#071b3f]/25 via-transparent to-white/5"></div>
                    </div>
                </div>

                @if ($slides->count() > 1)
                    <div class="mt-4 hidden items-center justify-end gap-2.5 sm:flex">
                        @foreach ($slides as $index => $slide)
                            <button
                                type="button"
                                class="h-2.5 w-2.5 rounded-full border border-white/30 bg-white/45 shadow-sm transition"
                                :class="{ 'w-7 border-white/60 bg-white': active === {{ $index }} }"
                                aria-label="Tampilkan slide {{ $index + 1 }}"
                                @click="go({{ $index }})"
                            ></button>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <div class="mt-14 border-t border-white/10 pt-8 lg:mt-16">
            <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#a7f3d0]">Siapa yang Kami Layani</p>

            <div class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($audiences as $audience)
                    <article class="min-h-[108px] rounded-xl border p-[18px] shadow-sm shadow-black/10 {{ $audience['tone'] }}">
                        <div class="flex gap-4">
                            <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-md bg-white/15 text-xs font-bold text-white/80">
                                {{ $audience['icon'] }}
                            </span>
                            <div>
                                <h2 class="text-sm font-bold text-white">{{ $audience['title'] }}</h2>
                                <p class="mt-2 text-xs leading-5 text-white/75">{{ $audience['description'] }}</p>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
