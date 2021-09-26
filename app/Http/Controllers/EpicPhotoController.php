<?php

namespace App\Http\Controllers;

use App\EpicPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Console\Scheduling\Schedule;

class EpicPhotoController extends Controller
{
    protected $commands = [
        // \App\Console\Commands\Inspire::class,
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function saveEpicPhoto()
    {
        $url = 'https://epic.gsfc.nasa.gov/api/natural';
        $response = Http::get($url);
        $image = $response->json()[0]['image'] . '.png';
        $caption = $response->json()[0]['caption'];
        $date = $response->json()[0]['date'];
        $date1 = explode("-", explode(" ", $date)[0]);
        $date2 = explode(" ", $date)[0];
        $picture = "https://epic.gsfc.nasa.gov/archive/natural/" . $date1[0] . "/" . $date1[1] . "/" . $date1[2] . "/png/" . $image;
        EpicPhoto::insert([
            'id' => null,
            'caption' => $caption,
            'picture' => $picture,
            'date' => $date2,
            'created_at' => date("Y-m-d"),
        ]);
    }
}
