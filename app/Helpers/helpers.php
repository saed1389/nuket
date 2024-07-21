<?php

use Illuminate\Support\Facades\Http;

if (!function_exists('getCurrentCurrency')) {
    function getCurrentCurrency()
    {
        return session('currency', 'eur');
    }
}

if (!function_exists('currency_price')) {
    function currency_price()
    {

        $api = Http::get('https://cdn.jsdelivr.net/npm/@fawazahmed0/currency-api@latest/v1/currencies/gbp.json');

        return $api->json();

    }
}
