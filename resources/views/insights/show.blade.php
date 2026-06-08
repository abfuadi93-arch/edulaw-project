@extends('layouts.app')

@section('title', 'Hukum di Era Validasi Digital · Edulaw Insight')

@section('content')
    @php
        $article = [
            'category' => 'Analisis',
            'date' => '12 Mei 2026',
            'title' => 'Hukum di Era Validasi Digital: Masih Relevankah Cepat?',
            'excerpt' => 'Percepatan teknologi menuntut hukum untuk merespons lebih cepat. Namun validasi digital, algoritma, dan otomatisasi masih menyisakan banyak pertanyaan tentang hak, keadilan, dan akuntabilitas.',
            'author' => 'Tim Redaksi Edulaw Project',
            'read_time' => '5 menit baca',
        ];

        $related = [
            ['category' => 'Editorial', 'title' => 'R.A. Kartini: Jejak Perempuan Pencerah Bangsa', 'cover' => 'from-[#e8f8f5] via-white to-[#f7f3ec]'],
            ['category' => 'Konstitusi', 'title' => 'Membaca Putusan MK dalam Ruang Publik Digital', 'cover' => 'from-[#eef4fb] via-white to-[#e8eefc]'],
            ['category' => 'Kebijakan Publik', 'title' => 'Literasi Hukum untuk Masyarakat yang Rentan', 'cover' => 'from-[#fff4df] via-white to-[#e8f8f5]'],
        ];
    @endphp

    <section class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-14 lg:py-16">
            <a href="{{ route('insight.index') }}" class="inline-flex items-center gap-2 text-sm font-bold text-[#1f4ed8] transition hover:text-[#071b3f]">
                <span aria-hidden="true">&larr;</span>
                <span>Kembali ke Insight</span>
            </a>

            <div class="mt-8 max-w-4xl">
                <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Edulaw Insight</p>
                <div class="mt-4 flex flex-wrap items-center gap-3 text-xs font-bold uppercase tracking-[0.14em]">
                    <span class="rounded-full border border-[#d8e3f8] bg-[#eef4fb] px-3 py-1 text-[#1f4ed8]">{{ $article['category'] }}</span>
                    <span class="text-slate-500">{{ $article['date'] }}</span>
                </div>

                <h1 class="mt-5 text-[36px] font-extrabold leading-tight text-[#071b3f] md:text-5xl lg:text-[56px]">
                    {{ $article['title'] }}
                </h1>

                <p class="mt-6 max-w-3xl text-base leading-7 text-slate-600 md:text-lg md:leading-8">
                    {{ $article['excerpt'] }}
                </p>

                <div class="mt-7 flex flex-wrap gap-x-5 gap-y-2 text-sm font-bold text-slate-600">
                    <span>Penulis: <span class="text-[#071b3f]">{{ $article['author'] }}</span></span>
                    <span>Estimasi baca: <span class="text-[#071b3f]">{{ $article['read_time'] }}</span></span>
                </div>
            </div>

            <div class="mt-10 overflow-hidden rounded-3xl border border-[#d8e3f8] bg-gradient-to-br from-[#e8eefc] via-white to-[#f7f3ec] h-[320px] md:h-[420px]">
                <div class="flex h-full flex-col items-center justify-center p-8 text-center">
                    <span class="rounded-full border border-white/70 bg-white/70 px-4 py-2 text-xs font-extrabold uppercase tracking-[0.22em] text-[#071b3f]">
                        Edulaw Insight
                    </span>
                    <div class="mt-7 h-1.5 w-24 rounded-full bg-[#1f4ed8]/30"></div>
                    <p class="mt-6 max-w-xl text-lg font-extrabold leading-snug text-[#071b3f] md:text-2xl">
                        Placeholder cover untuk artikel analisis hukum digital
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="border-y border-[#d8e3f8] bg-[#f8fbff] py-14 lg:py-16">
        <div class="mx-auto max-w-7xl px-6">
            <article class="mx-auto max-w-4xl rounded-3xl border border-[#d8e3f8] bg-white p-6 md:p-10">
                <div class="max-w-3xl text-base leading-8 text-slate-700">
                    <p>
                        Transformasi digital telah mengubah cara warga berinteraksi dengan layanan publik, transaksi ekonomi, pendidikan, dan ruang komunikasi. Di tengah perubahan itu, hukum tidak lagi hanya diuji oleh kecepatan pembentukan norma, tetapi juga oleh kemampuannya membaca dampak sosial dari teknologi yang bergerak cepat.
                    </p>

                    <h2 class="mt-10 text-2xl font-extrabold leading-snug text-[#071b3f]">Hukum dan percepatan digital</h2>
                    <p class="mt-4">
                        Validasi digital menghadirkan efisiensi, tetapi juga menggeser relasi antara warga, negara, dan penyedia layanan. Keputusan yang dulu dibuat melalui interaksi manusia kini dapat dipengaruhi oleh sistem otomatis, data historis, dan desain platform yang tidak selalu mudah diperiksa oleh publik.
                    </p>
                    <p class="mt-4">
                        Dalam konteks tersebut, hukum perlu hadir sebagai kerangka yang tidak hanya mengejar kecepatan, melainkan juga memastikan prosedur, alasan, dan akibat dari keputusan digital tetap dapat dipertanggungjawabkan.
                    </p>

                    <h2 class="mt-10 text-2xl font-extrabold leading-snug text-[#071b3f]">Risiko otomatisasi dan akuntabilitas</h2>
                    <p class="mt-4">
                        Otomatisasi dapat memperbesar skala layanan, tetapi ia juga dapat memperbesar kesalahan apabila data yang digunakan bias, tidak lengkap, atau tidak sesuai konteks. Ketika keputusan otomatis berdampak pada hak warga, prinsip akuntabilitas harus bekerja sejak desain sistem, bukan hanya setelah kerugian terjadi.
                    </p>
                    <p class="mt-4">
                        Pertanyaan pentingnya bukan semata apakah sistem bekerja cepat, tetapi apakah warga mengetahui dasar keputusan, memiliki ruang keberatan, dan dapat memperoleh pemulihan yang efektif ketika haknya terganggu.
                    </p>

                    <h2 class="mt-10 text-2xl font-extrabold leading-snug text-[#071b3f]">Membaca ulang perlindungan hak warga negara</h2>
                    <p class="mt-4">
                        Perlindungan hak warga negara di era digital memerlukan pembacaan ulang atas transparansi, akses informasi, perlindungan data, dan kesetaraan akses. Hukum yang relevan bukan hukum yang selalu paling cepat, melainkan hukum yang mampu menjaga martabat warga dalam perubahan teknologi.
                    </p>
                </div>
            </article>
        </div>
    </section>

    <section class="bg-white py-14 lg:py-16">
        <div class="mx-auto max-w-7xl px-6">
            <div class="flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.22em] text-[#1f4ed8]">Artikel Terkait</p>
                    <h2 class="mt-2 text-2xl font-extrabold text-[#071b3f] md:text-3xl">Bacaan lanjutan</h2>
                </div>
                <a href="{{ route('insight.index') }}" class="hidden min-h-11 items-center justify-center rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#1f4ed8] sm:inline-flex">
                    Lihat Semua Insight
                </a>
            </div>

            <div class="mt-7 grid gap-5 md:grid-cols-3">
                @foreach ($related as $item)
                    <article class="flex h-full flex-col overflow-hidden rounded-2xl border border-[#d8e3f8] bg-white transition hover:-translate-y-0.5 hover:shadow-md">
                        <div class="flex h-36 items-center justify-center bg-gradient-to-br {{ $item['cover'] }} p-5 text-center">
                            <span class="text-xs font-extrabold uppercase tracking-[0.2em] text-[#071b3f]/35">Edulaw Insight</span>
                        </div>
                        <div class="flex flex-1 flex-col p-5">
                            <p class="text-xs font-bold uppercase tracking-wide text-[#1f4ed8]">{{ $item['category'] }}</p>
                            <h3 class="mt-3 text-base font-extrabold leading-snug text-[#071b3f]">{{ $item['title'] }}</h3>
                            <a href="{{ route('insight.show', ['slug' => \Illuminate\Support\Str::slug($item['title'])]) }}" class="mt-auto inline-flex min-h-10 w-fit items-center justify-center rounded-lg bg-[#071b3f] px-4 py-2.5 text-sm font-bold text-white transition hover:bg-[#1f4ed8]">
                                Baca Insight
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-10 rounded-3xl border border-[#d8e3f8] bg-[#f8fbff] p-6 md:p-8">
                <div class="flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">
                    <h2 class="text-2xl font-extrabold text-[#071b3f] md:text-3xl">Jelajahi insight hukum lainnya.</h2>
                    <a href="{{ route('insight.index') }}" class="inline-flex min-h-12 w-fit items-center justify-center rounded-lg bg-[#071b3f] px-5 py-3 text-sm font-bold text-white transition hover:bg-[#1f4ed8]">
                        Lihat Semua Insight
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
