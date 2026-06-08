<?php

namespace App\Filament\Resources\Publications\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class PublicationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover_image')
                    ->label('Cover')
                    ->square(),
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('type')
                    ->label('Jenis'),
                TextColumn::make('year')
                    ->label('Tahun')
                    ->sortable(),
                TextColumn::make('download_count')
                    ->label('Unduhan')
                    ->numeric()
                    ->sortable(),
                IconColumn::make('is_featured')
                    ->label('Unggulan')
                    ->boolean(),
                IconColumn::make('is_published')
                    ->label('Terbit')
                    ->boolean(),
                TextColumn::make('published_at')
                    ->label('Tanggal Terbit')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->label('Jenis')
                    ->options([
                        'Policy Brief' => 'Policy Brief',
                        'Laporan Riset' => 'Laporan Riset',
                        'Artikel Akademik' => 'Artikel Akademik',
                        'Toolkit' => 'Toolkit',
                        'Modul' => 'Modul',
                        'Catatan Kebijakan' => 'Catatan Kebijakan',
                        'Dokumen Kolaborasi' => 'Dokumen Kolaborasi',
                    ]),
                SelectFilter::make('year')
                    ->label('Tahun')
                    ->options([
                        '2026' => '2026',
                        '2025' => '2025',
                        '2024' => '2024',
                    ]),
                TernaryFilter::make('is_featured')
                    ->label('Publikasi Unggulan'),
                TernaryFilter::make('is_published')
                    ->label('Terbit'),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
