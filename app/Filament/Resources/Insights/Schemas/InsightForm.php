<?php

namespace App\Filament\Resources\Insights\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class InsightForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Identitas Artikel')
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
                        Select::make('category')
                            ->label('Kategori')
                            ->options([
                                'Editorial' => 'Editorial',
                                'Opini' => 'Opini',
                                'Analisis' => 'Analisis',
                                'Catatan Hukum' => 'Catatan Hukum',
                                'Konstitusi' => 'Konstitusi',
                                'Kebijakan Publik' => 'Kebijakan Publik',
                            ])
                            ->searchable(),
                        FileUpload::make('cover_image')
                            ->label('Cover')
                            ->directory('insights')
                            ->image()
                            ->imageEditor()
                            ->columnSpanFull(),
                        Textarea::make('excerpt')
                            ->label('Ringkasan')
                            ->rows(4)
                            ->columnSpanFull(),
                        TextInput::make('author')
                            ->label('Penulis')
                            ->default('Tim Redaksi Edulaw Project')
                            ->maxLength(255),
                        TextInput::make('reading_time')
                            ->label('Estimasi Baca (menit)')
                            ->numeric(),
                    ])
                    ->columns(2),
                Section::make('Konten')
                    ->schema([
                        RichEditor::make('content')
                            ->label('Konten')
                            ->columnSpanFull(),
                    ]),
                Section::make('Publikasi')
                    ->schema([
                        Toggle::make('is_published')
                            ->label('Terbit'),
                        Toggle::make('is_featured')
                            ->label('Sorotan Utama'),
                        DateTimePicker::make('published_at')
                            ->label('Tanggal Terbit'),
                    ])
                    ->columns(3),
            ]);
    }
}
