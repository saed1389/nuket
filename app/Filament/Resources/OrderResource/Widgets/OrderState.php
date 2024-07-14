<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number;

class OrderState extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('New Orders', Order::query()->where('status', 'pending')->count()),
            Stat::make('Order Completed', Order::query()->where('status', 'completed')->count()),
            Stat::make('Order Cancelled', Order::query()->where('status', 'cancelled')->count()),
            Stat::make('Average Price', Number::currency(Order::query()->avg('grand_total'), 'TRY')),
        ];
    }
}
