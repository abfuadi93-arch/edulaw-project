<?php

namespace App\Filament\Resources\PublicationTypes;

use App\Filament\Resources\PublicationTypes\Pages\CreatePublicationType;
use App\Filament\Resources\PublicationTypes\Pages\EditPublicationType;
use App\Filament\Resources\PublicationTypes\Pages\ListPublicationTypes;
use App\Filament\Resources\PublicationTypes\Pages\ViewPublicationType;
use App\Filament\Resources\PublicationTypes\Schemas\PublicationTypeForm;
use App\Filament\Resources\PublicationTypes\Schemas\PublicationTypeInfolist;
use App\Filament\Resources\PublicationTypes\Tables\PublicationTypesTable;
use App\Models\PublicationType;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PublicationTypeResource extends Resource
{
    protected static ?string $model = PublicationType::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PublicationTypeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PublicationTypeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PublicationTypesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPublicationTypes::route('/'),
            'create' => CreatePublicationType::route('/create'),
            'view' => ViewPublicationType::route('/{record}'),
            'edit' => EditPublicationType::route('/{record}/edit'),
        ];
    }
}
