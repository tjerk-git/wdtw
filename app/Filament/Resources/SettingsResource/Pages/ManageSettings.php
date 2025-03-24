<?php

namespace App\Filament\Resources\SettingsResource\Pages;

use App\Filament\Resources\SettingsResource;
use App\Models\Settings;
use Filament\Resources\Pages\Page;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Notifications\Notification;

class ManageSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = SettingsResource::class;

    protected static string $view = 'filament.resources.settings.pages.manage-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill($this->getFormData());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Updates Section')
                    ->description('Content for the Updates section of the website')
                    ->schema([
                        Forms\Components\TextInput::make('events_section_title')
                            ->label('Section Title')
                            ->required()
                            ->default('UPDATES')
                            ->live(),
                        Forms\Components\RichEditor::make('events_section_content')
                            ->label('Section Content')
                            ->required()
                            ->default('We embrace collaboration, experimentation, and bold ideas, creating a space where students, alumni, professionals, and the local community can come together to push boundaries and explore the future of design. The event\'s visual identity follows our principle that the medium dictates the design, using RGB for digital, CMYK for print, and RISO for risography—reinforcing the connection between process and meaning.')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'undo',
                                'redo',
                            ])
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Playground Section')
                    ->description('Content for the Playground section of the website')
                    ->schema([
                        Forms\Components\TextInput::make('playground_section_title')
                            ->label('Section Title')
                            ->required()
                            ->default('PLAYGROUND')
                            ->live(),
                        Forms\Components\RichEditor::make('playground_section_content')
                            ->label('Section Content')
                            ->required()
                            ->default('Design is a tool, the world our playground. Design is more than just form and function—it\'s a way to shape reality, challenge perspectives, and create meaningful impact. Whether through digital experiences, motion design, UX, branding, or speculative futures, design empowers us to reimagine the possible.')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'link',
                                'undo',
                                'redo',
                            ])
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Marquee Settings')
                    ->description('Items that scroll in the footer marquee (separate with commas)')
                    ->schema([
                        Forms\Components\TagsInput::make('marquee_items')
                            ->label('Marquee Items')
                            ->separator(',')
                            ->default(['WDTW'])
                            ->helperText('Add items one by one and press Enter, or separate multiple items with commas')
                            ->columnSpanFull(),
                    ]),
            ])
            ->statePath('data');
    }

    protected function getFormData(): array
    {
        return [
            'events_section_title' => Settings::getSetting('events_section_title', 'UPDATES'),
            'events_section_content' => Settings::getSetting('events_section_content'),
            'playground_section_title' => Settings::getSetting('playground_section_title', 'PLAYGROUND'),
            'playground_section_content' => Settings::getSetting('playground_section_content'),
            'marquee_items' => explode(',', Settings::getSetting('marquee_items', 'WDTW')),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();

        // Convert marquee items array back to comma-separated string
        if (is_array($data['marquee_items'])) {
            $data['marquee_items'] = implode(',', $data['marquee_items']);
        }

        // Save each setting
        foreach ($data as $key => $value) {
            Settings::setSetting($key, $value);
        }

        Notification::make()
            ->title('Settings saved successfully')
            ->success()
            ->send();
    }
}
