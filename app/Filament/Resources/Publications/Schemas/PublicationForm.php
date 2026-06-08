<?php

namespace App\Filament\Resources\Publications\Schemas;

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

class PublicationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Identitas Publikasi')
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
                            ->label('Jenis')
                            ->options([
                                'Policy Brief' => 'Policy Brief',
                                'Laporan Riset' => 'Laporan Riset',
                                'Artikel Akademik' => 'Artikel Akademik',
                                'Toolkit' => 'Toolkit',
                                'Modul' => 'Modul',
                                'Catatan Kebijakan' => 'Catatan Kebijakan',
                                'Dokumen Kolaborasi' => 'Dokumen Kolaborasi',
                            ])
                            ->searchable(),
                        TextInput::make('year')
                            ->label('Tahun')
                            ->maxLength(255),
                        FileUpload::make('cover_image')
                            ->label('Cover')
                            ->directory('publications/covers')
                            ->image()
                            ->imageEditor(),
                        FileUpload::make('file_path')
                            ->label('File PDF')
                            ->directory('publications/files')
                            ->acceptedFileTypes(['application/pdf']),
                        Textarea::make('summary')
                            ->label('Ringkasan')
                            ->rows(4)
                            ->columnSpanFull(),
                        RichEditor::make('description')
                            ->label('Deskripsi')
                            ->columnSpanFull(),
                        TextInput::make('author')
                            ->label('Penulis')
                            ->default('Edulaw Project')
                            ->maxLength(255),
                        TextInput::make('file_size')
                            ->label('Ukuran File')
                            ->maxLength(255),
                        TextInput::make('download_count')
                            ->label('Jumlah Unduhan')
                            ->numeric()
                            ->default(0),
                    ])
                    ->columns(2),
                Section::make('Publikasi')
                    ->schema([
                        Toggle::make('is_featured')
                            ->label('Publikasi Unggulan'),
                        Toggle::make('is_published')
                            ->label('Terbit'),
                        DateTimePicker::make('published_at')
                            ->label('Tanggal Terbit'),
                    ])
                    ->columns(3),
            ]);
    }
}
