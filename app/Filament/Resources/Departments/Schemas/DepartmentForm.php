<?php

namespace App\Filament\Resources\Departments\Schemas;

use Filament\Forms\Components\Repeater;
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

                Repeater::make('programs')
                    ->label('Program Kerja')
                    ->simple(
                        TextInput::make('item')
                            ->label('Program')
                            ->required()
                    )
                    ->addActionLabel('Tambah program kerja')
                    ->nullable(),

                Repeater::make('skills')
                    ->label('Skill yang Dikembangkan')
                    ->simple(
                        TextInput::make('item')
                            ->label('Skill')
                            ->required()
                    )
                    ->addActionLabel('Tambah skill')
                    ->nullable(),

                Repeater::make('projects')
                    ->label('Project')
                    ->simple(
                        TextInput::make('item')
                            ->label('Project')
                            ->required()
                    )
                    ->addActionLabel('Tambah project')
                    ->nullable(),
            ]);
    }
}
