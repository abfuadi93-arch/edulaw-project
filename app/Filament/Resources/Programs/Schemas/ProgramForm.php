<?php

namespace App\Filament\Resources\Programs\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProgramForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Utama')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul Program')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (Set $set, Get $get, ?string $state): void {
                                if (blank($get('slug'))) {
                                    $set('slug', Str::slug($state ?? ''));
                                }
                            }),
                        TextInput::make('slug')
                            ->label('Slug / URL')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('Otomatis dari judul, tetapi boleh diedit manual.'),
                        Select::make('category')
                            ->label('Kategori Program')
                            ->options([
                                'Diskusi Literasi Konstitusi' => 'Diskusi Literasi Konstitusi',
                                'Diskusi Diseminasi Tesis' => 'Diskusi Diseminasi Tesis',
                                'Diskusi Respons Isu' => 'Diskusi Respons Isu',
                                'Inspiring Lecture' => 'Inspiring Lecture',
                                'Kelas Hukum' => 'Kelas Hukum',
                                'Pelatihan Hukum' => 'Pelatihan Hukum',
                                'Forum Riset' => 'Forum Riset',
                                'Lainnya' => 'Lainnya',
                            ])
                            ->required()
                            ->native(false),
                        Select::make('rumpun')
                            ->label('Rumpun Program')
                            ->options([
                                'Discussion' => 'Discussion',
                                'Lecture' => 'Lecture',
                                'Training' => 'Training',
                                'Research' => 'Research',
                                'Workshop' => 'Workshop',
                            ])
                            ->native(false),
                        Select::make('format')
                            ->label('Format')
                            ->options([
                                'Online' => 'Online',
                                'Offline' => 'Offline',
                                'Hybrid' => 'Hybrid',
                            ])
                            ->required()
                            ->native(false),
                        Select::make('level')
                            ->label('Level')
                            ->options([
                                'Umum' => 'Umum',
                                'Intermediate' => 'Intermediate',
                                'Advanced' => 'Advanced',
                            ])
                            ->required()
                            ->native(false),
                        TextInput::make('duration')
                            ->label('Durasi')
                            ->maxLength(255)
                            ->placeholder('1 Pertemuan'),
                        DatePicker::make('started_at')
                            ->label('Tanggal Mulai'),
                        DatePicker::make('ended_at')
                            ->label('Tanggal Selesai'),
                    ])
                    ->columns(2),
                Section::make('Konten Program')
                    ->schema([
                        Textarea::make('summary')
                            ->label('Deskripsi Singkat')
                            ->required()
                            ->rows(3)
                            ->helperText('Ringkasan pendek untuk card program.')
                            ->columnSpanFull(),
                        Textarea::make('content')
                            ->label('Deskripsi Detail')
                            ->rows(8)
                            ->columnSpanFull(),
                        TagsInput::make('learns')
                            ->label('Apa yang Dipelajari')
                            ->placeholder('Tambahkan poin pembelajaran')
                            ->helperText('Tekan Enter setelah menulis setiap poin.')
                            ->columnSpanFull(),
                        Textarea::make('speaker')
                            ->label('Narasumber')
                            ->rows(3)
                            ->helperText('Isi nama narasumber dan afiliasi secara ringkas.')
                            ->columnSpanFull(),
                    ])
                    ->columns(1),
                Section::make('Media & Tautan')
                    ->schema([
                        FileUpload::make('poster')
                            ->label('Poster Kegiatan')
                            ->disk('public')
                            ->directory('programs')
                            ->image()
                            ->imageEditor(),
                        TextInput::make('archive_url')
                            ->label('Link Dokumentasi / Arsip')
                            ->url()
                            ->placeholder('https://...')
                            ->maxLength(255),
                    ])
                    ->columns(2),
                Section::make('Pengaturan')
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Program Aktif')
                            ->helperText('Aktif untuk program yang sedang berjalan atau terjadwal.'),
                        Toggle::make('is_featured')
                            ->label('Tampilkan di Beranda'),
                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->numeric()
                            ->default(0),
                    ])
                    ->columns(3),
            ]);
    }
}
