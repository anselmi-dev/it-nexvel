<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeoMetadataResource\Pages;
use App\Filament\Resources\SeoMetadataResource\RelationManagers;
use App\Models\SeoMetadata;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class SeoMetadataResource extends Resource
{
    protected static ?string $model = SeoMetadata::class;

    protected static ?string $navigationIcon = 'heroicon-o-magnifying-glass';

    protected static ?string $navigationLabel = 'SEO Metadata';

    protected static ?string $modelLabel = 'SEO Metadata';

    protected static ?string $pluralModelLabel = 'SEO Metadata';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Información Básica')
                    ->schema([
                        Forms\Components\TextInput::make('page')
                            ->label('Página')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->placeholder('home, about, services, contact')
                            ->helperText('Identificador único de la página (ej: home, about, services)'),

                        Forms\Components\TextInput::make('title')
                            ->label('Título')
                            ->maxLength(60)
                            ->helperText('Título de la página (máximo 60 caracteres)'),

                        Forms\Components\Textarea::make('description')
                            ->label('Descripción')
                            ->rows(3)
                            ->maxLength(160)
                            ->helperText('Descripción de la página (máximo 160 caracteres)'),

                        Forms\Components\Textarea::make('keywords')
                            ->label('Palabras Clave')
                            ->rows(3)
                            ->helperText('Palabras clave separadas por comas'),

                        Forms\Components\TextInput::make('author')
                            ->label('Autor'),

                        Forms\Components\Select::make('robots')
                            ->label('Robots')
                            ->options([
                                'index, follow' => 'Index, Follow',
                                'index, nofollow' => 'Index, No Follow',
                                'noindex, follow' => 'No Index, Follow',
                                'noindex, nofollow' => 'No Index, No Follow',
                            ])
                            ->default('index, follow'),

                        Forms\Components\TextInput::make('language')
                            ->label('Idioma')
                            ->default('es'),

                        Forms\Components\TextInput::make('geo_region')
                            ->label('Región Geográfica')
                            ->placeholder('CL'),

                        Forms\Components\TextInput::make('geo_placename')
                            ->label('Lugar Geográfico')
                            ->placeholder('Chile'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Open Graph (Facebook)')
                    ->schema([
                        Forms\Components\TextInput::make('og_type')
                            ->label('Tipo OG')
                            ->default('website'),

                        Forms\Components\TextInput::make('og_title')
                            ->label('Título OG')
                            ->maxLength(60),

                        Forms\Components\Textarea::make('og_description')
                            ->label('Descripción OG')
                            ->rows(3)
                            ->maxLength(160),

                        FileUpload::make('og_image')
                            ->label('Imagen OG (opcional)'),

                        Forms\Components\TextInput::make('og_site_name')
                            ->label('Nombre del Sitio OG'),

                        Forms\Components\TextInput::make('og_locale')
                            ->label('Locale OG')
                            ->default('es_CL'),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Twitter Cards')
                    ->schema([
                        Forms\Components\Select::make('twitter_card')
                            ->label('Tipo de Tarjeta Twitter')
                            ->options([
                                'summary' => 'Summary',
                                'summary_large_image' => 'Summary Large Image',
                                'app' => 'App',
                                'player' => 'Player',
                            ])
                            ->default('summary_large_image'),

                        Forms\Components\TextInput::make('twitter_title')
                            ->label('Título Twitter')
                            ->maxLength(60),

                        Forms\Components\Textarea::make('twitter_description')
                            ->label('Descripción Twitter')
                            ->rows(3)
                            ->maxLength(160),

                        FileUpload::make('twitter_image')
                            ->label('Imagen Twitter (opcional)'),

                        Forms\Components\TextInput::make('twitter_site')
                            ->label('Sitio Twitter')
                            ->placeholder('@itnexvel'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page')
                    ->label('Página')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('primary'),

                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
                    ->searchable()
                    ->limit(50)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        return strlen($state) > 50 ? $state : null;
                    }),

                Tables\Columns\TextColumn::make('description')
                    ->label('Descripción')
                    ->limit(80)
                    ->tooltip(function (Tables\Columns\TextColumn $column): ?string {
                        $state = $column->getState();
                        return strlen($state) > 80 ? $state : null;
                    }),

                Tables\Columns\TextColumn::make('author')
                    ->label('Autor')
                    ->searchable(),

                Tables\Columns\TextColumn::make('robots')
                    ->label('Robots')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'index, follow' => 'success',
                        'index, nofollow' => 'warning',
                        'noindex, follow' => 'warning',
                        'noindex, nofollow' => 'danger',
                        default => 'gray',
                    }),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('robots')
                    ->label('Robots')
                    ->options([
                        'index, follow' => 'Index, Follow',
                        'index, nofollow' => 'Index, No Follow',
                        'noindex, follow' => 'No Index, Follow',
                        'noindex, nofollow' => 'No Index, No Follow',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('page');
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
            'index' => Pages\ListSeoMetadata::route('/'),
            'create' => Pages\CreateSeoMetadata::route('/create'),
            'edit' => Pages\EditSeoMetadata::route('/{record}/edit'),
        ];
    }
}
