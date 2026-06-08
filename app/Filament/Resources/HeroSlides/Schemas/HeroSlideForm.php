<?php

namespace App\Filament\Resources\HeroSlides\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class HeroSlideForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Konten Hero')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Textarea::make('subtitle')
                            ->label('Subjudul')
                            ->rows(4)
                            ->columnSpanFull(),
                        FileUpload::make('image')
                            ->label('Gambar')
                            ->directory('hero-slides')
                            ->image()
                            ->imageEditor()
                            ->columnSpanFull(),
                        TextInput::make('button_text')
                            ->label('Teks Tombol')
                            ->maxLength(255),
                        TextInput::make('button_url')
                            ->label('URL Tombol')
                            ->maxLength(255),
                    ])
                    ->columns(2),
                Section::make('Pengaturan')
                    ->description('Gunakan maksimal 3 slide aktif untuk hero utama.')
                    ->schema([
                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true),
                        TextInput::make('sort_order')
                            ->label('Urutan')
                            ->numeric()
                            ->default(0),
                    ])
                    ->columns(2),
            ]);
    }
}
