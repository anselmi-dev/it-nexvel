<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SocialNetworkResource\Pages;
use App\Filament\Resources\SocialNetworkResource\RelationManagers;
use App\Models\SocialNetwork;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ColorColumn;

class SocialNetworkResource extends Resource
{
    protected static ?string $model = SocialNetwork::class;

    protected static ?string $navigationIcon = 'heroicon-o-share';

    protected static ?string $navigationLabel = 'Redes Sociales';

    protected static ?string $modelLabel = 'Red Social';

    protected static ?string $pluralModelLabel = 'Redes Sociales';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Información de la Red Social')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nombre')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Facebook, Instagram, LinkedIn, etc.')
                            ->helperText('Nombre de la red social'),

                        Forms\Components\TextInput::make('url')
                            ->label('URL')
                            ->required()
                            ->url()
                            ->placeholder('https://www.facebook.com/itnexvel')
                            ->helperText('URL completa de la red social'),

                        Forms\Components\Select::make('icon_type')
                            ->label('Tipo de Icono')
                            ->options([
                                'image' => 'Imagen (archivo)',
                                'svg' => 'SVG (código)',
                            ])
                            ->default('image')
                            ->live()
                            ->helperText('Selecciona si el icono es un archivo de imagen o código SVG'),

                        FileUpload::make('icon')
                            ->label('Icono')
                            ->visible(fn (Forms\Get $get) => $get('icon_type') === 'image'),

                        Forms\Components\Textarea::make('icon_svg')
                            ->label('Código SVG')
                            ->helperText('Pega aquí el código SVG completo (sin las etiquetas <svg>)')
                            ->rows(8)
                            ->visible(fn (Forms\Get $get) => $get('icon_type') === 'svg'),

                        Forms\Components\ColorPicker::make('color')
                            ->label('Color')
                            ->hidden(fn ($get) => $get('icon_type') != 'svg')
                            ->helperText('Color del icono de la red social'),

                        Forms\Components\TextInput::make('alt_text')
                            ->label('Texto Alternativo')
                            ->placeholder('Síguenos en Facebook')
                            ->helperText('Texto alternativo para accesibilidad'),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Activa')
                            ->default(true)
                            ->helperText('Si la red social está activa y se muestra en el sitio'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                Tables\Columns\TextColumn::make('url')
                    ->label('URL')
                    ->limit(30)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        return strlen($state) > 30 ? $state : null;
                    })
                    ->url(fn ($record) => $record->url, shouldOpenInNewTab: true),

                Tables\Columns\TextColumn::make('alt_text')
                    ->label('Texto Alt')
                    ->limit(20)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        return strlen($state) > 20 ? $state : null;
                    }),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Activa')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TernaryFilter::make('is_active')
                    ->label('Estado')
                    ->placeholder('Todas las redes')
                    ->trueLabel('Solo activas')
                    ->falseLabel('Solo inactivas')
                    ->native(false),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('activate')
                        ->label('Activar')
                        ->icon('heroicon-o-check-circle')
                        ->action(fn ($records) => $records->each->update(['is_active' => true]))
                        ->deselectRecordsAfterCompletion(),
                    Tables\Actions\BulkAction::make('deactivate')
                        ->label('Desactivar')
                        ->icon('heroicon-o-x-circle')
                        ->action(fn ($records) => $records->each->update(['is_active' => false]))
                        ->deselectRecordsAfterCompletion(),
                ]),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order');
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
            'index' => Pages\ListSocialNetworks::route('/'),
            'create' => Pages\CreateSocialNetwork::route('/create'),
            'edit' => Pages\EditSocialNetwork::route('/{record}/edit'),
        ];
    }
}
