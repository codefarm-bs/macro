<?php

namespace App\Mixins;

class MyStrMixins
{

    public function currency()
    {
        return function ($value) {
            return preg_replace('/\B(?=(\d{3})+(?!\d))/', ',', $value);
        };
    }


    public function currency_prefix()
    {
        return function ($value, $prefix=' ریال') {
            return  preg_replace('/\B(?=(\d{3})+(?!\d))/', ',', $value) . $prefix;
        };
    }
}
