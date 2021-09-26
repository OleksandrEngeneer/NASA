<?php

namespace App\Http\Controllers;

use App\MarsRoverPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Console\Scheduling\Schedule;

class MarsRoverPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function saveMarsRoverPhoto()
    {
        $url = 'https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=1max_sol&camera=navcam&api_key=qqX3tswvrf3ZrSUnzWb3cM6fd5Bye9CG8F8KT5Dn';
        $response = Http::get($url);
        $response1 = $response['photos'];
        foreach ($response1 as $object) {
            MarsRoverPhoto::insert([
                'id' => null,
                'camera' => $object['camera']['name'],
                'img_src' => $object['img_src'],
                'earth_date' => $object['earth_date'],
                'created_at' => date("Y-m-d"),
            ]);
        }
    }
}
