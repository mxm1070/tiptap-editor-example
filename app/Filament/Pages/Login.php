<?php

namespace App\Filament\Pages;

use Filament\Forms\Components\Component;
use Filament\Pages\Page;

class Login extends \Filament\Pages\Auth\Login
{
    protected function getEmailFormComponent(): Component
    {
        return parent::getEmailFormComponent()
            ->default('test@example.com');
    }

    protected function getPasswordFormComponent(): Component
    {
        return parent::getPasswordFormComponent()
            ->default('password');
    }
}
