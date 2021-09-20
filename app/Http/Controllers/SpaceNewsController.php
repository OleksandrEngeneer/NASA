<?php

namespace App\Http\Controllers;

use App\BestPhoto;
use App\EpicPhoto;
use App\space_news;
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
        //$url = 'https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=1max_sol&camera=navcam&api_key=qqX3tswvrf3ZrSUnzWb3cM6fd5Bye9CG8F8KT5Dn';
        //$url = 'https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=1max_sol&camera=navcam&api_key=qqX3tswvrf3ZrSUnzWb3cM6fd5Bye9CG8F8KT5Dn';
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
     * @param  \App\space_news  $space_news
     * @return \Illuminate\Http\Response
     */
    public function show(space_news $space_news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\space_news  $space_news
     * @return \Illuminate\Http\Response
     */
    public function edit(space_news $space_news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\space_news  $space_news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, space_news $space_news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\space_news  $space_news
     * @return \Illuminate\Http\Response
     */
    public function destroy(space_news $space_news)
    {
        //
    }
}
