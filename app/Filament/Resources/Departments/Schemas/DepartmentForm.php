<?php

namespace App\Filament\Resources\Departments\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DepartmentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('jobdesk')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('programs')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('skills')
                    ->default(null)
                    ->columnSpanFull(),
                Textarea::make('projects')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
