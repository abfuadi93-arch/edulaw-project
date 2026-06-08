<?php

namespace App\Filament\Resources\Multimedia\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class MultimediaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Identitas Multimedia')
                    ->schema([
                        TextInput::make('title')
                            ->label('Judul')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state ?? '')))
                            ->columnSpanFull(),
                        TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        Select::make('type')
                            ->label('Tipe')
                            ->options([
                                'short' => 'Reels / Short',
                                'youtube_series' => 'Serial YouTube',
                                'gallery' => 'Galeri Kegiatan',
                                'documentation' => 'Dokumentasi Diskusi',
                            ]),
                        FileUpload::make('thumbnail')
                            ->label('Thumbnail')
                            ->directory('multimedia')
                            ->image()
                            ->imageEditor()
                            ->columnSpanFull(),
                        Textarea::make('summary')
                            ->label('Ringkasan')
                            ->rows(4)
                            ->columnSpanFull(),
                        Select::make('platform')
                            ->label('Platform')
                            ->options([
                                'YouTube' => 'YouTube',
                                'Instagram' => 'Instagram',
                                'Google Photos' => 'Google Photos',
                                'TikTok' => 'TikTok',
                                'Website' => 'Website',
                            ]),
                        TextInput::make('external_url')
                            ->label('URL Eksternal')
                            ->url()
                            ->maxLength(255),
                        TextInput::make('duration')
                            ->label('Durasi')
                            ->maxLength(255),
                        TextInput::make('episodes_count')
                            ->label('Jumlah Episode')
                            ->numeric(),
                    ])
                    ->columns(2),
                Section::make('Publikasi')
                    ->schema([
                        Toggle::make('is_featured')
                            ->label('Sorotan Multimedia'),
                        Toggle::make('is_published')
                            ->label('Terbit'),
                        DateTimePicker::make('published_at')
                            ->label('Tanggal Terbit'),
                    ])
                    ->columns(3),
            ]);
    }
}
