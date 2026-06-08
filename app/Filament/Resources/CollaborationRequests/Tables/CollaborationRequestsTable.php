<?php

namespace App\Filament\Resources\CollaborationRequests\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class CollaborationRequestsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                TextColumn::make('institution')
                    ->label('Institusi')
                    ->toggleable(),
                TextColumn::make('work_area')
                    ->label('Area Kerja'),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->formatStateUsing(fn (?string $state): string => match ($state) {
                        'new' => 'Baru',
                        'contacted' => 'Sudah Dihubungi',
                        'processed' => 'Diproses',
                        'closed' => 'Selesai',
                        default => $state ?? '-',
                    })
                    ->color(fn (?string $state): string => match ($state) {
                        'new' => 'info',
                        'contacted' => 'warning',
                        'processed' => 'primary',
                        'closed' => 'success',
                        default => 'gray',
                    }),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options([
                        'new' => 'Baru',
                        'contacted' => 'Sudah Dihubungi',
                        'processed' => 'Diproses',
                        'closed' => 'Selesai',
                    ]),
                SelectFilter::make('work_area')
                    ->label('Area Kerja')
                    ->options([
                        'Program Edukasi' => 'Program Edukasi',
                        'Riset & Publikasi' => 'Riset & Publikasi',
                        'Diskusi Publik' => 'Diskusi Publik',
                        'Pelatihan' => 'Pelatihan',
                        'Multimedia' => 'Multimedia',
                        'Lainnya' => 'Lainnya',
                    ]),
            ])
            ->recordActions([
                ViewAction::make(),
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
