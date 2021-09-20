<?php

namespace App\Http\Controllers;

use App\EpicPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Console\Scheduling\Schedule;

class EpicPhotoController extends Controller
{
    protected $commands = [
        \App\Console\Commands\Inspire::class,
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveEpicPhoto(Schedule $schedule)
    {
        $schedule->call(function () {
            $url = 'https://epic.gsfc.nasa.gov/api/natural';
            $response = Http::get($url);
            $image = $response->json()[0]['image'] . '.png';
            $caption = $response->json()[0]['caption'];
            $date = $response->json()[0]['date'];
            $date1 = explode("-", explode(" ", $date)[0]);
            $picture = "https://epic.gsfc.nasa.gov/archive/natural/" . $date1[0] . "/" . $date1[1] . "/" . $date1[2] . "/png/" . $image;
            EpicPhoto::insert([
                'id' => null,
                'caption' => $caption,
                'picture' => $picture,
                'date' => $date,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
        })->everyMinute();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EpicPhoto  $epicPhoto
     * @return \Illuminate\Http\Response
     */
    public function show(EpicPhoto $epicPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EpicPhoto  $epicPhoto
     * @return \Illuminate\Http\Response
     */
    public function edit(EpicPhoto $epicPhoto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EpicPhoto  $epicPhoto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EpicPhoto $epicPhoto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EpicPhoto  $epicPhoto
     * @return \Illuminate\Http\Response
     */
    public function destroy(EpicPhoto $epicPhoto)
    {
        //
    }
}
