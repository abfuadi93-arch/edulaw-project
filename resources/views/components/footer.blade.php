<footer class="border-t border-[#d8e3f8] bg-[#f8fbff]">
    <div class="mx-auto max-w-7xl px-6 py-14 lg:py-16">
        <div class="grid gap-9 md:grid-cols-2 lg:grid-cols-[1.35fr_0.85fr_0.95fr_1fr]">
            <div>
                <a href="{{ route('home') }}" class="inline-flex items-center gap-3">
                    <img
                        src="{{ asset('images/edulaw-logo.webp') }}"
                        alt="Edulaw Project"
                        class="h-9 w-auto"
                    >
                    <span class="text-base font-extrabold text-[#071b3f]">Edulaw Project</span>
                </a>

                <p class="mt-3 max-w-sm text-sm leading-6 text-slate-600">
                    <span class="font-semibold text-[#071b3f]">Equal, Educative, Embrace.</span>
                </p>
                <p class="mt-3 max-w-sm text-sm leading-6 text-slate-600">
                    Ekosistem edukasi hukum, riset, dan literasi publik yang setara, edukatif, dan merangkul.
                </p>
            </div>

            <div>
                <h2 class="text-xs font-bold uppercase tracking-[0.18em] text-[#071b3f]">Navigasi</h2>
                <ul class="mt-4 space-y-2.5">
                    <li><a href="{{ route('home') }}" class="text-sm font-medium leading-6 text-slate-600 transition hover:text-[#1f4ed8]">Beranda</a></li>
                    <li><a href="{{ route('program.index') }}" class="text-sm font-medium leading-6 text-slate-600 transition hover:text-[#1f4ed8]">Program</a></li>
                    <li><a href="{{ route('insight.index') }}" class="text-sm font-medium leading-6 text-slate-600 transition hover:text-[#1f4ed8]">Insight</a></li>
                    <li><a href="{{ route('publication.index') }}" class="text-sm font-medium leading-6 text-slate-600 transition hover:text-[#1f4ed8]">Riset & Publikasi</a></li>
                    <li><a href="{{ route('multimedia.index') }}" class="text-sm font-medium leading-6 text-slate-600 transition hover:text-[#1f4ed8]">Multimedia</a></li>
                    <li><a href="{{ route('about.index') }}" class="text-sm font-medium leading-6 text-slate-600 transition hover:text-[#1f4ed8]">Tentang</a></li>
                </ul>
            </div>

            <div>
                <h2 class="text-xs font-bold uppercase tracking-[0.18em] text-[#071b3f]">Ruang Kerja</h2>
                <ul class="mt-4 space-y-2.5">
                    <li><a href="{{ route('program.index') }}" class="text-sm font-medium leading-6 text-slate-600 transition hover:text-[#1f4ed8]">Program Edukasi</a></li>
                    <li><a href="{{ route('publication.index') }}" class="text-sm font-medium leading-6 text-slate-600 transition hover:text-[#1f4ed8]">Riset & Publikasi</a></li>
                    <li><a href="{{ route('insight.index') }}" class="text-sm font-medium leading-6 text-slate-600 transition hover:text-[#1f4ed8]">Diskusi Publik</a></li>
                    <li><a href="{{ route('collaboration.index') }}" class="text-sm font-medium leading-6 text-slate-600 transition hover:text-[#1f4ed8]">Kolaborasi</a></li>
                </ul>
            </div>

            <div>
                <h2 class="text-xs font-bold uppercase tracking-[0.18em] text-[#071b3f]">Kontak</h2>
                <ul class="mt-4 space-y-2.5">
                    <li class="text-sm leading-6 text-slate-600">
                        <span class="font-bold text-[#071b3f]">Email:</span>
                        <a href="mailto:hello@edulawproject.com" class="text-sm font-medium text-slate-600 transition hover:text-[#1f4ed8]">hello@edulawproject.com</a>
                    </li>
                    <li class="text-sm leading-6 text-slate-600">
                        <span class="font-bold text-[#071b3f]">WhatsApp:</span>
                        <a href="{{ route('collaboration.index') }}" class="text-sm font-medium text-slate-600 transition hover:text-[#1f4ed8]">tersedia melalui halaman kerja sama</a>
                    </li>
                    <li class="text-sm leading-6 text-slate-600">
                        <span class="font-bold text-[#071b3f]">Lokasi:</span>
                        Jakarta, Indonesia
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-8 border-t border-[#d8e3f8] pt-5 text-xs text-slate-500">
            &copy; {{ date('Y') }} Edulaw Project. All rights reserved.
        </div>
    </div>
</footer>
