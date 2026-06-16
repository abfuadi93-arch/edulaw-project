<?php

namespace App\Filament\Resources\InsightCategories;

use App\Filament\Resources\InsightCategories\Pages\CreateInsightCategory;
use App\Filament\Resources\InsightCategories\Pages\EditInsightCategory;
use App\Filament\Resources\InsightCategories\Pages\ListInsightCategories;
use App\Filament\Resources\InsightCategories\Pages\ViewInsightCategory;
use App\Filament\Resources\InsightCategories\Schemas\InsightCategoryForm;
use App\Filament\Resources\InsightCategories\Schemas\InsightCategoryInfolist;
use App\Filament\Resources\InsightCategories\Tables\InsightCategoriesTable;
use App\Models\InsightCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InsightCategoryResource extends Resource
{
    protected static ?string $model = InsightCategory::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return InsightCategoryForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return InsightCategoryInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InsightCategoriesTable::configure($table);
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
            'index' => ListInsightCategories::route('/'),
            'create' => CreateInsightCategory::route('/create'),
            'view' => ViewInsightCategory::route('/{record}'),
            'edit' => EditInsightCategory::route('/{record}/edit'),
        ];
    }
}
