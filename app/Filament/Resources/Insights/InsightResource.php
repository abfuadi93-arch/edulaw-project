<?php

namespace App\Filament\Resources\Insights;

use App\Filament\Resources\Insights\Pages\CreateInsight;
use App\Filament\Resources\Insights\Pages\EditInsight;
use App\Filament\Resources\Insights\Pages\ListInsights;
use App\Filament\Resources\Insights\Pages\ViewInsight;
use App\Filament\Resources\Insights\Schemas\InsightForm;
use App\Filament\Resources\Insights\Schemas\InsightInfolist;
use App\Filament\Resources\Insights\Tables\InsightsTable;
use App\Models\Insight;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class InsightResource extends Resource
{
    protected static ?string $model = Insight::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $navigationLabel = 'Insight';

    protected static string|UnitEnum|null $navigationGroup = 'Konten';

    protected static ?int $navigationSort = 3;

    protected static ?string $modelLabel = 'Insight';

    protected static ?string $pluralModelLabel = 'Insight';

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return InsightForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return InsightInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InsightsTable::configure($table);
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
            'index' => ListInsights::route('/'),
            'create' => CreateInsight::route('/create'),
            'view' => ViewInsight::route('/{record}'),
            'edit' => EditInsight::route('/{record}/edit'),
        ];
    }
}
