<?php

namespace App\Console;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MailController;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
//        $schedule->call(function () {
//            info('schdeuler worked!');
//        })->everyMinute()->timezone('Asia/Karachi');
//        $schedule->call('App\Http\Controllers\MailController@index1')->dailyAt('14:59')->timezone('Asia/Karachi');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
