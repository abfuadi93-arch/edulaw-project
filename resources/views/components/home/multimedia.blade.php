@php
    $items = collect([
        [
            'label' => 'Video Pendek',
            'title' => 'Reels / Short Terbaru',
            'description' => 'Potongan edukasi hukum singkat untuk istilah, isu publik, dan cuplikan kegiatan.',
            'action' => 'Lihat Short',
            'cover' => 'from-[#071b3f] via-[#1f4ed8] to-[#7dd3fc]',
        ],
        [
            'label' => 'YouTube Series',
            'title' => 'Serial YouTube',
            'description' => 'Serial diskusi bersama akademisi, praktisi, peneliti, dan komunitas.',
            'action' => 'Lihat Serial',
            'cover' => 'from-[#4d375d] via-[#1f4ed8] to-[#fbe8ed]',
        ],
        [
            'label' => 'Dokumentasi',
            'title' => 'Galeri Kegiatan',
            'description' => 'Dokumentasi kegiatan, serial diskusi, dan potongan edukasi hukum Edulaw Project.',
            'action' => 'Lihat Galeri',
            'cover' => 'from-[#0e5369] via-[#2f7182] to-[#c9fff3]',
        ],
    ]);
@endphp

<section id="multimedia" class="bg-[#f8fbff] py-14 lg:py-16">
    <div class="mx-auto max-w-7xl px-6">
        <div class="text-center">
            <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Multimedia</p>
            <h2 class="mt-2 text-2xl font-extrabold text-[#071b3f] md:text-3xl">Dokumentasi Visual Edulaw</h2>
            <p class="mx-auto mt-2 max-w-2xl text-base leading-7 text-slate-600">
                Dokumentasi kegiatan, serial diskusi, dan potongan edukasi hukum Edulaw Project.
            </p>
        </div>

        <div class="mt-7 grid gap-4 lg:grid-cols-3">
            @foreach ($items as $item)
                <article class="flex h-full flex-col rounded-2xl border border-[#d8e3f8] bg-white p-5 transition hover:-translate-y-0.5 hover:shadow-md">
                    <div class="relative aspect-video overflow-hidden rounded-xl border border-white/20 bg-gradient-to-br {{ $item['cover'] }}">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#071b3f]/35 via-[#071b3f]/5 to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full border border-white/35 bg-white/20 shadow-lg shadow-[#071b3f]/20">
                                <svg class="ml-0.5 h-6 w-6 text-white" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                        <span class="absolute left-4 top-4 rounded-full bg-white/90 px-3 py-1 text-xs font-bold uppercase tracking-wide text-[#071b3f] shadow-sm">
                            {{ $item['label'] }}
                        </span>
                    </div>

                    <h3 class="mt-5 text-lg font-extrabold text-[#071b3f]">{{ $item['title'] }}</h3>
                    <p class="mt-2 min-h-12 text-sm leading-6 text-slate-600 md:leading-7">{{ $item['description'] }}</p>

                    <a href="{{ route('multimedia.index') }}" class="mt-5 inline-flex min-h-11 w-fit items-center justify-center rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#1f4ed8]">
                        {{ $item['action'] }}
                    </a>
                </article>
            @endforeach
        </div>
    </div>
</section>
