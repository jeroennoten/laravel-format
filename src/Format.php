<?php namespace JeroenNoten\LaravelFormat;

use Carbon\Carbon;

class Format
{
    public function timestamp(Carbon $date, $format = '%x %X')
    {
        return $date->formatLocalized($format);
    }
}
