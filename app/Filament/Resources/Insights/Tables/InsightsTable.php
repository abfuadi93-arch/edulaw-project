<?php

namespace App\Filament\Resources\Insights\Tables;

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

class InsightsTable
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
                TextColumn::make('category')
                    ->label('Kategori'),
                TextColumn::make('author')
                    ->label('Penulis'),
                TextColumn::make('reading_time')
                    ->label('Baca')
                    ->suffix(' menit')
                    ->sortable(),
                IconColumn::make('is_published')
                    ->label('Terbit')
                    ->boolean(),
                IconColumn::make('is_featured')
                    ->label('Sorotan')
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
                SelectFilter::make('category')
                    ->label('Kategori')
                    ->options([
                        'Editorial' => 'Editorial',
                        'Opini' => 'Opini',
                        'Analisis' => 'Analisis',
                        'Catatan Hukum' => 'Catatan Hukum',
                        'Konstitusi' => 'Konstitusi',
                        'Kebijakan Publik' => 'Kebijakan Publik',
                    ]),
                TernaryFilter::make('is_published')
                    ->label('Terbit'),
                TernaryFilter::make('is_featured')
                    ->label('Sorotan Utama'),
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
