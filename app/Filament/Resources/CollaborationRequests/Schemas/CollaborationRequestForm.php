<?php

namespace App\Filament\Resources\CollaborationRequests\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CollaborationRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Data Permintaan')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required()
                            ->maxLength(255),
                        TextInput::make('institution')
                            ->label('Institusi')
                            ->maxLength(255),
                        Select::make('work_area')
                            ->label('Area Kerja')
                            ->options([
                                'Program Edukasi' => 'Program Edukasi',
                                'Riset & Publikasi' => 'Riset & Publikasi',
                                'Diskusi Publik' => 'Diskusi Publik',
                                'Pelatihan' => 'Pelatihan',
                                'Multimedia' => 'Multimedia',
                                'Lainnya' => 'Lainnya',
                            ]),
                        Textarea::make('message')
                            ->label('Pesan')
                            ->rows(5)
                            ->columnSpanFull(),
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'new' => 'Baru',
                                'contacted' => 'Sudah Dihubungi',
                                'processed' => 'Diproses',
                                'closed' => 'Selesai',
                            ])
                            ->default('new')
                            ->required(),
                    ])
                    ->columns(2),
            ]);
    }
}
