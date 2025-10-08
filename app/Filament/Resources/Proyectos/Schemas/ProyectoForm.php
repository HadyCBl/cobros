<?php

namespace App\Filament\Resources\Proyectos\Schemas;

namespace App\Filament\Resources\Proyectos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProyectoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nombre')
                    ->required(),
                Select::make('cliente_id')
                    ->label('Cliente')
                    ->relationship(
                        name: 'cliente',
                        titleAttribute: 'nombre'
                    )
                    ->searchable()
                    ->preload() // Añadir esto para cargar los clientes al inicio
                    ->required(),
                Select::make('estado')
                    ->label('Estado')
                    ->options([
                        'En desarrollo' => 'En desarrollo',
                        'Terminado' => 'Terminado',
                        'Finalizado' => 'Finalizado',
                    ])
                    ->default('En desarrollo')
                    ->required(),
            ]);
    }
}

