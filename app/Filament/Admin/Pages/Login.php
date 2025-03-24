<?php

namespace App\Filament\Admin\Pages;

use Filament\Pages\Auth\Login as BasePage;

class Login extends BasePage
{
    public function mount(): void
    {
        parent::mount();

        if (auth()->check()) {
            redirect()->intended(filament()->getHomeUrl());
        }
    }
}
