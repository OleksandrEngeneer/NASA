<?php

namespace App\Http\Controllers;

use App\BestPhoto;
use App\EpicPhoto;
use App\space_news;
use App\MarsRoverPhoto;
use App\User;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SpaceNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = date("Y-m-d");

        $bestphoto = (BestPhoto::where('time', $today)->get())->toArray();
        $epicphoto = EpicPhoto::all(); //(EpicPhoto::where('date', $today)->get())->toArray();
        $marsroverphoto = (MarsRoverPhoto::where('created_at', $today)->get())->toArray();
        return view('pages.wall', [
            'bestphoto' => $bestphoto,
            'epicphoto' => $epicphoto,
            'marsroverphoto' => $marsroverphoto
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showForm()
    {
        return view('pages.add-form');
    }
}
