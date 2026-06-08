<?php

namespace App\Filament\Resources\Multimedia;

use App\Filament\Resources\Multimedia\Pages\CreateMultimedia;
use App\Filament\Resources\Multimedia\Pages\EditMultimedia;
use App\Filament\Resources\Multimedia\Pages\ListMultimedia;
use App\Filament\Resources\Multimedia\Pages\ViewMultimedia;
use App\Filament\Resources\Multimedia\Schemas\MultimediaForm;
use App\Filament\Resources\Multimedia\Schemas\MultimediaInfolist;
use App\Filament\Resources\Multimedia\Tables\MultimediaTable;
use App\Models\Multimedia;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class MultimediaResource extends Resource
{
    protected static ?string $model = Multimedia::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Multimedia';

    protected static string|UnitEnum|null $navigationGroup = 'Konten';

    protected static ?int $navigationSort = 5;

    protected static ?string $modelLabel = 'Multimedia';

    protected static ?string $pluralModelLabel = 'Multimedia';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return MultimediaForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return MultimediaInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MultimediaTable::configure($table);
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
            'index' => ListMultimedia::route('/'),
            'create' => CreateMultimedia::route('/create'),
            'view' => ViewMultimedia::route('/{record}'),
            'edit' => EditMultimedia::route('/{record}/edit'),
        ];
    }
}
