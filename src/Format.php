<?php namespace JeroenNoten\LaravelFormat;

use Carbon\Carbon;

class Format
{
    public function timestamp(Carbon $date = null)
    {
        return $date->formatLocalized('%x %X');
    }
}
