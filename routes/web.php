<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $adminHeroSlides = collect([
        [
            'type' => 'Hero',
            'title' => 'Ekosistem Edukasi Hukum, Riset, dan Literasi Publik',
            'subtitle' => 'Menghadirkan pengetahuan hukum yang kredibel, mudah dipahami, dan dapat diakses oleh semua.',
            'image' => asset('images/hero/hero-1.jpg'),
            'button_text' => 'Lihat Program',
            'button_url' => route('program.index'),
        ],
        [
            'type' => 'Hero',
            'title' => 'Ruang Belajar Hukum yang Setara dan Merangkul',
            'subtitle' => 'Program diskusi, kelas, riset, dan publikasi untuk memperkuat literasi hukum publik.',
            'image' => asset('images/hero/hero-2.jpg'),
            'button_text' => 'Baca Insight',
            'button_url' => route('insight.index'),
        ],
        [
            'type' => 'Hero',
            'title' => 'Forum Kolaborasi Edukasi Hukum Publik',
            'subtitle' => 'Edulaw Project terbuka untuk kerja sama program, riset, publikasi, dan pelatihan hukum.',
            'image' => asset('images/hero/hero-3.jpg'),
            'button_text' => 'Ajukan Kerja Sama',
            'button_url' => route('collaboration.index'),
        ],
    ]);

    $insightSlides = collect([
        [
            'type' => 'Insight',
            'title' => 'Membaca Ulang Partisipasi Publik dalam Proses Legislasi',
            'subtitle' => 'Catatan tentang makna partisipasi warga dalam pembentukan regulasi yang lebih terbuka.',
            'image' => asset('images/hero/hero-1.jpg'),
            'button_text' => 'Baca Insight',
            'button_url' => route('insight.index'),
        ],
        [
            'type' => 'Insight',
            'title' => 'Mengapa Literasi Hukum Perlu Lebih Dekat dengan Komunitas',
            'subtitle' => 'Literasi hukum bekerja lebih baik ketika pengetahuan disusun dekat dengan pengalaman warga.',
            'image' => asset('images/hero/hero-2.jpg'),
            'button_text' => 'Baca Insight',
            'button_url' => route('insight.index'),
        ],
        [
            'type' => 'Insight',
            'title' => 'Peran Kampus dalam Mendorong Diskursus Hukum Inklusif',
            'subtitle' => 'Kampus dapat menjadi ruang penghubung antara gagasan akademik dan kebutuhan publik.',
            'image' => asset('images/hero/hero-3.jpg'),
            'button_text' => 'Baca Insight',
            'button_url' => route('insight.index'),
        ],
    ]);

    return view('home', [
        'heroSlides' => $adminHeroSlides
            ->take(3)
            ->merge($insightSlides->take(7))
            ->take(10)
            ->values(),
    ]);
})
    ->name('home');

Route::get('/tentang', function () {
    return view('about.index');
})
    ->name('about.index');

Route::get('/program', function () {
    return view('programs.index');
})
    ->name('program.index');

Route::get('/program/{slug}', function ($slug) {
    return view('programs.show', compact('slug'));
})
    ->name('program.show');

Route::get('/insight', function () {
    return view('insights.index');
})
    ->name('insight.index');

Route::get('/insight/{slug}', function ($slug) {
    return view('insights.show', compact('slug'));
})
    ->name('insight.show');

Route::get('/publikasi', function () {
    return view('publications.index');
})
    ->name('publication.index');

Route::get('/publikasi/{slug}', function ($slug) {
    return view('publications.show', compact('slug'));
})
    ->name('publication.show');

Route::get('/multimedia', function () {
    return view('multimedia.index');
})
    ->name('multimedia.index');

Route::view('/kolaborasi', 'collaboration.index')
    ->name('collaboration.index');
