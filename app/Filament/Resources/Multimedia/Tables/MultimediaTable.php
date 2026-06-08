<?php

namespace App\Filament\Resources\Multimedia\Tables;

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

class MultimediaTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->square(),
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('type')
                    ->label('Tipe'),
                TextColumn::make('platform')
                    ->label('Platform'),
                IconColumn::make('is_featured')
                    ->label('Sorotan')
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
                    ->label('Tipe')
                    ->options([
                        'short' => 'Reels / Short',
                        'youtube_series' => 'Serial YouTube',
                        'gallery' => 'Galeri Kegiatan',
                        'documentation' => 'Dokumentasi Diskusi',
                    ]),
                SelectFilter::make('platform')
                    ->label('Platform')
                    ->options([
                        'YouTube' => 'YouTube',
                        'Instagram' => 'Instagram',
                        'Google Photos' => 'Google Photos',
                        'TikTok' => 'TikTok',
                        'Website' => 'Website',
                    ]),
                TernaryFilter::make('is_featured')
                    ->label('Sorotan Multimedia'),
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
