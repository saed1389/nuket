<?php

namespace App\Filament\Resources\AdditiveResource\Pages;

use App\Filament\Resources\AdditiveResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdditives extends ListRecords
{
    protected static string $resource = AdditiveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
