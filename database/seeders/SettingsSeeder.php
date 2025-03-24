<?php

namespace Database\Seeders;

use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            [
                'key' => 'events_section_title',
                'value' => 'UPDATES'
            ],
            [
                'key' => 'events_section_content',
                'value' => 'We embrace collaboration, experimentation, and bold ideas, creating a space where students, alumni, professionals, and the local community can come together to push boundaries and explore the future of design. The event\'s visual identity follows our principle that the medium dictates the design, using RGB for digital, CMYK for print, and RISO for risography—reinforcing the connection between process and meaning.'
            ],
            [
                'key' => 'playground_section_title',
                'value' => 'PLAYGROUND'
            ],
            [
                'key' => 'playground_section_content',
                'value' => 'Design is a tool, the world our playground. Design is more than just form and function—it\'s a way to shape reality, challenge perspectives, and create meaningful impact. Whether through digital experiences, motion design, UX, branding, or speculative futures, design empowers us to reimagine the possible.'
            ],
            [
                'key' => 'marquee_items',
                'value' => 'WDTW'
            ]
        ];

        foreach ($settings as $setting) {
            Settings::updateOrCreate(
                ['key' => $setting['key']],
                ['value' => $setting['value']]
            );
        }
    }
}
