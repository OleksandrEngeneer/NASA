<?php

namespace App\Http\Controllers;

use App\BestPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Console\Scheduling\Schedule;

class BestPhotoController extends Controller
{
    protected $commands = [
        \App\Console\Commands\Inspire::class,
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveBestPhoto(Schedule $schedule)
    {
        $schedule->call(function () {
            echo ("I work");
            $url = 'https://api.nasa.gov/planetary/apod?api_key=qqX3tswvrf3ZrSUnzWb3cM6fd5Bye9CG8F8KT5Dn';
            $response = Http::get($url);
            var_dump($response->json());
            BestPhoto::insert([
                'id' => null,
                'time' => $response->json()['date'],
                'explanation' => $response->json()['explanation'],
                'url' => $response->json()['url'],
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        })->everyMinute();
    }
}
