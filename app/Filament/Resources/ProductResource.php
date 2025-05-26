<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Models\Product;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Filament\Forms\Form;
use Filament\Tables\Table;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;
    protected static ?string $navigationGroup = 'Produkty';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\TextInput::make('name')->required()->maxLength(255),
            Forms\Components\Textarea::make('description')->required(),
            Forms\Components\TextInput::make('price')->required(),
            Forms\Components\FileUpload::make('image')
                ->image()
                ->required()
                ->disk('public'), // uloží do storage/app/public
        ]);
}

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('price')->sortable(),
                Tables\Columns\ImageColumn::make('image')->label('Image')->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
{
    return [
        'index' => Pages\ListProduct::route('/'),
        'create' => Pages\CreateProduct::route('/create'),
        'edit' => Pages\EditProduct::route('/{record}/edit'),
    ];
}


    }

