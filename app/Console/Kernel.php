<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Http\Controllers\EpicPhotoController;
use App\Http\Controllers\BestPhotoController;
use App\Http\Controllers\MarsRoverPhotoController;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Http;
use App\EpicPhoto;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\DemoCron::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        $schedule->call(function () {
            EpicPhotoController::saveEpicPhoto();
            BestPhotoController::saveBestPhoto();
            MarsRoverPhotoController::saveMarsRoverPhoto();
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
