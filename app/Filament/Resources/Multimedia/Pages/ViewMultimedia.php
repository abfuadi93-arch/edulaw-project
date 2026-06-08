<?php

namespace App\Filament\Resources\Multimedia\Pages;

use App\Filament\Resources\Multimedia\MultimediaResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewMultimedia extends ViewRecord
{
    protected static string $resource = MultimediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
