@props(['audiences' => []])

@php
    $audiences = collect($audiences)->values();

    if ($audiences->isEmpty()) {
        $audiences = collect([
            [
                'title' => 'Mahasiswa Hukum',
                'description' => 'Materi pendamping kuliah dan pengembangan kapasitas akademik.',
            ],
            [
                'title' => 'Profesional',
                'description' => 'Pembaruan isu hukum, kebijakan, dan penguatan keahlian.',
            ],
            [
                'title' => 'Masyarakat',
                'description' => 'Pengetahuan hukum praktis dengan bahasa yang mudah dipahami.',
            ],
            [
                'title' => 'Pembuat Kebijakan',
                'description' => 'Riset dan analisis untuk mendukung perumusan kebijakan.',
            ],
        ]);
    }
@endphp

<section id="audiens" class="bg-white py-14 lg:py-16">
    <div class="mx-auto max-w-7xl px-6">
        <div class="grid gap-6 lg:grid-cols-[0.85fr_1.15fr] lg:items-start">
            <div>
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Audiens Edulaw</p>
                <h2 class="mt-2 text-2xl font-extrabold text-[#071b3f] md:text-3xl">
                    Siapa yang Kami Layani
                </h2>
                <p class="mt-3 max-w-xl text-base leading-7 text-slate-600">
                    Edulaw Project menyusun pengetahuan hukum untuk pembaca dengan kebutuhan yang berbeda, dari ruang akademik sampai percakapan publik.
                </p>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                @foreach ($audiences as $audience)
                    <article class="min-h-[108px] rounded-lg border border-[#d8e3f8] bg-[#f8fbff] p-5">
                        <div class="h-1.5 w-10 rounded-full bg-[#f59e0b]"></div>
                        <h3 class="mt-4 text-sm font-bold text-[#071b3f]">
                            {{ $audience['title'] }}
                        </h3>
                        <p class="mt-2 text-xs leading-5 text-slate-600">
                            {{ $audience['description'] }}
                        </p>
                    </article>
                @endforeach
            </div>
        </div>
    </div>
</section>
