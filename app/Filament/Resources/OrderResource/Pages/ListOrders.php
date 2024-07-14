<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Filament\Resources\OrderResource\Widgets\OrderState;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            OrderState::class
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('All'),
            'pending' => Tab::make()->query(fn ($query) => $query->where('status', 'pending')),
            'processing' => Tab::make()->query(fn ($query) => $query->where('status', 'processing')),
            'completed' => Tab::make()->query(fn ($query) => $query->where('status', 'completed')),
            'canceled' => Tab::make()->query(fn ($query) => $query->where('status', 'canceled')),
        ];
    }
}
