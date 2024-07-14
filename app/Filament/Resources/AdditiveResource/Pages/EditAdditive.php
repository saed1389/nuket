<?php

namespace App\Filament\Resources\AdditiveResource\Pages;

use App\Filament\Resources\AdditiveResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAdditive extends EditRecord
{
    protected static string $resource = AdditiveResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
