<?php

namespace App\Filament\Resources\CollaborationRequests;

use App\Filament\Resources\CollaborationRequests\Pages\CreateCollaborationRequest;
use App\Filament\Resources\CollaborationRequests\Pages\EditCollaborationRequest;
use App\Filament\Resources\CollaborationRequests\Pages\ListCollaborationRequests;
use App\Filament\Resources\CollaborationRequests\Pages\ViewCollaborationRequest;
use App\Filament\Resources\CollaborationRequests\Schemas\CollaborationRequestForm;
use App\Filament\Resources\CollaborationRequests\Schemas\CollaborationRequestInfolist;
use App\Filament\Resources\CollaborationRequests\Tables\CollaborationRequestsTable;
use App\Models\CollaborationRequest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class CollaborationRequestResource extends Resource
{
    protected static ?string $model = CollaborationRequest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Permintaan Kolaborasi';

    protected static string|UnitEnum|null $navigationGroup = 'Interaksi';

    protected static ?int $navigationSort = 1;

    protected static ?string $modelLabel = 'Permintaan Kolaborasi';

    protected static ?string $pluralModelLabel = 'Permintaan Kolaborasi';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return CollaborationRequestForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return CollaborationRequestInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CollaborationRequestsTable::configure($table);
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
            'index' => ListCollaborationRequests::route('/'),
            'create' => CreateCollaborationRequest::route('/create'),
            'view' => ViewCollaborationRequest::route('/{record}'),
            'edit' => EditCollaborationRequest::route('/{record}/edit'),
        ];
    }
}
