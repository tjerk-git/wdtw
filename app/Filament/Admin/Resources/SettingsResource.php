<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\SettingsResource\Pages\ManageSettings;
use App\Models\Settings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;

class SettingsResource extends Resource
{
    protected static ?string $model = Settings::class;
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static ?string $navigationLabel = 'Site Settings';
    protected static ?string $modelLabel = 'Settings';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Updates Section')
                    ->schema([
                        Forms\Components\TextInput::make('events_section_title')
                            ->label('Title')
                            ->required(),
                        Forms\Components\RichEditor::make('events_section_content')
                            ->label('Content')
                            ->required(),
                    ]),
                Forms\Components\Section::make('Playground Section')
                    ->schema([
                        Forms\Components\TextInput::make('playground_section_title')
                            ->label('Title')
                            ->required(),
                        Forms\Components\RichEditor::make('playground_section_content')
                            ->label('Content')
                            ->required(),
                    ]),
                Forms\Components\Section::make('Marquee')
                    ->schema([
                        Forms\Components\TagsInput::make('marquee_items')
                            ->label('Items')
                            ->required(),
                    ]),
                Forms\Components\Section::make('About Section')
                    ->schema([
                        Forms\Components\TextInput::make('about_title')
                            ->label('Title')
                            ->required()
                            ->default('About'),
                        Forms\Components\Textarea::make('about_content')
                            ->label('Content')
                            ->required()
                            ->default('We are a group of friends who love to play and have fun.'),
                    ]),
                Forms\Components\Section::make('Contact Section')
                    ->schema([
                        Forms\Components\TextInput::make('contact_title')
                            ->label('Title')
                            ->required()
                            ->default('Contact'),
                        Forms\Components\Textarea::make('contact_content')
                            ->label('Content')
                            ->required()
                            ->default('Get in touch with us.'),
                    ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageSettings::route('/'),
        ];
    }
}
