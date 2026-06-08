<?php

namespace App\Filament\Resources\Programs\Tables;

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

class ProgramsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('poster')
                    ->label('Poster')
                    ->square(),
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('category')
                    ->label('Kategori'),
                TextColumn::make('format')
                    ->label('Format'),
                TextColumn::make('level')
                    ->label('Level'),
                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),
                IconColumn::make('is_featured')
                    ->label('Beranda')
                    ->boolean(),
                TextColumn::make('sort_order')
                    ->label('Urutan')
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
                        'Diskusi Literasi Konstitusi' => 'Diskusi Literasi Konstitusi',
                        'Diskusi Diseminasi Tesis' => 'Diskusi Diseminasi Tesis',
                        'Diskusi Respons Isu' => 'Diskusi Respons Isu',
                        'Inspiring Lecture' => 'Inspiring Lecture',
                        'Kelas Hukum' => 'Kelas Hukum',
                        'Pelatihan Hukum' => 'Pelatihan Hukum',
                        'Forum Riset' => 'Forum Riset',
                        'Lainnya' => 'Lainnya',
                    ]),
                SelectFilter::make('format')
                    ->label('Format')
                    ->options([
                        'Online' => 'Online',
                        'Offline' => 'Offline',
                        'Hybrid' => 'Hybrid',
                    ]),
                SelectFilter::make('level')
                    ->label('Level')
                    ->options([
                        'Umum' => 'Umum',
                        'Intermediate' => 'Intermediate',
                        'Advanced' => 'Advanced',
                    ]),
                TernaryFilter::make('is_active')
                    ->label('Program Aktif'),
                TernaryFilter::make('is_featured')
                    ->label('Tampilkan di Beranda'),
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
