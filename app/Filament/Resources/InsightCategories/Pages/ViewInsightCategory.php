<?php

namespace App\Filament\Resources\InsightCategories\Pages;

use App\Filament\Resources\InsightCategories\InsightCategoryResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewInsightCategory extends ViewRecord
{
    protected static string $resource = InsightCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
