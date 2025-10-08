<?php

namespace App\Filament\Resources\Clientes\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;

class ClienteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->label('Nombre')
                    ->required(),

                Forms\Components\TextInput::make('numero')
                    ->label('Número de teléfono')
                    ->required(),

                Forms\Components\TextInput::make('empresa')
                    ->label('Empresa'),

                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),

                Forms\Components\FileUpload::make('foto')
                    ->label('Foto')
                    ->image() 
                    ->directory('clientes') 
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
                    ->imagePreviewHeight('100') 
                    ->enableOpen() 
            ]);
    }
}
