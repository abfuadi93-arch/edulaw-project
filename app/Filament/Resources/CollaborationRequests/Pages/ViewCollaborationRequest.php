<?php

namespace App\Filament\Resources\CollaborationRequests\Pages;

use App\Filament\Resources\CollaborationRequests\CollaborationRequestResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewCollaborationRequest extends ViewRecord
{
    protected static string $resource = CollaborationRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
