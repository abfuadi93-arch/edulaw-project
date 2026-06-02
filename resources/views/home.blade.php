<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edulaw Project</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#f7f3ec] font-sans text-[#171717] antialiased">

    {{-- NAVBAR --}}
    <header class="fixed inset-x-0 top-0 z-50 border-b border-black/10 bg-[#f7f3ec]/90 backdrop-blur-xl">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">
            <a href="/" class="text-xl font-black tracking-tight">
                Edu<span class="text-[#b88a2a]">Law</span>
            </a>

            <nav class="hidden items-center gap-8 text-sm font-semibold text-black/60 md:flex">
                <a href="#tentang" class="transition hover:text-black">Tentang</a>
                <a href="#layanan" class="transition hover:text-black">Audiens</a>
                <a href="#program" class="transition hover:text-black">Program</a>
                <a href="#insight" class="transition hover:text-black">Insight</a>
                <a href="#publikasi" class="transition hover:text-black">Publikasi</a>
            </nav>

            <a href="#program" class="rounded-full bg-[#171717] px-5 py-2.5 text-sm font-bold text-white transition hover:bg-[#b88a2a] hover:text-black">
                Jelajahi
            </a>
        </div>
    </header>

    <main>
        {{-- HERO --}}
        <section class="relative overflow-hidden px-6 pt-32">
            <div class="absolute left-1/2 top-20 -z-10 h-[520px] w-[520px] -translate-x-1/2 rounded-full bg-[#d7b66a]/30 blur-3xl"></div>

            <div class="mx-auto grid max-w-7xl items-center gap-12 pb-24 pt-10 md:grid-cols-[1.05fr_0.95fr]">
                <div>
                    <div class="mb-6 inline-flex rounded-full border border-black/10 bg-white/70 px-4 py-2 text-sm font-semibold text-black/60 shadow-sm">
                        Equal · Educative · Embrace
                    </div>

                    <h1 class="max-w-4xl text-5xl font-black leading-[0.95] tracking-tight md:text-7xl">
                        Ruang belajar hukum yang kritis, terbuka, dan membumi.
                    </h1>

                    <p class="mt-7 max-w-2xl text-lg leading-8 text-black/65">
                        Edulaw Project menghadirkan edukasi hukum, kajian konstitusi, demokrasi, pemilu,
                        dan kebijakan publik dalam bahasa yang lebih dekat dengan masyarakat tanpa kehilangan
                        kedalaman akademiknya.
                    </p>

                    <div class="mt-9 flex flex-wrap gap-4">
                        <a href="#insight" class="rounded-full bg-[#b88a2a] px-7 py-3.5 text-sm font-black text-black shadow-sm transition hover:bg-[#a57921]">
                            Baca Insight
                        </a>

                        <a href="#tentang" class="rounded-full border border-black/15 bg-white/60 px-7 py-3.5 text-sm font-black text-black transition hover:bg-black hover:text-white">
                            Tentang Kami
                        </a>
                    </div>

                    <div class="mt-12 grid max-w-xl grid-cols-3 gap-4">
                        <div>
                            <p class="text-3xl font-black">30+</p>
                            <p class="mt-1 text-sm text-black/50">Konten Edukasi</p>
                        </div>
                        <div>
                            <p class="text-3xl font-black">10+</p>
                            <p class="mt-1 text-sm text-black/50">Program Publik</p>
                        </div>
                        <div>
                            <p class="text-3xl font-black">3</p>
                            <p class="mt-1 text-sm text-black/50">Fokus Kajian</p>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute -right-6 -top-6 h-40 w-40 rounded-full bg-[#b88a2a]/30 blur-3xl"></div>
                    <div class="absolute -bottom-6 -left-6 h-40 w-40 rounded-full bg-black/10 blur-3xl"></div>

                    <div class="relative rounded-[2.5rem] border border-black/10 bg-white p-4 shadow-2xl">
                        <div class="overflow-hidden rounded-[2rem] bg-[#171717]">
                            <div class="p-8 text-white">
                                <p class="text-sm font-bold uppercase tracking-[0.35em] text-[#d7b66a]">
                                    Edulaw Project
                                </p>

                                <h2 class="mt-12 text-6xl font-black leading-none tracking-tight md:text-8xl">
                                    Law<br>
                                    Ideas<br>
                                    Public.
                                </h2>

                                <p class="mt-8 max-w-sm leading-7 text-white/60">
                                    Menghubungkan hukum dengan gagasan publik melalui literasi,
                                    riset, dan pembelajaran.
                                </p>
                            </div>

                            <div class="grid grid-cols-3 border-t border-white/10">
                                <div class="p-5">
                                    <p class="text-2xl font-black text-white">01</p>
                                    <p class="mt-1 text-sm text-white/50">Konstitusi</p>
                                </div>
                                <div class="border-x border-white/10 p-5">
                                    <p class="text-2xl font-black text-white">02</p>
                                    <p class="mt-1 text-sm text-white/50">Demokrasi</p>
                                </div>
                                <div class="p-5">
                                    <p class="text-2xl font-black text-white">03</p>
                                    <p class="mt-1 text-sm text-white/50">Kebijakan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- TENTANG --}}
        <section id="tentang" class="border-y border-black/10 bg-white px-6 py-24">
            <div class="mx-auto grid max-w-7xl gap-12 md:grid-cols-[0.9fr_1.1fr]">
                <div>
                    <p class="mb-4 text-sm font-black uppercase tracking-[0.28em] text-[#b88a2a]">
                        Tentang Edulaw
                    </p>
                    <h2 class="text-4xl font-black leading-tight tracking-tight md:text-5xl">
                        Hukum tidak cukup hanya dibaca sebagai teks.
                    </h2>
                </div>

                <div class="space-y-6 text-lg leading-8 text-black/65">
                    <p>
                        Edulaw Project dikembangkan sebagai ruang edukasi hukum yang membaca norma,
                        konteks, dampak, dan relasinya dengan kehidupan warga negara.
                    </p>

                    <p>
                        Melalui konten, diskusi, publikasi, dan program pembelajaran, Edulaw berupaya
                        membuat isu hukum lebih mudah dipahami, lebih dekat dengan publik, dan tetap
                        bertanggung jawab secara akademik.
                    </p>
                </div>
            </div>
        </section>

        {{-- SIAPA YANG KAMI LAYANI --}}
        <section id="layanan" class="px-6 py-24">
            <div class="mx-auto max-w-7xl">
                <div class="mb-12 max-w-3xl">
                    <p class="mb-4 text-sm font-black uppercase tracking-[0.28em] text-[#b88a2a]">
                        Siapa yang Kami Layani
                    </p>
                    <h2 class="text-4xl font-black tracking-tight md:text-5xl">
                        Untuk mereka yang ingin memahami hukum secara lebih jernih.
                    </h2>
                </div>

                <div class="grid gap-5 md:grid-cols-4">
                    <div class="rounded-[2rem] border border-black/10 bg-white p-7 shadow-sm">
                        <h3 class="text-xl font-black">Mahasiswa</h3>
                        <p class="mt-4 leading-7 text-black/60">
                            Bahan belajar hukum yang ringkas, sistematis, dan mudah dikembangkan.
                        </p>
                    </div>

                    <div class="rounded-[2rem] border border-black/10 bg-white p-7 shadow-sm">
                        <h3 class="text-xl font-black">Peneliti</h3>
                        <p class="mt-4 leading-7 text-black/60">
                            Ruang kajian untuk membaca isu hukum secara kritis dan berbasis data.
                        </p>
                    </div>

                    <div class="rounded-[2rem] border border-black/10 bg-white p-7 shadow-sm">
                        <h3 class="text-xl font-black">Praktisi</h3>
                        <p class="mt-4 leading-7 text-black/60">
                            Perspektif hukum yang relevan dengan advokasi, kebijakan, dan kelembagaan.
                        </p>
                    </div>

                    <div class="rounded-[2rem] border border-black/10 bg-white p-7 shadow-sm">
                        <h3 class="text-xl font-black">Publik</h3>
                        <p class="mt-4 leading-7 text-black/60">
                            Penjelasan isu hukum aktual dengan bahasa yang lebih sederhana dan membumi.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- PROGRAM --}}
        <section id="program" class="bg-[#171717] px-6 py-24 text-white">
            <div class="mx-auto max-w-7xl">
                <div class="mb-12 flex flex-col justify-between gap-6 md:flex-row md:items-end">
                    <div class="max-w-3xl">
                        <p class="mb-4 text-sm font-black uppercase tracking-[0.28em] text-[#d7b66a]">
                            Program
                        </p>
                        <h2 class="text-4xl font-black tracking-tight md:text-5xl">
                            Program utama Edulaw Project.
                        </h2>
                    </div>

                    <p class="max-w-md leading-7 text-white/55">
                        Dirancang untuk mempertemukan edukasi, riset, literasi hukum, dan penguatan kapasitas publik.
                    </p>
                </div>

                <div class="grid gap-6 md:grid-cols-3">
                    <article class="rounded-[2rem] border border-white/10 bg-white/10 p-8">
                        <p class="text-sm font-black text-[#d7b66a]">01</p>
                        <h3 class="mt-8 text-2xl font-black">Kelas Hukum</h3>
                        <p class="mt-4 leading-7 text-white/60">
                            Ruang belajar tematik untuk memahami hukum secara sistematis, praktis, dan kontekstual.
                        </p>
                    </article>

                    <article class="rounded-[2rem] border border-white/10 bg-white/10 p-8">
                        <p class="text-sm font-black text-[#d7b66a]">02</p>
                        <h3 class="mt-8 text-2xl font-black">Diskusi Publik</h3>
                        <p class="mt-4 leading-7 text-white/60">
                            Forum percakapan kritis tentang konstitusi, demokrasi, kebijakan publik, dan isu hukum aktual.
                        </p>
                    </article>

                    <article class="rounded-[2rem] border border-white/10 bg-white/10 p-8">
                        <p class="text-sm font-black text-[#d7b66a]">03</p>
                        <h3 class="mt-8 text-2xl font-black">Publikasi Riset</h3>
                        <p class="mt-4 leading-7 text-white/60">
                            Kanal publikasi gagasan, kajian, dan riset hukum yang disusun secara reflektif dan berbasis data.
                        </p>
                    </article>
                </div>
            </div>
        </section>

        {{-- INSIGHT --}}
        <section id="insight" class="px-6 py-24">
            <div class="mx-auto max-w-7xl">
                <div class="mb-12 flex flex-col justify-between gap-6 md:flex-row md:items-end">
                    <div>
                        <p class="mb-4 text-sm font-black uppercase tracking-[0.28em] text-[#b88a2a]">
                            Insight
                        </p>
                        <h2 class="text-4xl font-black tracking-tight md:text-5xl">
                            Bacaan hukum terbaru.
                        </h2>
                    </div>

                    <a href="#" class="w-fit rounded-full border border-black/15 bg-white px-6 py-3 text-sm font-black transition hover:bg-black hover:text-white">
                        Lihat Semua
                    </a>
                </div>

                <div class="grid gap-6 md:grid-cols-3">
                    <article class="overflow-hidden rounded-[2rem] border border-black/10 bg-white shadow-sm">
                        <div class="h-48 bg-[#d7b66a]"></div>
                        <div class="p-7">
                            <p class="text-sm font-bold text-[#b88a2a]">Konstitusi</p>
                            <h3 class="mt-3 text-2xl font-black leading-tight">
                                Membaca arah baru demokrasi konstitusional
                            </h3>
                            <p class="mt-4 leading-7 text-black/60">
                                Catatan ringkas tentang relasi konstitusi, kekuasaan, dan perlindungan hak warga negara.
                            </p>
                        </div>
                    </article>

                    <article class="overflow-hidden rounded-[2rem] border border-black/10 bg-white shadow-sm">
                        <div class="h-48 bg-[#171717]"></div>
                        <div class="p-7">
                            <p class="text-sm font-bold text-[#b88a2a]">Pemilu</p>
                            <h3 class="mt-3 text-2xl font-black leading-tight">
                                Pemilu sebagai desain kelembagaan
                            </h3>
                            <p class="mt-4 leading-7 text-black/60">
                                Menempatkan pemilu bukan hanya sebagai prosedur, tetapi juga sebagai rekayasa demokrasi.
                            </p>
                        </div>
                    </article>

                    <article class="overflow-hidden rounded-[2rem] border border-black/10 bg-white shadow-sm">
                        <div class="h-48 bg-[#efe4cb]"></div>
                        <div class="p-7">
                            <p class="text-sm font-bold text-[#b88a2a]">Kebijakan Publik</p>
                            <h3 class="mt-3 text-2xl font-black leading-tight">
                                Ketika hukum bertemu tata kelola
                            </h3>
                            <p class="mt-4 leading-7 text-black/60">
                                Analisis kebijakan dengan sudut pandang hukum, akuntabilitas, dan kepentingan publik.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        {{-- PUBLIKASI --}}
        <section id="publikasi" class="border-y border-black/10 bg-white px-6 py-24">
            <div class="mx-auto grid max-w-7xl gap-10 md:grid-cols-[0.9fr_1.1fr] md:items-center">
                <div>
                    <p class="mb-4 text-sm font-black uppercase tracking-[0.28em] text-[#b88a2a]">
                        Publikasi
                    </p>
                    <h2 class="text-4xl font-black leading-tight tracking-tight md:text-5xl">
                        Riset, opini, dan dokumen pembelajaran.
                    </h2>
                </div>

                <div class="rounded-[2rem] border border-black/10 bg-[#f7f3ec] p-8">
                    <p class="text-lg leading-8 text-black/65">
                        Bagian publikasi dapat dikembangkan menjadi kanal untuk mengunggah policy brief,
                        artikel opini, modul pembelajaran, laporan kegiatan, dan hasil riset Edulaw Project.
                    </p>

                    <a href="#" class="mt-8 inline-flex rounded-full bg-black px-7 py-3.5 text-sm font-black text-white transition hover:bg-[#b88a2a] hover:text-black">
                        Lihat Publikasi
                    </a>
                </div>
            </div>
        </section>

        {{-- CTA --}}
        <section class="px-6 py-24">
            <div class="mx-auto max-w-7xl overflow-hidden rounded-[2.5rem] bg-[#171717] p-10 text-white md:p-16">
                <div class="grid gap-10 md:grid-cols-[1fr_auto] md:items-end">
                    <div>
                        <p class="mb-4 text-sm font-black uppercase tracking-[0.28em] text-[#d7b66a]">
                            Mari Terhubung
                        </p>
                        <h2 class="max-w-3xl text-4xl font-black leading-tight tracking-tight md:text-6xl">
                            Bangun literasi hukum yang lebih dekat dengan publik.
                        </h2>
                    </div>

                    <a href="#" class="w-fit rounded-full bg-[#d7b66a] px-7 py-3.5 text-sm font-black text-black transition hover:bg-white">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </section>
    </main>

    {{-- FOOTER --}}
    <footer class="border-t border-black/10 bg-white px-6 py-10">
        <div class="mx-auto flex max-w-7xl flex-col justify-between gap-4 md:flex-row md:items-center">
            <p class="text-lg font-black">
                Edu<span class="text-[#b88a2a]">Law</span> Project
            </p>

            <p class="text-sm text-black/50">
                © {{ date('Y') }} Edulaw Project. Equal, Educative, Embrace.
            </p>
        </div>
    </footer>

</body>
</html>