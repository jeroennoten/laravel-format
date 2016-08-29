<?php


use Carbon\Carbon;
use Illuminate\View\Factory;

class TimestampTest extends TestCase
{
    public function testDirective()
    {
        /** @var Factory $views */
        $views = $this->app->make(Factory::class);
        $views->addLocation(__DIR__ . '/stubs');

        $this->artisan('view:clear');

        $time = Carbon::create(2016);
        $rendered = view('test', compact('time'))->render();

        $this->assertEquals('2016', $rendered);
    }
}